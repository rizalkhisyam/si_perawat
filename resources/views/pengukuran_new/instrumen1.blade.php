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
              <h6 class="mb-0">Instrumen Pengukuran Standar Perilaku Kode Etik Keperawatan</h6>
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
            <ul class="list-group mt-5">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                    <span class="mb-2 text-xs">Nama Perawat : <span class="text-dark font-weight-bold ms-sm-2">{{$data_perawat->nama}}</span></span>
                    <span class="mb-2 text-xs">Nama Ruangan : <span class="text-dark font-weight-bold ms-sm-2">{{$nama_ruangan}}</span></span>
                    <span class="mb-2 text-xs">Jenis Kelamin : <span class="text-dark font-weight-bold ms-sm-2">{{$data_perawat->jenis_kelamin}}</span></span>
                    <span class="mb-2 text-xs">Status : <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->status}}</span></span>
                    <span class="mb-2 text-xs">Jenjang Karir : <span class="text-dark ms-sm-2 font-weight-bold">{{$data_perawat->jenjang_karir}}</span></span>
                    <span class="text-xs">Kode Pengukuran : <span class="text-dark ms-sm-2 font-weight-bold">{{$data_pengukuran->id}}</span></span>

                </div>
                </li>
            </ul>
            <div class="container col-lg-6 mt-5">
              <form role="form" class="" action="{{ route('hasil-pengukuran-1', $id_pengukuran) }}" method="POST">
                @csrf
                @method('POST')

                @php 
                $char=1;
                $albha = 'a'; $char < 'z';
                $alp=1;
                $numbering = 'a'; $alp < 'z';
                $number = 0;
                @endphp

                @foreach($datas as $key => $data)
                  <div class="col-12 mb-2">
                  <h6 class="">{{$key+1}}. {{$data->pernyataan}}</h6>
                  </div>
                  @foreach($data->sub_kode_etiks as $no => $etik)

                  @php 
                    $numbering++;
                    $number++;
                  @endphp
                  
                    <label class="form-label mt-2">{{$etik->aktivitas}}</label>
                    <div class="input-group input-group-outline mb-2">
                    <label for="">{{ $albha++ }}. </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options{{$numbering}}" id="radio{{$number}}" value="1" required>
                        <label class="form-check-label" for="radio1">Ya</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options{{$numbering}}" id="radio{{$number++}}" value="0" required>
                        <label class="form-check-label" for="radio2">Tidak</label>
                      </div>
                    </div>
                    <div class="form-group mb-5">
                      <label for="comment">Keterangan :</label>
                      <textarea class="form-control border p-2" rows="5" id="comment"></textarea>
                    </div>
                    @endforeach
                    
                    @php 
                      $albha = 'a';
                    @endphp

                  @endforeach
              
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