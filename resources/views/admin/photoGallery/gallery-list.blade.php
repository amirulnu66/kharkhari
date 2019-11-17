@extends('admin.layouts.master')
@section('title', 'Photo Galleries list ')
@section('stylesheet')
  <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/data-tables/DT_bootstrap.css')}}" rel="stylesheet">
@stop

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
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
                        Manage Photo Gallery here...
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
                                    <th width="6%">SL. No.</th>
                                    <th>Photo Title</th>
                                    <th>Gallery Photo</th>
                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                        <!--this variable $resultList get sscPublicResultList() & PublicExamResultController\admin-->
                              @if(!empty($galleries AND $galleries->count()>0)) 
                                 @php $i=1 @endphp
                                 <!-- public result looping -->
                               @foreach ($galleries as $photo)

                               <tr>
                                   <td>{{ $i++ }}</td>
                                    <td>{{ $photo->photo_title }}</td>
                                   <td>
                                    <img src="{{URL::to('/assets/galleries/'.$photo->gallery_image)}}" height="60px" width="60px;">
                                  
                                   </td>
                                  
                                   <td>
                                       <a  href="{{URL::to('/admin/photo/gallery/edit/'.$photo->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/photo/gallery/delete/'.$photo->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

