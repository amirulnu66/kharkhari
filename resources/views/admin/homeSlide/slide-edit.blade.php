@extends('admin.layouts.master')
@section('title', 'Home Slider Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      Manage Home Slide here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info text-center">{{ Session::get('message') }}</p>
                   @endif
                   <div class="panel-body">
                   <div class="col-md-6 col-md-offset-3">
                      <div class="row homeSlide-edit">
                        <form role="form" id="teachers-request" method="post" action="{{URL::to('/admin/home/sliders/update')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$homeSlider->id}}">
                             <div class="form-group">

                                 <img src="{{url('/assets/slider/'.$homeSlider->slide_image)}}" width="350" height="160">
                              <input type="file" class="slide-file" name="slide_image">
                            </div>
                           
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                        </div>
                      </div>
                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop
@section('js-script')


@endsection
