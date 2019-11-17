@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
        <h1 class="heading-title pull-left">
            <span id="MainContent_lblbtitle">ছুটির তালিকা</span>
        </h1>
        <div class="breadcrumbs pull-right">
            <ul>
                <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                <li> তথ্য <i class="fa fa-angle-right"></i> </li>
                <li class="current"> ছুটির তালিকা</li>

            </ul>
        </div>
    </header>
    <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-sm-8 col-xs-12">
                <h4 style="text-align: justify;">১. স্কুলে প্রবেশের পর থেকে ছুটি হবার আগ পর্যন্ত শিক্ষার্থীদের স্কুলের বাইরে যেতে দেয়া হয় না ।<br />২. বাড়ীতে জরুরী কোন প্রয়োজন হলে উপযুক্ত গার্জিয়ান এসে প্রয়োজনীয় কারণ দর্শায়ে দরখাস্ত জমা দিয়ে বাচ্চাকে নিয়ে যেতে পারবেন ।<br />৩. অভিভাবকের সম্মতিসূচক মন্তব্য ছাড়া কেবলমাত্র ছাত্র-ছাত্রীর লেখা দরখাস্ত গ্রহণযোগ্য হবে না ।<br />৪. প্রতিষ্ঠানে আসার পর ছাত্রীদের কোন জরুরী প্রয়োজন হলে সেক্ষেত্রে কর্তৃপক্ষ সহযোগিতা করবে ।</h4>
                <div class="clearfix"></div>
                @if(settingsInfo()->holiday_list)
                <div class="holyday-inner">
                    <h4 class="holyday-title">সরকারি ছুটির তালিকা @php echo date('Y') @endphp</h4>
                    <iframe class="holyday-box" src="{{URL::to('assets/settings/'.settingsInfo()->holiday_list)}}"></iframe>

                </div>
                @endif
            </div>
        </div><!-- .entry-content -->
        <!-- right sitebar here -->
        <div class="col-md-3 col-xs-12">
            @include('frontend.layouts.includes.importenLink')
        </div>

    </div><!--//page-row-->

@stop