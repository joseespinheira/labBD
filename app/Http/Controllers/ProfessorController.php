<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
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
            $professor = Professor::where('matricula_professor', 'LIKE', "%$keyword%")
                ->orWhere('data_admissao', 'LIKE', "%$keyword%")
                ->orWhere('matricula_pessoa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $professor = Professor::latest()->paginate($perPage);
        }

        return view('professor.index', compact('professor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('professor.create');
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
			'matricula_professor' => 'required|unique:professors',
			'data_admissao' => 'required',
			'matricula_pessoa' => 'required|exists:pessoas'
		]);
        $requestData = $request->all();
        
        Professor::create($requestData);

        return redirect('professor')->with('flash_message', 'Professor added!');
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
        $professor = Professor::findOrFail($id);

        return view('professor.show', compact('professor'));
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
        $professor = Professor::findOrFail($id);

        return view('professor.edit', compact('professor'));
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
			'matricula_professor' => 'required|unique:professors',
			'data_admissao' => 'required',
			'matricula_pessoa' => 'required|exists:pessoas'
		]);
        $requestData = $request->all();
        
        $professor = Professor::findOrFail($id);
        $professor->update($requestData);

        return redirect('professor')->with('flash_message', 'Professor updated!');
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
        Professor::destroy($id);

        return redirect('professor')->with('flash_message', 'Professor deleted!');
    }
}
