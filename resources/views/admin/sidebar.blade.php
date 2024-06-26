      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('admin/assets/images/logo_admin.png') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('admin/assets/images/logo_admin.png') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              {{-- <div class="profile-pic"> --}}
                {{-- <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div> --}}
                {{-- <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div> --}}
              {{-- </div> --}}
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Menu</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('view_dashboard') }}">
              <span class="menu-icon">
                <i class="fa fa-dashboard" style="font-size:20px; color: white;"></i>
              </span>
              <span class="menu-title">DASHBOARD</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="fa fa-user-o" style="font-size:20px; color: white;"></i>
              </span>
              <span class="menu-title">USER</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('view_userlist') }}">USER LIST</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('view_reports') }}">REPORTS</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('view_feedbacks') }}">FEEDBACKS</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="fa fa-book" style="font-size:20px; color: white;"></i>
              </span>
              <span class="menu-title">BOOKS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('view_booklist') }}"> BOOK LIST </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('view_review') }}"> REVIEW </a></li>
              </ul>
            </div>
          </li>
<li class="nav-item menu-items">
    <a class="nav-link" data-toggle="collapse" href="#content" aria-expanded="false" aria-controls="content">
        <span class="menu-icon">
          <i class="fa fa-edit" style="font-size:20px; color: white;"></i>
        </span>
        <span class="menu-title">CONTENT</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="content">
        <ul class="nav flex-column sub-menu">
            {{-- <li class="nav-item"> <a class="nav-link" href="{{ url('view_article') }}"> ARTICLE </a></li> --}}
            <li class="nav-item"> <a class="nav-link" href="{{ url('view_notification') }}"> NOTIFICATION </a></li>
        </ul>
    </div>
</li>

        </ul>
      </nav>
            