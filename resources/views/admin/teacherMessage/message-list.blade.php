@extends('admin.layouts.master')
@section('title', 'Manage Teacher Message')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      Manage Teacher's Message here..
                        <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>Teacher's Name</th>
                                    <th>Profile Picture</th>
                                    <th>Teacher's Message</th>
                                    <th width="7%">Action</th>
                                </tr>
                                </thead>
                               <tbody>

                              @if(!empty($teachersMessage->count()>0)) 
                              
                               @foreach ($teachersMessage as $Messages)
                               <tr>
                                   <td>{{$Messages->teacher_name}}</td>
                                   <td>
                                    <img src="{{URL::to('assets/speech/'.$Messages->teacher_image)}}" height="80px" width="100px;"></td>
                                   
                                   <td>{{$Messages->teacher_desc}}</td>
                                   <td>
                                       <a  href="{{URL::to('/admin/teachers/message-edit/'.$Messages->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('admin/teachers/message/delete/'.$Messages->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                   </td>
                                </tr>
                               @endforeach

                            @else
                             <tr class="text-center">
                                   <td colspan="5"><strong>No Records found</strong></td>
                             </tr>

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

