 @extends('frontend.master')

@section('title')

@section('contant')
<header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
	   <span id="MainContent_lbletitle">ভৌত অবকাঠামো </span>
     </h1>           
     <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> আমাদের কথা  <i class="fa fa-angle-right"></i> </li>
              <li class="current">	ভৌত অবকাঠামো</li>
               
          </ul>  
     </div>
</header>

 <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-sm-8 col-xs-12 paddingBot35">
                <span id="MainContent_lblecontent">
            <div class="panel panel-tab rounded shadow"> 
              <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">ভবন /গৃহসমূহের অবস্থা , কক্ষ সংখ্যা ও আয়তন </h3>
                </div>
            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline table-responsive">                                  
                <table class="table table-striped table-lilac" role="grid" aria-describedby="datatable-dom_info" border="1">

                  <tbody>
						<tr>
						<td style="text-align: center;"><span style="color: #000000;"><strong>ভবন নং&nbsp;&nbsp;&nbsp; </strong></span></td>
						<td style="text-align: center;"><span style="color: #000000;"><strong>মালকিানা ধরন</strong></span></td>
						<td style="text-align: center;"><span style="color: #000000;"><strong>ভবনরে অবস্থা</strong></span></td>
						<td style="text-align: center;"><span style="color: #000000;"><strong>তলার সংখ্যা&nbsp; </strong></span></td>
						<td style="text-align: center;"><span style="color: #000000;"><strong>রুম সংখ্যা&nbsp;&nbsp;&nbsp; </strong></span></td>
						<td style="text-align: center;"><span style="color: #000000;"><strong>অর্থায়ানরে উৎস নিজস্ব/সরকারী</strong></span></td>
						</tr>
						<tr>
						<td style="text-align: center;"><span style="color: #000000;">&nbsp;১</span></td>
						<td style="text-align: center;"><span style="color: #000000;">&nbsp;নিজস্ব</span></td>
						<td style="text-align: center;"><span style="color: #000000;">&nbsp;নতুন</span></td>
						<td style="text-align: center;"><span style="color: #000000;">&nbsp;১</span></td>
						<td style="text-align: center;"><span style="color: #000000;">&nbsp;</span></td>
						<td style="text-align: center;"><span style="color: #000000;">&nbsp;</span></td>
						
						</tr>
						<tr>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						
						</tr>
						<tr>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						
						</tr>
						<tr>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						<td><span style="color: #000000;">&nbsp;</span></td>
						
						</tr>
						</tbody> 
					</table>	
            </div>
        </div>
        <!-- .// panel-tab -->
		<p style="text-align: left;">
			<span style="color: #000000; font-size: 14pt;">কম্পিউটার  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : আছে</span><br>
		
		
		<span style="color: #000000; font-size: 14pt;">প্রতিষ্ঠানে লাইব্ররেীয়ান আছে কি না&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : আছে </span><br>
		<span style="color: #000000; font-size: 14pt;">খেলার মাঠ আছে কি না&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : আছে</span><br>
		<span style="color: #000000; font-size: 14pt;">মাঠের অবস্থান&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : বিদ্যালয় সংলগ্ন</span><br>
		<span style="color: #000000;"><span style="font-size: 14pt;">বিদ্যুৎ সংযোগ আছে কি না&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : আছে&nbsp; </span><br>
		
		<span style="color: #000000; font-size: 14pt;">পরবিহন ব্যবস্থা আছে&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  </span><br>

		<span style="color: #000000; font-size: 14pt;">মিলনায়তন আছে কি&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : আছে</span><br>

		<span style="color: #000000;"><span style="font-size: 14pt;">ছাত্রদরে শৌচাগারের সংখ্যা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  (অবস্থা : ভাল</span>)</span><br>
		<span style="color: #000000; font-size: 14pt;">ছাত্রীদরে শৌচাগারের সংখ্যা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : (অবস্থা : ভাল) </span><br>
		<span style="color: #000000; font-size: 14pt;">শিক্ষক/শিক্ষিকাদের শৌচাগারের&nbsp; সংখ্যা :  (অবস্থা : ভাল)</span><br>
		<span style="color: #000000; font-size: 14pt;">ব্রেঞ্চের সংখ্যা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  </span><br>
		<span style="color: #000000; font-size: 14pt;">কমিটির ধরণ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : নিয়মিত</span><br>
		<span style="color: #000000;"><span style="font-size: 14pt;">কমিটির মেয়াদ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span> </span><br>
		<span style="font-size: 14pt; color: #000000;">কমিটিতে মোট সদস্য সংখ্যা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span><br>


		<span style="color: #000000;">&nbsp;</span></p>
                </span>
            </div>

        </div><!-- .entry-content -->
    <div class="col-md-3 col-xs-12">

        @include('frontend.layouts.includes.importenLink')

    </div>

</div>
<!--//section-content-->


@stop