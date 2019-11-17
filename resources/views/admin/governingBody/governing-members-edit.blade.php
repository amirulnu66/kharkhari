@extends('admin.layouts.master')
@section('title', 'Governing Members Information Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <section class="panel">
                
                    <header class="panel-heading">
                      Update Governing Members here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/admin/governing/member/update')}}" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <input type="hidden" name="id" value="{{$govMember->id}}">
 
                            <div class="form-group">
                                <label>Governing Members Name</label>
                                <input type="text"  name="member_name" id="member-name" class="form-control" value="{{$govMember->member_name}}">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                 <input type="text"  name="phone" class="form-control" value="{{$govMember->phone}}">
                            </div>
                             
                            <div class="form-group">
                                <label>Governing Members Designation</label>
                                 <input type="text"  name="member_desi" id="member-name" class="form-control" value="{{$govMember->member_desi}}">
                            </div>
                             <div class="form-group">
                                <label>Governing Member's Position</label>
                                 <input type="number"  name="member_position" class="form-control" value="{{$govMember->member_position}}">
                              </div>
                            <div class="form-group">
                                <label>Member's Photo</label>
                                <input type="file" name="member_image" id="member-image">
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
