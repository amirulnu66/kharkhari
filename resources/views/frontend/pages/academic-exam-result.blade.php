@extends('frontend.master')

@section('title')

@section('contant')
                                            
<header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
      একাডেমিক পরীক্ষার ফলাফল
     </h1>           
     <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> একাডেমিক <i class="fa fa-angle-right"></i> </li>
              <li class="current"> ফলাফল</li>
               
          </ul>  
     </div>
</header>

<div class="section-content">                     
     <div class="entry-content step-container">
       <div class="details col-md-9 col-sm-8 col-xs-12">
          <span id="MainContent_lblbcontent">
          <div class="course-item-wrapper border-top2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 student-database">
               <form id="academic_result_search_form" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                        <div class="col-md-4">
                            <label for="firstname" class="control-label">Year</label>
                            <select class="form-control academicYear" id="academic_year" name="academic_year">
                              <option value="" disabled selected>Choose an option</option>
                              @if(!empty($academicYearList) AND count($academicYearList)>0)
                                  @foreach($academicYearList as $year)
                                      <option value="{{$year->id}}">{{$year->year_name}}</option>
                                  @endforeach
                              @endif
                          </select>
                        </div>
                        <div class="col-md-4">
                       <label for="firstname" class="control-label">Level</label>
                        <select class="form-control academicLevel" id="academic_level" name="academic_level">
                            <option value="" disabled selected>Choose an option</option>
                        </select>
                      </div>

                    <div class="col-md-4">
                      <label for="firstname" class="control-label">Batch</label>
                      <select class="form-control academicBatch" id="batch" name="batch">
                          <option value="" disabled selected>Choose an option</option>
                      </select>
                    </div>
                </div><br>

                <div class="row">
                        <div class="col-md-4">
                            <label for="firstname" class="control-label">Section</label>
                            <select class="form-control academicSection" id="section" name="section">
                                <option value="" disabled selected>Choose an option</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                       <label for="firstname" class="control-label">Semester</label>
                        <select class="form-control academicSemester" id="semester" name="semester">
                            <option value="" disabled selected>Choose an option</option>
                        </select>
                      </div>

                    <div class="col-md-4">
                      <label for="firstname" class="control-label">Student Roll *</label>
                      <input id="gr_no" type="text" name="gr_no" class="form-control studentGrNo">
                    </div>
                </div><br>
                <div class="row">   
                  <div class="col-md-12 col-xs-12 student-data-btn text-center">
                  <button id="academic_result_search_button" type="button" class="btn btn-success tran3s p-color-bg themehover text-transform" title="Search">
                  Search Result</button>
                </div>  
              </div>
            </form>
          <!--.//end form-->
            </div>
          </div> <!-- /.course-item-wrapper -->  
          <div class="clearfix"></div>
          <div id="academic_result_container" class="row"></div>

          </span>
        </div>

    </div><!-- .entry-content -->
    
 <!-- right sitebar here -->
 <div class="col-md-3 col-sm-4 col-xs-12">
    @include('frontend.layouts.includes.importenLink')
  </div>
   </div><!--//page-row-->
