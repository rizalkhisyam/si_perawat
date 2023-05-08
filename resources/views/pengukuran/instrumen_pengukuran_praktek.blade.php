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
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan - Perawat dan Praktek</h6>
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
                    <form role="form" class="" action="{{ route('hasil-pengukuran-2', $id_pengukuran) }}" method="POST">
                    @csrf
                    <div class="col-12 mb-2">
                    <span class="text-bold">1. Perawat memelihara dan meningkatkan kompetensi	dibidang keperawatan melalui belajar terus menerus</span>
                    </div>
                    <label class="form-label">Perawat harus berusaha untuk meningkatkan ilmu dan keterampilan sesuai dengan kemampuan</label>
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

                      <label class="form-label">Perawat	harus mengamalkan ilmu dan keterampilan	yang dimiliki</label>
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

                      <label class="form-label">Perawat harus mempublikasi-kan ilmu dan keterampilan yang dimiliki baik dalam bentuk hasil penelitian maupun presentasi kasus</label>
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

                    <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">2. Perawat senantiasa memelihara mutu pelayanan keperawatan yang tinggi disertai kejujuran profesional yang menerapkan pengetahuan serta keterampilan keperawatan sesuai dengan kebutuhan klien</span>
                    </div>
                    <label class="form-label">Perawat wajib memelihara mutu pelayanan keperawatan seoptimal mungkin dengan	mengikuti seminar/pelatihan/ workshop</label>
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

                      <label class="form-label">Perawat	sebelum menerapkan pengetahuan dan keterampilan yang baru, wajib dievaluasi oleh perawat yang telah berkompeten</label>
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

                      <label class="form-label">Perawat dalam memberikan asuhan keperawatan	wajib mengidentifikasi asuhan keperawatan yang tidak sesuai dengan nilai-nilai profesi keperawatan</label>
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

                      <label class="form-label">Perawat wajib menyampaikan kepada pimpinan,	apabila menemukan pelayanan kesehatan yang tidak sesuai dengan nilai-nilai yang dianut untuk selanjutnya ditindaklanjuti</label>
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

                    <label class="form-label">Perawat dalam memberikan intervensi keperawatan wajib merujuk pada standar yang dikeluarkan institusi pelayanan kesehatan</label>
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

                      <label class="form-label">Setiap teknologi keperawatan yang digunakan wajib diuji validitas (kehandalan) dan reliabilitas (keabsahan) oleh lembaga yang berwenang</label>
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

                    <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">3. Perawat dalam membuat keputusan didasarkan pada informasi yang akurat	dan mempertimbangkan kemampuan serta kualifikasi seseorang bila melakukan konsultasi, menerima delegasi dan memberikan	delegasi kepada orang lain</span>
                    </div>
                    <label class="form-label">Perawat dalam membuat keputusan wajib didasarkan pada informasi yang akurat</label>
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

                      <label class="form-label">Perawat dalam membuat keputusan	wajib mempertimbangkan kemampuan serta kualifikasi seseorang bila melakukan	konsultasi, menerima delegasi dan memberikan delegasi kepada orang lain</label>
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

                      <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">4. Perawat senantiasa menjunjung tinggi nama baik	profesi keperawatan dengan selalu menunjukkan perilaku profesional</span>
                    </div>
                    <label class="form-label">Perawat dilarang menyampaikan hal-hal yang terkait dengan kegiatan profesi keperawatan, kecuali ditugaskan oleh pejabat yang berwenang</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options12" id="radio23" value="1" required>
                        <label class="form-check-label" for="radio23">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options12" id="radio24" value="0" required>
                        <label class="form-check-label" for="radio24">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat wajib menyelesaikan permasalahan terkait pelaksanaan tugas profesi keperawatan	secara internal terlebih dahulu</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options13" id="radio25" value="1" required>
                        <label class="form-check-label" for="radio25">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options13" id="radio26" value="0" required>
                        <label class="form-check-label" for="radio26">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Penyelesaian masalah harus dipimpin oleh perawat penanggung jawab</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options14" id="radio27" value="1" required>
                        <label class="form-check-label" for="radio27">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options14" id="radio28" value="0" required>
                        <label class="form-check-label" for="radio28">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat harus menjaga kesehatan jasmani dan rohani yang diperlukan untuk menampilkan sikap profesinya</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options15" id="radio29" value="1" required>
                        <label class="form-check-label" for="radio29">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options15" id="radio30" value="0"required>
                        <label class="form-check-label" for="radio30">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat yang dalam keadaan tidak sehat dilarang memberikan asuhan keperawatan.</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options16" id="radio31" value="1" required>
                        <label class="form-check-label" for="radio31">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options16" id="radio32" value="0" required>
                        <label class="form-check-label" for="radio32">Tidak</label>
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