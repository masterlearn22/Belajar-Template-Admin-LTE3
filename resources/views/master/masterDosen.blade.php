@extends('main')
@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal lahir</th>
        <th scope="col">media social</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Surya</td>
        <td>221204</td>
        <td>@tiktok</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Reta</td>
        <td>190306</td>
        <td>@instagram</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >Nara</td>
        <td>200621</td>
        <td>@youtube.kids</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >Naruto</td>
        <td>01112001</td>
        <td>@konoha.net</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >Luffy</td>
        <td>01022003</td>
        <td>@morgan.d</td>
      </tr>
    </tbody>
  </table>

 @endsection