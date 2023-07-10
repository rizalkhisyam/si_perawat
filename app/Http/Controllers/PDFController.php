<?php

namespace App\Http\Controllers;

use App\Models\pengukuran;
use App\Models\Perawat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function generatePDF($id)
    {
        $date = date('Y');
        ini_set('date.timezone', 'Asia/Jakarta');
        $day = date('l');
        $month = date('m');
        $tanggal = date('d');
        $hari="";
        $bulan="";

        if($day=='Sunday') $hari = 'Minggu';
        else if($day=='Monday') $hari = 'Senin';
        else if($day=='Tuesday') $hari = 'Selasa';
        else if($day=='Wednesday') $hari = 'Rabu';
        else if($day=='Thursday') $hari = 'Kamis';
        else if($day=='Friday') $hari = 'Jumat';
        else if($day=='Saturday') $hari = 'Sabtu';

        if($month=='01') $bulan='Januari';
        else if($month=='02') $bulan='Februari';
        else if($month=='03') $bulan='Maret';
        else if($month=='04') $bulan='April';
        else if($month=='05') $bulan='Mei';
        else if($month=='06') $bulan='Juni';
        else if($month=='07') $bulan='Juli';
        else if($month=='08') $bulan='Agustus';
        else if($month=='09') $bulan='September';
        else if($month=='10') $bulan='Oktober';
        else if($month=='11') $bulan='November';
        else if($month=='12') $bulan='Desember';
        $dataPengukuran = pengukuran::find($id);
        $pdf = PDF::loadView('detail_pengukuran', [
            "title" => "Hasil Pengukuran",
            "datas" => $dataPengukuran,
            "tahun" => $date,
            "hari" => $hari,
            "tanggal" => $tanggal,
            "bulan" => $bulan
        ]);
        $pdf->set_paper("a4", "portrait");
        return $pdf->download('Hasil-pengukuran-'.$dataPengukuran->nama.'.pdf');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
