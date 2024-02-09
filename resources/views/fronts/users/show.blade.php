@extends('layouts.master')

@section('title')

Users list
@endsection


@section('styles')
<link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informations</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Utilisateur</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title">Informations de : {{ $user->name }}</h3>
                            <div class="float-right"> <a href="{{route('users.index')}}">Retour</a></div>
                        </div>

                        <!-- /.card-header -->

<div class="card">

            <div class="card-header">
                            <h3 class="card-title">Nom: {{ $user->name }}</h3>
                        </div>
         <div class="card-body">

            <div class="card-content">

                <p class="card-text">E-mail: {{ $user->email }}</p>
                <p class="card-text">Addresse: {{ $user->address }}</p>
                <p class="card-text">Telephone: {{ $user->phone }}</p>
            </div>
        </div>
    </div>

  </div>
  </section>
  </div>
<!-- /.content-wrapper -->

@endsection
