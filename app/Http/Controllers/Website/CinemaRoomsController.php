<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use App\Http\Requests\CinemaRoomCreateRequest;
use App\Http\Requests\CinemaRoomUpdateRequest;
use App\Repositories\CinemaRoomRepository;
use App\Validators\CinemaRoomValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class CinemaRoomsController.
 *
 * @package namespace App\Http\Controllers;
 */
class CinemaRoomsController extends Controller
{
    /**
     * @var CinemaRoomRepository
     */
    protected $repository;

    /**
     * @var CinemaRoomValidator
     */
    protected $validator;

    /**
     * CinemaRoomsController constructor.
     *
     * @param CinemaRoomRepository $repository
     * @param CinemaRoomValidator $validator
     */
    public function __construct(CinemaRoomRepository $repository, CinemaRoomValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $cinemaRooms = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cinemaRooms,
            ]);
        }

        return view('cinemaRooms.index', compact('cinemaRooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CinemaRoomCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CinemaRoomCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $cinemaRoom = $this->repository->create($request->all());

            $response = [
                'message' => 'CinemaRoom created.',
                'data'    => $cinemaRoom->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cinemaRoom = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cinemaRoom,
            ]);
        }

        return view('cinemaRooms.show', compact('cinemaRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cinemaRoom = $this->repository->find($id);

        return view('cinemaRooms.edit', compact('cinemaRoom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CinemaRoomUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CinemaRoomUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $cinemaRoom = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CinemaRoom updated.',
                'data'    => $cinemaRoom->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'CinemaRoom deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CinemaRoom deleted.');
    }
}
