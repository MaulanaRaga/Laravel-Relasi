@extends('Layouts/main')

@section('title', 'Data Mobil')

@section('container')
<div class="content">
<div class="card-header">
<div class="card-tools">
<a href="/createmobil" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
</div>
</div>

<div class="card-body">
	<table class="table table-bordered">
	<tr>
    <td>id pinjam</td>
    <td>merek</td>
    <td>model</td>
    <td>tahun buat</td>
    <td>stock</td>
	</tr>
	
@endsection