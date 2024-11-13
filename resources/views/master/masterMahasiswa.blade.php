@extends('main')

@section('content')
<link rel="stylesheet" href="plugins/master-css/style.css">
<form action='/masterMahasiswa' method='post'>
  @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nim' id="nim">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">No. Telepon</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='no_wa' id="nama">
          </div>
      </div>
        <div class="mb-3 row">
          <select class="form-select mb-3" aria-label="Default select example" name="kelas_praktikum" id="kelas_praktikum">
            <option selected>Kelas Praktikum A1</option>
            <option value="1">A1</option>
            <option value="2">A2</option>
            <option value="3">A3</option>
            <option value="4">A4</option>
          </select>
        </div>
        <div class="mb-3 row">
            <label for="kelas_praktikum" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
 @endsection