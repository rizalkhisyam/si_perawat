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

                    <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan - Perawat dan Teman Sejawat</h6>
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
                    <form role="form" class="" action="{{ route('hasil-pengukuran-4', $id_pengukuran) }}" method="POST">
                        @csrf
                    <div class="col-12 mb-2 mt-5">
                        <h6 class="">1. Perawat senantiasa memelihara hubungan baik dengan sesama perawat maupun dengan tenaga kesehatan lainnya dan dalam memelihara keserasian suasana lingkungan kerja maupun dalam mencapai tujuan pelayanan kesehatan secara menyeluruh</h6>
                    </div>
                    <label class="form-label">Perawat	harus berdiskusi dengan sesama	perawat membahas hal terkait dengan profesi secara berkala</label>
                      <div class="input-group input-group-outline mb-2">
                        <label for="">a. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options1" id="radio1" value="1" required>
                        <label class="form-check-label" for="radio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options1" id="radio2" value="0" required>
                        <label class="form-check-label" for="radio2">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment1"></textarea>
                      </div>

                      <label class="form-label mt-4">Dalam menyampaikan pendapat, Perawat harus menggunakan rujukan yang diakui kebenarannya</label>
                      <div class="input-group input-group-outline mb-2">
                        <label for="">b. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options2" id="radio3" value="1" required>
                        <label class="form-check-label" for="radio3">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options2" id="radio4" value="0" required>
                        <label class="form-check-label" for="radio4">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment2"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat	wajib menghargai pendapat kolega</label>
                      <div class="input-group input-group-outline mb-2">
                        <label for="">c. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options3" id="radio5" value="1" required>
                        <label class="form-check-label" for="radio5">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options3" id="radio6" value="0" required>
                        <label class="form-check-label" for="radio6">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment3"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat	menciptakan lingkungan kerja yang kondusif</label>
                      <div class="input-group input-group-outline mb-2">
                        <label for="">d. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options4" id="radio7" value="1" required>
                        <label class="form-check-label" for="radio7">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options4" id="radio8" value="0" required>
                        <label class="form-check-label" for="radio8">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment4"></textarea>
                      </div>

                      <div class="col-12 mb-2 mt-5">
                        <h6 class="text-bold">2. Perawat bertindak melindungi klien dari tenaga kesehatan yang memberikan pelayanan kesehatan secara tidak kompeten, tidak etis dan ilegal</h6>
                        </div>
                        <label class="form-label">Perawat mempraktikan penyelesaian yang terjadi antar sejawat sesuai alur</label>
                        <div class="input-group input-group-outline mb-2">
                          <label for="">a. </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options5" id="radio9" value="1" required>
                            <label class="form-check-label" for="radio9">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options5" id="radio10" value="0" required>
                            <label class="form-check-label" for="radio10">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment5"></textarea>
                      </div>

                        <label class="form-label mt-4">Perawat	wajib memberikan perlindungan pada klien</label>
                        <div class="input-group input-group-outline mb-2">
                          <label for="">b. </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options6" id="radio11" value="1" required>
                            <label class="form-check-label" for="radio11">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options6" id="radio12" value="0" required>
                            <label class="form-check-label" for="radio12">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment6"></textarea>
                      </div>

                        <label class="form-label mt-4">Perawat harus memahami alur untuk menyampaikan masalah bila terjadi pelayanan kesehatan yang tidak mengikuti kaidah etik</label>
                        <div class="input-group input-group-outline mb-2">
                          <label for="">c. </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options7" id="radio13" value="1" required>
                            <label class="form-check-label" for="radio13">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options7" id="radio14" value="0" required>
                            <label class="form-check-label" for="radio14">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="comment">Keterangan :</label>
                          <textarea class="form-control border p-2" rows="5" id="comment" name="comment7"></textarea>
                        </div>

                        <label class="form-label mt-4">Perawat menegur sejawat yang tidak kompeten, tidak etik dan tidak legal dan membina sejawat agar kompeten, etis dan legal</label>
                        <div class="input-group input-group-outline mb-2">
                          <label for="">d. </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options8" id="radio15" value="1" required>
                            <label class="form-check-label" for="radio15">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options8" id="radio16" value="0" required>
                            <label class="form-check-label" for="radio16">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="comment">Keterangan :</label>
                          <textarea class="form-control border p-2" rows="5" id="comment" name="comment8"></textarea>
                        </div>

                        <label class="form-label mt-4">Pimpinan Perawat wajib melindungi anggotanya dalam membahas dan mengemuka-kan pendapat</label>
                        <div class="input-group input-group-outline mb-2">
                          <label for="">e. </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options9" id="radio17" value="1" required>
                            <label class="form-check-label" for="radio17">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options9" id="radio18" value="0" required>
                            <label class="form-check-label" for="radio18">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="comment">Keterangan :</label>
                          <textarea class="form-control border p-2" rows="5" id="comment" name="comment9"></textarea>
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