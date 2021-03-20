

@extends('layout.layout')
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
              <li class="breadcrumb-item"><a href="/doctor">Doctor</a></li>
              <li class="breadcrumb-item active">{{$title}}</li>
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
          <div class="card  card-info">
            
            <div class="card-header">
              <h3 class="card-title" style="font-size: 1.6rem;">{{$title}}</h3>
                <div class="card-tools">
                </div>
            </div>


            {{ Form::open(array('url' => '/doctor/save','name'=>'formData','id'=>'formData','enctype'=>'multipart/form-data')) }}
            @csrf

            <div class="card-body ">
                <div class="row">

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>First Name <span class="red"> *</span></label>
                        <input type="text" name="vFirstName" id="vFirstName" class="form-control" data-validation="required" placeholder="Enter First Name"> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Last Name <span class="red"> *</span></label>
                        <input type="text" name="vLastName" id="vLastName" class="form-control" data-validation="required" placeholder="Enter Last Name"> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Mobile No <span class="red"> *</span></label>
                        <input type="text" name="vMobile" id="vMobile" class="form-control" data-validation="required" placeholder="Enter Mobile No."> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Alternate No <span class="red"> </span></label>
                        <input type="text" name="vAlternateNo" id="vAlternateNo" class="form-control"  placeholder="Enter Alternate No."> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Email<span class="red"> *</span></label>
                        <input type="text" name="vEmail" id="vEmail" class="form-control" data-validation="required" placeholder="Enter Email"> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>EmAlternate Emailail<span class="red"> </span></label>
                        <input type="text" name="vAlternateEmail" id="vAlternateEmail" class="form-control" placeholder="Enter Alternate Email"> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Date Of Birth<span class="red"> </span></label>
                        <input type="date" name="dtDOB" id="dtDOB" class="form-control"  placeholder="Date Of Birth"> 
                      </div>
                    </div>


                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Profile Picture<span class="red"> *</span></label>
                        <input type="file" name="vProfile" id="vProfile" class="form-control" data-validation="required" accept="jpg|png|jpeg"> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Password<span class="red"> *</span></label>
                        <input type="password" name="vPassword" id="vPassword" class="form-control" data-validation="required" autocomplete="" placeholder="Enter Password"> 
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <label>Confirm Password<span class="red"> *</span></label>
                        <input type="password" name="vConfirmPassword" id="vConfirmPassword" autocomplete class="form-control" data-validation="confirmation"  data-validation-confirm="vPassword" placeholder="Re - Enter Password"> 
                      </div>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-success" id="save">Save</button>
                  <a href="/doctor"  class="btn btn-danger float-right">close</a>
            </div>

            {{ Form::close() }}

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection





@section('starterForAddData')
<script>
  $(document).ready(function(){

    $.validate({
      modules : 'date,security',
      form : '#formData',
    });

      $("#save").click(function(){
        event.preventDefault();
        swal({
          title: "Are you sure?",
          text: "Are You Sure To Save The Records ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willsave) => {
            if (willsave==true) {
                    $('#formData').trigger('submit');
                    }else {
                      return false;
                    }
                  });
          });
  });


  function delete_global()
  {
    
  }
</script>
@endsection