<script>
        $(document).ready(function () {
            var campus_id = "{{env('CAMPUS_ID')}}";
            var institute_id = "{{env('INSTITUTE_ID')}}";

            // request for parent list using batch section id
            $('#academic_result_search_button').click(function () {
                // section
                var section = $('#section').val();
                var semester = $('#semester').val();
                var gr_no = $('#gr_no').val();
                // checking
                if(campus_id && institute_id && section && semester && gr_no){
                    // ajax request
                    $.ajax({
                        url: "{{URL::to('/academic/exam/result-list')}}",
                        type: 'POST',
                        cache: false,
                        data: $('form#academic_result_search_form').serialize(),
                        datatype: 'html',

                        beforeSend: function() {
                            // show waiting dialog
                              waitingDialog.show('Loading...');
                        },

                        success:function(data){
                            // hide waiting dialog
                             waitingDialog.hide();
                            // append data
                            var academic_result_container = $('#academic_result_container');
                            academic_result_container.html('');
                            academic_result_container.append(data);
                        },

                        error:function(data){
                            // hide waiting dialog
                           waitingDialog.hide();
                            alert('No response from server');
                        }
                    });
                }else{
                    // alert
                    alert('Please check all inputs are selected');
                }
            });

            // request for batch list using level id
            jQuery(document).on('change','.academicYear',function(){
                // console.log("hmm its change");

                // get academic year id
                var year_id = $(this).val();
                var div = $(this).parent();
                var op="";

                // checking
                if(campus_id && institute_id){
                    $.ajax({
                        url: "{{env("EMS_URL")}}/api/get-academic-level-list",
                        type: 'POST',
                        cache: false,
                        data: {
                            "institute":institute_id,
                            "campus":campus_id,
                            "id":year_id
                        }, //see the $_token
                        datatype: 'application/json',

                        beforeSend: function() {
                            // clear std list container
                            $('#academic_result_container').html('');
                        },

                        success:function(response){
                            // checking
                            if(response.status=='success'){
                                var data = response.data;
                                //console.log(data.length);
                                op+='<option value="0" selected>--- Select Level ---</option>';
                                for(var i=0;i<data.length;i++){
                                    // console.log(data[i].level_name);
                                    op+='<option value="'+data[i].id+'">'+data[i].level_name+'</option>';
                                }

                                // set value to the academic secton
                                $('.academicSection').html("");
                                $('.academicSection').append('<option value="" selected>--- Select Section ---</option>');

                                // set value to the academic batch
                                $('.academicBatch').html("");
                                $('.academicBatch').append('<option value="" selected>--- Select Batch ---</option>');

                                // set value to the academic batch
                                $('.academicLevel').html("");
                                $('.academicLevel').append(op);
                                // load semester
                                loadSemester();
                            }else{
                                alert(response.msg);
                            }
                        },

                        error:function(data){
                            alert('No response from server');
                        }
                    });
                }else{
                    // alert
                    alert('School Information not found');
                }
            });

            // request for batch list using level id
            jQuery(document).on('change','.academicLevel',function(){
                // get academic level id
                var level_id = $(this).val();
                var div = $(this).parent();
                var op="";

                // checking
                if(campus_id && institute_id){
                    $.ajax({
                        url: "{{env("EMS_URL")}}/api/get-academic-batch-list",
                        type: 'POST',
                        cache: false,
                        data: {
                            "institute":institute_id,
                            "campus":campus_id,
                            "id":level_id
                        }, //see the $_token
                        datatype: 'application/json',

                        beforeSend: function() {
                            // clear academic_class_routine_container
                            $('#academic_result_container').html('');
                        },

                        success:function(response){
                            if(response.status=='success') {
                                var data = response.data;

                                //console.log(data.length);
                                op += '<option value="" selected>--- Select Batch ---</option>';
                                for (var i = 0; i < data.length; i++) {
                                    op += '<option value="' + data[i].id + '">' + data[i].batch_name + '</option>';
                                }

                                // set value to the academic batch
                                $('.academicBatch').html("");
                                $('.academicBatch').append(op);

                                // set value to the academic secton
                                $('.academicSection').html("");
                                $('.academicSection').append('<option value="0" selected>--- Select Section ---</option>');
                                // load semester
                                loadSemester();
                            }else {
                                alert(response.msg);
                            }
                        },

                        error:function(data){
                            alert('No response from server');
                        }
                    });
                }else{
                    // alert
                    alert('School Information not found');
                }
            });

            // request for section list using batch id
            jQuery(document).on('change','.academicBatch',function(){
                // get academic level id
                var batch_id = $(this).val();
                var div = $(this).parent();
                var op="";
                // checking
                if(campus_id && institute_id){
                    $.ajax({
                        url: "{{env("EMS_URL")}}/api/get-academic-section-list",
                        type: 'POST',
                        cache: false,
                        data: {
                            "institute":institute_id,
                            "campus":campus_id,
                            "id":batch_id
                        }, //see the $_token
                        datatype: 'application/json',

                        beforeSend: function() {
                            // clear academic_class_routine_container
                            $('#academic_result_container').html('');
                        },

                        success:function(response){
                            if(response.status=='success') {
                                var data = response.data;

                                //console.log(data.length);
                                op+='<option value="" selected>--- Select Section ---</option>';
                                for(var i=0;i<data.length;i++){
                                    op+='<option value="'+data[i].id+'">'+data[i].section_name+'</option>';
                                }

                                // set value to the academic batch
                                $('.academicSection').html("");
                                $('.academicSection').append(op);
                                // load semester
                                loadSemester();
                            }else {
                                alert(response.msg);
                            }
                        },

                        error:function(data){
                            alert('No response from server');
                        }
                    });
                }else{
                    // alert
                    alert('School Information not found');
                }
            });

            // request for section list using batch id
            jQuery(document).on('change','.academicSemester',function(){
                // clear std list container
                $('#academic_result_container').html('');
            });
            
            // load semester
            function loadSemester() {
                // get academic level id
                var year_id = $('#academic_year').val();
                var level_id = $('#academic_level').val();
                var batch_id = $('#batch').val();
                // select option
                var op="";
                // checking
                if(campus_id && institute_id && campus_id && year_id && level_id && batch_id){
                    $.ajax({
                        url: "{{env("EMS_URL")}}/api/get-academic-batch-semester-list",
                        type: 'POST',
                        cache: false,
                        data: {
                            "institute_id":institute_id,
                            "campus_id":campus_id,
                            "year_id":year_id,
                            "level_id":level_id,
                            "batch_id":batch_id
                        },
                        datatype: 'application/json',

                        beforeSend: function() {
                            // clear academic_class_routine_container
                            $('#academic_class_routine_container').html('');
                        },

                        success:function(response){
                            if(response.status=='success') {
                                var data = response.data;

                                //console.log(data.length);
                                op+='<option value="" selected>--- Select Semester ---</option>';
                                for(var i=0;i<data.length;i++){
                                    op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                                }

                                // set value to the academic batch
                                $('.academicSemester').html("");
                                $('.academicSemester').append(op);
                                // shift reset
                                $('#shift option:first').prop('selected', true);
                            }else {
                                alert(response.msg);
                            }
                        },

                        error:function(data){
                            alert('No response from server');
                        }
                    });
                }else{
                    op+='<option value="" selected>--- Select Semester ---</option>';
                    // set value to the academic batch
                    $('.academicSemester').html("");
                    $('.academicSemester').append(op);
                }
            }

        });
    </script>

@endsection