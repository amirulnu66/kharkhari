 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{URL::to('/admin/dashboard')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{url('/admin/teachers/message-show')}}" >
                          <i class="fa fa-user"></i>
                          <span>Manage Teacher's Message </span>
                      </a>
                     <!--  <ul class="sub">
                          <li><a  href="{{url('/admin/teachers/message-create')}}">Create Teacher's Message</a></li>
                          <li><a  href="{{url('/admin/teachers/message-show')}}">Manage Teacher's Message</a></li>
                          
                      </ul> -->
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Managing Committee</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/governing/member/create')}}">Create Member</a></li> 
                          <li><a  href="{{url('/admin/governing/member/show')}}">Member List</a></li> 
                          <!-- <li><a  href="{{url('/admin/governing/page/title-create')}}">Create Title</a></li> 
                          <li><a  href="{{url('/admin/governing/page/title-show')}}">Manage Title</a></li> --> 
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sliders"></i>
                          <span>Home Slide</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/home/sliders/create')}}">Create Home Slide</a></li> 
                          <li><a  href="{{url('/admin/home/sliders/show')}}">Home Slide Update</a></li> 
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-history"></i>
                          <span>Institute History </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('admin/institute/history/create')}}">Create History</a></li>

                          <li><a  href="{{URL::to('/admin/institute/history/show')}}">Manage History
                                        
                          </a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-list"></i>
                          <span>Public Exam Result</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/public/result/create')}}">Create Public Result</a></li>
                          <li><a  href="{{url('/admin/public/result/ssc/list')}}">SSC Exam Result List</a></li>
                          <li><a  href="{{url('/admin/public/result/vocational/list')}}">SSC Vocational Result List</a></li>
                          <li><a  href="{{url('/admin/public/result/jsc/list')}}">JSC Exam Result List</a></li>
                      </ul>
                  </li>

                 <!--  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Class Topper</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/class/topper/create')}}">Create Class Topper</a></li>
                          <li><a  href="{{URL::to('/admin/class/topper/show')}}">Manage Class Topper</a></li>
                      </ul>
                  </li> -->

                 <!--  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-graduation-cap"></i>
                          <span>Scholarship</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/student/scholarships/create')}}">Create Student</a></li>
                          <li><a  href="{{URL::to('/student/scholarships/list')}}">Manage Student</a></li>
                      </ul>
                  </li> -->
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-list"></i>
                          <span>Related Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/related/page/create')}}">Page Create</a></li>
                          <li><a  href="{{url('/admin/related/page/list')}}">Pages List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-address-card"></i>
                          <span>Library</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/school/library/create')}}">Library Create</a></li>
                          <li><a  href="{{URL::to('/admin/school/library/list')}}">Library List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Gallery</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/photo/gallery/create')}}">Create Photo Gallery</a></li>
                          <li><a  href="{{url('/admin/photo/gallery/list')}}">Photo Gallery List</a></li>
                          <li><a  href="{{url('/admin/video/gallery/create')}}">Create Video Gallery</a></li>
                          <li><a  href="{{url('/admin/video/gallery/list')}}">Video Gallery List</a></li>
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bell"></i>
                          <span>Academic Notice</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/academic/notice/create')}}">Notice Create </a></li>
                          <li><a  href="{{url('/academic/notice/list')}}">Notice List</a></li>
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dollar"></i>
                          <span>Fees</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/academic/fees/create')}}">Create Fees</a></li>
                          <li><a  href="{{url('/academic/fees/list')}}">Fees List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user-circle"></i>
                          <span>Previous Teachers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/previous/teachers/create')}}">Previous Teachers</a></li> 
                          <li><a  href="{{url('/admin/previous/teachers/list')}}">Previous Teachers List</a></li> 
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-list"></i>
                          <span>Job Application Results</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/job/applicant/result/create')}}">Create Job Result</a></li>
                          <li><a  href="{{url('/job/applicant/merit/list')}}">Published Merit List</a></li>
                          <li><a  href="{{url('/job/applicant/waiting/list')}}">Published Waiting List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="{{url('/institute/settings/edit')}}" >
                          <i class="fa fa-cog"></i>
                          <span>Settings</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a href="{{url('/admin/users/create')}}">Create User</a></li>
                          <li><a href="{{url('/admin/users/show')}}">User List</a></li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->