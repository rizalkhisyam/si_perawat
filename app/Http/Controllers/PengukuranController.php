<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstrumentRequest1;
use App\Models\pengukuran;
use App\Http\Requests\StorepengukuranRequest;
use App\Http\Requests\UpdatepengukuranRequest;
use App\Models\Perawat;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengukuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawats = Perawat::all();
        $ruangans = Ruangan::all();
        return view('Pengukuran', [
            'title' => 'Pengukuran',
            'data_perawats' => $perawats,
            'data_ruangans' => $ruangans
        ]);
    }

    public function pengukuran1(StorepengukuranRequest $request)
    {
        $data_perawat = explode('|', $request->id_perawat);
        $data_ruangan = explode('|', $request->id_ruangan);
        pengukuran::create([
            'nama' => $data_perawat[1],
            'ruangan' => $data_ruangan[1],
            'id_perawat' => $data_perawat[0],
            'id_ruangan' => $data_ruangan[0],
            'id_user' => Auth::user()->id
        ]);
        return view('Instrumen1', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran2(Request $request)
    {
        dd($request);
        return view('Instrumen2', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran3()
    {
        return view('Instrumen3', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran4()
    {
        return view('Instrumen4', [
            'title' => 'Pengukuran'
        ]);
    }

    public function pengukuran5()
    {
        return view('Instrumen5', [
            'title' => 'Pengukuran'
        ]);
    }

    public function instrumen1(){
        return view('Instrumen1', [
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
