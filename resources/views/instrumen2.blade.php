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
                            <a href="#" type="button" class="btn btn-primary btn-circle" disabled="disabled">2</a>
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
                    <form role="form" class="" action="{{ route('pengukuran-2') }}" method="POST">
                    @csrf
                    <div class="col-12 mb-2">
                    <span>1. Perawat memelihara dan meningkatkan kompetensi	dibidang keperawatan melalui belajar terus menerus</span>
                    </div>
                    <label class="form-label">Perawat harus berusaha untuk meningkatkan ilmu dan keterampilan sesuai dengan kemampuan; serta mengikuti kegiatan pengembangan profesi</label>
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

                      <label class="form-label">Perawat	harus mengamalkan ilmu dan keterampilan	yang dimiliki</label>
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
                        <span>2. Perawat senantiasa memelihara mutu pelayanan keperawatan yang tinggi disertai kejujuran profesional yang menerapkan pengetahuan serta keterampilan keperawatan sesuai dengan kebutuhan klien</span>
                    </div>
                    <label class="form-label">Perawat wajib memelihara mutu pelayanan keperawatan seoptimal mungkin dengan	mengikuti seminar/pelatihan/ workshop</label>
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

                      <label class="form-label">Perawat	sebelum menerapkan pengetahuan dan keterampilan yang baru, wajib dievaluasi oleh perawat yang telah berkompeten</label>
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

                      <label class="form-label">Perawat dalam memberikan asuhan keperawatan	wajib mengidentifikasi asuhan keperawatan yang tidak sesuai dengan nilai-nilai profesi keperawatan</label>
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

                      <label class="form-label">Perawat wajib menyampaikan kepada pimpinan,	apabila menemukan pelayanan kesehatan yang tidak sesuai dengan nilai-nilai yang dianut untuk selanjutnya ditindaklanjuti</label>
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

                    <label class="form-label">Perawat dalam memberikan intervensi keperawatan wajib merujuk pada standar yang dikeluarkan institusi pelayanan kesehatan</label>
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

                      <label class="form-label">Setiap teknologi keperawatan yang digunakan wajib diuji validitas (kehandalan) dan reliabilitas (keabsahan) oleh lembaga yang berwenang</label>
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
                        <span>3. Perawat dalam membuat keputusan didasarkan pada informasi yang akurat	dan mempertimbangkan kemampuan serta kualifikasi seseorang bila melakukan konsultasi, menerima delegasi dan memberikan	delegasi kepada orang lain</span>
                    </div>
                    <label class="form-label">Perawat dalam membuat keputusan wajib didasarkan pada informasi yang akurat</label>
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

                      <label class="form-label">Perawat dalam membuat keputusan	wajib mempertimbangkan kemampuan serta kualifikasi seseorang bila melakukan	konsultasi, menerima delegasi dan memberikan delegasi kepada orang lain</label>
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
                        <span>4. Perawat senantiasa menjunjung tinggi nama baik	profesi keperawatan dengan selalu menunjukkan perilaku profesional</span>
                    </div>
                    <label class="form-label">Perawat dilarang menyampaikan hal-hal yang terkait dengan kegiatan profesi keperawatan, kecuali ditugaskan oleh pejabat yang berwenang</label>
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

                      <label class="form-label">Perawat wajib menyelesaikan permasalahan terkait pelaksanaan tugas profesi keperawatan	secara internal terlebih dahulu</label>
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

                      <label class="form-label">Penyelesaian masalah harus dipimpin oleh perawat penanggung jawab</label>
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

                      <label class="form-label">Perawat harus menjaga kesehatan jasmani dan rohani yang diperlukan untuk menampilkan sikap profesinya</label>
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

                      <label class="form-label">Perawat yang dalam keadaan tidak sehat dilarang memberikan asuhan keperawatan.</label>
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