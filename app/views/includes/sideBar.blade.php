<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                  <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  {{-- Task Manager --}}
                  <li>

                      <a href="/admin/dashboard/pc">
                          <i class="fa fa-tasks"></i>
                          <span>Programming Contest</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/dashboard/sc">
                          <i class="fa fa-tasks"></i>
                          <span>Hackathon</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/dashboard/list">
                          <i class="fa fa-tasks"></i>
                          <span>Generate List</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/dashboard/time">
                          <i class="fa fa-tasks"></i>
                          <span>Time Table</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/dashboard/judge">
                          <i class="fa fa-tasks"></i>
                          <span>judge</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/dashboard/pages">
                          <i class="fa fa-tasks"></i>
                          <span>Events & Pages</span>
                      </a>
                  </li>





              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>