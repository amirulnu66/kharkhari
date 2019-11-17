@extends('admin.layouts.master')
@section('title', 'Update Photo Gallery')
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
                      Update Photo Gallery here..
                    </header>
                    <div class="panel-body">
                        <form role="form" action="{{url('/admin/photo/gallery/update')}}" method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$photoInfo->id}}">
 
                            <div class="form-group">
                                <label>Photo Title</label>
                                <input type="text"  name="photo_title" class="form-control" value="{{$photoInfo->photo_title }}">
                            </div>


                            <div class="form-group">
                                <label>Gallery Photo</label>
                                <input type="file"  name="gallery_image" id="gallery-image" value="{{$photoInfo->gallery_image}}">
                            </div>

                            <div class="form-group">
                              <label for="sel1">Photo Position</label>
                               <input type="text" name="gallery_position" id="pass-presen" class="form-control" value="{{$photoInfo->gallery_position}}">
                            </div> 

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop


@section('js-script')


@endsection
