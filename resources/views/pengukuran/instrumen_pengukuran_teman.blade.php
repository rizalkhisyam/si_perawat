@extends('layouts.pengukuran')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan</h6>
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
                        <span class="text-bold">1. Perawat senantiasa memelihara hubungan baik dengan sesama perawat maupun dengan tenaga kesehatan lainnya dan dalam memelihara keserasian suasana lingkungan kerja maupun dalam mencapai tujuan pelayanan kesehatan secara menyeluruh</span>
                    </div>
                    <label class="form-label">Perawat	harus berdiskusi dengan sesama	perawat membahas hal terkait dengan profesi secara berkala</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options1" id="radio1" value="1">
                        <label class="form-check-label" for="radio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options1" id="radio2" value="0">
                        <label class="form-check-label" for="radio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Dalam menyampaikan pendapat, Perawat harus menggunakan rujukan yang diakui kebenarannya</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options2" id="radio3" value="1">
                        <label class="form-check-label" for="radio3">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options2" id="radio4" value="0">
                        <label class="form-check-label" for="radio4">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib menghargai pendapat kolega</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options3" id="radio5" value="1">
                        <label class="form-check-label" for="radio5">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options3" id="radio6" value="0">
                        <label class="form-check-label" for="radio6">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Menghormati teman sejawat dan profesi lain</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options4" id="radio7" value="1">
                        <label class="form-check-label" for="radio7">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options4" id="radio8" value="0">
                        <label class="form-check-label" for="radio8">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Menciptakan lingkungan yang kondusif (keserasian suasana dan menciptakan privasi)</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options5" id="radio9" value="1">
                        <label class="form-check-label" for="radio9">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options5" id="radio10" value="0">
                        <label class="form-check-label" for="radio10">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	harus menyimpulkan hasil pertemuan	dengan saling menghargai</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options6" id="radio11" value="1">
                        <label class="form-check-label" for="radio11">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options6" id="radio12" value="0">
                        <label class="form-check-label" for="radio12">Tidak</label>
                        </div>
                      </div>

                      <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">2. Perawat bertindak melindungi klien dari tenaga kesehatan yang memberikan pelayanan kesehatan secara tidak kompeten, tidak etis dan ilegal</span>
                        </div>
                        <label class="form-label">Perawat wajib memberikan perlindungan pada klien</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options7" id="radio13" value="1">
                            <label class="form-check-label" for="radio13">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options7" id="radio14" value="0">
                            <label class="form-check-label" for="radio14">Tidak</label>
                            </div>
                        </div>

                        <label class="form-label">Perawat harus memahami alur untuk menyampaikan masalah bila terjadi pelayanan	kesehatan yang tidak mengikuti kaidah etik</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options8" id="radio15" value="1">
                            <label class="form-check-label" for="radio15">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options8" id="radio16" value="0">
                            <label class="form-check-label" for="radio16">Tidak</label>
                            </div>
                        </div>

                        <label class="form-label">Pimpinan Perawat wajib melindungi anggotanya dalam membahas dan mengemuka-kan pendapat</label>
                        <div class="input-group input-group-outline mb-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options9" id="radio17" value="1">
                            <label class="form-check-label" for="radio17">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="options9" id="radio18" value="0">
                            <label class="form-check-label" for="radio18">Tidak</label>
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