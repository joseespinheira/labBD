<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
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
            $projeto = Projeto::where('id_projeto', 'LIKE', "%$keyword%")
                ->orWhere('titulo', 'LIKE', "%$keyword%")
                ->orWhere('conceito', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $projeto = Projeto::latest()->paginate($perPage);
        }

        return view('projeto.index', compact('projeto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('projeto.create');
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
			'id_projeto' => 'required|unique:projetos',
			'titulo' => 'required'
		]);
        $requestData = $request->all();
        
        Projeto::create($requestData);

        return redirect('projeto')->with('flash_message', 'Projeto added!');
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
        $projeto = Projeto::findOrFail($id);

        return view('projeto.show', compact('projeto'));
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
        $projeto = Projeto::findOrFail($id);

        return view('projeto.edit', compact('projeto'));
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
			'id_projeto' => 'required|unique:projetos',
			'titulo' => 'required'
		]);
        $requestData = $request->all();
        
        $projeto = Projeto::findOrFail($id);
        $projeto->update($requestData);

        return redirect('projeto')->with('flash_message', 'Projeto updated!');
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
        Projeto::destroy($id);

        return redirect('projeto')->with('flash_message', 'Projeto deleted!');
    }
}
