@extends('admin.layouts.master')
@section('title', 'Class Toppers List ')
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
                        Manage Class Toppers here...
                        <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                      <div class="row">
                    
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>Student Name</th>
                                    <th>Student Roll</th>
                                    <th>Student Class</th>
                                    <th>Student Section</th>
                                    <th>Student Photo</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                        <!--this variable $resultList get sscPublicResultList() & PublicExamResultController\admin-->
                              @if(!empty($toppers AND $toppers->count()>0)) 
                                 @php $i=1 @endphp
                                 <!-- public result looping -->
                               @foreach ($toppers as $topper)

                               <tr>
                                   <td>{{ $i++ }}</td>
                                   <td>{{ $topper->student_name }}</td>
                                   <td>{{ $topper->student_roll }}</td>
                                   <td>{{ $topper->student_class }}</td>
                                   <td>{{ $topper->student_section }}</td>

                                   <td>
                                    <img src="{{URL::to('/assets/toppers/'.$topper->student_image)}}" height="60px" width="60px;">
                                  
                                   </td>
                                  
                                   <td>
                                       <a  href="{{URL::to('/admin/class/topper/edit/'.$topper->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/class/topper/delete/'.$topper->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

