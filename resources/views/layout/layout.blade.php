<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}"> --}}
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}"> --}}
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    {{-- for toaser and confirmation box --}}
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

      <!-- select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">


</head>
<style>

/*for DataTable Desing*/
 .dataTable tr th{
    padding-top:0px ;
    padding-bottom:0px ;
  }
  .dataTable tr th,.dataTable tr td{
    border-left:none ;
    border-right:none ;
  }
  .dataTable tr th{
    white-space: nowrap ;
    padding-top: 10px ;
  }
  .sorting table.dataTable thead .sorting:before,table.dataTable thead .sorting:before, table.dataTable thead .sorting:after,table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_asc_disabled:after,table.dataTable thead .sorting_desc_disabled:before, table.dataTable thead .sorting_desc_disabled:after {
      position: absolute ;
      bottom: 0.9em ;
      display: block ;
      opacity:  0 !important ;
  }
table.dataTable thead .sorting:before, table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:before, table.dataTable thead .sorting_desc_disabled:after {
    position: absolute ;
    bottom: 0.2em !important ;
    display: block ;
    opacity: 0.3 ;
}
table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:after {
    opacity: 1;
}




.accent-lightblue .dataTable th{
    color: #3c8dbc;
}
.accent-primary .dataTable th{
    color: #007bff;
}
.accent-warning .dataTable th{
    color: #ffc107;
}
.accent-info .dataTable th{
    color: #17a2b8;
}
.accent-danger .dataTable th{
    color: #dc3545;
}
.accent-success .dataTable th{
    color: #28a745;
}
.accent-indigo .dataTable th{
    color: #6610f2;
}
.accent-navy .dataTable th{
    color: #001f3f;
}
.accent-purple .dataTable th{
    color: #6f42c1;
}
.accent-fuchsia .dataTable th{
    color: #f012be;
}
.accent-pink .dataTable th{
    color: #e83e8c;
}
.accent-maroon .dataTable th{
    color: #d81b60;
}
.accent-orange .dataTable th{
    color: #fd7e14;
}
.accent-teal .dataTable th{
    color: #20c997;
}
.accent-olive .dataTable th{
    color: #3d9970;
}



.dataTable thead,tfoot{
  background-color: #f8f9fa;
}



table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th:first-child:before {
    top: 16px !important;
}
/*for DataTable Desing*/

.form-error{
  color:red;
}

.red{color: red;}

select .select2 {
  width: 100% !important;
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
      </ul>
  
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
       
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('dist/img/avatar5.png')}}" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline"> {{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
              <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
  
              <p>
                {{ Auth::user()->name }}
              </p>
            </li>
            <li class="user-body">
              <span class="float-left text-sm text-black"><i class="fa fa-envelope"></i> {{ Auth::user()->email }}</span><span class="float-right text-sm text-black"><i class="fas fa-user"></i>{{ Auth::user()->role }}</span>
              <!-- /.row -->
            <!-- </li> -->
            <!-- Menu Footer-->
            </li>
            <li class="user-footer">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" class="btn btn-outline-primary btn-flat">Profile</a>
                <button type="submit" class="btn btn-outline-danger btn-flat float-right">Sign out</button>
              </form>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <a href="dashboard" class="brand-link ">
        <center><img src="{{asset('dist/img/logo.png')}}" style="float: none !important;" alt="ITS" class="brand-image img-fluid"></center>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
           





            <li class="nav-item">
              <a href="{{url('dashboard')}}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>




            <li class="nav-item">
              <a href="{{url('doctor')}}" class="nav-link ">
                <i class="nav-icon fas fa-user-md"></i>
                <p>
                  Doctor
                </p>
              </a>
            </li>
            
            

            
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    @yield('content')
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.4
      </div>
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
   
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


  <!-- ChartJS -->
  {{-- <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script> --}}
  <!-- Sparkline -->
  {{-- <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script> --}}
  <!-- JQVMap -->
  {{-- <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
  <!-- jQuery Knob Chart -->
  {{-- <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}}
  <!-- daterangepicker -->
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  {{-- <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script> --}}
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  {{-- <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
  <!-- overlayScrollbars -->
  <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {{-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> --}}
  {{-- FOR jQUERY vALIDATION --}}
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
{{-- for toaser and confirmation alert --}}
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>


  </body>
  </html>
<script>
  var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}};
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 6000
    });




function Delete(id,column,tbl) {

    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this Data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    'method': 'POST',
                    'url': "{{url('Delete')}}",
                    'data': {
                        'id': id,
                        'tbl': tbl,
                        'column': column,
                        '_token':'{{csrf_token()}}',
                    },
                    success: function (data) {
                        if (data == 1) {
                            $('#datatable').DataTable().ajax.reload();
                        }
                    }
                });
                Toast.fire({
                    icon: 'success',
                    title: '&nbsp;&nbsp;&nbsp;Data Has Been Deleted Successfully !!'
                });
            } else {
                Toast.fire({
                    icon: 'info',
                    title: '&nbsp;&nbsp;&nbsp;Your Data Is Safe!'
                })
            }
        });
}





function ChangeStatus(id, val, tbl, change_col,id_col) {
    $.ajax({
        'method': 'POST',
        'url': "{{url('ChangeStatus')}}",
        'data': {
            'id': id,
            'val': val,
            'tbl': tbl,
            'id_col': id_col,
            'change_col': change_col,
            '_token': '{{csrf_token()}}',
        },
        success: function (data) {
            if (data == 1) {
                $('#datatable').DataTable().ajax.reload();
                Toast.fire({
                    icon: 'success',
                    title: '&nbsp;&nbsp;&nbsp;Status Has Been Changed Successfully !!'
                });
            } else {
                Toast.fire({
                    icon: 'danger',
                    title: '&nbsp;&nbsp;&nbsp;Somthing is Wrong !'
                })
            }
        }
    });
}


</script>
  @yield('starterForAddData')
  @yield('datatableScripts')
  @yield('message')

