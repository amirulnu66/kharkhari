@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">
                <span id="MainContent_lbletitle">আমাদের অর্জন</span>
            </h1>
            <div class="breadcrumbs pull-right">
                <ul>
                    <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                    <li>আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
                    <li class="current">	আমাদের অর্জন</li>

                </ul>
            </div>
    </header>
    <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-sm-8 col-xs-12 paddingBot35">
                  <div style="margin-bottom: 10px; margin-top: -.01px;">
                    
                            <div class="tab-rutne">
                            <div class="panel panel-info ">
                                <div class="panel-heading result-title">
                                    <h3 class="class-routine-title"> এস.এস.সি পরীক্ষার ফল</h3>
                                </div>
                                <div class="table-overflow result-tab">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10%">পাশের বছর</th>
                                                <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                                                <th width="20%">পাশের হার</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=5; @endphp    
                                         @if(!empty(sscPublicexamResultSuccess()))    
                                            @foreach(sscPublicexamResultSuccess() as $resultInfo)
                                                @if($i>0)
                                            <tr>
                                                <td>{{$resultInfo->pass_year}}</td>
                                                <td>{{$resultInfo->total_std}}</td>
                                                <td>{{$resultInfo->pass_presen}}</td>
                                            </tr>
                                                @endif
                                                @php $i--; @endphp
                                            @endforeach
                                           
                                        @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--//tab-rutne-->

                        <div class="tab-rutne">
                            <div class="panel panel-info">
                                <div class="panel-heading result-title">
                                    <h3 class="class-routine-title">জে.এস.সি পরীক্ষার ফল</h3>
                                </div>
                                <div class="table-overflow result-tab">
                                    <table class="table table-bordered table-hover ">
                                        <thead>
                                            <tr>
                                                <th width="10%">পাশের বছর</th>
                                                <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                                                <th width="20%">পাশের হার</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    @php $i=5; @endphp 
                                     @if(!empty(jscPublicexamResultSuccess()))         
                                        @foreach(jscPublicexamResultSuccess() as $resultInfo)     
                                            @if($i>0)   
                                            <tr>
                                                <td>{{$resultInfo->pass_year}}</td>
                                                <td>{{$resultInfo->total_std}}</td>
                                                <td>{{$resultInfo->pass_presen}}</td>
                                            </tr>
                                            @endif
                                             @php $i--; @endphp

                                        @endforeach  
                                       
                                    @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--//tab-rutne-->
                            
                    </div>
            </div>

        </div><!-- .entry-content -->

        <!-- right sitebar here -->
        <div class="details col-md-3 col-sm-4 col-xs-12">
            @include('frontend.layouts.includes.importenLink')
        </div>

    </div><!--//page-row-->

@stop