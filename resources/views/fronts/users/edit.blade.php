@extends('layouts.master')

@section('title')
Create User
@endsection

@section('content')
<div class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Modification utilisateur</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Modification utilisateur</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row ">
                        <!-- left column -->
                        <div class="col">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Modification <small></small></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" id="quickForm" action="{{route('users.update')}}" method="POST">
                                    @csrf
                                    @method('post')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Nom</label>
                                            <input type="name" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Entrez votre nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" value="{{$user->email}}" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{$user->address}}" id="exampleInputAddress1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="type" name="phone" class="form-control" value="{{$user->phone}}" id="exampleInputPhone1" placeholder="Enter email">
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Informations</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Modification du mot de passe <small></small></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <label for="password">Ancien mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Nouveau mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password confirmation" required autocomplete="new-password">
                                    </div>


                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Modifier Mot de Passe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




    <script type="text/javascript">
        $(document).ready(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                }
            });
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true
                        , email: true
                    , }
                    , password: {
                        required: true
                        , minlength: 5
                    }
                    , terms: {
                        required: true
                    }
                , }
                , messages: {
                    email: {
                        required: "Please enter a email address"
                        , email: "Please enter a vaild email address"
                    }
                    , password: {
                        required: "Please provide a password"
                        , minlength: "Your password must be at least 5 characters long"
                    }
                    , terms: "Please accept our terms"
                }
                , errorElement: 'span'
                , errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                }
                , highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                }
                , unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

    </script>
</div>


@endsection
