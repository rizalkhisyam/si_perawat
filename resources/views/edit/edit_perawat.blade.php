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
            <div class="card-body px-0 pb-2 col-lg-4 col-12">
                <div class="container">
                  <form role="form" action="{{ route('update-perawat', $data->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="mb-3">
                      <label class="form-label">Nama Perawat</label>
                      <div class="input-group input-group-outline ">
                        <input type="text" class="form-control" name="nama" required value="{{$data->nama}}">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nomor Induk Pegawai (NIP)</label>
                      <div class="input-group input-group-outline ">
                        <input type="text" class="form-control" name="nip" value="{{$data->nip}}">
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
                          <option value="{{$data->status}}" selected hidden>{{$data->status}}</option>
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
                          <option value="{{$data->jenjang_karir}}" selected hidden>{{$data->jenjang_karir}}</option>
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
                          <option value="{{$data->status_pendidikan}}" selected hidden>{{$data->status_pendidikan}}</option>
                          <option value="Diploma 3 (D3)">Diploma 3 (D3)</option>
                          <option value="Strata Satu (S1)">Strata Satu (S1)</option>
                          <option value="Magister (S2)">Magister (S2)</option>
                          <option value="Doctor (S3)">Doctor (S3)</option>
                          <option value="Ners">Ners</option>
                          <option value="Spesialis">Spesialis</option>
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
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Perbarui Data</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection