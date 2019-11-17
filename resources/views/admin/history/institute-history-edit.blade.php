@extends('admin.layouts.master')
@section('title', 'Institute History Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
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
                    <header class="panel-heading admin-bold-title admin-center-title">
                      Update Institute History here..
                    </header>
                    
                    <div class="panel-body">
                        <form role="form" action="{{URL::to('/admin/institute/history/update')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="{{ $historyInfo->id}}">
                            <div class="form-group">
                                <label>History Title</label>
                                <input type="text"  name="history_title" class="form-control" value="{{$historyInfo->history_title}}" >
                            </div>
                            <div class="form-group">
                                <label>Academic Image</label>
                                <input type="file"  name="image">
                            </div>

                            <div class="form-group">
                                <label>History Description</label>
                                 <textarea  name="history_desc" id="history-desc" class="form-control" rows="8">{{$historyInfo->history_desc}}</textarea>
                            </div>
                            <button type="submit"  class="btn btn-info">Update</button>
                        </form>

                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop

