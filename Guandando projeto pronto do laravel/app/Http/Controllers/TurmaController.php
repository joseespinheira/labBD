<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
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
            $turma = Turma::where('id_disciplina', 'LIKE', "%$keyword%")
                ->orWhere('id_curso', 'LIKE', "%$keyword%")
                ->orWhere('ano_semestre', 'LIKE', "%$keyword%")
                ->orWhere('nome', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $turma = Turma::latest()->paginate($perPage);
        }

        return view('turma.index', compact('turma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('turma.create');
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
			'nome' => 'required'
		]);
        $requestData = $request->all();
        
        Turma::create($requestData);

        return redirect('turma')->with('flash_message', 'Turma added!');
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
        $turma = Turma::findOrFail($id);

        return view('turma.show', compact('turma'));
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
        $turma = Turma::findOrFail($id);

        return view('turma.edit', compact('turma'));
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
			'nome' => 'required'
		]);
        $requestData = $request->all();
        
        $turma = Turma::findOrFail($id);
        $turma->update($requestData);

        return redirect('turma')->with('flash_message', 'Turma updated!');
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
        Turma::destroy($id);

        return redirect('turma')->with('flash_message', 'Turma deleted!');
    }
}
