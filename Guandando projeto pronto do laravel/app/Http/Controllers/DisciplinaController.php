<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
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
            $disciplina = Disciplina::where('id_disciplina', 'LIKE', "%$keyword%")
                ->orWhere('nome', 'LIKE', "%$keyword%")
                ->orWhere('ementa', 'LIKE', "%$keyword%")
                ->orWhere('matricula_professor', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $disciplina = Disciplina::latest()->paginate($perPage);
        }

        return view('disciplina.index', compact('disciplina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('disciplina.create');
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
			'id_disciplina' => 'required|unique:disciplinas',
			'nome' => 'required',
			'ementa' => 'required',
			'matricula_professor' => 'required|exists:professors'
		]);
        $requestData = $request->all();
        
        Disciplina::create($requestData);

        return redirect('disciplina')->with('flash_message', 'Disciplina added!');
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
        $disciplina = Disciplina::findOrFail($id);

        return view('disciplina.show', compact('disciplina'));
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
        $disciplina = Disciplina::findOrFail($id);

        return view('disciplina.edit', compact('disciplina'));
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
			'id_disciplina' => 'required|unique:disciplinas',
			'nome' => 'required',
			'ementa' => 'required',
			'matricula_professor' => 'required|exists:professors'
		]);
        $requestData = $request->all();
        
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($requestData);

        return redirect('disciplina')->with('flash_message', 'Disciplina updated!');
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
        Disciplina::destroy($id);

        return redirect('disciplina')->with('flash_message', 'Disciplina deleted!');
    }
}
