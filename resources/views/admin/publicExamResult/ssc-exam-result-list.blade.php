@extends('admin.layouts.master')
@section('title', 'Manage SSC Examination  Result ')
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
                        Manage SSC Examination Result
                        
                      <a href="{{URL::to('/admin/public/result/ssc/list')}}" class="btn btn-success pull-right">Add New</a>
                    
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
                                    <th>Examination Year</th>
                                    <th>Total Student</th>
                                    <th>Total Pass</th>
                                    <th>CGPA A+</th>
                                    <th>CGPA A</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                        <!--this variable $resultList get sscPublicResultList() & PublicExamResultController\admin-->
                              @if(!empty($resultList->count()>0)) 
                                 @php $i=1 @endphp
                                 <!-- public result looping -->
                               @foreach ($resultList as $result)

                               <tr>
                                   <td>{{ $i++ }}</td>
                                   <td>{{ $result->pass_year }}</td>
                                   <td>{{ $result->total_std }}</td>
                                   <td>{{ $result->total_pass }}</td>
                                   <td>{{ $result->gread_aplus }}</td>
                                   <td>{{ $result->gread_a }}</td>
                                  
                                   <td>
                                       <a  href="{{URL::to('/admin/public/result/ssc/edit/'.$result->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/public/result/delete/'.$result->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

