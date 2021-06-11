<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinscripcionRequest;
use App\Http\Requests\UpdateinscripcionRequest;
use App\Repositories\inscripcionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class inscripcionController extends AppBaseController
{
    /** @var  inscripcionRepository */
    private $inscripcionRepository;

    public function __construct(inscripcionRepository $inscripcionRepo)
    {
        $this->inscripcionRepository = $inscripcionRepo;
    }

    /**
     * Display a listing of the inscripcion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inscripcions = $this->inscripcionRepository->all();

        return view('inscripcions.index')
            ->with('inscripcions', $inscripcions);
    }

    /**
     * Show the form for creating a new inscripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('inscripcions.create');
    }

    /**
     * Store a newly created inscripcion in storage.
     *
     * @param CreateinscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateinscripcionRequest $request)
    {
        $input = $request->all();

        $inscripcion = $this->inscripcionRepository->create($input);

        Flash::success('Inscripcion saved successfully.');

        return redirect(route('inscripcions.index'));
    }

    /**
     * Display the specified inscripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        return view('inscripcions.show')->with('inscripcion', $inscripcion);
    }

    /**
     * Show the form for editing the specified inscripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        return view('inscripcions.edit')->with('inscripcion', $inscripcion);
    }

    /**
     * Update the specified inscripcion in storage.
     *
     * @param int $id
     * @param UpdateinscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinscripcionRequest $request)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        $inscripcion = $this->inscripcionRepository->update($request->all(), $id);

        Flash::success('Inscripcion updated successfully.');

        return redirect(route('inscripcions.index'));
    }

    /**
     * Remove the specified inscripcion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        $this->inscripcionRepository->delete($id);

        Flash::success('Inscripcion deleted successfully.');

        return redirect(route('inscripcions.index'));
    }
}
