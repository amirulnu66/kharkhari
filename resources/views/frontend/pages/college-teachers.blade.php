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
                    <h3 class="institute-title text-center">কলেজ শাখা </h3>
                </div>
            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline table-responsive">                                  
                <table class="table table-striped table-lilac" role="grid" aria-describedby="datatable-dom_info" border="1">
                  <thead>
                      <tr>

                          <th>SL.</th>
                          <th width="65px">Photo</th>
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
                            <img src="{{URL::to('frontend')}}/images/college/W1.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: নাজমুল হোসেন </td>
                          <td>শিক্ষক </td>
                          <td>Economics</td>
                          <td>01711-218130</td>
                          
                    </tr>

                    <tr>
                            <td>02</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W2.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: আসাদুজ্জামান </td>
                          <td>শিক্ষক</td>
                          <td>Accounting</td>
                          <td>01722-539889</td>
                          

                    </tr>
                        
                        <tr>
                            <td>03</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W3.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: আবু রায়হান </td>
                          <td>শিক্ষক </td>
                          <td>Bangla</td>
                          <td>01723-090772</td>
                          
                    </tr>
                        
                        <tr>
                            <td>04</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W4.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>গৌর কুমার ঘোষ </td>
                          <td>শিক্ষক </td>
                          <td>Mamagement</td>
                          <td>01714-659158</td>
                          
                    </tr>
                        
                        <tr>
                            <td>05</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W5.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: আসাদুজ্জামান </td>
                          <td> শিক্ষক </td>
                          <td>Statics</td>
                          <td>01723-153269</td>
                          
                    </tr>
                        
                        <tr>
                            <td>06</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W6.jpg" alt="image" width="65" height="65">
                          </td>
                          <td> মো: মাসুদ রানা </td>
                          <td> শিক্ষক </td>
                          <td>Biology</td>
                          <td>01723-662264 </td>
                          
                    </tr>
                        
                        <tr>
                            <td>07</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W7.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সুমন সরেন </td>
                          <td> শিক্ষক </td>
                          <td>History</td>
                          <td>01712-559740</td>
                          
                    </tr>
                        
                        <tr>
                            <td>08</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W8.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>পরিমল কস্তা </td>
                          <td> শিক্ষক </td>
                          <td>ICT</td>
                          <td>01712-931318 </td>
                          
                    </tr>
                        
                        <tr>
                            <td>09</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W9.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মোছা: লুৎফা খাতুন </td>
                          <td> শিক্ষক </td>
                          <td>Civics</td>
                          <td>01912-349020 </td>
                          
                    </tr>
                        
                        <tr>
                            <td>10</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W10.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>লক্ষিরাম মুর্মু</td>
                          <td> শিক্ষক </td>
                          <td>Higher Math</td>
                          <td>01723-972156 </td>
                          
                      </tr>
                        
                        <tr>
                            <td>11</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W11.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: সাখাওয়াত হোসেন  </td>
                          <td> শিক্ষক </td>
                          <td>Chmestry</td>
                          <td>01717-000461 </td>
                          
                      </tr>
                        
                        <tr>
                            <td>12</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W12.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>আব্দুস সালাম  </td>
                          <td> শিক্ষক </td>
                          <td>Physics</td>
                          <td>01722-054794
 </td>
                          
                      </tr>
                        
                        <tr>
                            <td>13</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W13.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মোছা: সেলিনা আক্তার  </td>
                          <td> শিক্ষক </td>
                          <td>phychology</td>
                          <td>01711-107676
 </td>
                          
                      </tr>
                        
                        <tr>
                            <td>14</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W14.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>একরাম হোসেন খান </td>
                          <td> শিক্ষক </td>
                          <td> English</td>
                          <td>01728-365055 </td>
                          
                      </tr>
                        
                        <tr>
                            <td>15</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W15.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>জয়শ্রী সরকার </td>
                          <td> শিক্ষক </td>
                          <td>Bangla</td>
                          <td>01732-020178 </td>
                          
                      </tr>
                        
                        <tr>
                            <td>16</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/college/W16.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>বিনয় মুর্মু </td>
                          <td> শিক্ষক </td>
                          <td>Bangla</td>
                          <td>01755-404839 </td>
                          
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