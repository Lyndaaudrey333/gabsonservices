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

    @if(session()->has('info'))
    <div class="notification is-success text-center mt-2">
        {{ session('info') }}
    </div>
    @endif

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Utilisateurs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Utilisateurs</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des utilisateurs</h3>
                            <div class="float-right"> <a href="{{route('users.create')}}">Creer un nouvel utilisateur</a></div>
                        </div>
                        <input type="hidden" {{$increment=1}}>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Numero</th>
                                        <th>Nom</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user )


                                    <tr>
                                        <td>{{$increment}}</td>
                                        <td>{{$user->name}}</td>
                                        {{-- <td>
                                            <a href="#" class="btn btn-success">Unactivate</a>
                                            <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                            <a href="#" id="delete" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a> --}}
                                        <td>
                                            {{-- <a class="button is-primary" href="{{
route('users.show/'.$user->id) }}">Voir</a> --}}
                                            <div class="d-flex justify-content-around">
                                             <div>   <a href="{{route('users.show',$user->id)}}" class="btn btn-success btn-sm">Voir</a></div>
                                            <div>    <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning btn-sm">Modifier</a></div>

                                                <form action="{{route('users.delete',$user->id)}}" method="get">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="submit" id="delete" class="btn btn-danger btn-sm" value="Delete">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <input type="hidden" {{$increment++}}>
                                    @endforeach </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Numero</th>
                                        <th>Nom</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('scripts')

<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true
            , "autoWidth": false
        , });
        $('#example2').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": false
            , "ordering": true
            , "info": true
            , "autoWidth": false
            , "responsive": true
        , });
    });

</script>
@endsection
