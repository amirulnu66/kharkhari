@extends('frontend.master')

@section('title')

@section('top-marquee')
    @include('frontend.layouts.notice.top-news')
@endsection

@section('contant')
    <div class="col-md-9 clearMargin">

        <!-- home slider -->
        <div id="promo-slider" class="slider flexslider">
            <ul class="slides">
            @if(!empty($homeSlides))    
                @foreach($homeSlides as $slide)
                <li>
                    <img src="{{URL::to('/assets/slider/'.$slide->slide_image)}}" alt="slide image" />
                </li>
                @endforeach    
            @endif    
            </ul>
            <!--//slides-->
        </div>


    <div id="MainContent_UpdatePanel1">          
        <section class="news history-panel">
            <h1 class="section-heading text-highlight">
                @if(settingsInfo())
                <span class="line">{{settingsInfo()->institute_name}} </span></h1>
                @endif
         <div class="row,line">
             <div id="MainContent_Div4 ">
              <div class="single-post col-md-12 col-xs-12 text-wrapper">
                @if(instituteHistory()->history_desc)
                <div class="text sub-text">
                    <p>{{Str::words(instituteHistory()->history_desc,150)}}
                       
                        <a class="btn-details pull-right" href="{{URL::to('/institute/history')}}" target="_blank">বিস্তারিত</a></p>
                </div> <!-- /.sub-text -->
                @endif
            </div> <!-- /.single-post -->
            
            </div>
        </div>

        </section>              
 <!--//news htecr-panel-->           
</div>

    <div id="MainContent_UpdatePanel1">          
        <section class="news htecr-panel">
         <div class="row line">
             <div id="MainContent_Div4">
              <div class="single-post col-md-6 col-sm-6 col-xs-12 h-teacher30">
                <h1 class="section-heading text-highlight">
                <span class="line">সভাপতির বাণী  </span></h1>
            <!-- this method get helpers.php     -->    
                @if(directorMsgInfo())
                <div class="img-holder message-inner">
                     @if(directorMsgInfo()->teacher_image)
                    <img style="margin-bottom: 10px;" src="{{URl::to('assets/speech/'.directorMsgInfo()->teacher_image)}}" alt="Image" width="370" height="280">
                     @else
                    <img class="img-responsive" src="{{URL::to('frontend/default/img.jpg')}}" alt="Image" height="290">
                    @endif 
                    
                </div>
                <div class="text-wrapper">
                    <div class="text tran4s">
                        <p style="padding: 0 15px;">{{ Str::words(directorMsgInfo()->teacher_desc,35) }}
                        <a class="btn-details pull-right" href="{{URL::to('/message/from/director-message')}}" target="_blank">বিস্তারিত</a></p>
                    </div> <!-- /.text -->
                </div> <!-- /.text-wrapper -->
            @endif    
            </div> <!-- /.single-post -->

            <div class="single-post col-md-6 col-sm-6 col-xs-12">
                <h1 class="section-heading text-highlight">
                <span class="line">প্রধান শিক্ষকের বাণী </span></h1>
              @if(hteacherMsgInfo())    
                <div class="img-holder message-inner">
                    @if(hteacherMsgInfo()->teacher_image)
                    <img style="margin-bottom: 10px;" src="{{URl::to('assets/speech/'.hteacherMsgInfo()->teacher_image)}}" alt="Image" width="370" height="280">
                    @else
                    <img class="img-responsive" src="{{URL::to('frontend/default/img.jpg')}}" alt="Image" height="270">
                    @endif
                    
                </div>
                <div class="text-wrapper">
                    <div class="text tran4s">
                        <p style="padding: 0 15px;">{{ Str::words(hteacherMsgInfo()->teacher_desc,35) }}
                            <a class="btn-details pull-right" href="{{url('/message/head/teacher-message')}}" target="_blank">বিস্তারিত</a>
                        </p>
                    </div> <!-- /.text -->
                </div> <!-- /.text-wrapper -->
            @endif     
            </div> <!-- /.single-post -->
            
            </div>
        </div>

        </section>              
 <!--//news htecr-panel-->           
</div>

<!-- bublic exam result -->
        <div style="margin-bottom: 10px; margin-top: -.01px;">
            <h1 class="section-heading text-highlight">
                <span class="line">বিগত তিন বছরের পাবলিক পরীক্ষার ফলাফল</span></h1>  
                    <div class="clearfix"></div>
                    @include('frontend.layouts.public-result.public-exam-result')
                </div>
                

            <!-- boder solic top in section -->
    <div class="container" style="margin-top: 4px;">
        </div>

        <div class="section-content">
            <h1 class="section-heading text-highlight">
                <span id="MainContent_lblbtitle"></span>
              
            </h1>
            <p>
                <span id="MainContent_lblbcontent"></span>
            </p>
            
        </div>

        <!-- class topper -->
        <div class="col-md-12">
            <div class="row">
                @include('frontend.layouts.includes.class-topper2')
                 
            </div>
        </div><!--//col-md-12-->
                 <!-- boder solic top in section -->
            <div class="container" style="margin-top: 4px;">
                </div>

                <div class="section-content">
                    <h1 class="section-heading text-highlight">
                        <span id="MainContent_lblbtitle"></span>
                      
                    </h1>
                    <p>
                        <span id="MainContent_lblbcontent"></span>
                    </p>
                    
                </div>
        
           <div class="row">
            <div class="col-md-6">
                <section>
            <a href="#"><h1 class="section-heading text-highlight">
                <span class="line">প্রাতিষ্ঠানিক ভিডিও </span></h1></a>
                <div class="clender-inner">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/QNUSIOMb6vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>


            <!--//section-content-->
            </section>
            </div>
            
            <div class="col-md-6">
                <section class="gallary photo-gallery">
                    <a href="#"><h1 class="section-heading text-highlight">
                    <span class="line">ফটো গ্যালারি</span></h1> </a> 
                    <div>
            <!-- this homePhotoGallery() method get form helpers.php -->
                @if(!empty(homePhotoGallery() AND homePhotoGallery()->count()>0))        
                    @foreach(homePhotoGallery() as $singlePhoto)        
                    <div class="row thumblink border-bottom ">
                        <a href="{{URL::to('/school/photo/photo-gallery')}}" target="_blank">
                           <div class="col-xs-3 col-sm-3 padding-unset">
                            <img src="{{url('assets/galleries/'.$singlePhoto->gallery_image)}}" class="img-responsive home-photo-gallery" alt="Book Distribution" title="Book Distribution">

                            </div>
                           <div class="col-xs-9 col-sm-9 border-left"><span>{{$singlePhoto->photo_title}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
                @endif    

                    </div>
                <!--//section-content-->
                </section>
            </div>
            </div> 
        <!--//row-->


    </div>
<!--//col-9 clearMargin-->
@stop

@section('side-bar')

	@include('frontend.layouts.sideBar.sideBar')

@endsection