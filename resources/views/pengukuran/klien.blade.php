@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                  <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan - Perawat Dan Klien</h6>
                </div>
                
                <div class="container col-lg-6" style="height: 50vh;">
                  <div class="d-flex justify-content-center">
                      <span>Input data perawat untuk instrumen pengukuran</span>
                  </div>
                  <form role="form" class="" action="{{ route('pengukuran-instrumen-klien') }}" method="POST">
                  @csrf
                  <label class="form-label">Nama Perawat</label>
                    <div class="input-group input-group-outline">
                      <select id="inputState" class="form-control" name="id_perawat">
                        <option selected disabled>-- Pilih Perawat --</option>
                      @foreach($data_perawats as $perawat)
                        <option value="{{$perawat->id.'|'.$perawat->nama}}">{{$perawat->nama}}</option>
                      @endforeach
                      </select>
                    </div>
                    @error('id_perawat')
                      <div class="text-danger">
                        *Pilih perawat yang akan dilakukan pengukuran
                      </div>
                    @enderror

                    <label class="form-label mt-4">Ruangan</label>
                    <div class="input-group input-group-outline">
                      <select id="inputState" class="form-control" name="id_ruangan">
                      <option selected disabled>-- Pilih Ruangan --</option>
                      @foreach($data_ruangans as $ruangan)
                        <option value="{{$ruangan->id.'|'.$ruangan->nama_ruangan}}">{{$ruangan->nama_ruangan}}</option>
                      @endforeach
                      </select>
                    </div>
                    @error('id_ruangan')
                      <div class="text-danger">
                        *Pilih ruangan perawat
                      </div>
                    @enderror
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Mulai Pengukuran</button>
                    </div>
                  </form>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img style="width: 65%; height: 60%" src="{{ asset('img/illustrations/perawat.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection