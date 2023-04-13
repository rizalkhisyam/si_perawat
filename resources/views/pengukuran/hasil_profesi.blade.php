@extends('layouts.pengukuran')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center mb-2">
                      <h6 class="mb-0">Perhitungan Skor - Perawat dan Profesi</h6>
                    </div>
                    <ul class="list-group mt-5">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Data Perawat</h6>
                            <span class="mb-2 text-xs">Nama Perawat: <span class="text-dark font-weight-bold ms-sm-2">{{$data->nama}}</span></span>
                            <span class="mb-2 text-xs">Nama Ruangan: <span class="text-dark font-weight-bold ms-sm-2">{{$data->ruangan}}</span></span>
                            <span class="mb-2 text-xs">Kode Pengukuran: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->id}}</span></span>
                        </div>
                        </li>
                    </ul>
                    <ul class="list-group mb-2">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Hasil Pengukuran Perawat dan Klien</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data->skor_1}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">22</span></span>
                            <h6 class="mb-3 text-sm">Hasil Pengukuran Perawat dan Praktek</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data->skor_2}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">15</span></span>
                            <h6 class="mb-3 text-sm">Hasil Pengukuran Perawat dan Masyarakat</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data->skor_3}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">5</span></span>
                            <h6 class="mb-3 text-sm">Hasil Pengukuran Perawat dan Teman</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data->skor_4}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">9</span></span>
                            <h6 class="mb-3 text-sm">Hasil Pengukuran Perawat dan Profesi</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data->skor_5}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">11</span></span>
                        </div>
                        </li>
                    </ul>
                    <ul class="list-group mb-2">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Hasil Akhir</h6>
                            <span class="mb-2 text-xs">Nilai Interval : <span class="text-dark font-weight-bold ms-sm-2">{{$data->nilai_interval}}</span></span>
                            <span class="mb-2 text-xs">Nilai Perilaku : <span class="text-dark ms-sm-2 font-weight-bold">{{$data->nilai_perilaku}}</span></span>
                            <span class="mb-2 text-xs">Nilai Kategori : <span class="text-dark ms-sm-2 font-weight-bold">{{$data->kategori_nilai}}</span></span>
                        </div>
                        </li>
                    </ul>
                    <div class="text-center">
                    <a class="btn btn-primary" href="/pengukuran-instrumen-profesi/{{$data->id}}" role="button">Hasil Pengukuran</a>
                    </div>
                    <div class="text-center">
                    <a class="btn btn-light"  role="button">Kembali Ke Halaman Utama</a>
                    </div>
                  </div>
                </div>  
          </div>
        </div>
      </div>
@endsection