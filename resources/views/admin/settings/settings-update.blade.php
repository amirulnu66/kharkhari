@extends('admin.layouts.master')
@section('title', 'Update Institute Settings')
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
                      Update Institute Settings  here..
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/institute/settings/update')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$settingsInfo->id}}">
    
                            <div class="form-group">
                                <label>Institute Name (Bangla)</label>
                                <input type="text"  name="institute_name" class="form-control" value="{{$settingsInfo->institute_name}}">
                            </div>
                            <div class="form-group">
                                <label>Institute Name (English)</label>
                                <input type="text"  name="english_name" class="form-control" value="{{$settingsInfo->english_name}}">
                            </div> 
                            <div class="form-group">
                                <label>Institute Logo</label>
                                <input type="file" name="institute_logo" id="image">
                            </div>
                            <div class="form-group">
                                <label>Institute Address </label>
                                <input type="text"  name="institute_address" class="form-control" value="{{$settingsInfo->institute_address}}">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text"  name="phone_number" class="form-control" value="{{$settingsInfo->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text"  name="email" class="form-control" value="{{$settingsInfo->email}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Public Holiday List</label>
                                <input type="file" name="holiday_list" id="image">
                            </div>
                            <div class="form-group">
                                <label>Top Scroll Notice</label>
                                <textarea name="notice" class="form-control" rows="6">{{$settingsInfo->notice}} </textarea>
                                
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop

