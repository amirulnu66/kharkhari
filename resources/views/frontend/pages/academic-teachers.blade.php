 @extends('frontend.master')

@section('title')

@section('contant')
            <header class="page-heading clearfix">
                 <h1 class="heading-title pull-left">
            	  <span id="MainContent_lbletitle">শিক্ষক পরিচিতি</span>
                 </h1>           
                  <div class="breadcrumbs pull-right">                       
                      <ul>
                          <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                          <li>  ভর্তি কার্যক্রম <i class="fa fa-angle-right"></i> </li>
                          <li class="current"> শিক্ষক পরিচিতি</li>
                           
                      </ul>  
                 </div>
            </header>

    <div class="section-content">                     
     <div class="entry-content">
     <div class="details col-md-9 col-xs-12">	
	  <span id="MainContent_lblecontent">
      <div class="row">
        <div class="teacher-inner-content">
        @if(!empty($teacherList))
          @foreach($teacherList as $teacher)
        <div class="col-md-6 col-sm-12 ">
          <div class="media tech-box">
            <div class="media-left teacher">
                <a href="javascript:void();">
                    <img class="" src="{{url($teacher->photo)}}">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Name: {{$teacher->name}}  </h4>
                Designation:&nbsp;{{$teacher->designation}}<br>
                Department:&nbsp;{{$teacher->department}}<br>
                Mobile:&nbsp;{{$teacher->phone}}<br>
                <a>
            </a>
          </div>
          <a>
        </a>
      </div>
      <!--.//tech-box  -->
      </div>

      @endforeach
      @else
      <div class="clearfix"></div><hr>

      <div><h3 style="display: block;padding: 15px 0; text-align: center;background: #fb907e; color:#fff; border-radius: 5px;">No Records Found</h3></div>
    @endif
      <div class="clearfix"></div>
    </div>
<!-- .//teacher-inner-content -->
</div>
      </span>  
     </div>

    </div><!-- .entry-content -->
<div class="col-md-3 col-xs-12">
        @include('frontend.layouts.includes.importenLink')
    </div>
   </div><!--//page-row-->

@stop