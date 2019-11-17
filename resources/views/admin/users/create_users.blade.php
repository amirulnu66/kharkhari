@extends('admin.layouts.master')
@section('title', 'User Create')
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
                       Create User From
                    </header>
                    <div class="panel-body">
                        <form action="{{URL::to('/admin/users/store')}}"  enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Full Name" type="text">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" name="email" id="email" placeholder="Enter Email Address" type="email">
                            </div>

                            <div class="form-group">
                                <label for="email">Select User Role</label>
                                <select name="user_role" class="form-control m-bot15">
                                    <option value="">select one</option>
                                    <option value="1">admin</option>
                                    <option value="2">author</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" type="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">User Profile Picture</label>
                                <input id="exampleInputFile" name="user_image" type="file">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop