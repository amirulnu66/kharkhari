 @extends('frontend.master')

@section('title')

@section('contant')
  <header class="page-heading clearfix">
             <h1 class="heading-title pull-left">
               <span id="MainContent_lbletitle">ক্লাস রুটিন</span>
             </h1>           
              <div class="breadcrumbs pull-right">                       
                  <ul>
                      <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                      <li>  ভর্তি কার্যক্রম <i class="fa fa-angle-right"></i> </li>
                      <li class="current"> ক্লাস রুটিন</li>
                       
                  </ul>  
             </div>
        </header>
    <div class="section-content">                     
     <div class="entry-content">
     <div class="details col-md-9 col-sm-8 col-xs-12">
      <span id="MainContent_lblecontent"></span>  
      <div class="course-item-wrapper border-top2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 student-database">
               <form id="time_table_search_form" class="form-horizontal">
                <input name="_token" value="TX2AhleaEJYLd2LxyUbug9IO8z3zAJ6Wf65YeKoF" type="hidden">
                <div class="row">
                        <div class="col-md-3">
                            <label for="firstname" class="control-label">Level</label>
                            <select class="form-control academicLevel" id="academic_level" name="academic_level">
                              <option value="" disabled="" selected="">Choose an option</option>
                              <option value="4">Junior High</option>
                              <option value="5">Secondary</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                       <label for="firstname" class="control-label">Class</label>
                        <select class="form-control academicBatch" id="batch" name="batch">
                        <option value="" selected="">Choose an option</option>
                        <option value="11">Class - 06 (Six)</option>
                        <option value="12">Class - 07 (Seven)</option>
                        <option value="13">Class 08 (Eight)</option>
                    </select>
                      </select>
                      </div>

                    <div class="col-md-3">
                      <label for="firstname" class="control-label">Section</label>
                      <select class="form-control academicSection" id="section" name="section">
                        <option value="" selected="">Choose an option</option>
                        <option value="11">A</option>
                        <option value="32">B</option>
                        <option value="33">C</option>
                        <option value="27">D</option>
                        <option value="73">F</option>
                    </select>
                    </div>

                    <div class="col-md-3">
                      <label for="firstname" class="control-label">Shift</label>
                      <select class="form-control academicShift" id="shift" name="shift">
                        <option value="" disabled="" selected="">Choose an option</option>
                        <option value="0">Day</option>
                        <option value="1">Morning</option>
                      </select>
                    </div>
                </div><br>

                <div class="row">   
                          <div class="col-md-12 col-xs-12 student-data-btn text-center">
                          <button id="time_table_search_button" type="button" class="btn btn-success tran3s p-color-bg themehover text-transform" title="Send">
                          View Routine</button>
                        </div>  
                      </div>
                 </form>
 
            </div>
            <div class="clearfix"></div>
                <div id="academic_class_routine_container" class="tab-rutne">
                    <div class="details">
         <span id="MainContent_lblbcontent"></span>   
         <div class="panel panel-tab rounded shadow">
              <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline ">    
                <h3 class="exam-result">ক্লাস রুটিন</h3>                                      
                <div class="table-overflow">
                    <table class="table table-bordered table-hover">
                       <thead>
                       <tr>
                          <th class="text-center" width="12%">#</th>
                          <th class="text-center">P1</th>
                          <th class="text-center">P2</th>
                          <th class="text-center">P3</th>
                          <th class="text-center">Tiffin</th>
                          <th class="text-center">P4</th>
                          <th class="text-center">P5</th>
                          <th class="text-center">P6</th>
                        </tr>
                       </thead>
                       <tbody>
                       
                                                  <tr>
                               <td>Saturday</td>
                               
                                                              
                                                              
                                                                  
                                                                          
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                         
                               
                                                                  
                                                                          
                                                                              
                                                                                  <td>
                                               BAN-101<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               MATH-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ENG-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               BAN-102<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               GS-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               RS<br>
                                               ()
                                           </td>
                                                                                                                                    </tr>
                                                  <tr>
                               <td>Sunday</td>
                               
                                                              
                                                              
                                                                  
                                                                          
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                         
                               
                                                                  
                                                                          
                                                                              
                                                                                  <td>
                                               BAN-101<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               MATH-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ENG-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               BAN-102<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               GS-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               RS<br>
                                               ()
                                           </td>
                                                                                                                                    </tr>
                                                  <tr>
                               <td>Monday</td>
                               
                                                              
                                                              
                                                                  
                                                                          
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                         
                               
                                                                  
                                                                          
                                                                              
                                                                                  <td>
                                               BAN-101<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               MATH-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               BAN-101<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               PEH<br>
                                               (Zahirul)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               GS-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               RS<br>
                                               ()
                                           </td>
                                                                                                                                    </tr>
                                                  <tr>
                               <td>Tuesday</td>
                               
                                                              
                                                              
                                                                  
                                                                          
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                         
                               
                                                                  
                                                                          
                                                                              
                                                                                  <td>
                                               BGS<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               MATH-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ENG-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               PEH<br>
                                               (Zahirul)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               GS-101<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                    </tr>
                                                  <tr>
                               <td>Wednesday</td>
                               
                                                              
                                                              
                                                                  
                                                                          
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                         
                               
                                                                  
                                                                          
                                                                              
                                                                                  <td>
                                               BGS<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ICT-1<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ENG-102<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               FA<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               Agricultur<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               Work<br>
                                               ()
                                           </td>
                                                                                                                                    </tr>
                                                  <tr>
                               <td>Thursday</td>
                               
                                                              
                                                              
                                                                  
                                                                          
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                                 
                                                                                                         
                               
                                                                  
                                                                          
                                                                              
                                                                                  <td>
                                               BGS<br>
                                               (Mojibur)
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ICT-1<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               ENG-102<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td> - </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               FA<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               Agricultur<br>
                                               ()
                                           </td>
                                                                                                                                            
                                                                          
                                                                              
                                                                                  <td>
                                               Work<br>
                                               ()
                                           </td>
                                                                                                                                    </tr>
                                                  <tr>
                               <td>Friday</td>
                               <td> - </td>
                                <td> - </td>
                                 <td> - </td>
                                <td> - </td>
                                <td> - </td>
                                <td> - </td>
                                <td> - </td>
                                                                                                                                    </tr>
                            </tbody>
                   </table>
                          </div> 
                
            </div>
        </div> 
      </div>
</div>
          </div>
     </div>

    </div><!-- .entry-content -->
    	 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
  @include('frontend.layouts.includes.importenLink')
</div>

   </div><!--//page-row-->     

@stop