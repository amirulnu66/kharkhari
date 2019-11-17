 @extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle">  পাঠ্যবইয়ের তালিকা ও সিলেবাস </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> একাডেমিক  <i class="fa fa-angle-right"></i> </li>
              <li class="current"> পাঠ্যবইয়ের তালিকা ও সিলেবাস</li>
               
          </ul>  
     </div>
</header>

<div class="section-content">                     
       <div class="details col-md-9 col-sm-8 col-xs-12">
         <span id="MainContent_lblbcontent"> 
          <!-- <h3>উপবৃত্তি প্রাপ্ত ছাত্র/ছাত্রীর তালিকা</h3> -->
          	<div class="panel panel-tab rounded shadow">
            <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">পাঠ্যবইয়ের তালিকা ও সিলেবাস </h3>
                </div>
              <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">    
                <!-- <h3 class="exam-result"> পরীক্ষার ফলাফল </h3>                                       -->
                <div class="news-item page-row has-divider clearfix">
                  
                  <div class="row singel-section-notice">
                    <div class="col-md-9 col-xs-8" style="padding-top:0; margin-top:-20px;">
                  <!-- This togel have master.php  -->
                     <h4 class=" Event_news_aside" >
                       <p class="book-list"> <a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">প্রথম শ্রেণির পাঠ্য বইয়ের তালিকা </a></p><br>

                        <p class="syllabue-list"><a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">প্রথম শ্রেণির সিলেবাস </a></p>

                      </h4>

                    </div>
                       <div class="col-md-3 col-xs-4 text-center">

                           <p class="book-list"><a href="{{URL::to('frontend')}}/images/notice/pdf.docx"><i class="fa fa-download">&nbsp; ডাউনলোড</i></a></p><br>
                           <p class="syllabue-list"><a href="{{URL::to('frontend')}}/images/notice/pdf.docx"><i class="fa fa-download">&nbsp; ডাউনলোড</i></a></p>
                       </div>
                    </div>
                    <!-- ./singel-section-notice -->
                  <div class="row singel-section-notice">
                    <div class="col-md-9 col-xs-8" style="padding-top:0; margin-top:-20px;">
                  <!-- This togel have master.php  -->
                     <h4 class=" Event_news_aside" >
                       <p class="book-list"> <a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">দ্বিতীয় শ্রেণির পাঠ্য বইয়ের তালিকা </a></p><br>

                        <p class="syllabue-list"><a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">দ্বিতীয় শ্রেণির সিলেবাস </a></p>

                      </h4>

                    </div>
                       <div class="col-md-3 col-xs-4 text-center">

                           <p class="book-list"><a href="{{URL::to('frontend')}}/images/notice/pdf.docx"><i class="fa fa-download">&nbsp; ডাউনলোড</i></a></p><br>
                           <p class="syllabue-list"><a href="{{URL::to('frontend')}}/images/notice/pdf.docx"><i class="fa fa-download">&nbsp; ডাউনলোড</i></a></p>
                       </div>
                    </div>
                    <!-- ./singel-section-notice -->
                  <div class="row singel-section-notice">
                    <div class="col-md-9 col-xs-8" style="padding-top:0; margin-top:-20px;">
                  <!-- This togel have master.php  -->
                     <h4 class=" Event_news_aside" >
                       <p class="book-list"> <a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">তৃতীয় শ্রেণির পাঠ্য বইয়ের তালিকা </a></p><br>

                        <p class="syllabue-list"><a id="" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="" data-key="" data-title="" data-content="">তৃতীয় শ্রেণির সিলেবাস </a></p>

                      </h4>

                    </div>
                       <div class="col-md-3 col-xs-4 text-center">

                           <p class="book-list"><a href="{{URL::to('frontend')}}/images/notice/pdf.docx"><i class="fa fa-download">&nbsp; ডাউনলোড</i></a></p><br>
                           <p class="syllabue-list"><a href="{{URL::to('frontend')}}/images/notice/pdf.docx"><i class="fa fa-download">&nbsp; ডাউনলোড</i></a></p>
                       </div>
                    </div>
                    <!-- ./singel-section-notice -->
               </div>  
            </div>
        </div>
         </span>   
            
      </div>
    
 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
    @include('frontend.layouts.includes.importenLink')
  </div>
   </div><!--//page-row-->

@stop