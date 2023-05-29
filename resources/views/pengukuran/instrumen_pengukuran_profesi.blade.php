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

                    <div class="col-12 d-flex align-items-center justify-content-center mb-2">
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan - Perawat dan Profesi</h6>
                    </div>
                    <ul class="list-group mt-5">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <span class="mb-2 text-xs">Nama Perawat : <span class="text-dark font-weight-bold ms-sm-2">{{$data->nama}}</span></span>
                            <span class="mb-2 text-xs">Nama Ruangan : <span class="text-dark font-weight-bold ms-sm-2">{{$data->ruangan}}</span></span>
                            <span class="mb-2 text-xs">Jenis Kelamin : <span class="text-dark font-weight-bold ms-sm-2">{{$data->jenis_kelamin}}</span></span>
                            <span class="mb-2 text-xs">Status : <span class="text-dark ms-sm-2 font-weight-bold">{{$data->status}}</span></span>
                            <span class="mb-2 text-xs">Jenjang Karir : <span class="text-dark ms-sm-2 font-weight-bold">{{$data->jenjang_karir}}</span></span>
                            <span class="text-xs">Kode Pengukuran : <span class="text-dark ms-sm-2 font-weight-bold">{{$id_pengukuran}}</span></span>
                        </div>
                        </li>
                    </ul>
                    <div class="container col-lg-10 mt-5">
                    <form role="form" class="" action="{{ route('hasil-pengukuran-5', $id_pengukuran) }}" method="POST">
                        @csrf
                    <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">1. Perawat mempunyai peran utama dalam menentukan standar pendidikan dan pelayanan keperawatan	serta menerapkannya dalam kegiatan pelayanan dan pendidikan keperawatan</span>
                    </div>
                    <label class="form-label">Perawat wajib memberikan masukan kepada	institusi pendidikan tentang kemajuan ilmu pengetahuan	dan teknologi keperawatan</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options1" id="radio1" value="1" required>
                        <label class="form-check-label" for="radio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options1" id="radio2" value="0" required>
                        <label class="form-check-label" for="radio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat wajib mengadakan pertemuan dengan institusi	pendidikan secara efektif</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options2" id="radio3" value="1" required>
                        <label class="form-check-label" for="radio3">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options2" id="radio4" value="0" required>
                        <label class="form-check-label" for="radio4">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Pimpinan Keperawatan pada institusi pelayanan kesehatan harus memantau penerapan kode etik keperawatan</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options3" id="radio5" value="1" required>
                        <label class="form-check-label" for="radio5">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options3" id="radio6" value="0" required>
                        <label class="form-check-label" for="radio6">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Pimpinan keperawatan wajib mengadakan pertemuan dengan Komite Etik Profesi secara berkala</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options4" id="radio7" value="1" required>
                        <label class="form-check-label" for="radio7">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options4" id="radio8" value="0" required>
                        <label class="form-check-label" for="radio8">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Komite Etik Profesi pada institusi pelayanan kesehatan harus melaporkan dan membahas kegiatannya dengan PPNI secara berkala</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options5" id="radio9" value="1" required>
                        <label class="form-check-label" for="radio9">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options5" id="radio10" value="0" required>
                        <label class="form-check-label" for="radio10">Tidak</label>
                        </div>
                      </div>

                      <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">2. Perawat berperan aktif dalam berbagai kegiatan pengembangan profesi keperawatan</span>
                        </div>
                        <label class="form-label">Perawat wajib melakukan kajian asuhan keperawatan yang diberikan secara terus menerus dibawah bimbingan perawat yang ditunjuk</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options6" id="radio11" value="1" required>
                            <label class="form-check-label" for="radio11">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options6" id="radio12" value="0" required>
                            <label class="form-check-label" for="radio12">Tidak</label>
                            </div>
                        </div>

                        <label class="form-label">Perawat wajib membahas hasil kajian asuhan keperawatan dalam forum temu ilmiah perawat pada institusi	terkait sekurang-kurangnya satu kali dalam satu tahun</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options7" id="radio13" value="1" required>
                            <label class="form-check-label" for="radio13">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options7" id="radio14" value="0" required>
                            <label class="form-check-label" for="radio14">Tidak</label>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">3. Perawat berpartisipasi aktif dalam upaya profesi untuk membangun dan memelihara kondisi kerja yang kondusif demi terwujudnya asuhan keperawatan yang bermutu tinggi</span>
                        </div>
                        <label class="form-label">Perawat wajib menjalankan tugas profesinya dengan penuh tanggung jawab</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options8" id="radio15" value="1" required>
                            <label class="form-check-label" for="radio15">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options8" id="radio16" value="0" required>
                            <label class="form-check-label" for="radio16">Tidak</label>
                            </div>
                        </div>

                        <label class="form-label">Perawat melakukan serah terima pasien sesuai standart dan perawat	wajib menyampaikan asuhan keperawatan yang telah dilakukannya pada setiap serah terima</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options9" id="radio17" value="1" required>
                            <label class="form-check-label" for="radio17">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options9" id="radio18" value="0" required>
                            <label class="form-check-label" for="radio18">Tidak</label>
                            </div>
                        </div>

                        <label class="form-label">Perawat penanggung jawab wajib memastikan terlaksananya asuhan keperawatan yang diberikan oleh perawat pelaksana yang ada dibawah	tanggung jawabnya</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options10" id="radio19" value="1" required>
                            <label class="form-check-label" for="radio19">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options10" id="radio20" value="0" required>
                            <label class="form-check-label" for="radio20">Tidak</label>
                            </div>
                        </div>

                        <label class="form-label">Perawat penanggung jawab wajib menyampaikan perkembangan asuhan keperawatan kepada penanggung	jawab perawatan yang lebih tinggi secara berkala.</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options11" id="radio21" value="1" required>
                            <label class="form-check-label" for="radio21">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options11" id="radio22" value="0" required>
                            <label class="form-check-label" for="radio22">Tidak</label>
                            </div>
                        </div>
                      <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Lanjutkan Pengukuran</button>
                      </div>
                    </form>
                </div>
                  </div>
                </div>
          </div>
        </div>

        
      </div>
@endsection