@extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle">  পূর্ববর্তী প্রতিষ্ঠান প্রধাণগন </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> আর্কাইভস <i class="fa fa-angle-right"></i> </li>
              <li class="current"> পূর্ববর্তী প্রতিষ্ঠান প্রধাণগন </li> 
          </ul>  
     </div>
</header>

<div class="section-content">                     
     <div class="entry-content">
       <div class="details col-md-9 col-sm-8 col-xs-12 paddingBot35">   
          <span id="MainContent_lblbcontent"><h4 style="text-align: center;"><strong>পূর্ববর্তী প্রতিষ্ঠান প্রধাণগন</strong></h4>

               <div class="panel panel-tab rounded shadow">
                
                    <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">                                  
                      <table class="table table-striped table-lilac border " border="1" role="grid" aria-describedby="datatable-dom_info">
                        <thead>
                            <tr>
                              <th>Picture</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Phone No:</th>
                            </tr>
                        </thead>

               @if(!empty($allTeachers AND count($allTeachers)>0)) 
                   @foreach($allTeachers as $teacher) 
                      <tr>
                        
                        <td class="previousTeachers" width="16%">
                          <img class="img-thumbnail" src="{{URL::to('assets/teachers/'.$teacher->teacher_image)}}" alt="picture" width="150" height="150">
                        </td>
                        <td>{{$teacher->teacher_name}}</td>
                        <td>{{$teacher->teacher_desi}}</td>
                        <td>{{$teacher->phone_number}}</td>
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
       <!-- page pagination    -->
         <div style="text-align: center; display: block;">    
        <?php echo $allTeachers->render(); ?> 
      </div>  
      </div>

    </div><!-- .entry-content -->
    
 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
    @include('frontend.layouts.includes.importenLink')

</div>
   </div><!--//page-row-->
@endsection