@extends('admin.layouts.master')
@section('title', 'User Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('success'))
                   <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
                   </div>
                   @elseif(Session::has('feiled'))
                       <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h4><i class="icon fa fa-check"></i> {{ Session::get('feiled') }} </h4>
                       </div>
                   @endif
            <section class="panel">
                <header class="panel-heading">
                    User Update From
                </header>
                <div class="panel-body">
                    <form action="{{URL::to('/admin/users/update')}}"  enctype="multipart/form-data" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$user->id}}" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input class="form-control" value="{{$user->name}}" name="name" id="exampleInputEmail1" placeholder="Enter Full Name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" name="email" value="{{$user->email}}" id="email" placeholder="Enter Email Address" type="email">
                        </div>

                        <div class="form-group">
                            <label for="email">Select User Role</label>
                            <select name="user_role" class="form-control m-bot15">
                                <option value="">select one</option>
                                <option @if($user->user_role=='1') selected @endif value="1">admin</option>
                                <option @if($user->user_role=='2') selected @endif value="0">Author</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">User Profile Picture</label>
                            <input id="exampleInputFile" name="user_image" type="file"><br>
                        </div>

                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>

                </div>
            </section>
        </div>

    </div>
</section>
@stop