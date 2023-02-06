@extends('layouts.master')
@section('judul','Edit Rekam Medik')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Rekam Medik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Rekam Medik</li>
            </ol>
          </div>
        </div>
         <!-- Default box -->
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Title</h3> --}}
          

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
            <form method="POST" action="/rekammedik/{{$rekammedi->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No.Ruang</label>
                    <input type="text" name="ruang" readonly VALUE="{{$ruang->no_ruang}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Ruang</label>
                    <input type="text" name="nama"   VALUE="{{$ruang->nm_ruang}}" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Bed</label>
                    <input type="text" name="jumlah"  VALUE="{{$ruang->jumlah_bed}}" class="form-control" id="exampleInputPassword1">
                {{-- </div>
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="text" name="foto" class="form-control" id="exampleInputPassword1">
                </div> --}}
                <br>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

