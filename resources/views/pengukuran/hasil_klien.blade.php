@extends('layouts.pengukuran')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center mb-2">
                      <h6 class="mb-0">Perhitungan Skor - Perawat dan Klien</h6>
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
                    <ul class="list-group mt-5">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Hasil Pengukuran</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data->skor_1}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">{{$total}}</span></span>
                        </div>
                        </li>
                    </ul>
                    <div class="text-center">
                    <a class="btn btn-primary" href="/pengukuran-instrumen-praktek/{{$data->id}}" role="button">Lanjutkan Pengukuran</a>
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