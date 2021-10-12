@extends('admin.master')
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Company Page</h1>
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
                    <h3 class="card-title">Companies</h3>
                    <a href="{{route('add-company')}}"class="btn btn-primary float-right"><i class="fa fa-plus-square"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Company Name</th>
                            <th>Company Email</th>
                            <th>Company Logo</th>
                            <th>Company Website</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($companies as $company)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$company->com_name}}</td>
                                <td>{{$company->com_email}}</td>
                                <td><img src="{{asset($company->com_logo)}}" alt="" width="100"></td>
                                <td>{{$company->com_website}}</td>
                                <td>
                                    <a href="{{route('edit-company',['id'=> $company->id])}}" class="btn btn-sm btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{route('delete-company',['id'=> $company->id])}}" class="btn btn-sm btn-danger" onclick= "return confirm('Are you Sure Delete Data ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Company Name</th>
                            <th>Company Email</th>
                            <th>Company Logo</th>
                            <th>Company Website</th>
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



