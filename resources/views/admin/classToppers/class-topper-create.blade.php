@extends('admin.layouts.master')
@section('title', 'Create Class Toppers')
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
                      Create Class Topper here..
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/admin/class/topper/store')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>Student Name</label>
                                <input type="text"  name="student_name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Student Roll</label>
                                <input type="text"  name="student_roll" class="form-control" required="">
                            </div>
                             
                            <div class="form-group">
                                <label>Student Class</label>
                                 <select class="form-control" name="student_class" required="">
                                    <option value="">---Select Class---</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>          
                                    <option value="5">Five</option>          
                                    <option value="6">Six</option>          
                                    <option value="7">Seven</option>          
                                    <option value="8">Eight</option>          
                                    <option value="9">Nine</option>          
                                    <option value="10">Ten</option>          
                                  </select>
                            </div> 

                              <div class="form-group">
                                <label>Student Section</label>
                                <select class="form-control" name="student_section" required="">
                                  <option value="">---Select Section---</option>
                                  <option value="1">Section A</option>
                                  <option value="2">Section B</option>
                                  <option value="3">Section C</option>         
                                </select>
                              </div>
                            <div class="form-group">
                                <label>Student Photo</label>
                                <input type="file" name="student_image" id="image" required="">
                            </div>

                            
                                <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="student_position">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>        
                                </select>
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
