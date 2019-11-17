@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
        <h1 class="heading-title pull-left">
            <span id="MainContent_lblbtitle">লাইব্রেরী</span>
        </h1>
        <div class="breadcrumbs pull-right">
            <ul>
                <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                <li> তথ্য <i class="fa fa-angle-right"></i> </li>
                <li class="current">লাইব্রেরী</li>

            </ul>
        </div>
    </header>

    <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-sm-8 col-xs-12">

       <span id="MainContent_lblbcontent"><h4 style="text-align: center;"><strong>লাইব্রেরী</strong> <strong>রুমের</strong> <strong>আসবাবপত্র</strong> <strong>ও</strong> <strong>সরঞ্জামাদি</strong></h4>

            <div class="panel panel-tab rounded shadow">
                <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">
                    <table class="table table-striped table-lilac" role="grid" aria-describedby="datatable-dom_info" border="1">
                      <thead>
                          <tr>
                              <th>SL No:</th>
                              <th>নাম</th>
                              <th>সংখ্যা</th>

                          </tr>
                      </thead>

                         <tbody>
                      @if(!empty($libraries))
                         @foreach($libraries as $index=>$library)
                             <tr>
                              <td width="65px;">{{$index+1}}</td>
                              <td>{{$library->library_name}}</td>
                              <td>{{$library->quenty}}</td>
                            </tr>
                         @endforeach
                      @else
                         <tr class="text-center" style="font-weight: bold;">
                             <td colspan="3"><storng>No Records Found</storng></td>
                         </tr>

                      @endif
                        </tbody>
                    </table>
                </div>
            </div>
           {{--.//panel-tab--}}

                <h4>&nbsp;</h4>
                <h4 style="text-align: center;"><strong>লাইব্রেরী</strong> <strong>সংক্রান্ত</strong> <strong>নির্দেশনা</strong></h4>
                <h4>&nbsp;</h4>

                <h4>১. শৃংখলা বজায় রাখুন ও নিরবতা পালন করুন ।</h4>
                <h4>২. ১৫ দিনের মধ্যে বই ফেরত প্রদান করুন ।</h4>
                <h4>৩. সঠিক সময়ের মধ্যে বই ফেরত প্রদান না করিলে জরিমানা প্রদান করতে হবে।</h4>
                <h4>৪. যথারীতি সম্মান প্রদর্শন পূর্বক লাইব্রেরী রুমে প্রবেশ করুন ।</h4>
                <h4>৫. ষষ্ট ও সপ্তম শ্রেণী- বই জমা দেবার দিন শনি ও রবি বার। সময় – ১টা – ২টা।</h4>
                <h4>৬. অষ্টম ও নবম শ্রেণী- বই জমা দেবার দিন সোম ও মঙ্গল বার। সময় – ১টা – ২টা।</h4>
                <h4>৭. দশম ও একাদশ- দ্বাদশ শ্রেণী বই জমা দেবার দিন বুধ ও বৃহস্পতি বার। সময় – ১২টা – ২টা।</h4>

                <h4>&nbsp;</h4>

                </span>
            </div><!-- .entry-content -->

        </div>

            <!-- right sitebar here -->
            <div class="details col-md-3 col-sm-4 col-xs-12">
                @include('frontend.layouts.includes.importenLink')

            </div>
        </div><!--//page-row-->

@stop