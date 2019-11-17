 @extends('frontend.master')

@section('title')

@section('contant')
            <header class="page-heading clearfix">
                 <h1 class="heading-title pull-left">
                <span id="MainContent_lbletitle">শিক্ষক পরিচিতি</span>
                 </h1>           
                  <div class="breadcrumbs pull-right">                       
                      <ul>
                          <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                          <li>  ভর্তি কার্যক্রম <i class="fa fa-angle-right"></i> </li>
                          <li class="current"> শিক্ষক পরিচিতি</li>
                           
                      </ul>  
                 </div>
            </header>

    <div class="section-content">                     
     <div class="entry-content">
     <div class="details col-md-9 col-sm-8 col-xs-12">  
    <span id="MainContent_lblecontent">
          <div class="panel panel-tab rounded shadow"> 
              <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">প্রাথমিক শাখা </h3>
                </div>
            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline table-responsive">                                  
                <table class="table table-striped table-lilac" role="grid" aria-describedby="datatable-dom_info" border="1">
                  <thead>
                      <tr>

                          <th>SL.</th>
                          <th width="60px;">Photo</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Department</th>
                          <th>Contact No.</th>
                          
                      </tr>
                  </thead>
                  

                     <tbody>
                         <tr>
                            <td>01</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W1.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সি: নৈবেদ্য, এসএমআরএ </td>
                          <td>প্রধান শিক্ষক </td>
                          <td></td>
                          <td>01793-380821 </td>
                      </tr>
                        
                        <tr>
                            <td>02</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W2.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>শিল্পী ক্রশ </td>
                          <td>সহকারী প্রধান শিক্ষক </td>
                          <td></td>
                          <td>01737-950400 </td>
                          
                    </tr>

                    <tr>
                            <td>03</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W3.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>জাহানারা বেগম</td>
                          <td>সহকারী শিক্ষক</td>
                          <td></td>
                          <td>01724-593779</td>
    
                      
                    </tr>
                        
                        <tr>
                            <td>04</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W4.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মারিয়া কোড়াইয়া </td>
                          <td>সহকারি শিক্ষক  </td>
                          <td></td>
                          <td>01708-878353</td>
                          
                    </tr>
                        
                        <tr>
                            <td>05</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W5.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মিনতি দাস</td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01728-323029</td>
                          
                    </tr>
                        
                        <tr>
                            <td>06</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W6.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>শান্তি কস্তা</td>
                          <td> সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01737-122397</td>
                          
                    </tr>
                        
                        <tr>
                            <td>07</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W7.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>পলিনা ছেরাও</td>
                          <td> সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01784-791188 </td>
                          
                    </tr>
                        
                        <tr>
                            <td>08</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W8.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>গরেট্টি কোড়াইয়া</td>
                          <td> সিনিয়র সহকারি </td>
                          <td></td>
                          <td>01708-878352</td>
                          
                    </tr>
                        
                        <tr>
                            <td>09</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W9.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>বাতাসি মিঞ্জ</td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01708-878356</td>
                          
                    </tr>
                        
                        <tr>
                            <td>10</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W10.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>স্বপন রোজারিও </td>
                          <td> সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01753-023642 </td>
                          
                    </tr>
                        
                        <tr>
                            <td>11</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W11.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>অরুণ গাব্রিয়েল রেগ</td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td></td>
                          
                    </tr>
                        
                        <tr>
                            <td>12</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W12.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>শিমন বিশ্বা </td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01780-839979</td>
                          
                    </tr>
                        
                        <tr>
                            <td>13</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W13.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>আনন্দ তারশিশিউস গমেজ </td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01748-915397</td>
                          
                    </tr>
                        
                        <tr>
                            <td>14</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W14.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সামুয়েল রিবেরু </td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01732-262238</td>
                          
                    </tr>
                        
                        <tr>
                            <td>15</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/primary/W15.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>কাজল রোজারিও </td>
                          <td>সহকারি শিক্ষক </td>
                          <td></td>
                          <td>01732-005143 </td>
                          
                    </tr>


                    </tbody>
                </table> 
            </div>
        </div>
        <!-- .// panel-tab -->
      </span>  
     </div>

    </div><!-- .entry-content -->

      <div id="MainContent_UsefulLinksDiv" class="col-md-3 col-xs-12" style="padding-right: 0px;">
       
          @include('frontend.layouts.includes.importenLink')
      
  </div>

   </div><!--//page-row-->

@stop