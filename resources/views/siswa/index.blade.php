@extends('layouts.master')

@section('content')
            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                    {{session('success')}}. <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
            @endif

            <div class="row">
                <div class="col-6">
                    <h1 float="start">Table Siswa</h1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah data siswa
                      </button>
                </div>

                <table class="table table-hover table-dark table-striped">
                        <tr>
                            <td>ID</td>
                            <td>Nama depan</td>
                            <td>Nama Belakang</td>
                            <td>Jenis Kelamin</td>
                            <td>Agama</td>
                            <td>Alamat</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($data_siswa as $siswa)
                        <tr>
                            <td>{{$siswa->id}}</td>
                            <td>{{$siswa->nama_depan}}</td>
                            <td>{{$siswa->nama_belakang}}</td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>{{$siswa->agama}}</td>
                            <td>{{$siswa->alamat}}</td>
                            <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning"> Edit </a>  |
                                <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger"> Hapus</td>

                        </tr>
                        @endforeach
                    </table>
            </div>
            </div>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambahkan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <form action="/siswa/create" method="POST">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                        <label for="nama_depan" class="form-label">Nama Depan</label>
                                        <input name="nama_depan" type="text" class="form-control" id="nama_depan" aria-describedby="nmdpn" placeholder="Nama Depan" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                            <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" aria-describedby="nmblkng" placeholder="Nama Belakang" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="Alamat" class="form-label">Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" required>
                                        </div>

                                        <div class="mb-3">
                                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example" required id="jenis_kelamin">
                                                <option selected>Jenis Kelamin</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                              </select>
                                        </div>
                                        <div class="mb-3">
                                            <select name="agama" class="form-select" aria-label="Default select example" required id="agama">
                                                <option selected>Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Kristen Katholik</option>
                                                <option value="Kristen protestan">Kristen Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Kong hu cu</option>
                                              </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                            </div>

                          </div>
                        </div>
                    </div>

@endsection
