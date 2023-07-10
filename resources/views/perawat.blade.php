@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Daftar Perawat</h6>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Data Perawat</button>
                    </div>
                  </div>
                </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status Pendidikan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status Kepegawaian</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenjang Karir</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lama Bekerja</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $data)
                    <tr id="{{$data->id}}">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <!-- <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div> -->
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-2 text-sm">{{$data->nama}}</h6>
                            <span class="text-sm mb-2">NIP : {{$data->nip}}</span>
                            <p class="text-xs text-secondary mb-0">{{$data->jenis_kelamin == 'pria' ? 'Laki-laki' : 'Perempuan'}} - {{$data->usia}} Tahun</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-xs font-weight-bold mb-0">{{$data->status_pendidikan}}</h6>
                        <!-- <p class="text-xs text-secondary mb-0">Organization</p> -->
                      </td>
                      <td>
                        <h6 class="text-xs font-weight-bold mb-0">{{$data->status}}</h6>
                        <!-- <p class="text-xs text-secondary mb-0">Organization</p> -->
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$data->jenjang_karir}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <h6 class="text-xs font-weight-bold mb-0">{{$data->lama_bekerja}}</h6>
                      </td>
                      <td class="align-middle">
                      <div class="ms-auto d-flex justify-content-center">
                        <!-- <button class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="material-icons text-sm me-2">edit</i>Edit</button> -->
                        <a class="btn btn-link text-dark px-3 mb-0" href="/perawat/edit/{{$data->id}}" ><i class="material-icons text-sm me-2">edit</i>Edit</a>

                        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Perawat</h1>
                              <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{ route('create-perawat') }}" method="POST">
                                  @csrf
                                  @method("PUT")
                                    <span>Nama Perawat</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}">
                                    </div>

                                    <span>Nomor Induk Perawat (NIP)</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" name="nip" id="nip" value="{{$data->nip}}">
                                    </div>

                                    <span>Usia (Tahun)</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="number" class="form-control" name="usia" id="usia" value="{{$data->usia}}">
                                      <span class="input-group-text" id="inputGroup-sizing-default"></span>
                                    </div>

                                    <span>Jenis Kelamin</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <select class="form-control" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" >
                                        <option value="{{$data->jenis_kelamin}}" selected disabled hidden>{{$data->jenis_kelamin}}</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                      </select>
                                    </div>

                                    <span>Status Pendidikan</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <select class="form-control" aria-label="Default select example" name="status_pendidikan" id="status_pendidikan">
                                        <option value="{{$data->status_pendidikan}}" selected disabled hidden>{{$data->status_pendidikan}}</option>
                                        <option value="Diploma 3 (D3)">Diploma 3 (D3)</option>
                                        <option value="Strata Satu (S1)">Strata Satu (S1)</option>
                                        <option value="Magister (S2)">Magister (S2)</option>
                                        <option value="Doctor (S3)">Doctor (S3)</option>
                                        <option value="Ners">Ners</option>
                                        <option value="Spesialis">Spesialis</option>
                                      </select>
                                    </div>

                                    <span>Status Kepegawaian</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <select class="form-control" aria-label="Default select example" name="status" id="status">
                                      <option value="{{$data->status}}" selected disabled hidden>{{$data->status}}</option>
                                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                                        <option value="Pegawai Kontrak">Pegawai Kontrak</option>
                                        <option value="Magang">Magang</option>
                                      </select>
                                    </div>

                                    <span>Lama Bekerja, contoh: 5 bulan atau 1 tahun</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" name="lama_bekerja" id="lama_bekerja" value="{{$data->lama_bekerja}}">
                                    </div>

                                    <span>Jenjang Karir</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <select class="form-control" aria-label="Default select example" name="jenjang_karir" id="jenjang_karir">
                                      <option value="{{$data->jenjang_karir}}" selected disabled hidden>{{$data->jenjang_karir}}</option>
                                        <option value="Perawat Pendidik">Perawat Pendidik</option>
                                        <option value="Perawat Klinis">Perawat Klinis</option>
                                        <option value="Perawat Manajer">Perawat Manajer</option>
                                        <option value="Perawat Peneliti/riset">Perawat Peneliti/riset</option>
                                      </select>
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

                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDelete{{$data->id}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                        
                        <div class="modal fade" id="modalDelete{{$data->id}}" tabindex="" aria-labelledby="{{$data->id}}" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="{{$data->id}}">Delete Data</h1>
                                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                              </div>
                              <div class="modal-body">
                                  Apakah anda yakin ingin menghapus data "{{$data->nama}}" ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                <form action="{{ route('delete-perawat', $data->id) }}" method="POST" >
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
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

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Perawat</h1>
              <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form role="form" action="{{ route('create-perawat') }}" method="POST">
                  @csrf
                    <span>Nama Perawat</span>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>

                    <span>Nomor Induk Pegawai (NIP) <p class="text-sm text-danger">*apabila ada</p></span>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="nip" id="nip">
                    </div>

                    <span>Usia (Tahun)</span>
                    <div class="input-group input-group-outline mb-3">
                      <input type="number" class="form-control" name="usia" id="usia" required>
                      <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    </div>

                    <span>Jenis Kelamin</span>
                    <div class="input-group input-group-outline mb-3">
                      <select class="form-control" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option selected>-- Pilih salah satu --</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                      </select>
                    </div>

                    <span>Status Pendidikan</span>
                    <div class="input-group input-group-outline mb-3">
                      <select class="form-control" aria-label="Default select example" name="status_pendidikan" id="status_pendidikan" required>
                        <option selected>-- Pilih salah satu --</option>
                          <option value="Diploma 3 (D3)">Diploma 3 (D3)</option>
                          <option value="Strata Satu (S1)">Strata Satu (S1)</option>
                          <option value="Magister (S2)">Magister (S2)</option>
                          <option value="Doctor (S3)">Doctor (S3)</option>
                          <option value="Ners">Ners</option>
                          <option value="Spesialis">Spesialis</option>
                      </select>
                    </div>

                    <span>Status Kepegawaian</span>
                    <div class="input-group input-group-outline mb-3">
                      <select class="form-control" aria-label="Default select example" name="status" id="status" required>
                        <option selected>-- Pilih salah satu --</option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="Pegawai Kontrak">Pegawai Kontrak</option>
                        <option value="Magang">Magang</option>
                      </select>
                    </div>

                    <span>Lama Bekerja, contoh: 5 bulan atau 1 tahun</span>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="lama_bekerja" id="lama_bekerja" required>
                    </div>

                    <span>Jenjang Karir</span>
                    <div class="input-group input-group-outline mb-3">
                      <select class="form-control" aria-label="Default select example" name="jenjang_karir" id="jenjang_karir" required>
                        <option selected>-- Pilih salah satu --</option>
                        <option value="Perawat Pendidik">Perawat Pendidik</option>
                        <option value="Perawat Klinis">Perawat Klinis</option>
                        <option value="Perawat Manajer">Perawat Manajer</option>
                        <option value="Perawat Peneliti/riset">Perawat Peneliti/riset</option>
                      </select>
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
@endsection