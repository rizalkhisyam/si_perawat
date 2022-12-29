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
                            <a href="#" type="button" class="btn btn-light btn-circle">1</a>
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
                            <a href="#" type="button" class="btn btn-primary btn-circle" disabled="disabled">5</a>
                            <p>Perawat dan Profesi</p>
                            </div>
                        </div>
                    </div>

                    <div class="container col-lg-6">
                    <!-- <div class="d-flex justify-content-center">
                        <span>Input data perawat untuk instrumen pengukuran</span>
                    </div> -->
                    <form role="form" class="">
                        @csrf
                    <div class="col-12 mb-2">
                        <span>1. Perawat mempunyai peran utama dalam menentukan standar pendidikan dan pelayanan keperawatan	serta menerapkannya dalam kegiatan pelayanan dan pendidikan keperawatan</span>
                    </div>
                    <label class="form-label">Perawat wajib memberikan masukan kepada	institusi pendidikan tentang kemajuan ilmu pengetahuan	dan teknologi keperawatan</label>
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

                      <label class="form-label">Perawat wajib mengadakan pertemuan dengan institusi	pendidikan secara efektif</label>
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

                      <label class="form-label">Pimpinan Keperawatan pada institusi pelayanan kesehatan harus memantau penerapan kode etik keperawatan</label>
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

                      <label class="form-label">Pimpinan keperawatan wajib mengadakan pertemuan dengan Komite Etik Profesi secara berkala</label>
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

                      <label class="form-label">Komite Etik Profesi pada institusi pelayanan kesehatan harus melaporkan dan membahas kegiatannya dengan PPNI secara berkala</label>
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
                        <span>2. Perawat berperan aktif dalam berbagai kegiatan pengembangan profesi keperawatan</span>
                        </div>
                        <label class="form-label">Perawat wajib melakukan kajian asuhan keperawatan yang diberikan secara terus menerus dibawah bimbingan perawat yang ditunjuk</label>
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

                        <label class="form-label">Perawat wajib membahas hasil kajian asuhan keperawatan dalam forum temu ilmiah perawat pada institusi	terkait sekurang-kurangnya satu kali dalam satu tahun</label>
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
                        <span>3. Perawat berpartisipasi aktif dalam upaya profesi untuk membangun dan memelihara kondisi kerja yang kondusif demi terwujudnya asuhan keperawatan yang bermutu tinggi</span>
                        </div>
                        <label class="form-label">Perawat ajib menjalankan tugas profesinya dengan penuh tanggung jawab</label>
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

                        <label class="form-label">Perawat melakukan serah terima pasien sesuai standart dan perawat	wajib menyampaikan asuhan keperawatan yang telah dilakukannya pada setiap serah terima</label>
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

                        <label class="form-label">Perawat penanggung jawab wajib memastikan terlaksananya asuhan keperawatan yang diberikan oleh perawat pelaksana yang ada dibawah	tanggung jawabnya</label>
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

                        <label class="form-label">Perawat penanggung jawab wajib menyampaikan perkembangan asuhan keperawatan kepada penanggung	jawab perawatan yang lebih tinggi secara berkala.</label>
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
                        <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Lanjutkan Pengukuran</button>
                      </div>

                    </form>
                </div>
                  </div>
                </div>
                
          </div>
        </div>

        
      </div>
@endsection