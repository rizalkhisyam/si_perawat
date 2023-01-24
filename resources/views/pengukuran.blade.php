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
                    
                    <div class="container col-lg-6" style="height: 50vh;">
                    <div class="d-flex justify-content-center">
                        <span>Input data perawat untuk instrumen pengukuran</span>
                    </div>
                    <form role="form" class="" action="{{ route('simpan-1') }}" method="POST">
                    @csrf
                    <label class="form-label">Nama Perawat</label>
                      <div class="input-group input-group-outline mb-5">
                      <select id="inputState" class="form-control">
                        @foreach($data_perawats as $perawat)
                          <option>{{$perawat->nama}}</option>
                        @endforeach
                        </select>
                      </div>

                      <label class="form-label">Ruangan</label>
                      <div class="input-group input-group-outline mb-3">
                      <select id="inputState" class="form-control">
                        @foreach($data_ruangans as $ruangan)
                        <option >{{$ruangan->nama_ruangan}}</option>
                        @endforeach
                        </select>
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