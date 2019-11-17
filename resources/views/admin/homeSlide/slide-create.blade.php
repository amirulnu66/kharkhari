@extends('admin.layouts.master')
@section('title', 'Create Home Slider ')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
                
                    <header class="panel-heading">
                      Create Home Slide here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                        <form role="form" id="teachers-request" method="post" action="{{URL::to('/admin/home/sliders/store')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">

                             <div class="form-group">
                              <label>Slider Image</label>
                              <input type="file" name="slide_image" required="">
                            </div>
                            <br>
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
