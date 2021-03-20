@extends('index')

@section('title')
    <h3  class="card-title mt-2" style=" width:100%;">Add new User</h3>
@endsection

@section('content')

    <section class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <!-- general form elements -->
                                    <div class="card card-primary">
                                        <div class="card-header" style="margin-left:auto; width:100%;">
                                            <h3 class="card-title" style="width:100%;">Add User</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" method="post" action="{{route('users.store')}}">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" class="form-control"  value="{{old('name')}}"  placeholder="Enter the name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" name="email" class="form-control" value="{{old('email')}}"  placeholder="enter  email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="enter password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password Confirmation</label>
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="enter the password again">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Custom Tabs -->
                                                    <div class="card">
                                                        <div class="card-header d-flex p-0">
                                                            <ul class="nav nav-pills ml-auto p-2">
                                                                @foreach($models as $index=>$model)
                                                                <li class="nav-item"><a class="nav-link {{$index == 0 ? 'active' : ''}}" href="#{{$model}}" data-toggle="tab">{{$model}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div><!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                @foreach($models as $index=>$model)

                                                                    <div class="tab-pane {{$index == 0 ? 'active' : ''}}" id="{{$model}}">
                                                                        <div class="row">
                                                                        @foreach($maps as $key=>$map)
                                                                            <div class="col-md-3">
                                                                                <label for=""> <input class="ml-2" type="checkbox" name="permissions[]" value="{{$map.'_'.$model}}">{{$map}}</label>
                                                                            </div>
                                                                        @endforeach
                                                                        </div>
                                                                    </div>

                                                                @endforeach
                                                                <!-- /.tab-pane -->
                                                            </div>
                                                            <!-- /.tab-content -->
                                                        </div><!-- /.card-body -->
                                                    </div>
                                                    <!-- ./card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->


                                </div>
                                <div class="col-md-2"></div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>


            <!-- /.row -->
        </div><!-- /.container-fluid -->


    </section>


@endsection
