<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livros;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(livros $livro)
    {
        $livros = $livro->all();

        return view('list', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');

        // dd($request->file('image'));
        if ($request->file('image')->isValid()) {
            $namefile = $request->titulo . '.' . $request->image->extension();
            $request->file('image')->storeAs('capas', $namefile);
            $dataForm['image'] = $namefile;
        }
        livros::insert($dataForm);
        return redirect()->route('list.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = livros::find($id);
        if (!$livro)
            return redirect()->back();

        return view('show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = livros::find($id);
        if (!$livro)
            return redirect()->back();
        return view('edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livro = livros::find($id);
        if (!$livro)
            return redirect()->back();

        $update = $livro->update($request->all());

        if ($update)
            return redirect()->route('list.index')->with('success', 'atualizado');
        else
            return redirect()->route('list.index')->with('error', 'falha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = livros::find($id);
        if (!$livro)
            return redirect()->back();
        if($livro->delete())
            return redirect()->route('list.index')->with('success', 'atualizado');
        else
            return redirect()->route('list.index')->with('error', 'falha');
            
    }
}
