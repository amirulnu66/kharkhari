@extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle"> ভর্তি পরীক্ষার ফলাফল </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> একাডেমিক  <i class="fa fa-angle-right"></i> </li>
              <li class="current">  পরীক্ষার ফলাফল</li>
               
          </ul>  
     </div>
</header>

<div class="section-content">                     
       <div class="details col-md-9 col-sm-8 col-xs-12"> 
          <div class="panel panel-tab rounded shadow">
            <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">পরীক্ষার ফলাফল </h3>
                </div>
              <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">    
                <!-- <h3 class="exam-result"> পরীক্ষার ফলাফল </h3>                                       -->
                <div class="news-item page-row has-divider clearfix ">
                  
                  <div class="row singel-section-notice">
                    <div class="col-md-9 col-xs-12" style="padding-top:0; margin-top:-20px;">
                  <!-- This togel have master.php  -->
                     <h4 class="title Event_news_aside" >
                        <a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">Class 6 Admission result</a>

                      </h4>

                    </div>
                       <div class="col-md-3 col-xs-12 text-center">

                           <a href="{{URL::to('frontend')}}/images/notice/pdf.docx">

                               <img src="{{URL::to('frontend')}}/images/notice/down.jpg" alt="download btn" width="100px" height="36px;">
                           </a>
                       </div>
                    </div>
                  
                  <div class="row singel-section-notice">
                    <div class="col-md-9 col-xs-12" style="padding-top:0; margin-top:-20px;">
                  <!-- This togel have master.php  -->
                     <h4 class="title Event_news_aside" >
                        <a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">Class 7 Admission result</a>

                      </h4>

                    </div>
                       <div class="col-md-3 col-xs-12 text-center">

                           <a href="{{URL::to('frontend')}}/images/notice/pdf.docx">

                               <img src="{{URL::to('frontend')}}/images/notice/down.jpg" alt="download btn" width="100px" height="36px;">
                           </a>
                       </div>
                    </div>

               </div>  
            </div>
        </div>  

    </div><!-- .entry-content -->
    
 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
  @include('frontend.layouts.includes.importenLink')
</div>
   </div><!--//page-row-->
@endsection
