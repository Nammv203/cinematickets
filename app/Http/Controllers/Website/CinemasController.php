<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use App\Http\Requests\CinemaCreateRequest;
use App\Http\Requests\CinemaUpdateRequest;
use App\Repositories\CinemaRepository;
use App\Validators\CinemaValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class CinemasController.
 *
 * @package namespace App\Http\Controllers;
 */
class CinemasController extends Controller
{
    /**
     * @var CinemaRepository
     */
    protected $repository;

    /**
     * @var CinemaValidator
     */
    protected $validator;

    /**
     * CinemasController constructor.
     *
     * @param CinemaRepository $repository
     * @param CinemaValidator $validator
     */
    public function __construct(CinemaRepository $repository, CinemaValidator $validator)
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
        $cinemas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cinemas,
            ]);
        }

        return view('cinemas.index', compact('cinemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CinemaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CinemaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $cinema = $this->repository->create($request->all());

            $response = [
                'message' => 'Cinema created.',
                'data'    => $cinema->toArray(),
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
        $cinema = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cinema,
            ]);
        }

        return view('cinemas.show', compact('cinema'));
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
        $cinema = $this->repository->find($id);

        return view('cinemas.edit', compact('cinema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CinemaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CinemaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $cinema = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Cinema updated.',
                'data'    => $cinema->toArray(),
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
                'message' => 'Cinema deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Cinema deleted.');
    }
}
