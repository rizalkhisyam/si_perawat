@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center mb-5">
                      <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan</h6>
                    </div>

                    <div class="steps-form mb-7">
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

                    <div class="container col-lg-6">
                    <!-- <div class="d-flex justify-content-center">
                        <span>Input data perawat untuk instrumen pengukuran</span>
                    </div> -->
                    <form role="form" class="" action="{{ route('pengukuran-1') }}" method="POST">
                    @csrf
                    <div class="col-12 mb-2">
                    <span>1. Perawat dalam memberikan pelayanan keperawatan menghargai harkat dan martabat manusia, keunikan klien, dan tidak terpengaruh oleh pertimbangan kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial</span>
                    </div>
                    <label class="form-label">Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>
                    
                      <label class="form-label">Perawat	dalam memberikan pelayanan keperawatan, bersikap ramah (senyum sapa salam, kontak mata) dilarang mencela adat kebiasaan dan keadaan khusus klien</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	dalam memberikan pelayanan keperawatan dilarang membeda-bedakan pelayanan atas dasar kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial pada klien</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Merespon cepat terhadap respon pasien. Penampilan rapi</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Menggunakan ID Card</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Memakai seragam yang sesuai</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Rambut atau kerudung rapi (Laki-laki: rambut rapi tidak menutup telinga dan kerah bau, jika berjenggot tampak rapi. Perempuan rambut diikat menggunakan cepol/hairnet	warna hitam bagi yang tidak berhijab dan jika erhijab, hijab bersih,penataannya rapi sebatas dada dan tampak identitas)</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Tidak bau badan (bau tidak sedap)</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Keserasian make up, aksesoris dan tidak berlebihan</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Kuku pendek dan bersih</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                    <div class="col-12 mb-2">
                        <span>2. Perawat dalam memberikan pelayanan keperawatan senantiasa memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama</span>
                    </div>
                    <label class="form-label">Perawat pada awal bertemu klien, wajib menjelaskan bahwa mereka	boleh menjalankan kegiatan yang terkait dengan budaya, adat dan agama</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	dalam memberikan pelayanan harus memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama dan wajib mencari solusi yang akan berpihak pada klien bila terjadi konflik terkait nilai- nilai budaya, adat istiadat	dan kelangsungan hidup beragama</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib membantu	klien memenuhi kebutuhannya	pada intervensi keperawatan sesuai dengan budaya, adat istiadat dan agama</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib mengikut sertakan klien secara terus menerus pada saat memberikan asuhan keperawatan</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                    <div class="col-12 mb-2">
                        <span>3. Tanggung jawab utama perawat adalah kepada mereka yang membutuhkan	asuhan keperawatan</span>
                    </div>
                    <label class="form-label">Perawat dalam melaksanakan intervensi keperawatan wajib sesuai dengan kompetensi yang dimilikinya</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Melaksanakan asuhan keperawatan sesuai dengan standart operasional prosedur (SOP)</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib melaksanakan asuhan keperawatan secara tuntas dan tepat waktu</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	dilarang melakukan serah terima bila tindakan keperawatan belum dilaksanakan sesuai dengan rencana yang telah dibuat, kecuali bila ada alasan yang dapat diterima</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	wajib membuat dokumentasi asuhan keperawatan sesuai dengan kaidah yang berlaku.</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                    <div class="col-12 mb-2">
                        <span>4. Perawat wajib merahasiakan segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku</span>
                    </div>
                    <label class="form-label">Menjaga kerahasian dokumen pasien</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                      </div>

                      <label class="form-label">Perawat	dilarang membocorkan rahasia tentang segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku</label>
                      <div class="input-group input-group-outline mb-5">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
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