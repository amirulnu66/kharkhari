@extends('admin.layouts.master')
@section('title', 'Manage Student Fees ')
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
                    <header class="panel-heading text-center">
                        Manage Student Fees here...
                        <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>

                    <div class="panel-body">
                      <div class="row">
                    
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>Class Name</th>
                                    <th>Month Fee</th>
                                    <th>Session Fee</th>
                                    <th>Admission Fee</th>
                                    <th>Admission Form </th>
                                    <th width="8%">Action</th>
                                </tr>
                                </thead>
                               <tbody>

                              @if(!empty($feesInfo AND $feesInfo->count()>0)) 
                                 <!-- public result looping -->
                               @foreach ($feesInfo as $index=>$fees)

                               <tr>
                                   <td>{{ $index+1 }}</td>
                                   <td>{{ $fees->class_name }}</td>
                                   <td>{{ $fees->month_fees }}</td>
                                   <td>{{ $fees->session_fees }}</td>
                                   <td>{{ $fees->admission_fees }}</td>
                                   <td>{{ $fees->form_fees }}</td>
                                  
                                   <td>
                                       <a  href="{{URL::to('/academic/fees/edit/'.$fees->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/academic/fees/delete/'.$fees->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                   </td>
                                </tr>
                               @endforeach
                            @else
                             <tr class="text-center">
                                <td colspan="6"><strong>No Records found</strong></td>
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

