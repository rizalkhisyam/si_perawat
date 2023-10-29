@extends('layouts.pengukuran')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header pb-0 p-3">
          <div class="row">

            <div class="col-12">
              <a class="btn bg-gradient-light mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Kembali</a>
            </div>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Notifikasi</h1>
                      <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin kembali pada halaman utama ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                      <a type="button" class="btn btn-primary" href="/dashboard">Iya</a>
                    </div>
                  </div>
                </div>
            </div>

          </div>
            <div class="col-12 d-flex align-items-center justify-content-center mb-2">
              <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan</h6>
            </div>
            <div class="col-lg-12 steps-form mb-7 mt-5">
                        <div class="steps-row setup-panel">
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" >1</a>
                            <p>Perawat dan Klien</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">2</a>
                            <p>Perawat dan Praktek</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">3</a>
                            <p>Perawat dan Masyarakat</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">4</a>
                            <p>Perawat dan Teman Sejawat</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">5</a>
                            <p>Perawat dan Profesi</p>
                            </div>
                        </div>
                    </div>
            <ul class="list-group mt-5">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="container">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Perawat</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Ruangan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil 1</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil 2</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil 3</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil 4</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil 5</th>
                      </tr>
                    </thead>
                    <tbody>
                      <td>
                      <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{$data_pengukuran->nama}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">{{$data_pengukuran->ruangan}}</p>
                        </td>
                        <td>
                          <p class="text-sm text-center font-weight-bold mb-0">{{$data_pengukuran->skor_1}}</p>
                        </td>
                        <td>
                          <p class="text-sm text-center font-weight-bold mb-0">{{$data_pengukuran->skor_2}}</p>
                        </td>
                        <td>
                          <p class="text-sm text-center font-weight-bold mb-0">{{$data_pengukuran->skor_3}}</p>
                        </td>
                        <td>
                          <p class="text-sm text-center font-weight-bold mb-0">{{$data_pengukuran->skor_4}}</p>
                        </td>
                        <td>
                          <p class="text-sm text-center font-weight-bold mb-0">{{$data_pengukuran->skor_5}}</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </li>
            </ul>

            <div class="container d-flex justify-content-between">
              <a type="submit" href="/test" class="btn bg-gradient-light w-20 my-4 mb-2">Simpan Draft</a>
              <button type="submit" class="btn bg-gradient-primary w-20 my-4 mb-2">Hasil Pengukuran</button>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
@endsection