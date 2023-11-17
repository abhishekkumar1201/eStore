 <!----- Dashboard Sidenav Left Side Section End ----->

    <!----- Dashboard Body Right Side Section Start ----->
    <section class="dashboardBodyRight_sec">

        <!----- Dashboard Header Section Start ----->
        <header class="header_sec" id="myHeader">
          <div class="headerLeftPanel_sec d-flex">
            <div id="nav-icon1" class="MenuBar">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
  
  
          <div class="profle">
            <ul class="headerDropdownNav d-flex align-items-center">
              <li>
                <a href="javascript:void(0)" class="position-relative header-notificationBTN me-4">
                  <i class="fa-solid fa-gear"></i>
                </a>
              </li>
  
              <li>
                <a href="javascript:void(0)" class="position-relative header-notificationBTN me-4">
                  <i class="fa-solid fa-bell"></i>
                  <span
                    class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle badgeStyle">
                    <span class="visually-hidden">&nbsp;</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown">
                  <button class="btn dropdown-toggle d-flex align-items-center p-0" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-img me-2">
                      <img src="{{asset('assets/admin/images/Profile.png') }}" class="img-fluid" />
                    </div>
                    <h2>Lorem Ipsum</h2>
                    <i class="fa-solid fa-caret-down"></i>
                  </button>
                  <ul class="dropdown-menu mt-1">
                    <li><a class="dropdown-item justify-content-between" href="#">Change Profile <i
                          class="fa-solid fa-user ms-1"></i></a></li>
                    <li><a class="dropdown-item justify-content-between" href="#">Change Password <i
                          class="fa-solid fa-lock ms-1"></i></a></li>
                    <li><a class="dropdown-item justify-content-between" href="{{ url('/admin/login') }}">Logout <i
                          class="fa-solid fa-right-from-bracket ms-1"></i></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </header>
        <!----- Dashboard Header Section End ----->