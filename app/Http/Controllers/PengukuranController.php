<?php

namespace App\Http\Controllers;

use App\Models\pengukuran;
use App\Http\Requests\StorepengukuranRequest;
use App\Http\Requests\UpdatepengukuranRequest;

class PengukuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pengukuran', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran1()
    {
        return view('Instrumen2', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran2()
    {
        return view('Instrumen3', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran3()
    {
        return view('Instrumen4', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran4()
    {
        return view('Instrumen5', [
            'title' => 'Pengukuran'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Instrumen1', [
            'title' => 'Pengukuran'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepengukuranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepengukuranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengukuran  $pengukuran
     * @return \Illuminate\Http\Response
     */
    public function show(pengukuran $pengukuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengukuran  $pengukuran
     * @return \Illuminate\Http\Response
     */
    public function edit(pengukuran $pengukuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepengukuranRequest  $request
     * @param  \App\Models\pengukuran  $pengukuran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepengukuranRequest $request, pengukuran $pengukuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengukuran  $pengukuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengukuran $pengukuran)
    {
        //
    }
}
