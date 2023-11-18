<aside class="admn_lft" id="mySidenav">
    <div class="top_Sec">
      <a href="javascript:void(0)" class="logo-menubar dBlockName">
        <img src="{{asset('assets/admin/images/MultiShop.png') }}" class="img-fluid" />

        <button class="closeBTN" id="sidebarClose"><i class="fa-solid fa-arrow-left-long"></i></button>
      </a>

      <a href="javascript:void(0)" class="logo-menubar slideBBlockName ThumbLogo">
        <img src="{{asset('assets/admin/images/MS.jpg') }}" class="img-fluid" />
      </a>

      <ul class="nav-area">
        <li class="sideNav_Btn">
          <a href="{{ url('/admin/dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="dashboardIcon me-2" fill="#fcff33" width="27px"
              height="27px" viewBox="0 0 24 24">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
              </g>
            </svg>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="sideNav_Btn">
          <a href="{{ route('category-list') }}"><i class="fa-solid fa-user SideNavIcon"></i><span>Manage Category</span></a>
        </li>

        <li class="sideNav_Btn">
          <a href="{{ route('sub-category-list') }}"><i class="fa-solid fa-user SideNavIcon"></i><span>Manage Sub
              Category</span></a>
        </li>

        <li class="sideNav_Btn">
          <a href="javascript:void(0);"><i class="fa-solid fa-file-lines SideNavIcon"></i><span>Manage
              Products</span></a>
        </li>

        <li class="sideNav_Btn">
          <a href="{{ url('/admin/user-list') }}"><i class="fa-solid fa-user-group SideNavIcon"></i><span>Manage User</span></a>
        </li>

        <li class="sideNav_Btn">
          <a href="javascript:void(0);"><i class="fa-solid fa-location-dot SideNavIcon"></i><span>Manage
              Orders</span></a>
        </li>
      </ul>
    </div>
  </aside>