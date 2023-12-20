<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sing;

class SingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sings = Sing::orderBy('created_at','DESC')->get();
        return view('pages.sing.index', compact('sings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.sing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sing::create($request->all());
        return redirect()->route('sing.index')->with('success','Selamat! Datamu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sing = Sing::findOrFail($id);
        return view('pages.sing.show',compact('sing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sing = Sing::findOrFail($id);
        return view('pages.sing.edit',compact('sing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sing = Sing::findOrFail($id);
        $sing->update($request->all());
        return redirect()->route('sing.index')->with('success','Datamu berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sing = Sing::findOrFail($id);
        $sing->delete();
        return redirect()->route('sing.index')->with('success','Datamu berhasil dihapus');
    }
}
