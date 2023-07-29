<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
      <div class="d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="/"><img src="{{asset('assets/images/logo/logo.png')}}" style="width: 228px; height: 52px;" alt="Logo" srcset=""></a>
        </div>
        <div class="sidebar-toggler  x">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>

    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ ($title === 'home' ? 'active' : '') }} ">
          <a href="/" class='sidebar-link'>
              <i class="fa-solid fa-house" style="color: #ff9100;"></i>
              <span>Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item {{ ($title === 'user' || $title === 'edit-user' ? 'active' : '') }} ">
          <a href="/user" class='sidebar-link'>
              <i class="fa-solid fa-user" style="color: #ff9100;"></i>
              <span>User</span>
          </a>
        </li>

        <li class="sidebar-item {{ ($title === 'varification' || $title === 'edit-varification' ? 'active' : '') }} ">
          <a href="/varification" class='sidebar-link'>
              <i class="fa-solid fa-user-check" style="color: #ff9100;"></i>
              <span>Verifikasi User</span>
          </a>
        </li>

        <li class="sidebar-item {{ ($title === 'cv' || $title === 'view-cv' ? 'active' : '') }} ">
          <a href="/cv" class='sidebar-link'>
              <i class="fa-solid fa-file" style="color: #ff9100;"></i>
              <span>CV User</span>
          </a>
        </li>

        <li class="sidebar-item {{ ($title === 'ustadz' || $title === 'create-ustadz' || $title === 'edit-ustadz' ? 'active' : '') }} ">
          <a href="/ustadz" class='sidebar-link'>
              <i class="fas fa-street-view" style="color: #ff9100;"></i>
              <span>Ustadz</span>
          </a>
        </li>

        <li class="sidebar-item {{ ($title === 'khitbah' || $title === 'edit-khitbah' ? 'active' : '') }} ">
          <a href="/khitbah" class='sidebar-link'>
              <i class="fas fa-hand-holding-heart" style="color: #ff9100;"></i>
              <span>Khitbah</span>
          </a>
        </li>

        <li class="sidebar-item {{ ($title === 'khitbah-schedule' || $title === 'edit-khitbah' ? 'active' : '') }} ">
          <a href="/khitbah-schedule" class='sidebar-link'>
              <i class="fa fa-calendar" style="color: #ff9100;"></i>
              <span>Jadwal Khitbah</span>
          </a>
        </li>

        {{-- <li class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
            <i class="fas fa-hand-holding-heart" style="color: #ff9100;"></i>
            <span>Khitbah</span>
          </a>
          <ul class="submenu ">
            <li class="submenu-item ">
              <a href="/khitbah">Khitbah</a>
            </li>
            <li class="submenu-item ">
              <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
            </li>
          </ul>
        </li> --}}
      </ul>
    </div>
  </div>
</div>