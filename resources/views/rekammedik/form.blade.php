@extends('layouts.master')
@section('judul','Rekam Medik')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Rekam Medik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rekam Medik</li>
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
            <form method="POST" action="/rekammedik">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No.Rekam Medik</label>
                    <input type="text" name="norek" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Pasien</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Diagnosa</label>
                    <input type="text" name="diagnosa" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">No. Handphone</label>
                  <input type="text" name="hp" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Ruangan</label>
                  <select name="ruang" class="form-control" id="">
                    <option value="">--Pilih Ruangan</option>
                    @foreach ($ruang as $data)
                    <option value="{{$data->id}}">{{$data->no_ruang}} - {{$data->nm_ruang}}</option>
                        
                    @endforeach
                  </select>
                </div>
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

