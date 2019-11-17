 @extends('frontend.master')

@section('title')

@section('contant')
     <header class="page-heading clearfix">
                     <h1 class="heading-title pull-left">
                	   <span id="MainContent_lblbtitle">সভাপতি মহোদয়ের বাণী</span>
                     </h1>           
                     <div class="breadcrumbs pull-right">                       
                                          
                          <ul>
                              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                              <li> আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
                              <li class="current"> সভাপতি মহোদয়ের বাণী</li>
                             
                          </ul> 
                     </div>
                </header>

                <div class="adivisors-details-area pt-100">

                        <div class="col-xl-4 col-lg-4 mb-30">
                            <div class="advisor-img mb-35">
                                @if(!empty(directorMsgInfo()->teacher_image))
                                    <img id="MainContent_PersonsImage" src="{{url('assets/speech/'.directorMsgInfo()->teacher_image)}}" width="370" height="280" />
                                @else
                                    <img class="img-responsive" src="{{url('frontend/default/img.jpg')}}" alt="Image" height="380">
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="adivisor-text-2 white-bg">
                            @if(!empty(directorMsgInfo()))
                                <div class="adivisor-text-heading d-flex mb-10">
                                    <div class="adivisor-text-title adivisor-text-title-2">
                                        <h4>{{ directorMsgInfo()->teacher_name }}</h4>
                                    </div>
                                </div>
                                <div class="adivisor-para adivisor-para-2">

                                    <h4 style="text-align: justify;">{{ directorMsgInfo()->teacher_desc }}<br><br>
                                        শুভেচ্ছান্তে,<br>
                                        সভাপতি, গভর্নিং বডি<br>
                                        খড় খড়ী উচ্চ বিদ্যালয়, রাজশাহী।

                                    </h4>

                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

@stop