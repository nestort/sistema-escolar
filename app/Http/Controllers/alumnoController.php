<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatealumnoRequest;
use App\Http\Requests\UpdatealumnoRequest;
use App\Repositories\alumnoRepository;
use App\Repositories\usuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class alumnoController extends AppBaseController
{
    /** @var  alumnoRepository */
    private $alumnoRepository;
      /** @var  usuarioRepository */
    private $usuarioRepository;

    public function __construct(alumnoRepository $alumnoRepo,usuarioRepository $usuarioRepository)
    {
        $this->alumnoRepository = $alumnoRepo;
        $this->usuarioRepository = $usuarioRepository;
    }

    /**
     * Display a listing of the alumno.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alumnos = $this->alumnoRepository->all();

        return view('alumnos.index')
            ->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new alumno.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created alumno in storage.
     *
     * @param CreatealumnoRequest $request
     *
     * @return Response
     */
    public function store(CreatealumnoRequest $request)
    {
        $input = $request->all();

        $input['rol'] = 'alumno';
        $input['password'] = bcrypt($input['password']);

        $usuario = $this->usuarioRepository->create($input);

        $input['user_id'] = $usuario->id;

        $alumno = $this->alumnoRepository->create($input);

        Flash::success('Alumno saved successfully.');

        return redirect(route('alumnos.index'));
    }

    /**
     * Display the specified alumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alumno = $this->alumnoRepository->find($id);

        if (empty($alumno)) {
            Flash::error('Alumno not found');

            return redirect(route('alumnos.index'));
        }
        $usuario = $this->usuarioRepository;

        return view('alumnos.show',compact(['alumno','usuario']));
    }

    /**
     * Show the form for editing the specified alumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alumno = $this->alumnoRepository->find($id);

        if (empty($alumno)) {
            Flash::error('Alumno not found');

            return redirect(route('alumnos.index'));
        }        
        

        $usuario = $this->usuarioRepository->find($alumno->user_id);


        return view('alumnos.edit',compact(['alumno','usuario']));        
    }

    /**
     * Update the specified alumno in storage.
     *
     * @param int $id
     * @param UpdatealumnoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatealumnoRequest $request)
    {
        $alumno = $this->alumnoRepository->find($id);        

        if (empty($alumno)) {
            Flash::error('Alumno not found');

            return redirect(route('alumnos.index'));
        }

        $usuario = $this->usuarioRepository->find($alumno->user_id);
        
        $input = $request->all();
        $input['user_id'] = $usuario->id;
        $input['password'] = bcrypt($input['password']);

        $alumno = $this->alumnoRepository->update($input, $id);
        $usuario = $this->usuarioRepository->update($input,$alumno->user_id);

        Flash::success('Se actualizó correctamente.');

        return redirect(route('alumnos.index'));
    }

    /**
     * Remove the specified alumno from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alumno = $this->alumnoRepository->find($id);

        if (empty($alumno)) {
            Flash::error('Alumno not found');

            return redirect(route('alumnos.index'));
        }

        $this->alumnoRepository->delete($id);

        Flash::success('Alumno deleted successfully.');

        return redirect(route('alumnos.index'));
    }
}
