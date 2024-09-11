<?php

namespace App\Http\Controllers;

use App\Models\Toto;
use Illuminate\Http\Request;

class TotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('toto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('toto.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('toto.store');

    }

    /**
     * Display the specified resource.
     */
    public function show(Toto $toto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toto $toto)
    {
        return view('toto.edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toto $toto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toto $toto)
    {
        //
    }
}
