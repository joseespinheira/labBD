<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
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
            $aluno = Aluno::where('matricula_aluno', 'LIKE', "%$keyword%")
                ->orWhere('id_curso', 'LIKE', "%$keyword%")
                ->orWhere('matricula_pessoa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aluno = Aluno::latest()->paginate($perPage);
        }

        return view('aluno.index', compact('aluno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aluno.create');
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
			'matricula_aluno' => 'required|unique:aluno',
			'id_curso' => 'required|exists:cursos',
			'matricula_pessoa' => 'required|exists:pessoas'
		]);
        $requestData = $request->all();
        
        Aluno::create($requestData);

        return redirect('aluno')->with('flash_message', 'Aluno added!');
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
        $aluno = Aluno::findOrFail($id);

        return view('aluno.show', compact('aluno'));
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
        $aluno = Aluno::findOrFail($id);

        return view('aluno.edit', compact('aluno'));
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
			'matricula_aluno' => 'required|unique:aluno',
			'id_curso' => 'required|exists:cursos',
			'matricula_pessoa' => 'required|exists:pessoas'
		]);
        $requestData = $request->all();
        
        $aluno = Aluno::findOrFail($id);
        $aluno->update($requestData);

        return redirect('aluno')->with('flash_message', 'Aluno updated!');
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
        Aluno::destroy($id);

        return redirect('aluno')->with('flash_message', 'Aluno deleted!');
    }
}
