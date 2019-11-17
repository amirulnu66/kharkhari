@extends('admin.layouts.master')
@section('title', 'Dashboard Panel')

@section('content')
          <section class="wrapper site-min-height" style="background-color: #fff">
              <!--dashboard-inner-->
              <div class="dashboard-inner">
              <div class="row">
              	<div class="col-lg-12 col-md-12">             		
              		 <div class="row state-overview">
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/teachers/message-show')}}" ><i class="fa fa-users"></i></a>
                          	<h4>Headmaster</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/governing/member/show')}}" ><i class="fa fa-users"></i></a>
                            <h4>Managing Committee</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                         <div class="panel-inner">
                              <a href="{{URL::to('admin/home/sliders/show')}}" ><i class="fa fa-th-large"></i></a>
                            <h4>Home Slide</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/institute/history/show')}}" ><i class="fa fa-tasks"></i></a>
                            <h4>Institute History</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/public/result/create')}}" ><i class="fa fa-sitemap"></i></a>
                            <h4>Public Exam</h4>      
                          </div>
                      </section>
                  </div>
                  <!-- <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                         <div class="panel-inner">
                            <a href="{{URL::to('/admin/class/topper/show')}}" ><i class="fa fa-align-left"></i></a>
                            <h4>Class Topper</h4>      
                          </div>
                          
                      </section>
                  </div> -->
                
                  
              </div><!--//state-overview-->
              	</div>
              </div><!--.//row-->

              <div class="row">
              	<div class="col-lg-12 col-md-12">             		
              		 <div class="row state-overview">
                    <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                         <div class="panel-inner">
                              <a href="{{URL::to('/admin/photo/gallery/list')}}" ><i class="fa fa-th-large"></i></a>
                            <h4>Gallery</h4>      
                          </div>
                      </section>
                  </div>
                  
                  <div class="col-lg-2 col-sm-4">
                    <section class="panel">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/related/page/list')}}" ><i class="fa fa-tasks"></i></a>
                            <h4>Sports</h4>      
                          </div>
                      </section>
                     
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                           <div class="panel-inner">
                              <a href="{{URL::to('/academic/notice/list')}}" ><i class="fa fa-bell"></i></a>
                            <h4>Notice</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                        <div class="panel-inner">
                              <a href="{{URL::to('/admin/school/library/list')}}" ><i class="fa fa-outdent"></i></a>
                            <h4>Library</h4>      
                          </div>
                          
                      </section>
                  </div>
                  <!-- <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                           <div class="panel-inner">
                              <a href="{{URL::to('/student/scholarships/list')}}" ><i class="fa fa-check-square"></i></a>
                            <h4>Scholarship</h4>      
                          </div>
                      </section>
                  </div> -->
                   <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                           <div class="panel-inner">
                              <a href="{{url('/job/applicant/merit/list')}}" ><i class="fa fa-address-book"></i></a>
                            <h4>Job Applycant</h4>      
                          </div>
                      </section>
                  </div>
                  
              </div><!--//state-overview-->
              	</div>
              </div><!--.//row-->
              <div class="row">
                <div class="col-lg-12 col-md-12">                 
                   <div class="row state-overview">
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                           <div class="panel-inner">
                              <a href="{{url('/academic/fees/list')}}" ><i class="fa fa-dollar"></i></a>
                            <h4>Fees</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                           <div class="panel-inner">
                              <a href="{{url('/admin/users/show')}}" ><i class="fa fa-user"></i></a>
                            <h4>User</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel">
                         <div class="panel-inner">
                            <a href="{{URL::to('/institute/settings/edit')}}" ><i class="fa fa-wrench"></i></a>
                            <h4>Settings</h4>      
                          </div>
                          
                      </section>
                  </div>
              </div><!--//state-overview-->
                </div>
              </div> <!--.//row-->     
            </div><!--//dashboard-inner-->
              <!-- page end-->
          </section>
@endsection
