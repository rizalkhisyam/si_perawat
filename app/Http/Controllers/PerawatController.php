<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use App\Http\Requests\StorePerawatRequest;
use App\Http\Requests\UpdatePerawatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_perawat = Perawat::all();
        return view('perawat', [
            "title" => "Perawat",
            "datas" => $data_perawat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerawatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerawatRequest $request)
    {

        Perawat::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_pendidikan' => $request->status_pendidikan,
            'lama_bekerja' => $request->lama_bekerja,
            'status' => $request->status,
            'jenjang_karir' => $request->jenjang_karir
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function show(Perawat $perawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_perawat = Perawat::find($id);
        return view('edit/edit_perawat', [
            "title" => "Edit Perawat",
            "data" => $data_perawat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerawatRequest  $request
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $update = Perawat::where('id', $id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'usia' => $request->usia,
            'status' => $request->status,
            'jenjang_karir' => $request->jenjang_karir,
            'status_pendidikan' => $request->status_pendidikan,
            'lama_bekerja' => $request->lama_bekerja
        ]);

        $data_perawat = Perawat::all();
        return view('perawat', [
            "title" => "Perawat",
            "datas" => $data_perawat
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Perawat::find($id)->delete();
        return back();
    }
}