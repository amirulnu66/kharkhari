@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
        <h1 class="heading-title pull-left">
            <span id="MainContent_lblbtitle">চাকুরীর বিজ্ঞপ্তি</span>
        </h1>
        <div class="breadcrumbs pull-right">
            <ul>
                <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                <li> নিয়োগ <i class="fa fa-angle-right"></i> </li>
                <li class="current"> চাকুরী বিজ্ঞপ্তি</li>

            </ul>
        </div>
    </header>

    <div class="section-content">

        <div class="details col-md-9 col-sm-8 col-xs-12">
            <span id="MainContent_lblbcontent"></span>
            <h1><strong>কোন বিজ্ঞপ্তি প্রকাশ করা হয়নি</strong></h1>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-12">
            @include('frontend.layouts.includes.importenLink')
        </div>
    </div><!-- .section-content -->


@stop