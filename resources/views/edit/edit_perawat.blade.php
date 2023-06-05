@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Edit Data Perawat</h6>
                    </div>
                  </div>
                </div>
            <div class="card-body px-0 pb-2 col-4">
                <div class="container">
                  <form role="form" action="">
                    @csrf
                    @method("PATCH")
                    <div class="mb-3">
                      <label class="form-label">Nama Perawat</label>
                      <div class="input-group input-group-outline ">
                        <input type="text" class="form-control" name="nama" required value="{{$data->nama}}">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Umur (Tahun)</label>
                      <div class="input-group input-group-outline ">
                        <input type="text" class="form-control" name="usia" required value="{{$data->usia}}">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Status Kepegawaian</label>
                      <div class="input-group input-group-outline ">
                        <select class="form-control" aria-label="Default select example" name="status" id="status">
                        <option value="{{$data->status}}" selected disabled hidden>{{$data->status}}</option>
                          <option value="Pegawai Tetap">Pegawai Tetap</option>
                          <option value="Pegawai Kontrak">Pegawai Kontrak</option>
                          <option value="Magang">Magang</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jenjang Karir</label>
                      <div class="input-group input-group-outline ">
                        <select class="form-control" aria-label="Default select example" name="jenjang_karir" id="jenjang_karir">
                        <option value="{{$data->jenjang_karir}}" selected disabled hidden>{{$data->jenjang_karir}}</option>
                          <option value="Perawat Pendidik">Perawat Pendidik</option>
                          <option value="Perawat Klinis">Perawat Klinis</option>
                          <option value="Perawat Manajer">Perawat Manajer</option>
                          <option value="Perawat Peneliti/riset">Perawat Peneliti/riset</option>
                        </select>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Status Pendidikan</label>
                      <div class="input-group input-group-outline ">
                        <select class="form-control" aria-label="Default select example" name="status_pendidikan" id="status_pendidikan">
                        <option value="{{$data->status_pendidikan}}" selected disabled hidden>{{$data->status_pendidikan}}</option>
                          <option value="Strata Satu">Strata Satu</option>
                          <option value="Magister">Magister</option>
                          <option value="Doctor">Doctor</option>
                        </select>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Lama Bekerja</label>
                      <div class="input-group input-group-outline ">
                        <input type="text" class="form-control" name="lama_bekerja" required value="{{$data->lama_bekerja}}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Simpan</button>
                    </div>
                  </form>
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
                        <option value="Strata Satu">Strata Satu</option>
                        <option value="Magister">Magister</option>
                        <option value="Doctor">Doctor</option>
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