@extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle"> একাডেমিক ক্যালেন্ডার </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> একাডেমিক  <i class="fa fa-angle-right"></i> </li>
              <li class="current">  একাডেমিক ক্যালেন্ডার</li>
               
          </ul>  
     </div>
</header>

<div class="section-content">                     
     <div class="entry-content">
       <div class="details col-md-9 col-sm-8 col-xs-12">
         <span id="MainContent_lblbcontent">
           <div class="a_calendar" id="calender">
              <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=mdamirul.venusitltd%40gmail.com&amp;color=%23125A12&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2342104A&amp;src=1172qtefao6bcfbjalvdur8204%40group.calendar.google.com&amp;color=%23A32929&amp;src=jbqi7h6r7k32dj62aen2b8u8hs%40group.calendar.google.com&amp;color=%23711616&amp;src=en.bd%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FDhaka" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no">]
              </iframe>

          </div>
         </span>   
                  
      </div>

    </div><!-- .entry-content -->
    
 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
  @include('frontend.layouts.includes.importenLink')
</div>
   </div><!--//page-row-->
@endsection

