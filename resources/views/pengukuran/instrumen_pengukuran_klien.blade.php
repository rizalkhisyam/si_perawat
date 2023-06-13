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
                  </div>
                    <div class="col-12 d-flex align-items-center justify-content-center mb-2">
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan - Perawat dan Klien</h6>
                    </div>
                    <ul class="list-group mt-5">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <span class="mb-2 text-xs">Nama Perawat : <span class="text-dark font-weight-bold ms-sm-2">{{$data_perawat->nama}}</span></span>
                            <span class="mb-2 text-xs">Nama Ruangan : <span class="text-dark font-weight-bold ms-sm-2">{{$nama_ruangan}}</span></span>
                            <span class="mb-2 text-xs">Jenis Kelamin : <span class="text-dark font-weight-bold ms-sm-2">{{$data_perawat->jenis_kelamin}}</span></span>
                            <span class="mb-2 text-xs">Status : <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->status}}</span></span>
                            <span class="mb-2 text-xs">Jenjang Karir : <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->jenjang_karir}}</span></span>
                            <span class="text-xs">Kode Pengukuran : <span class="text-dark ms-sm-2 font-weight-bold">{{$id_pengukuran}}</span></span>

                        </div>
                        </li>
                    </ul>
                    <div class="container col-lg-10 mt-5">
                    <form role="form" class="" action="{{ route('hasil-pengukuran-1', $id_pengukuran) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="col-12 mb-2">
                    <h6 class="">1. Perawat dalam memberikan pelayanan keperawatan menghargai harkat dan martabat manusia, keunikan klien, dan tidak terpengaruh oleh pertimbangan kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial</h6>
                    </div>
                    <label class="form-label mt-2">Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift</label>
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
  
                      <label class="form-label mt-4">Perawat wajib menjelaskan setiap intervensi keperawatan yang dilakukan pada klien</label>
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
                    
                      <label class="form-label mt-4">Perawat dalam memberikan pelayanan keperawatan dilarang mencela adat kebiasaan dan keadaan khusus klien</label>
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

                      <label class="form-label mt-4">Perawat dalam memberikan pelayanan keperawatan dilarang membeda-bedakan pelayanan atas dasar kebangsaan, jenis kelamin, suku,agama, ras, antar golongan (SARA), kedudukan sosial serta tidak melakukan <i>body shamming</i> pada klien.</label>
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
                        <h6 class="">2. Perawat dalam memberikan pelayanan keperawatan senantiasa memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama</h6>
                    </div>
                    <label class="form-label mt-4">Perawat pada awal bertemu klien, wajib menjelaskan bahwa mereka boleh menjalankan kegiatan yang terkait dengan budaya, adat dan agama</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">a. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options5" id="radio23" value="1" required>
                        <label class="form-check-label" for="radio23">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options5" id="radio24" value="0" required>
                        <label class="form-check-label" for="radio24">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment5"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat	dalam memberikan pelayanan harus memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama dan wajib mencari solusi yang akan berpihak pada klien bila terjadi konflik terkait nilai- nilai budaya, adat istiadat	dan kelangsungan hidup beragama</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">b. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options6" id="radio25" value="1" required>
                        <label class="form-check-label" for="radio25">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options6" id="radio26" value="0" required>
                        <label class="form-check-label" for="radio26">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment6"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat	wajib membantu	klien memenuhi kebutuhannya	pada intervensi keperawatan sesuai dengan budaya, adat istiadat dan agama</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">c. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options7" id="radio27" value="1" required>
                        <label class="form-check-label" for="radio27">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options7" id="radio28" value="0" required>
                        <label class="form-check-label" for="radio28">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment7"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat	wajib mengikut sertakan klien secara terus menerus pada saat memberikan asuhan keperawatan</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">d. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options8" id="radio29" value="1" required>
                        <label class="form-check-label" for="radio29">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options8" id="radio30" value="0" required>
                        <label class="form-check-label" for="radio30">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment8"></textarea>
                      </div>

                    <div class="col-12 mb-2 mt-5">
                        <h6 class="">3. Tanggung jawab utama perawat adalah kepada mereka yang membutuhkan	asuhan keperawatan</h6>
                    </div>
                    <label class="form-label mt-4">Perawat wajib melaksanakan asuhan keperawatan sesuai dengan standar prosedur operasional (SPO)</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">a. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options9" id="radio31" value="1" required>
                        <label class="form-check-label" for="radio31">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options9" id="radio32" value="0" required>
                        <label class="form-check-label" for="radio32">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment9"></textarea>
                      </div>
                    <label class="form-label mt-4">Perawat dalam melaksanakan intervensi keperawatan wajib sesuai dengan kompetensi yang dimilikinya</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">b. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options10" id="radio32" value="1" required>
                        <label class="form-check-label" for="radio32">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options10" id="radio33" value="0" required>
                        <label class="form-check-label" for="radio33">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment10"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat wajib melaksanakan asuhan keperawatan secara tuntas dan tepat waktu</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">c. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options11" id="radio34" value="1" required>
                        <label class="form-check-label" for="radio34">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options11" id="radio35" value="0" required>
                        <label class="form-check-label" for="radio35">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment11"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat dilarang melakukan serah terima bila tindakan keperawatan belum dilaksanakan sesuai dengan rencana yang telah dibuat, kecuali bila ada alasan yang dapat diterima</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">d. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options12" id="radio36" value="1" required>
                        <label class="form-check-label" for="radio36">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options12" id="radio37" value="0" required>
                        <label class="form-check-label" for="radio37">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment12"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat wajib membuat dokumentasi asuhan keperawatan sesuai SPO</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">e. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options13" id="radio38" value="1" required>
                        <label class="form-check-label" for="radio38">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options13" id="radio39" value="0" required>
                        <label class="form-check-label" for="radio39">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment13"></textarea>
                      </div>

                    <div class="col-12 mb-2 mt-5">
                        <h6 class="">4. Perawat wajib merahasiakan segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku</h6>
                    </div>
                    <label class="form-label mt-4">Perawat dilarang membocorkan rahasia tentang segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">a. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options14" id="radio42" value="1" required>
                        <label class="form-check-label" for="radio42">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options14" id="radio43" value="0" required>
                        <label class="form-check-label" for="radio43">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment14"></textarea>
                      </div>

                      <label class="form-label mt-4">Perawat tidak mendiskusikan klien di tempat umum</label>
                      <div class="input-group input-group-outline mb-2">
                      <label for="">b. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options15" id="radio44" value="1" required>
                        <label class="form-check-label" for="radio44">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options15" id="radio45" value="0" required>
                        <label class="form-check-label" for="radio45">Tidak</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comment">Keterangan :</label>
                        <textarea class="form-control border p-2" rows="5" id="comment" name="comment15"></textarea>
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