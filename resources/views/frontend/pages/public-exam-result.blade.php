@extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
	 <span id="MainContent_lbletitle">পাবলিক পরীক্ষার ফলাফল </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
              <li class="current"> অর্জন ও সাফল্য</li>
               
          </ul>  
     </div>
</header>

   <div class="section-content">                     
     <div class="entry-content">
<div class="details col-md-9 col-xs-12">
  <div class="row">
  <span id="MainContent_lblecontent">

  	<h4 style="text-align: center;"><strong>বিগত</strong> <strong></strong> <strong>বছরের</strong> <strong>পরীক্ষার</strong> <strong>ফল</strong>
    </h4>
      <br>
        <div style="margin-bottom: 10px; margin-top: -.01px;">
            <h1 class="section-heading text-highlight">
                <!-- <span class="line">বিগত তিন বছরের পাবলিক পরীক্ষার ফলাফল</span></h1>   -->
                    <div class="clearfix"></div>

                     <div class="tab-rutne">
                        <div class="panel panel-info routine-panel">
                            <div class="panel-heading result-title">
                                <h3 class="class-routine-title"> এস.এস.সি পরীক্ষার ফলাফল</h3>
                            </div>
                            <div class="table-overflow result-tab">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="10%">পাশের বছর</th>
                                        <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                                        <th width="20%">কৃতকার্যের সংখ্যা</th>
                                        <th width="20%">জি.পি.এ-5</th>
                                        <th width="15%">জি.পি.এ-4</th>
                                        <th width="15%">পাশের হার</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty(sscPublicexamResultSuccess()))    
                                        @foreach(sscPublicexamResultSuccess() as $resultInfo)
                                        <tr>
                                            <td>{{$resultInfo->pass_year}}</td>
                                            <td>{{$resultInfo->total_std}}</td>
                                            <td>{{$resultInfo->total_pass}}</td>
                                            <td>{{$resultInfo->gread_aplus}}</td>
                                            <td>{{$resultInfo->gread_a}}</td>
                                            <td>{{$resultInfo->pass_presen}}</td>
                                        </tr>
                                        @endforeach
                                    @endif    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--//tab-rutne-->
                    
                    <div class="tab-rutne">
                        <div class="panel panel-info routine-panel">
                            <div class="panel-heading result-title">
                                <h3 class="class-routine-title">জে.এস.সি পরীক্ষার ফলাফল</h3>
                            </div>
                            <div class="table-overflow result-tab">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="10%">পাশের বছর</th>
                                        <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                                        <th width="20%">কৃতকার্যের সংখ্যা</th>
                                        <th width="20%">জি.পি.এ-5</th>
                                        <th width="15%">জি.পি.এ-4</th>
                                        <th width="15%">পাশের হার</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty(jscPublicexamResultSuccess()))        
                                        @foreach(jscPublicexamResultSuccess() as $resultInfo)        
                                            <tr>
                                                <td>{{$resultInfo->pass_year}}</td>
                                                <td>{{$resultInfo->total_std}}</td>
                                                <td>{{$resultInfo->total_pass}}</td>
                                                <td>{{$resultInfo->gread_aplus}}</td>
                                                <td>{{$resultInfo->gread_a}}</td>
                                                <td>{{$resultInfo->pass_presen}}</td>
                                            </tr>
                                        @endforeach  
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--//tab-rutne-->


                </div>

  </span>            
  </div>
</div>
</div><!-- .entry-content -->


<!-- right sitebar here -->
<div class="col-md-3 col-xs-12 ">

  @include('frontend.layouts.includes.importenLink')
</div>

   </div><!--//page-row-->

@endsection
