<?php

namespace App\Http\Controllers;

use App\Models\KodeEtik;
use App\Http\Requests\StoreKodeEtikRequest;
use App\Http\Requests\UpdateKodeEtikRequest;
use App\Models\Category;
use App\Models\Ruangan;
use App\Models\SubKodeEtik;
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

    public function index_sub_instrumen($id)
    {
        $data = SubKodeEtik::where('kode_etik_id', $id)->get();
        $kode_etik = KodeEtik::find($id);
        return view('instrumen/klien/sub_instrumen', [
            'title' => 'Instrumen',
            'datas' => $data,
            'kode_etik_id' => $id,
            'pernyataan' => $kode_etik
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

    public function update_aktivitas(Request $request, $id)
    {
        $update = SubKodeEtik::where('id', $id)->update([
            'aktivitas' => $request->aktivitas
        ]);
        session()->flash('success_edit', 'Data berhasil diubah!');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        KodeEtik::create([
            'category_id' => $id,
            'pernyataan' => $request->pernyataan
        ]);

        return back();
    }

    public function create_aktivitas(Request $request, $id)
    {
        SubKodeEtik::create([
            'kode_etik_id' => $id,
            'aktivitas' => $request->aktivitas
        ]);

        return back();
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
    public function destroy($id)
    {
        KodeEtik::find($id)->delete();
        return back();
    }

    public function destroy_aktivitas($id)
    {
        SubKodeEtik::find($id)->delete();
        return back();
    }
}
