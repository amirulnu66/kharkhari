@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
        @if(!empty($pageInfo) AND $pageInfo->count()>0)
            <h1 class="heading-title pull-left">
                <span id="MainContent_lbletitle">{{$pageInfo->page_title}}</span>
            </h1>
            <div class="breadcrumbs pull-right">
                <ul>
                    <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                    <li>আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
                    <li class="current">	{{$pageInfo->page_title}}</li>

                </ul>
            </div>
        @endif
    </header>
    <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-sm-8 col-xs-12 paddingBot35">
                @if(!empty($pageInfo) AND $pageInfo->count()>0)
                    <span id="MainContent_lblecontent"><h4><strong>{{$pageInfo->sub_title}}-</strong></h4>
                  <h4 class="contant-text" style="text-align: justify;">
                    <?php echo str_replace('<ul><li>','<ul class=""',$pageInfo->page_desc) ?>
                  </h4>
                </span>
                @endif
            </div>

        </div><!-- .entry-content -->

        <!-- right sitebar here -->
        <div class="details col-md-3 col-sm-4 col-xs-12">
            @include('frontend.layouts.includes.importenLink')
        </div>

    </div><!--//page-row-->

@stop