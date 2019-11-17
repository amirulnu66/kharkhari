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
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Category </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/category/create')}}">Create Category</a></li>
                          <li><a  href="{{URL::to('/admin/category/show')}}">Category List</a></li>
                      </ul>
                  </li>

                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Blog</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/blog/create')}}">Create Blog</a></li>
                          <li><a  href="{{URL::to('/admin/blog/show')}}">Blog List</a></li>
                      </ul>
                  </li>
                 
                
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->