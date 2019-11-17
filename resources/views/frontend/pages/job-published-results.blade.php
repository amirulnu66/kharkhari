@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
        <h1 class="heading-title pull-left">
            <span id="MainContent_lbletitle"> নিয়োগ পরীক্ষার ফলাফল </span>
        </h1>
        <div class="breadcrumbs pull-right">
            <ul>
                <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                <li> একাডেমিক  <i class="fa fa-angle-right"></i> </li>
                <li class="current">নিয়োগ পরীক্ষার ফলাফল</li>

            </ul>
        </div>
    </header>
    <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-sm-8 col-xs-12">
                <div class="row">
         <span id="MainContent_lblbcontent">
            <h3>Published Merit List </h3>
            <div class="panel panel-tab rounded shadow">

                    <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">
                      <table class="table table-striped table-lilac border " border="1" role="grid" aria-describedby="datatable-dom_info">
                        <thead>
                            <tr><th>SL.</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Last Date</th>
                            </tr>
                        </thead>

                          @if(!empty($applicantMeritList AND count($applicantMeritList)>0))
                              @foreach($applicantMeritList as $meritList)
                                  <tr>
                      <td>1 </td>
                      <td>{{$meritList->applicant_name}}</td>
                      <td>{{$meritList->applicant_roll}}</td>
                      <td>{{$meritList->last_date}}</td>
                    </tr>
                              @endforeach
                          @else
                              <tr class="text-center">
                    <td colspan="4"><strong>No Records found</strong></td>
                  </tr>
                          @endif

                    </table>
            </div>
        </div>
              <div>
                <h3>Published Waiting List </h3>
              </div>
            <div class="panel panel-tab rounded shadow">
                    <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">

                      <table class="table table-striped table-lilac " border="1" role="grid" aria-describedby="datatable-dom_info">
                        <thead>
                            <tr><th>SL.</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Last Date</th>
                            </tr>
                        </thead>

                          @if(!empty($applicantWiatingList AND count($applicantWiatingList)>0))
                              @foreach($applicantWiatingList as $WiatingList)
                                  <tr>
                      <td>1 </td>
                      <td>{{$WiatingList->applicant_name}}</td>
                      <td>{{$WiatingList->applicant_roll}}</td>
                      <td>{{$WiatingList->last_date}}</td>
                    </tr>
                              @endforeach
                          @else
                              <tr class="text-center">
                    <td colspan="4"><strong>No Records found</strong></td>
                  </tr>
                          @endif

              </table>
            </div>
        </div>
        </span>
                </div>
            </div>

        </div><!-- .entry-content -->

        <!-- right sitebar here -->
        <div class="col-md-3 col-sm-4 col-xs-12">
            @include('frontend.layouts.includes.importenLink')
        </div>
    </div><!--//page-row-->

@stop