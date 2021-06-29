<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul= Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(Request $request)
    {
        Makul::create($request->all());
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = Makul::find($id); // untuk mencari data // select * from nama_table
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id); 
        $makul->update($request->all());
        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        $makul = Makul::find($id); 
        $makul->delete();
        return redirect()->route('makul');
    }

}
