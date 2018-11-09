<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aluno_Turma;
use Illuminate\Http\Request;

class Aluno_TurmaController extends Controller
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
            $aluno_turma = Aluno_Turma::where('id_disciplina', 'LIKE', "%$keyword%")
                ->orWhere('id_curso', 'LIKE', "%$keyword%")
                ->orWhere('ano_semestre', 'LIKE', "%$keyword%")
                ->orWhere('matricula_aluno', 'LIKE', "%$keyword%")
                ->orWhere('id_projeto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aluno_turma = Aluno_Turma::latest()->paginate($perPage);
        }

        return view('aluno_-turma.index', compact('aluno_turma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aluno_-turma.create');
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
			'id_projeto' => 'required|exists:projetos'
		]);
        $requestData = $request->all();
        
        Aluno_Turma::create($requestData);

        return redirect('aluno_-turma')->with('flash_message', 'Aluno_Turma added!');
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
        $aluno_turma = Aluno_Turma::findOrFail($id);

        return view('aluno_-turma.show', compact('aluno_turma'));
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
        $aluno_turma = Aluno_Turma::findOrFail($id);

        return view('aluno_-turma.edit', compact('aluno_turma'));
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
			'id_projeto' => 'required|exists:projetos'
		]);
        $requestData = $request->all();
        
        $aluno_turma = Aluno_Turma::findOrFail($id);
        $aluno_turma->update($requestData);

        return redirect('aluno_-turma')->with('flash_message', 'Aluno_Turma updated!');
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
        Aluno_Turma::destroy($id);

        return redirect('aluno_-turma')->with('flash_message', 'Aluno_Turma deleted!');
    }
}
