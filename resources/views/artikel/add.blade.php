@extends('layouts.master')


@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Pertanyaan</h1>
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
            <div class="card-body">
              <form action="/artikel" method="POST">
              <div class="form-group">
                {{ csrf_field()}}
                <label for="user_id">UID</label>
                <input type="text" name="user_id" class="form-control">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control">
                <label for="isi">Pertanyaan</label>
                <textarea id="isi" name="isi" class="form-control" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card-body -->
        
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