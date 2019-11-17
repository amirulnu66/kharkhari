@extends('admin.layouts.master')
@section('title', 'Scholarships Students update')
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
                   @endif
                <section class="panel">
                
                    <header class="panel-heading">
                      Update Scholarships Student  here..
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/student/scholarships/update')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$scholarshipInfo->id}}">
 
                            <div class="form-group">
                                <label>Student Name</label>
                                <input type="text"  name="student_name" class="form-control" value="{{$scholarshipInfo->student_name}}">
                            </div> 
                            <div class="form-group">
                                <label>Student Roll </label>
                                <input type="text"  name="student_roll" class="form-control" value="{{$scholarshipInfo->student_roll}}">
                            </div>
                            <div class="form-group">
                                <label>Picture</label>
                                <input type="file"  name="std_image" alt="image">
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text"  name="std_year" class="form-control form_datetime" placeholder="Y/d/m">
                            </div>
                            <div class="form-group">
                              <label for="sel1">Student Class</label>
                               <input type="text"  name="std_class" class="form-control" value="{{$scholarshipInfo->std_class}}">
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
<script type="text/javascript">
    $(document).ready(function(){
         $('.form_datetime').datetimepicker({ 
            pickTime: false,
        });
    });
</script>

@endsection

