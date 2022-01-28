<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>tes</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 align="center">Table Siswa</h1>
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
                        </tr>
                        @foreach ($data_siswa as $siswa)
                        <tr>
                            <td>{{$siswa->id}}</td>
                            <td>{{$siswa->nama_depan}}</td>
                            <td>{{$siswa->nama_belakang}}</td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>{{$siswa->agama}}</td>
                            <td>{{$siswa->alamat}}</td>

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
                                    <form>
                                        <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                        <input type="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                                            <input type="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                            <input type="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                                            <input type="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>


        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
