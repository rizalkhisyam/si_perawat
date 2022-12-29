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
                            <a href="#" type="button" class="btn btn-primary btn-circle" disabled="disabled">3</a>
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
                    <form role="form" class="" action="{{ route('pengukuran-3') }}" method="POST">
                        @csrf
                    <div class="col-12 mb-2">
                    <span>1. Perawat mengemban tanggung jawab bersama masyarakat untuk memprakarsai dan mendukung berbagai kegiatan dalam memenuhi kebutuhan dan kesehatan masyarakat</span>
                    </div>
                    <label class="form-label">Perawat dibawah institusi tempat bekerja wajib melakukan kegiatan pengabdian masyarakat satu kali dalam setahun</label>
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

                      <label class="form-label">Perawat wajib memberikan informasi pada	masyarakat tentang area cakupan pelayanan keperawatan yang diberikan dengan menggunakan media yang disepakati secara berkala</label>
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

                      <label class="form-label">Perawat dapat ikut serta menyelesaikan masalah kesehatan masyarakat sesuai dengan kompetensinya</label>
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

                      <label class="form-label">Perawat	wajib ikut berperan serta dalam mengembangkan teknologi keperawatan.</label>
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

                      <label class="form-label">Menciptakan ruangan yang bersih di ruang rawat</label>
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