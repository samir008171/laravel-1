@section('message')
@if (session('success'))  
<script>
  Toast.fire({
      icon: 'success',
      title: '&nbsp;&nbsp;&nbsp;{{ session('success') }}'
      })
</script>
@endif
@if (session('error'))  
<script>
  Toast.fire({
      icon: 'error',
      title: '&nbsp;&nbsp;&nbsp;{{ session('error') }}'
      })
</script>
@endif
@endsection 