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

    public function klien(){
        $perawats = Perawat::all();
        $ruangans = Ruangan::all();
        return view('Pengukuran/Klien', [
            'title' => 'Pengukuran Perawat Dan Klien',
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

    public function instrumen_klien(StorepengukuranRequest $request)
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

        $ruangan = [
            'id_ruangan' => $data_ruangan[0],
            'nama_ruangan' => $data_ruangan[1]
        ];
        // dd($ruangan);
        $data_perawat = Perawat::find($data_perawat[0]);
        return view('Pengukuran/Instrumen_pengukuran_klien', [
            'title' => 'Pengukuran Perawat Dan Klien',
            'data_perawat' => $data_perawat,
            'data_ruangan' => $data_ruangan[1]
        ]);
    }

    public function pengukuran2(Request $request)
    {
        $data = $request->all();
        $skor = 0;
        $skorLength = 0;
        foreach ($data as $key => $value) {
            $skor += (int)$value;
        }
        dd($skor);
        dd($request->options1);
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
