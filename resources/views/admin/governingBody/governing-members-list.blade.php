@extends('admin.layouts.master')
@section('title', ' Manage Governing Members')
@section('stylesheet')
    <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/data-tables/DT_bootstrap.css')}}" rel="stylesheet">

@stop

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading text-center">
                        Manage Governing Members
                        <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="row">
                    
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>Governing Member's Name</th>
                                    <th>Phone Number</th>
                                    <th>Governing Member's Designation</th>
                                    <th>Member's Photo</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                               <tbody>

                              @if(!empty($govMembersInfo->count()>0)) 
                                 @php $i=1 @endphp
                               @foreach ($govMembersInfo as $govMember)

                               <tr>
                                   <td>{{ $i++ }}</td>
                                   <td>{{ $govMember->member_name }}</td>
                                   <td>{{ $govMember->phone }}</td>
                                   <td>{{ $govMember->member_desi }}</td>
                                   <td>
                                    <img src="{{URL::to('/assets/members/'.$govMember->member_image)}}" height="60px" width="60px;">
                                   </td>
                                  
                                   <td>
                                       <a  href="{{URL::to('/admin/governing/member/edit/'.$govMember->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/governing/member/delete/'.$govMember->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
                    </div>
                    </div>
                </section>
            </div>

        </div>
    </section>
@stop

@section('js-script')
<script src="{{URL::to('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::to('admin/assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{URL::to('admin/js/dynamic_table_init.js')}}"></script>

@stop

