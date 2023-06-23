<?php

namespace App\Http\Controllers;

use App\Models\KodeEtik;
use App\Http\Requests\StoreKodeEtikRequest;
use App\Http\Requests\UpdateKodeEtikRequest;
use App\Models\Category;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodeEtikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        return view('instrumen/draft_instrumen', [
            'title' => 'Instrumen',
            'datas' => $cat
        ]);
    }

    public function index_instrumen($id)
    {
        $kode = '';
        if($id == 1) $kode = 'Klien';
        else if($id == 2) $kode = 'Praktik';
        else if($id == 3) $kode = 'Masyarakat';
        else if($id == 4) $kode = 'Teman Sejawat';
        else if($id == 5) $kode = 'Profesi';
        $instrumen = DB::table('kode_etiks')->where('category_id', $id)->get();
        // dd($instrumen);
        return view('instrumen/klien/etik_klien',[
            'title' => 'Instrumen',
            'datas' => $instrumen,
            'kode' => $kode,
            'category_id' => $id
        ]);
    }

    public function update_pernyataan(Request $request, $id)
    {
        $update = KodeEtik::where('id', $id)->update([
            'pernyataan' => $request->pernyataan
        ]);
        session()->flash('success_edit', 'Data berhasil diubah!');
        return back();
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
     * @param  \App\Http\Requests\StoreKodeEtikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKodeEtikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KodeEtik  $kodeEtik
     * @return \Illuminate\Http\Response
     */
    public function show(KodeEtik $kodeEtik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KodeEtik  $kodeEtik
     * @return \Illuminate\Http\Response
     */
    public function edit(KodeEtik $kodeEtik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKodeEtikRequest  $request
     * @param  \App\Models\KodeEtik  $kodeEtik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKodeEtikRequest $request, KodeEtik $kodeEtik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KodeEtik  $kodeEtik
     * @return \Illuminate\Http\Response
     */
    public function destroy(KodeEtik $kodeEtik)
    {
        //
    }
}
