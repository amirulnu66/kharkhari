@extends('admin.layouts.master')
@section('title', 'Teacher Message Update here')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
                
                    <header class="panel-heading">
                      Update Teacher's Message here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                        <form role="form" id="teachers-request" method="post" action="{{URL::to('/admin/teachers/message/update')}}" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              <input type="hidden" name="id" value="{{$teachMessageInfo->id}}">
                            <div class="form-group">
                                <label>Teacher's Name</label>
                                <input type="text"  name="teacher_name" id="teacher-name" class="form-control" value="{{$teachMessageInfo->teacher_name}}">
                            </div>
                             <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" name="teacher_image" id="teacher-image">
                            </div>

                            <div class="form-group">
                                <label>Teacher's Message</label>
                                 <textarea  name="teacher_desc" id="teacher-desc" class="form-control" rows="4">{{$teachMessageInfo->teacher_desc}}</textarea>
                            </div>
                            <button type="submit" id="submit-btn" class="btn btn-info">Submit</button>
                        </form>

                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop
@section('js-script')


@endsection
