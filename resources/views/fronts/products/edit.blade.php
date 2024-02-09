@extends('layouts.master')

@section('title')
Modifier un produit
@endsection

@section('content')
@if(session()->has('info'))
<div class="notification is-success">
    {{ session('info') }}
</div>
@endif


<div class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modifier Produit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produit</li>
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
                                <h3 class="card-title">Modifier un <small> Produit</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" action="{{route('products.update')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="name" name="product_name" class="form-control" id="name" placeholder="Inserer le nom du produit">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Quantité</label>
                                        <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="Qté">
                                    </div>
                                    <div class="form-group">
                                        <label>Catégorie du produit</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected" name="category_id" value="">Selectionner</option>
                                            @foreach ($categories as $category )
                                            <option>{{$category->category_name}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected" name="unit_id" value="">Selectionner</option>
                                            @foreach ($units as $unit )
                                            <option>{{$unit->unit_name}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Statut</label>

                                        <select name="status" id="status">
                                            <option value="yes">Oui</option>
                                            <option value="no">Non</option>
                                        </select>
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
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
</div>

@endsection
