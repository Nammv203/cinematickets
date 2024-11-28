<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use App\Http\Requests\FilmCreateRequest;
use App\Http\Requests\FilmUpdateRequest;
use App\Repositories\FilmRepository;
use App\Validators\FilmValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class FilmsController.
 *
 * @package namespace App\Http\Controllers;
 */
class FilmsController extends Controller
{
    /**
     * @var FilmRepository
     */
    protected $repository;

    /**
     * @var FilmValidator
     */
    protected $validator;

    /**
     * FilmsController constructor.
     *
     * @param FilmRepository $repository
     * @param FilmValidator $validator
     */
    public function __construct(FilmRepository $repository, FilmValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  FilmCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(FilmCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $film = $this->repository->create($request->all());

            $response = [
                'message' => 'Film created.',
                'data'    => $film->toArray(),
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
        $film = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $film,
            ]);
        }

        return view('films.show', compact('film'));
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
        $film = $this->repository->find($id);

        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FilmUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(FilmUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $film = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Film updated.',
                'data'    => $film->toArray(),
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
                'message' => 'Film deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Film deleted.');
    }
}
