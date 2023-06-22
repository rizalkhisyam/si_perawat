@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Daftar Ruangan</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Data Ruangan</a>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Ruangan</h1>
                              <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{ route('simpan-data-ruangan') }}" method="POST">
                                  @csrf
                                    <span>Nama Ruangan</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan" value="">
                                    </div>
                                    @error('nama_ruangan')
                                      <div class="text-danger mb-2">
                                        {{$message}}
                                      </div>
                                    @enderror

                                    <span>Nama Gedung (Optional)</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" name="nama_gedung" id="nama_gedung" value="">
                                      <span class="input-group-text" id="inputGroup-sizing-default"></span>
                                    </div>

                                    <span>Daya Tampung (Optional)</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" name="daya_tampung" id="daya_tampung" value="">
                                      <span class="input-group-text" id="inputGroup-sizing-default"></span>
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Ruangan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Gedung</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Daya Tampung</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <!-- <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div> -->
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$data->nama_ruangan}}</h6>
                            <!-- <p class="text-xs text-secondary mb-0">{{$data->nama_gedung}}</p> -->
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$data->nama_gedung}}</p>
                        <!-- <p class="text-xs text-secondary mb-0"></p> -->
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$data->daya_tampung}}</span>
                      </td>
                      <td class="align-right">
                      <a class="btn btn-link text-dark px-3 mb-0" href="/edit-ruangan/{{$data->id}}" ><i class="material-icons text-sm me-2">edit</i>Edit</a>
                      </td>
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