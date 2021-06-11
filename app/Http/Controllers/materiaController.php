<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemateriaRequest;
use App\Http\Requests\UpdatemateriaRequest;
use App\Repositories\materiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class materiaController extends AppBaseController
{
    /** @var  materiaRepository */
    private $materiaRepository;

    public function __construct(materiaRepository $materiaRepo)
    {
        $this->materiaRepository = $materiaRepo;
    }

    /**
     * Display a listing of the materia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $materias = $this->materiaRepository->all();

        return view('materias.index')
            ->with('materias', $materias);
    }

    /**
     * Show the form for creating a new materia.
     *
     * @return Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created materia in storage.
     *
     * @param CreatemateriaRequest $request
     *
     * @return Response
     */
    public function store(CreatemateriaRequest $request)
    {
        $input = $request->all();

        $materia = $this->materiaRepository->create($input);

        Flash::success('Materia saved successfully.');

        return redirect(route('materias.index'));
    }

    /**
     * Display the specified materia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materia = $this->materiaRepository->find($id);

        if (empty($materia)) {
            Flash::error('Materia not found');

            return redirect(route('materias.index'));
        }

        return view('materias.show')->with('materia', $materia);
    }

    /**
     * Show the form for editing the specified materia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materia = $this->materiaRepository->find($id);

        if (empty($materia)) {
            Flash::error('Materia not found');

            return redirect(route('materias.index'));
        }

        return view('materias.edit')->with('materia', $materia);
    }

    /**
     * Update the specified materia in storage.
     *
     * @param int $id
     * @param UpdatemateriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemateriaRequest $request)
    {
        $materia = $this->materiaRepository->find($id);

        if (empty($materia)) {
            Flash::error('Materia not found');

            return redirect(route('materias.index'));
        }

        $materia = $this->materiaRepository->update($request->all(), $id);

        Flash::success('Materia updated successfully.');

        return redirect(route('materias.index'));
    }

    /**
     * Remove the specified materia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materia = $this->materiaRepository->find($id);

        if (empty($materia)) {
            Flash::error('Materia not found');

            return redirect(route('materias.index'));
        }

        $this->materiaRepository->delete($id);

        Flash::success('Materia deleted successfully.');

        return redirect(route('materias.index'));
    }
}
