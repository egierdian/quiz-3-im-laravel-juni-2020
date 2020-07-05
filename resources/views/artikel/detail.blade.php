@extends('layouts.master')


@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="/artikel" class="btn">Kembali</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">ID</th>
              <th style="width: 10px">UID</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Tags</th>
              <th style="width: 17%;">Tanggal</th>
              <th style="width: 23%;">Aksi</th>
            </tr>
          </thead>
          <tbody>\
            <tr>
              <td>{{ $artikel -> id }}</td>
              <td>{{ $artikel -> user_id }}</td>
              <td>{{ $artikel -> judul }}</td>
              <td>{{ $artikel -> isi }}</td>
             
              <td> @foreach($tags as $s)
              <a class="btn btn-primary btn-sm">{{ $s -> tags }}</a>
              @endforeach</td>
              
              <td>{{ $artikel -> tanggal }}</td>
              <td>
                <a href="/artikel/{{$artikel -> id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/artikel/{{$artikel -> id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@stop