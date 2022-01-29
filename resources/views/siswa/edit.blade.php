@extends('layouts.master')

@section('content')
<h1>Edit Data Siswa</h1>
@if(session('success'))
    <div class="alert alert-primary" role="alert">
        {{session('success')}}. <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </div>
@endif

<div class="row">
    <div class="col-lg-12"><form action="/siswa/{{ $siswa->id }}/update" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
        <label for="nama_depan" class="form-label">Nama Depan</label>
        <input name="nama_depan" type="text" class="form-control" id="nama_depan" aria-describedby="nmdpn" placeholder="Nama Depan" required value="{{$siswa -> nama_depan}}">
        </div>

        <div class="mb-3">
            <label for="nama_belakang" class="form-label">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" aria-describedby="nmblkng" placeholder="Nama Belakang" required value="{{$siswa -> nama_belakang}}">
        </div>

        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" required value="{{$siswa -> alamat}}">
        </div>

        <div class="mb-3">
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example" required id="jenis_kelamin">
                <option selected>Jenis Kelamin</option>
                <option value="L" @if ($siswa-> jenis_kelamin == 'L' ) selected @endif>Laki-Laki</option>
                <option value="P" @if ($siswa-> jenis_kelamin == 'p' ) selected @endif>Perempuan</option>
              </select>
        </div>
        <div class="mb-3">
            <select name="agama" class="form-select" aria-label="Default select example" required id="agama">
                <option selected>Agama</option>
                <option value="Islam" @if ($siswa-> agama == 'Islam' ) selected @endif>Islam</option>
                <option value="Katholik" @if ($siswa-> agama == 'Katholik' ) selected @endif>Kristen Katholik</option>
                <option value="Kristen protestan" @if ($siswa-> agama== 'Kristen protestan' ) selected @endif>Kristen Protestan</option>
                <option value="Hindu" @if ($siswa-> agama == 'Hindu' ) selected @endif>Hindu</option>
                <option value="Buddha" @if ($siswa-> agama == 'Buddha' ) selected @endif>Buddha</option>
                <option value="Konghucu" @if ($siswa-> agama == 'Konghucu' ) selected @endif>Kong hu cu</option>
              </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"><a href="/siswa" style="color: white; text-decoration:none;"> Back </a></button>
            <button type="submit" class="btn btn-danger">Update</button>
        </div>
    </form>

</div>


@endsection
