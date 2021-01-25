<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/panel.css')}}">
    <title>ADMIN PANEL</title>
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
</script>
<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/adminpanel.css')}}">
<link rel="stylesheet" href="{{asset('css/dtable.css')}}">
<link rel="stylesheet" href="{{asset('css/form.css')}}">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="
https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>








</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
          <div class="sidebar-content">
            <div class="sidebar-brand">
              <a href="#">pro sidebar</a>
              <div id="close-sidebar">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="sidebar-header">
              <div class="user-pic">
                <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
              </div>
              <div class="user-info">
                <span class="user-name">Jhon
                  <strong>Smith</strong>
                </span>
                <span class="user-role">Administrator</span>
                <span class="user-status">
                  <i class="fa fa-circle"></i>
                  <span>Online</span>
                </span>
              </div>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-search">
              <div>
                <div class="input-group">
                  <input type="text" class="form-control search-menu" placeholder="Search...">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
              <ul>
                <li class="header-menu">
                  <span>General</span>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fa fa-tachometer-alt"></i>
                    <span>Publisher</span>
                    <span class="badge badge-pill badge-warning">New</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/api/view/publiser">VIEW
                          <span class="badge badge-pill badge-success">Pro</span>
                        </a>
                      </li>
                      <li>
                        <a href="/api/add/publiser">ADD</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Catogery</span>
                    <span class="badge badge-pill badge-danger">3</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/api/view/catogery">VIEW

                        </a>
                      </li>
                      <li>
                        <a href="/api/add/catogery">ADD</a>
                      </li>
                      <li>
                        <a href="/api/upload/catogery">Upload</a>
                      </li>

                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="far fa-gem"></i>
                    <span>Report</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/api/view/report">VIEW</a>
                      </li>
                      <li>
                        <a href="/api/add/report">ADD</a>
                      </li>
                      <li>
                        <a href="/api/upload/report">Upload</a>
                      </li>

                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fa fa-chart-line"></i>
                    <span>PressRelease</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/api/view/pressrelease">VIEW</a>
                      </li>
                      <li>
                        <a href="/api/add/pressrelease">ADD</a>
                      </li>

                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                      <i class="fa fa-chart-line"></i>
                      <span>Simple Request</span>
                    </a>
                    <div class="sidebar-submenu">
                      <ul>
                        <li>
                          <a href="/api/view/simplerequest">VIEW</a>
                        </li>
                        <li>
                          <a href="/api/add/simplerequest">ADD</a>
                        </li>

                      </ul>
                    </div>
                  </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fa fa-globe"></i>
                    <span>User</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/api/view/user">VIEW</a>
                      </li>
                      <li>
                        <a href="{{route('Register')}}">ADD</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="header-menu">
                  <span>Extra</span>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Documentation</span>
                    <span class="badge badge-pill badge-primary">Beta</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-calendar"></i>
                    <span>Calendar</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Examples</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- sidebar-menu  -->
          </div>
          <!-- sidebar-content  -->
          <div class="sidebar-footer">
            <a href="#">
              <i class="fa fa-bell"></i>
              <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span class="badge-sonar"></span>
            </a>
            <a href="#">
              <i class="fa fa-power-off"></i>
            </a>
          </div>
        </nav>
        <!-- sidebar-wrapper  -->
            <!-- page-content" -->
        <main class="page-content">


      @yield('content')

        </main>
        <!-- page-content" -->
      </div>
      <!-- page-wrapper -->
      <script>
          $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});



      </script>
</body>
</html>
