@extends('admin.master')
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee  Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    {{--        @if(Session::get('message'))--}}
    {{--            <div class= "offset-2 col-md-8">--}}
    {{--                <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
    {{--                    <strong></strong>--}}
    {{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">&times;</span>--}}
    {{--                    </button>--}}

    {{--                </div>--}}
    {{--            </div>--}}

    {{--    @endif--}}


    <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employees</h3>
                    <a href="{{route('add-employee')}}"class="btn btn-primary float-right"><i class="fa fa-plus-square"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($emploies as $employe)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$employe->emp_firstname}}</td>
                                <td>{{$employe->emp_lastname}}</td>
                                <td>{{$employe->emp_comname}}</td>
                                <td>{{$employe->emp_email}}</td>
                                <td>{{$employe->emp_phone}}</td>

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

            <!-- Default box -->

            <!-- /.card -->

        </section>
    </div>
@endsection




