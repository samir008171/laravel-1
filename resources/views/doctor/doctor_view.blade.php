@extends('layout.layout')
@include('message.message')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item">{{$title}}</li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title" style="font-size: 1.6rem;">{{$title}}</h3>
                <div class="card-tools">
                 <a href="/doctor/add" type="button" class="btn btn-info btn-sm "><i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body ">
                  {!! $dataTable->table(['class' => 'table table-bordered table-hover dataTable dtr-inline']) !!}
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('datatableScripts')
{!! $dataTable->scripts() !!}
@endsection





