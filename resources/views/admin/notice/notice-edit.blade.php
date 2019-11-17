@extends('admin.layouts.master')
@section('title', 'Academic Notice Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
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
                   @elseif(Session::has('error'))
                       <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         <h4><i class="icon fa fa-check"></i> {{ Session::get('error') }} </h4>
                      </div>
                   @endif
                <section class="panel">
                
                    <header class="panel-heading">
                       Notice Update here..
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/academic/notice/update')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$noticeInfo->id}}">
 
                            <div class="form-group">
                                <label>Academic Notice</label>
                                <input type="text"  name="notice_title" class="form-control" value="{{$noticeInfo->notice_title}}">
                            </div> 
                            <div class="form-group">
                                <label>Notice File PDF/DOC </label>
                                <input type="file" name="notice_file" id="file">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop

