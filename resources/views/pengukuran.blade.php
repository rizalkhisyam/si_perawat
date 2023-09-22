@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                  <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan</h6>
                </div>
                
                <div class="container col-lg-6" style="height: 50vh;">
                  <div class="d-flex justify-content-center">
                      <span>Input data perawat untuk instrumen pengukuran</span>
                  </div>
                  <form role="form" class="" action="{{ route('pengukuran-instrumen-klien') }}" method="POST">
                  @csrf
                  <label class="form-label">Nama Perawat</label>
                    <div class="input-group input-group-outline">
                      <select id="inputState" class="form-control" name="id_perawat">
                        <option selected disabled>-- Pilih Perawat --</option>
                      @foreach($data_perawats as $perawat)
                        <option value="{{$perawat->id.'|'.$perawat->nama}}">{{$perawat->nama}}</option>
                      @endforeach
                      </select>
                    </div>
                    @error('id_perawat')
                      <div class="text-danger">
                        <p style="font-size: 12px;">*Pilih perawat yang akan dilakukan pengukuran</p>
                      </div>
                    @enderror

                    <label class="form-label mt-4">Ruangan</label>
                    <div class="input-group input-group-outline">
                      <select id="inputState" class="form-control" name="id_ruangan">
                      <option selected disabled>-- Pilih Ruangan --</option>
                      @foreach($data_ruangans as $ruangan)
                        <option value="{{$ruangan->id.'|'.$ruangan->nama_ruangan}}">{{$ruangan->nama_ruangan}}</option>
                      @endforeach
                      </select>
                    </div>
                    @error('id_ruangan')
                      <div class="text-danger">
                      <p style="font-size: 12px;">*Pilih ruangan perawat</p>
                      </div>
                    @enderror
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Mulai Pengukuran</button>
                    </div>
                  </form>
                  <hr>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img style="width: 65%; height: 60%" src="{{ asset('img/illustrations/perawat.png') }}" alt="">
                </div>

                <div class="card-body px-0 pb-2 mb-5">
                    <div class="d-flex justify-content-center mb-5">
                        <h6>Draft Pengukuran</h6>
                    </div>
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Perawat</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Ruangan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($drafts as $draft)
                          <tr id="">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{$draft->nama}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-sm font-weight-bold mb-0">{{$draft->ruangan}}</p>
                            </td>
                            <td>
                              <p class="text-sm font-weight-bold mb-0">{{$draft->created_at}}</p>
                            </td>
                            <td class="align-middle">
                            <div class="ms-auto d-flex justify-content-center">
                              <!-- <button class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="material-icons text-sm me-2">edit</i>Edit</button> -->
                              <a class="btn bg-gradient-primary px-3 mb-0" href="/generate-hasil-pengukuran" ><i class="material-icons text-sm me-2">assignment</i>Lanjutkan Pengukuran</a>
                            </div>
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
        </div>
      </div>
@endsection