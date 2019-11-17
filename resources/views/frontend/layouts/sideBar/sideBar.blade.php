    <div class="col-md-3 col-paddding">
        <!-- student attendance chart side abr -->
        @include('frontend.layouts.includes.student-attendance-chart')
    <div class="clearfix"></div>
        <!-- teacher attendance side bar -->
        <!-- include('frontend.layouts.includes.teacher-attendance-chart') -->

    <div class="clearfix"></div>
        <!-- right side bar notice boradr -->
         @include('frontend.layouts.includes.notice-board')
    <div class="clearfix"></div>  
        
        <section class="links">
            <h1 class="section-heading text-highlight rightbar-link-bg">
                <span class="line">ডাউনলোড</span>
            </h1>
        @php $i=4 @endphp    
        @if(!empty(notice()))   
            <div class="download-inner" >
                @foreach(notice() as $notice)
                    @if($i>0)
                <a href="{{URL::to('assets/notices/'.$notice->notice_file)}}" target="_blank" class="tran3s"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>{{$notice->notice_title}} </a><br>
                    @endif
                    @php $i--; @endphp
                @endforeach

            </div>
        @endif    
            <!--//section-content-->
        </section>

         <div class="clearfix"></div>  
        
        <!-- right side abr important link -->
         @include('frontend.layouts.includes.importenLink')
        
    </div>