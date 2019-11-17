 @extends('frontend.master')

 @section('title')

 @section('contant')
 
 <header class="page-heading clearfix">
   <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle">প্রতিষ্ঠানের ইতিহাস</span>
  </h1>           
  <div class="breadcrumbs pull-right">                       
    <ul>
      <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
      <li> আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
      <li class="current">	প্রতিষ্ঠানের ইতিহাস</li>
      
    </ul>  
  </div>
</header>


<div class="section-content">  
 <div class="entry-content">
   <div class="details col-md-9 col-xs-12">
    @if($histri =instituteHistory())
    <span id="MainContent_lblecontent">

      <img style=" margin-left: auto; margin-right: auto; margin-bottom: 30px;" src="{{URL::to('assets/histori/'.$histri->image)}}" alt="" width="100%" height="350" />

    <h4 style="text-align: justify; line-height: 28px; margin-bottom: 40px;"> 
      {{$histri->history_desc}}
    </h4>
  </span> 
  @endif
</div>

</div><!-- .entry-content -->
<div class="col-md-3 col-xs-12">

  @include('frontend.layouts.includes.importenLink')

</div>

</div><!--//page-row-->

@stop