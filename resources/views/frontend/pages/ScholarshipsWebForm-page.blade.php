@extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle">  স্কলারশীপ </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> একাডেমিক  <i class="fa fa-angle-right"></i> </li>
              <li class="current"> স্কলারশীপ</li>
               
          </ul>  
     </div>
</header>

<div class="section-content">                     
       <div class="details col-md-9 col-sm-8 col-xs-12">
         <span id="MainContent_lblbcontent"> 
          <!-- <h3>উপবৃত্তি প্রাপ্ত ছাত্র/ছাত্রীর তালিকা</h3> -->

          <div class="panel panel-tab rounded shadow">
            <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">উপবৃত্তি প্রাপ্ত ছাত্র/ছাত্রীর তালিকা </h3>
                </div>
            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">                                  
                <table class="table table-striped table-lilac text-center" border="1" role="grid" aria-describedby="datatable-dom_info">
                  <thead>
                      <tr><th>SL.</th>
                          <th>Student Name</th>
                          <th>Student Roll</th>
                          <th>Student Class</th>
                          <th>Photo</th>
                      </tr>
                  </thead>
                 
                  
                    <tr>
                      <td>01</td>
                      <td>Name</td>
                      <td>Roll</td>
                      <td>Class</td>
                      <td>
                        <img src="" alt="image" width="50" height="50" >
                      </td>
                    </tr>
                
                  
                  <!-- <tr class="text-center">
                    <td colspan="4"><strong>No Records found</strong></td>
                  </tr> -->
               
                
                    </table> 
            </div>
        </div>
         </span>   
            
      </div>
    
 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
    @include('frontend.layouts.includes.importenLink')
  </div>
   </div><!--//page-row-->
@endsection