@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Company Page</h1>
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
                        <h3 class="card-title">Edit Company Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {{--                    from nia kaj korle--}}
                    <form action="{{route('update-company')}}"method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Company name</label>
                                <input type="text" class="form-control" value="{{$company->com_name}}" name="com_name" placeholder="Enter company Name">
                                <input type="hidden" class="form-control" value="{{$company->id}}" name="id" placeholder="Enter company Name">
                            </div>
                            <div class="form-group">
                                <label>company Email</label>
                                <input type="text" class="form-control" value="{{$company->com_email}}"name="com_email"  placeholder="Enter company email">
                            </div>
                            <div class="form-group">
                                <label>Company Logo</label>
                                <input type="file" class="form-control" name="com_logo" id="imgInp" >
                                <img id="blah" src="{{asset($company->com_image)}}"  width="200" />

                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control @error('com_website') is-invalid @enderror" name="com_website"  placeholder="Enter company website ">
                                @error('com_website')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Company</button>
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


