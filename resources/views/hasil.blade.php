@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Hasil Pengukuran</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">print</i>&nbsp;&nbsp;Cetak</a>
                    </div>
                  </div>
                </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai Interval</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai Perilaku</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Perilaku</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data)
                    <tr id="{{$data->id}}">
                    <td>
                    <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$data->nama}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$data->ruangan}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->skor_1}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->skor_2}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->skor_3}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->skor_4}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->skor_5}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->nilai_interval}}</p>
                      </td>
                      <td>
                        <p class="text-sm text-center font-weight-bold mb-0">{{$data->nilai_perilaku}}</p>
                      </td>
                      @if($data->kategori_nilai == 'Prima')
                      <td class="align-middle text-center text-sm">
                        <span class="badge" style="background-color: #04009A;">{{$data->kategori_nilai}}</span>
                      </td>
                      @elseif($data->kategori_nilai == 'Baik')
                      <td class="align-middle text-center text-sm">
                        <span class="badge" style="background-color: #3250fa;">{{$data->kategori_nilai}}</span>
                      </td>
                      @elseif($data->kategori_nilai == 'Cukup')
                      <td class="align-middle text-center text-sm">
                        <span class="badge" style="background-color: #609966;">{{$data->kategori_nilai}}</span>
                      </td>
                      @elseif($data->kategori_nilai == 'Buruk')
                      <td class="align-middle text-center text-sm">
                        <span class="badge" style="background-color: #DF2E38;">{{$data->kategori_nilai}}</span>
                      </td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection