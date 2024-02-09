
@extends('layouts.master')

@section('title')

Modifier une unité
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
                    <h1>Modification Unité</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                        <li class="breadcrumb-item active">Unité</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Modifier une unité</small></h3>
                        </div>
                        @if(session()->has('info'))
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                        @endif



                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('units.update')}}" method="POST">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Unité :</label>
                                    <input type="text" name="unit_name" class="form-control" id="exampleInputEmail1" placeholder="Veuillez entrer la categorie" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Statut</label>

                                    <select name="status" id="status">
                                        <option value="yes">Oui</option>
                                        <option value="no">Non</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <input type="submit" class="btn btn-primary" value="Mettre à jour">
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
