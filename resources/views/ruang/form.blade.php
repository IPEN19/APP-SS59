@extends('layouts.master')
@section('judul','ruang')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ruangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ruangan</li>
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
            <form method="POST" action="/ruang">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No.Ruang</label>
                    <input type="text" name="ruang" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Ruang</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Bed</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1">
                {{-- </div>
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="text" name="foto" class="form-control" id="exampleInputPassword1">
                </div> --}}
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

