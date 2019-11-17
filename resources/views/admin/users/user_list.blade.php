@extends('admin.layouts.master')
@section('title', 'User List ')
@section('stylesheet')

@stop
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
                       Manage User 
                        <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>User Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                            @if(!empty($users))    
                               @foreach($users as $user)
                               <tr>
                                   <td><img src="{{asset('assets/users/'.$user->user_image)}}" height="40px" width="40px;"></td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>@if ($user->user_role === 1)
                                           <span class="label label-info label-mini">Admin</span>
                                           @else
                                           <span class="label label-warning label-mini">Author</span>
                                    @endif
                                   </td>

                                   <td>
                                       <a  href="{{URL::to('/admin/users/edit/'.$user->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      @if($user->user_role==0) 
                                       <a href="{{URL::to('/admin/users/delete/'.$user->id)}}" onclick="return confirm('Are you sure you want to delete this users');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                       @elseif($user->user_role>1)
                                        <a href="{{URL::to('/admin/users/delete/'.$user->id)}}" onclick="return confirm('Are you sure you want to delete this users');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                      @endif
                                       

                                   </td>
                                </tr>

                               @endforeach
                            @endif   
                               </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </section>
@stop

@section('js-script')

    @stop

