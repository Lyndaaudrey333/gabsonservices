 @extends('layouts.admin_app')
 @stack('CSS')

@section('title')
login
@endsection
@section('app_content')
<div class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="{{asset('backend')}}/index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      @error('email')
        {{ $message }}
      @enderror
      @error('password')
        {{ $message }}
      @enderror


      <form method="POST" action="{{ route('auth') }}">
      @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" required autofocus autocomplete="username" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  name="password"
                            required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <form action=" {{ __('Log in') }}" method="POST">
          @csrf
            <input type="submit" class="btn btn-primary btn-block" value="Sign In">
            </form>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
<!-- /.login-box -->

@push('JS')

@endpush

<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>

</body>

@stop

