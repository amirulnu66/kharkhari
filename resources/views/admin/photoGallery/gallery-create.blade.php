@extends('admin.layouts.master')
@section('title', 'Create Photo Gallery')
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
                      Create Photo Gallery here..
                    </header>
                    <div class="panel-body">
                        <form role="form" action="{{url('/admin/photo/gallery/store')}}" method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>Photo Title</label>
                                <input type="text"  name="photo_title" class="form-control" required="">
                                     <div class="help-block text-danger">
                                     @if ($errors->has('photo_title'))
                                        <strong>{{ $errors->first('photo_title') }}</strong>
                                     @endif
                                  </div>
                            </div>


                            <div class="form-group">
                                <label>Gallery Photo</label>
                                <input type="file"  name="gallery_image" id="gallery-image" required="">
                                  <div class="help-block text-danger">
                                     @if ($errors->has('gallery_image'))
                                        <strong>{{ $errors->first('gallery_image') }}</strong>
                                     @endif
                                  </div>
                            </div>

                            <div class="form-group">
                              <label for="sel1">Photo Position</label>
                               <input type="text" name="gallery_position" id="pass-presen" class="form-control" required="">
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
