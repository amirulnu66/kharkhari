@extends('admin.layouts.master')
@section('title', 'Manage Home Slider ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading text-center">
                        Home Slider List
                        <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                    </header>
                    <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="row">
                    
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>Home slider Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>

                              @if(!empty($homeSliders->count()>0)) 
                                 @php $i=1 @endphp
                               @foreach ($homeSliders as $Slide)

                               <tr>
                                   <td>{{ $i++ }}</td>
                                   <td>
                                    <img src="{{URL::to('/assets/slider/'.$Slide->slide_image)}}" height="60px" width="60px;"></td>
                                  
                                   <td>
                                       <a  href="{{URL::to('/admin/home/sliders/edit/'.$Slide->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/home/sliders/delete/'.$Slide->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

    @stop

