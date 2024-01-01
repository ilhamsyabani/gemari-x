<?php

namespace App\Http\Controllers;

use App\Models\Kuis3;
use Illuminate\Http\Request;

class Kuis3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuis3 = Kuis3::all();
        return response()->json($kuis3);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kuis3 = Kuis3::create($request->all());
        return response()->json(['message' => 'nilai add successfully.', 'kuis3' =>  $kuis3 ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuis3 $kuis3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuis3 $kuis3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuis3 $kuis3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuis3 $kuis3)
    {
        //
    }
}
