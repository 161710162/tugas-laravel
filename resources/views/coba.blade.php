@extends('templates.master')
@section('konten')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NISN</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kelas</th>
      <th scope="col">Hobi</th>
    </tr>
     </thead>
  <tbody>
    @foreach($bca as $sd)
    <tr>
      <th scope="row">{{$sd -> id}}</th>
      <td>{{$sd -> nis}}</td>
      <td>{{$sd -> nama}}</td>
      <td>{{$sd -> umur}}</td>
      <td>{{$sd -> tempat_lahir}}</td>
      <td>{{$sd -> tanggal_lahir}}</td>
      <td>{{$sd -> alamat}}</td>
      <td>{{$sd -> kelas}}</td>
      <td>{{$sd -> hobi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection