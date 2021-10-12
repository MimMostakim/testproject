@extends('admin.master')
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Employee Page</h1>
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

        @if(Session::get('message'))
            <div class= "offset-2 col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            </div>

    @endif

    <!-- Main content -->
        <section class="content">

            <div class= "offset-2 col-md-8">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Company</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {{--                    from nia kaj korle--}}
                    <form action="{{route('update-employee')}}"method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control @error('emp_firstname') is-invalid @enderror" name="emp_firstname" placeholder="Enter First Name">
                                @error('com_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control @error('emp_lastname') is-invalid @enderror" name="emp_lastname"  placeholder="Enter last Name ">
                                @error('emp_lastname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>company Name</label>
                                <input type="text" class="form-control @error('emp_comname') is-invalid @enderror" name="emp_comname"  placeholder="Enter Company  Name ">
                                @error('emp_comname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control @error('emp_email') is-invalid @enderror" name="emp_email"  placeholder="Enter company email ">
                            @error('emp_email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Phone Number </label>
                            <input type="text" class="form-control @error('emp_phone') is-invalid @enderror" name="emp_phone"  placeholder="Enter Phone Number ">
                            @error('emp_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>


                        <!-- /.card-body --><div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Employee information</button>
                        </div>
                    </form>
                </div>

            </div>


            <!-- Default box -->

            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection


