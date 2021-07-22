<!DOCTYPE html>
<html lang="en">
@include('tamplate.section-head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 @include('tamplate.section-navbar')
 @include('tamplate.section-sidebar')
 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('tamplate.page-header')
    @include('tamplate.page-body')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
    @include('tamplate.section-footer')
  
</div>
<!-- ./wrapper -->

@include('tamplate.jquery')
</body>
</html>



