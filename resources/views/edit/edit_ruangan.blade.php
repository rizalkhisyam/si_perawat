@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Edit Data Ruangan</h6>
                    </div>
                  </div>
                </div>
            <div class="card-body px-0 pb-2 col-4">
                <div class="container">
                  <form role="form" action="{{ route('update-ruangan', $data->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="mb-3">
                      <label class="form-label">Nama Ruangan</label>
                      <div class="input-group input-group-outline ">
                        <input type="text" class="form-control" name="nama_ruangan" required value="{{$data->nama_ruangan}}">
                      </div>
                    </div>
                      
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Perbarui Data</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection