<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FashionShop Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="icon" type="image/png" href="data:image/png;base64,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"/>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/admin"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/admin"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
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
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/admin">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/clients">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Clients</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/products">
              <span class="menu-icon">
                <i class="mdi mdi-tshirt-v"></i>
              </span>
              <span class="menu-title">Products</span>
            </a>
          </li>
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li> --}}
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li> --}}
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li> --}}
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li> --}}
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        @yield('contentt')

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
