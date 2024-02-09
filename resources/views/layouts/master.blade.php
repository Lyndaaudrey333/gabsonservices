@extends('layouts.app')

@yield('styles')

@section('app_content')

<div class="wrapper">


  <!-- Navbar -->
 @include('layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layouts.sidebar')
  <!--/.Main Sidebar Container-->

  <!-- Content Wrapper. Contains page content -->

  @yield('content')

  <!-- /.content-wrapper -->


 {{-- Start footer --}}
@include('layouts.footer')
  {{-- End footer --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('scripts')

@stop
