@extends('layouts.master')
@section('judul','Rekam Medik')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekam Medik</h1>
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
          <a href="rekammedik/form" class="btn btn-primary">Tambah Data</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">No.Rekam Medik</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">diagnosa </th>
              <th scope="col">Alamat</th>
              <th scope="col">No Handphone</th>
              <th scope="col">Ruangan</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rekammedik as $item)
            <tr>
                <th scope="row">{{$nomor++}}</th>
                <td>{{$item->no_rekmed}}</td>
                <td>{{$item->nm_pass}}</td>
                <td>{{$item->diagnosa}}</td>
                <td>{{$item->alamat_pass}}</td>
                <td>{{$item->hp_pass}}</td>
                <td>{{$item->Ruang->nm_ruang}}</td>
                <td>
                  <a href="/rekammedik/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                    Hapus
                  </button>
                  {{-- modal Hapus --}}
                  <div class="modal fade" id="modal-default{{$item->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Warning!!!! </h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Yakin Data Rekam Medik {{$item->nm_pass}} Ingin Di hapus??</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <form action="/rekammedik/{{$item->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </form>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

