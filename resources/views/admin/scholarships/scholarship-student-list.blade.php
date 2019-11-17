@extends('admin.layouts.master')
@section('title', 'Manage Scholarships Students')

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
                       Manage Scholarships Student  here..
                        <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>Student Name</th>
                                    <th>Student Roll</th>
                                    <th>Year</th>
                                    <th>Picture</th>
                                    <th width="8%">Action</th>
                                </tr>
                                </thead>
                               <tbody>

                              @if(!empty($scholarships->count()>0)) 
                              
                               @foreach ($scholarships as $index=>$student)
                               <tr>
                                   <td>{{$index+1}}</td>
                                   <td>{{$student->student_name}}</td>
                                   <td>{{$student->student_roll}}</td>
                                    <td>{{$student->std_year}}</td>
                                   <td>
                                    <img src="{{URL::to('assets/scholarships/'.$student->std_image)}}" height="40px" width="40px;"></td>
                                   
                                  
                                   <td>
                                       <a  href="{{URL::to('/student/scholarships/edit/'.$student->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/student/scholarships/delete/'.$student->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

