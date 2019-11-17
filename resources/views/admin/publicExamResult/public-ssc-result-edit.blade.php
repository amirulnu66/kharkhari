@extends('admin.layouts.master')
@section('title', 'SSC Public Examination Result')
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
                      Update SSC Public Examination Result here..
                    </header>
                    <div class="panel-body">
                        <form role="form" action="{{url('/admin/public/result/update')}}" method="post">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$sscResultInfo->id}}">
 
                            <div class="form-group">
                                <label>Passing Year</label>
                                <input type="text"  name="pass_year" id="pass-year" class="form-control" value="{{$sscResultInfo->pass_year}}">

                            </div>


                            <div class="form-group">
                                <label>Total Student</label>
                                <input type="text"  name="total_std" class="form-control" value="{{$sscResultInfo->total_std}}">
                            </div>
                            <div class="form-group">
                                <label>Total Pass</label>
                                <input type="text"  name="total_pass" class="form-control" value="{{$sscResultInfo->total_pass}}">
                            </div>
                            <div class="form-group">
                                <label>CGPA A+</label>
                                <input type="text"  name="gread_aplus" class="form-control" value="{{$sscResultInfo->gread_aplus}}">
                            </div>
                            <div class="form-group">
                                <label>CGPA A</label>
                                <input type="text"  name="gread_a" class="form-control" value="{{$sscResultInfo->gread_a}}">
                            </div>
                             
                            <div class="form-group">
                                <label>Percent %</label>
                                 <input type="text"  name="pass_presen" class="form-control" value="{{$sscResultInfo->pass_presen}}">

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
