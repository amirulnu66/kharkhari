@extends('admin.layouts.master')
@section('title', 'Public Examination Result')
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
                      Create JSC Public Examination Result here..
                      <a href="{{URL::to('/admin/public/result/ssc/list')}}" class="btn btn-success pull-right">View List</a>
                    </header>
                    <div class="panel-body">
                        <form role="form" action="{{url('/admin/public/result/store')}}" method="post">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="exam_type" value="0">
 
                            <div class="form-group">
                                <label>Passing Year</label>
                                <input type="text"  name="pass_year" id="pass-year" class="form-control" >
                                     <div class="help-block text-danger">
                                     @if ($errors->has('pass_year'))
                                        <strong>{{ $errors->first('pass_year') }}</strong>
                                     @endif
                                  </div>
                            </div>
                            <div class="form-group">
                                <label>Total Student</label>
                                <input type="text"  name="total_std" id="total-std" class="form-control" >
                                    <div class="help-block text-danger">
                                     @if ($errors->has('total_std'))
                                        <strong>{{ $errors->first('total_std') }}</strong>
                                     @endif
                                  </div>
                            </div>
                            <div class="form-group">
                                <label>Total Pass</label>
                                <input type="text"  name="total_pass" id="total_pass" class="form-control" >
                                    <div class="help-block text-danger">
                                     @if ($errors->has('total_pass'))
                                        <strong>{{ $errors->first('total_pass') }}</strong>
                                     @endif
                                  </div>
                            </div>

                            <div class="form-group">
                                <label>CGPA A+</label>
                                <input type="text"  name="gread_aplus" id="gread-aplus" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>CGPA A</label>
                                <input type="text"  name="gread_a" id="gread" class="form-control">
                            </div>
                             
                            <div class="form-group">
                                <label>Percent %</label>
                                 <input type="text"  name="pass_presen" id="pass-presen" class="form-control" >
                                 <div class="help-block text-danger">
                                     @if ($errors->has('pass_presen'))
                                        <strong>{{ $errors->first('pass_presen') }}</strong>
                                     @endif
                                  </div>
                            </div>

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop

