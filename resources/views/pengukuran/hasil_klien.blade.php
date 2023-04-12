@extends('layouts.main')

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
                            <h6 class="mb-3 text-sm">{{$data_perawat->nama}}</h6>
                            <span class="mb-2 text-xs">Jenis Kelamin: <span class="text-dark font-weight-bold ms-sm-2">{{$data_perawat->jenis_kelamin}}</span></span>
                            <span class="mb-2 text-xs">Status: <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->status}}</span></span>
                            <span class="text-xs">Jenjang Karir: <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->jenjang_karir}}</span></span>
                        </div>

                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Hasil Pengukuran</h6>
                            <span class="mb-2 text-xs">Nilai yang diperoleh : <span class="text-dark font-weight-bold ms-sm-2">{{$data_nilai->nilai}}</span></span>
                            <span class="mb-2 text-xs">Nilai Maksimal : <span class="text-dark ms-sm-2 font-weight-bold">{{$data_nilai->nilai_max}}</span></span>
                            <!-- <span class="text-xs">Jenjang Karir: <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->jenjang_karir}}</span></span> -->
                        </div>
                        </li>
                    </ul>
                    
                  </div>
                </div>  
          </div>
        </div>
      </div>
@endsection