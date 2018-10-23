<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prova;
use Illuminate\Http\Request;

class ProvaController extends Controller
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
            $prova = Prova::where('id_disciplina', 'LIKE', "%$keyword%")
                ->orWhere('id_curso', 'LIKE', "%$keyword%")
                ->orWhere('ano_semestre', 'LIKE', "%$keyword%")
                ->orWhere('matricula_aluno', 'LIKE', "%$keyword%")
                ->orWhere('descricao', 'LIKE', "%$keyword%")
                ->orWhere('nota', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $prova = Prova::latest()->paginate($perPage);
        }

        return view('prova.index', compact('prova'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('prova.create');
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
			'descricao' => 'required',
			'nota' => 'required'
		]);
        $requestData = $request->all();
        
        Prova::create($requestData);

        return redirect('prova')->with('flash_message', 'Prova added!');
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
        $prova = Prova::findOrFail($id);

        return view('prova.show', compact('prova'));
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
        $prova = Prova::findOrFail($id);

        return view('prova.edit', compact('prova'));
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
			'descricao' => 'required',
			'nota' => 'required'
		]);
        $requestData = $request->all();
        
        $prova = Prova::findOrFail($id);
        $prova->update($requestData);

        return redirect('prova')->with('flash_message', 'Prova updated!');
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
        Prova::destroy($id);

        return redirect('prova')->with('flash_message', 'Prova deleted!');
    }
}
