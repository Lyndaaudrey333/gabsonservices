@extends('layouts.master')

@section('title')

Fournisseurs
@endsection


@section('styles')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection



@section('content')

<div class="content-wrapper">
@if(session()->has('info'))
<div class="notification is-success text-center mt-2">
{{ session('info') }}
</div>
@endif
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card mt-3">
                    <div class="card-header ">
                      <h3 class="card-title">Listes des Fournisseurs</h3>
                            <div class="float-right"> <a href="{{route('suppliers.create')}}">Ajouter un fournisseur</a></div>
                        </div>
                    </div>
                     <input type="hidden" {{$increment=1}}>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Num.</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Addresse</th>
                                    <th>Téléphone</th>
                                    <th>Status</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suppliers as $supplier)

                                <td>{{$increment}}</td>
                                <td>{{$supplier->supplier_name}} </td>
                                <td>{{$supplier->supplier_email}} </td>
                                <td>{{$supplier->supplier_address}} </td>
                                <td>{{$supplier->supplier_phone}} </td>
                               {{-- <td>{{$supplier->status}} </td> --}}
                                <td>
                                <div class="d-flex mx-auto justify-content-around  ">

                <div>                    <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-warning btn-sm">Modifier</a>
</div>
                                    {{-- <form action="{{route('suppliers.edit',$supplier->id)}}" method="GET">
                                        @csrf
                                        <input type="submit" class="btn btn-warning btn-sm " value="Modifier">
                                    </form> --}}
                                    <form action="{{route('suppliers.delete',$supplier->id)}}" method="GET">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm " value="Supprimer">
                                    </form>
                                </div>
                                </td>
                                </tr><input type="hidden" {{$increment++}}>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                  <th>Num.</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Addresse</th>
                                    <th>Téléphone</th>
                                    <th>Status</th>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
@section('scripts')
<!-- DataTables -->
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

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
