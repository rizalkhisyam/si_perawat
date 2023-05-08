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
use Illuminate\Support\Facades\DB;

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

//page pengukuran

    public function instrumen_klien(StorepengukuranRequest $request)
    {
        $data_perawat = explode('|', $request->id_perawat);
        $data_ruangan = explode('|', $request->id_ruangan);

        $checkData = pengukuran::updateOrCreate([
            'id_perawat' => $request->id_perawat,
            'id_ruangan' => $request->id_ruangan
        ], [
            'nama' => $data_perawat[1],
                'ruangan' => $data_ruangan[1],
                'id_perawat' => $data_perawat[0],
                'id_ruangan' => $data_ruangan[0],
                'id_user' => Auth::user()->id
        ]);
        $id_pengukuran = $checkData->id;

        $data_perawat = Perawat::find($data_perawat[0]);
        return view('Pengukuran/Instrumen_pengukuran_klien', [
            'title' => 'Pengukuran Perawat Dan Klien',
            'data_perawat' => $data_perawat,
            'id_ruangan' => $data_ruangan[0],
            'nama_ruangan' => $data_ruangan[1],
            'id_pengukuran' => $id_pengukuran
        ]);
    }

    public function instrumen_praktek($id){
        $dataPengukuran = DB::table('pengukurans')->join('perawats', 'pengukurans.id_perawat', '=', 'perawats.id')
        ->select('pengukurans.ruangan', 'pengukurans.id_ruangan', 'pengukurans.nama', 'perawats.status', 'perawats.jenjang_karir', 'perawats.jenis_kelamin')->where('pengukurans.id', $id)->get();
        return view('Pengukuran/Instrumen_pengukuran_praktek', [
            'title' => 'Pengukuran Perawat dan Praktek',
            'data' => $dataPengukuran[0],
            'id_pengukuran' => $id
        ]);
    }

    public function instrumen_masyarakat($id){
        $dataPengukuran = DB::table('pengukurans')->join('perawats', 'pengukurans.id_perawat', '=', 'perawats.id')
        ->select('pengukurans.ruangan', 'pengukurans.id_ruangan', 'pengukurans.nama', 'perawats.status', 'perawats.jenjang_karir', 'perawats.jenis_kelamin')->where('pengukurans.id', $id)->get();
        return view('Pengukuran/Instrumen_pengukuran_masyarakat', [
            'title' => 'Pengukuran Perawat dan Masyarakat',
            'data' => $dataPengukuran[0],
            'id_pengukuran' => $id
        ]);
    }

    public function instrumen_teman($id){
        $dataPengukuran = DB::table('pengukurans')->join('perawats', 'pengukurans.id_perawat', '=', 'perawats.id')
        ->select('pengukurans.ruangan', 'pengukurans.id_ruangan', 'pengukurans.nama', 'perawats.status', 'perawats.jenjang_karir', 'perawats.jenis_kelamin')->where('pengukurans.id', $id)->get();
        return view('Pengukuran/Instrumen_pengukuran_teman', [
            'title' => 'Pengukuran Perawat dan Teman Sejawat',
            'data' => $dataPengukuran[0],
            'id_pengukuran' => $id
        ]);
    }

    public function instrumen_profesi($id){
        $dataPengukuran = DB::table('pengukurans')->join('perawats', 'pengukurans.id_perawat', '=', 'perawats.id')
        ->select('pengukurans.ruangan', 'pengukurans.id_ruangan', 'pengukurans.nama', 'perawats.status', 'perawats.jenjang_karir', 'perawats.jenis_kelamin')->where('pengukurans.id', $id)->get();
        return view('Pengukuran/Instrumen_pengukuran_profesi', [
            'title' => 'Pengukuran Perawat dan Profesi',
            'data' => $dataPengukuran[0],
            'id_pengukuran' => $id
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

    public function pengukuran_instrumen1(Request $request, $id){
        $data = $request->all();
        $skor = 0;
        foreach ($data as $key => $value) {
            $skor += (int)$value;
        }
        // dd($skor);
        $updateNilai = pengukuran::where('id', $id)->update(['skor_1' => $skor]);
        $dataPengukuran = pengukuran::find($id);

        return view('Pengukuran/Hasil_klien', [
            'title' => 'Hasil Pengukuran Perawat dan Klien',
            'data' => $dataPengukuran
        ]);
    }

    public function pengukuran_instrumen2(Request $request, $id){
        $data = $request->all();
        $skor2 = 0;
        foreach ($data as $key => $value) {
            $skor2 += (int)$value;
        };
        $updateNilai = pengukuran::where('id', $id)->update(['skor_2' => $skor2]);
        $dataPengukuran = pengukuran::find($id);

        return view('Pengukuran/Hasil_praktek', [
            'title' => 'Hasil Pengukuran Perawat dan Praktek',
            'data' => $dataPengukuran
        ]);
    }

    public function pengukuran_instrumen3(Request $request, $id){
        $data = $request->all();
        $skor3 = 0;
        foreach ($data as $key => $value) {
            $skor3 += (int)$value;
        };
        $updateNilai = pengukuran::where('id', $id)->update(['skor_3' => $skor3]);
        $dataPengukuran = pengukuran::find($id);

        return view('Pengukuran/Hasil_masyarakat', [
            'title' => 'Hasil Pengukuran Perawat dan Masyarakat',
            'data' => $dataPengukuran
        ]);
    }

    public function pengukuran_instrumen4(Request $request, $id){
        $data = $request->all();
        $skor4 = 0;
        foreach ($data as $key => $value) {
            $skor4 += (int)$value;
        };
        $updateNilai = pengukuran::where('id', $id)->update(['skor_4' => $skor4]);
        $dataPengukuran = pengukuran::find($id);

        return view('Pengukuran/Hasil_teman', [
            'title' => 'Hasil Pengukuran Perawat dan Teman Sejawat',
            'data' => $dataPengukuran
        ]);
    }

    public function pengukuran_instrumen5(Request $request, $id){
        $data = $request->all();
        $skor5 = 0;
        $nilai_perilaku = '';
        $nilai_kategori = '';
        foreach ($data as $key => $value) {
            $skor5 += (int)$value;
        };
        $updateNilai = pengukuran::where('id', $id)->update(['skor_5' => $skor5]);
        $dataPengukuran = pengukuran::find($id);
        $skorTotal = $dataPengukuran->skor_1+$dataPengukuran->skor_2+$dataPengukuran->skor_3+$dataPengukuran->skor_4+$dataPengukuran->skor_5;
        $nilaiInterval = round(($skorTotal/51)*100);
        if($nilaiInterval <= 49){
            $nilai_perilaku = 'D';
            $nilai_kategori = 'Buruk';
        }
        else if($nilaiInterval >= 50 && $nilaiInterval <= 69){
            $nilai_perilaku = 'C';
            $nilai_kategori = 'Cukup';
        }
        else if($nilaiInterval >= 70 && $nilaiInterval <= 89){
            $nilai_perilaku = 'B';
            $nilai_kategori = 'Baik';
        }
        else if($nilaiInterval >=90 && $nilaiInterval <=100){
            $nilai_perilaku = 'A';
            $nilai_kategori = 'Prima';
        }
        // dd($nilai_perilaku, $nilai_kategori);
        $updateData = pengukuran::where('id', $id)->update([
            'total_skor' => $skorTotal,
            'nilai_interval' => $nilaiInterval,
            'nilai_perilaku' => $nilai_perilaku,
            'kategori_nilai' => $nilai_kategori
        ]);
        $dataPengukuranNew = pengukuran::find($id);
        return view('Pengukuran/Hasil_profesi', [
            'title' => 'Hasil Pengukuran Keseluruhan',
            'data' => $dataPengukuranNew
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
