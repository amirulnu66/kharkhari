@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">
                <span id="MainContent_lbletitle">অর্জন ও সাফল্য</span>
            </h1>
            <div class="breadcrumbs pull-right">
                <ul>
                    <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                    <li>আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
                    <li class="current">	অর্জন ও সাফল্য</li>

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
                                    <h3 class="class-routine-title"> বিগত ৫ বছরের প্রতিষ্ঠানের বোর্ড পরিক্ষার ফলাফল</h3>
                                </div>
                                <div class="table-overflow result-tab learn-success">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10%">পাশের বছর</th>
                                                <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                                                <th width="20%">জেএসসি পাশের হার</th>
                                                <th width="20%">এস.এস.সি পাশের হার</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(sscPublicexamResult() as $resultInfo)
                                            <tr>
                                                <td>{{$resultInfo->pass_year}}</td>
                                                <td>{{$resultInfo->total_std}}</td>
                                                <td>{{$resultInfo->pass_presen}}</td>
                                                <td>{{$resultInfo->pass_presen}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--//tab-rutne-->
                            
                    </div>
            </div>

        </div><!-- .entry-content -->

        <!-- right sitebar here -->
        <div class="details col-md-3 col-sm-4 col-xs-12">
            @include('frontend.layouts.includes.importenLink')
        </div>

    </div><!--//page-row-->

@stop