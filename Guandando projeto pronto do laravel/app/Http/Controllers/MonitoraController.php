<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Monitora;
use Illuminate\Http\Request;

class MonitoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $monitora = Monitora::where('id_disciplina', 'LIKE', "%$keyword%")
                ->orWhere('id_curso', 'LIKE', "%$keyword%")
                ->orWhere('ano_semestre', 'LIKE', "%$keyword%")
                ->orWhere('matricula_aluno', 'LIKE', "%$keyword%")
                ->orWhere('matricula_professor', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $monitora = Monitora::latest()->paginate($perPage);
        }

        return view('monitora.index', compact('monitora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('monitora.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'id_disciplina' => 'required|exists:disciplinas',
			'id_curso' => 'required|exists:cursos',
			'ano_semestre' => 'required',
			'matricula_aluno' => 'required|exists:alunos',
			'matricula_professor' => 'required|exists:professors'
		]);
        $requestData = $request->all();
        
        Monitora::create($requestData);

        return redirect('monitora')->with('flash_message', 'Monitora added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $monitora = Monitora::findOrFail($id);

        return view('monitora.show', compact('monitora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $monitora = Monitora::findOrFail($id);

        return view('monitora.edit', compact('monitora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'id_disciplina' => 'required|exists:disciplinas',
			'id_curso' => 'required|exists:cursos',
			'ano_semestre' => 'required',
			'matricula_aluno' => 'required|exists:alunos',
			'matricula_professor' => 'required|exists:professors'
		]);
        $requestData = $request->all();
        
        $monitora = Monitora::findOrFail($id);
        $monitora->update($requestData);

        return redirect('monitora')->with('flash_message', 'Monitora updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Monitora::destroy($id);

        return redirect('monitora')->with('flash_message', 'Monitora deleted!');
    }
}
