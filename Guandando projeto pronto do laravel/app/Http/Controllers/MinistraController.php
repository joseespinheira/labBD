<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ministra;
use Illuminate\Http\Request;

class MinistraController extends Controller
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
            $ministra = Ministra::where('id_disciplina', 'LIKE', "%$keyword%")
                ->orWhere('id_curso', 'LIKE', "%$keyword%")
                ->orWhere('ano_semestre', 'LIKE', "%$keyword%")
                ->orWhere('matricula_professor', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ministra = Ministra::latest()->paginate($perPage);
        }

        return view('ministra.index', compact('ministra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ministra.create');
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
			'matricula_professor' => 'required|exists:professors'
		]);
        $requestData = $request->all();
        
        Ministra::create($requestData);

        return redirect('ministra')->with('flash_message', 'Ministra added!');
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
        $ministra = Ministra::findOrFail($id);

        return view('ministra.show', compact('ministra'));
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
        $ministra = Ministra::findOrFail($id);

        return view('ministra.edit', compact('ministra'));
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
			'matricula_professor' => 'required|exists:professors'
		]);
        $requestData = $request->all();
        
        $ministra = Ministra::findOrFail($id);
        $ministra->update($requestData);

        return redirect('ministra')->with('flash_message', 'Ministra updated!');
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
        Ministra::destroy($id);

        return redirect('ministra')->with('flash_message', 'Ministra deleted!');
    }
}
