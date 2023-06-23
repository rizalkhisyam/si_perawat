@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header pb-0 p-3">
                  <div class="row">

                    <div class="col-12">
                        <a class="btn bg-gradient-light mb-0" href="/draft-instrument">Kembali</a>
                    </div>

                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Daftar Aktivitas</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Data Aktivitas</a>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Aktivitas</h1>
                              <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{ route('tambah-aktivitas', $pernyataan->id) }}" method="POST">
                                  @csrf
                                    <span>Aktivitas</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <textarea class="form-control border p-2" rows="5" id="comment" name="aktivitas" required></textarea>
                                    </div>
                                    @error('aktivitas')
                                      <div class="text-danger mb-2">
                                        {{$message}}
                                      </div>
                                    @enderror

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

            <div class="card-body container px-0 pb-2 mt-5">
                <div class="container row">
                    <div class="col-lg-8 mb-5">
                        <h6 class="mb-0 text-xl">1. {{$pernyataan->pernyataan}}</h6>
                    </div>

                    @php
                      $char = 1;
                      $alpha = 'a'; $char < 'z';
                    @endphp
                    @foreach($datas as $key => $data)
                    <div class="col-lg-8">
                        <h6 class="mb-0 text-sm">{{$alpha++}}. {{$data->aktivitas}}</h6>
                    </div>
                    <div class="col-lg-4 mb-5 d-flex">
                        <a class="btn btn-link text-dark mb-3" data-bs-toggle="modal" data-bs-target="#modalEdit{{$data->id}}" ><i class="material-icons text-sm me-2">edit</i>Edit</a>
                        <a class="btn btn-link text-red mb-0" data-bs-toggle="modal" data-bs-target="#modalDelete{{$data->id}}"><i class="material-icons text-sm me-2">delete_forever</i>Delete</a>
                    </div>

                    <div class="modal fade" id="modalEdit{{$data->id}}" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="modalEdit">Edit Aktivitas</h1>
                              <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{ route('update-aktivitas', $data->id) }}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                    <span>Aktivitas</span>
                                    <div class="input-group input-group-outline mb-3">
                                      <textarea class="form-control border p-2" rows="5" id="comment" name="aktivitas" required>{{$data->aktivitas}}</textarea>
                                    </div>
                                    @error('aktivitas')
                                      <div class="text-danger mb-2">
                                        {{$message}}
                                      </div>
                                    @enderror
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="modalDelete{{$data->id}}" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="modalDelete">Apakah anda ingin menghapus aktivitas berikut ?</h1>
                              <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{ route('delete-aktivitas', $data->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                    <div class="input-group input-group-outline mb-3">
                                      <h6 class="mb-0 text-sm">"{{$data->aktivitas}}"</h6>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Hapus</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    @endforeach
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection