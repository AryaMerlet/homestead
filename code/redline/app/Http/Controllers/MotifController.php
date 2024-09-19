<?php

namespace App\Http\Controllers;

use App\Models\Motif;
use Illuminate\Http\Request;

class MotifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motifs = Motif::all();
        return view('motif.index', compact('motifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motif.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motif = $request->description;
        motif::create(["description" => $request->description]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Motif $motif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motif $motif)
    {
        return view('motif.edit',compact('motif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motif $motif)
    {
        $motif->description = $request->description;
        $motif->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motif $motif)
    {
        //
    }
}
