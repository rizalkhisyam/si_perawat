@extends('layouts.pengukuran')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center mb-2">
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan - Perawat dan Klien</h6>
                    </div>

                    <div class="col-lg-12 steps-form mb-7 mt-5">
                        <div class="steps-row setup-panel">
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Perawat dan Klien</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">2</a>
                            <p>Perawat dan Praktek</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">3</a>
                            <p>Perawat dan Masyarakat</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">4</a>
                            <p>Perawat dan Teman Sejawat</p>
                            </div>
                            <div class="steps-step">
                            <a href="#" type="button" class="btn btn-light btn-circle" disabled="disabled">5</a>
                            <p>Perawat dan Profesi</p>
                            </div>
                        </div>
                    </div>

                    <div class="container col-lg-10">
                    <!-- <div class="d-flex justify-content-center">
                        <span>Input data perawat untuk instrumen pengukuran</span>
                    </div> -->
                    <form role="form" class="" action="{{ route('pengukuran-2') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="col-12 mb-2">
                    <span class="text-bold">1. Perawat dalam memberikan pelayanan keperawatan menghargai harkat dan martabat manusia, keunikan klien, dan tidak terpengaruh oleh pertimbangan kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial</span>
                    </div>
                    <label class="form-label">Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift</label>
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
                      <!-- @error('options1')
                        <div class="text-danger">
                          *Maaf, jawaban tidak boleh kosong
                        </div>
                      @enderror -->

                      <label class="form-label">Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift</label>
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
                    
                      <label class="form-label">Perawat	dalam memberikan pelayanan keperawatan, bersikap ramah (senyum sapa salam, kontak mata) dilarang mencela adat kebiasaan dan keadaan khusus klien</label>
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

                      <label class="form-label">Perawat	dalam memberikan pelayanan keperawatan dilarang membeda-bedakan pelayanan atas dasar kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial pada klien</label>
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

                      <label class="form-label">Merespon cepat terhadap respon pasien. Penampilan rapi</label>
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

                      <label class="form-label">Menggunakan ID Card</label>
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

                      <label class="form-label">Memakai seragam yang sesuai</label>
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

                      <label class="form-label">Rambut atau kerudung rapi (Laki-laki: rambut rapi tidak menutup telinga dan kerah bau, jika berjenggot tampak rapi. Perempuan rambut diikat menggunakan cepol/hairnet	warna hitam bagi yang tidak berhijab dan jika erhijab, hijab bersih,penataannya rapi sebatas dada dan tampak identitas)</label>
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

                      <label class="form-label">Tidak bau badan (bau tidak sedap)</label>
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

                      <label class="form-label">Keserasian make up, aksesoris dan tidak berlebihan</label>
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

                      <label class="form-label">Kuku pendek dan bersih</label>
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
                        <span class="text-bold">2. Perawat dalam memberikan pelayanan keperawatan senantiasa memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama</span>
                    </div>
                    <label class="form-label">Perawat pada awal bertemu klien, wajib menjelaskan bahwa mereka	boleh menjalankan kegiatan yang terkait dengan budaya, adat dan agama</label>
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

                      <label class="form-label">Perawat	dalam memberikan pelayanan harus memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama dan wajib mencari solusi yang akan berpihak pada klien bila terjadi konflik terkait nilai- nilai budaya, adat istiadat	dan kelangsungan hidup beragama</label>
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

                      <label class="form-label">Perawat	wajib membantu	klien memenuhi kebutuhannya	pada intervensi keperawatan sesuai dengan budaya, adat istiadat dan agama</label>
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

                      <label class="form-label">Perawat	wajib mengikut sertakan klien secara terus menerus pada saat memberikan asuhan keperawatan</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options15" id="radio29" value="1" required>
                        <label class="form-check-label" for="radio29">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options15" id="radio30" value="0" required>
                        <label class="form-check-label" for="radio30">Tidak</label>
                        </div>
                      </div>

                    <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">3. Tanggung jawab utama perawat adalah kepada mereka yang membutuhkan	asuhan keperawatan</span>
                    </div>
                    <label class="form-label">Perawat dalam melaksanakan intervensi keperawatan wajib sesuai dengan kompetensi yang dimilikinya</label>
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

                      <label class="form-label">Melaksanakan asuhan keperawatan sesuai dengan standart operasional prosedur (SOP)</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options17" id="radio33" value="1" required>
                        <label class="form-check-label" for="radio33">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options17" id="radio34" value="0" required>
                        <label class="form-check-label" for="radio34">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib melaksanakan asuhan keperawatan secara tuntas dan tepat waktu</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options18" id="radio35" value="1" required>
                        <label class="form-check-label" for="radio35">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options18" id="radio36" value="0" required>
                        <label class="form-check-label" for="radio36">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	dilarang melakukan serah terima bila tindakan keperawatan belum dilaksanakan sesuai dengan rencana yang telah dibuat, kecuali bila ada alasan yang dapat diterima</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options19" id="radio37" value="1" required>
                        <label class="form-check-label" for="radio37">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options19" id="radio38" value="0" required>
                        <label class="form-check-label" for="radio38">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib membuat dokumentasi asuhan keperawatan sesuai dengan kaidah yang berlaku.</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options20" id="radio39" value="1" required>
                        <label class="form-check-label" for="radio39">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options20" id="radio40" value="0" required>
                        <label class="form-check-label" for="radio40">Tidak</label>
                        </div>
                      </div>

                    <div class="col-12 mb-2 mt-5">
                        <span class="text-bold">4. Perawat wajib merahasiakan segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku</span>
                    </div>
                    <label class="form-label">Menjaga kerahasian dokumen pasien</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options21" id="radio41" value="1" required>
                        <label class="form-check-label" for="radio41">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options21" id="radio42" value="0" required>
                        <label class="form-check-label" for="radio42">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	dilarang membocorkan rahasia tentang segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku</label>
                      <div class="input-group input-group-outline mb-2">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options22" id="radio43" value="1" required>
                        <label class="form-check-label" for="radio43">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options22" id="radio44" value="0" required>
                        <label class="form-check-label" for="radio44">Tidak</label>
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