@extends('layout/main')

@section('judul')
    <h1>Halaman Home</h1>
@endsection

@section('isi')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Selamat Datang {{ $user->username }}</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body alert-success ml-3 mr-3 mt-3 mb-3 rounded">
            Selamat datang {{ $user->name }}
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection