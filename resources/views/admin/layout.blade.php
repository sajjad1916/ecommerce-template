<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title Page-->
<title>@yield('page_title')</title>

<!-- Fontfaces CSS-->
<link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
<!-- Bootstrap CSS-->
<link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
<!-- Main CSS-->
<link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body class="animsition">
 
<div class="page-wrapper">
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
<div class="header-mobile__bar">
    <div class="container-fluid">
        <div class="header-mobile-inner">
        <a class="logo" href="index.html">
        <img src="{{asset('admin_assets/images/icon/logo.png')}}" alt="CoolAdmin" />
        </a>
        <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
        <span class="hamburger-inner"></span>
        </span>
        </button>
        </div>
        </div>
        </div>
        <nav class="navbar-mobile">
        <div class="container-fluid">
        <ul class="navbar-mobile__list list-unstyled">
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
        <a href="index.html">Dashboard 1</a>
        </li>
        </ul>
        </li>
        <li>
        <a href="chart.html">
        <i class="fas fa-chart-bar"></i>Charts</a>
        </li>
        <li>
        <a href="table.html">
        <i class="fas fa-table"></i>Tables</a>
        </li>
        <li>
        <a href="form.html">
        <i class="far fa-check-square"></i>Forms</a>
        </li>
        <li>
        <a href="calendar.html">
        <i class="fas fa-calendar-alt"></i>Calendar</a>
        </li>
        <li>
        <a href="map.html">
        <i class="fas fa-map-marker-alt"></i>Maps</a>
        </li>
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-copy"></i>Pages</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
        <a href="login.html">Login</a>
        </li>
        <li>
        <a href="register.html">Register</a>
        </li>
        <li>
        <a href="forget-pass.html">Forget Password</a>
        </li>
        </ul>
        </li>
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-desktop"></i>UI Elements</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
        <a href="button.html">Button</a>
        </li>
        <li>
        <a href="badge.html">Badges</a>
        </li>
        <li>
        <a href="tab.html">Tabs</a>
        </li>
        <li>
        <a href="card.html">Cards</a>
        </li>
        <li>
        <a href="alert.html">Alerts</a>
        </li>
        <li>
        <a href="progress-bar.html">Progress Bars</a>
        </li>
        <li>
        <a href="modal.html">Modals</a>
        </li>
        <li>
        <a href="switch.html">Switchs</a>
        </li>
        <li>
        <a href="grid.html">Grids</a>
        </li>
        <li>
        <a href="fontawesome.html">Fontawesome Icon</a>
        </li>
        <li>
        <a href="typo.html">Typography</a>
        </li>
        </ul>
        </li>
    </ul>
    </div>
</nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
<div class="logo">
<a href="#">
<img src="{{asset('admin_assets/images/icon/logo.png')}}" alt="Cool Admin" />
</a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
<nav class="navbar-sidebar">
<ul class="list-unstyled navbar__list">

    <li class="@yield('dashboard_select')">
    <a href="dashboard">
        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
    </li>
    <li class="@yield('category_select')">
        <a href="{{url('admin/category')}}">
        <i class="fas fa-list"></i>Category</a>
    </li>
    <li class="@yield('coupon_select')">
        <a href="{{url('admin/coupon')}}">
        <i class="fas fa-tag"></i>Coupon</a>
    </li>
    <li class="@yield('size_select')">
        <a href="{{url('admin/size')}}">
        <i class="fas fa-tag"></i>Size</a>
    </li>
    <li class="@yield('color_select')">
        <a href="{{url('admin/color')}}">
        <i class="fas fa-tag"></i>Color</a>
    </li>
    <li class="@yield('color_select')">
        <a href="{{url('admin/product')}}">
        <i class="fas fa-tag"></i>Products</a>
    </li>
</ul>
</nav>
</div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
<!-- HEADER DESKTOP-->
<header class="header-desktop">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap">
        <form class="form-header" action="" method="POST"></form>
         <div class="account-wrap">
        <div class="account-item clearfix js-item-menu">
        
        <div class="content">
        <a class="js-acc-btn" href="#">Welcome Admin!</a>
        </div>
        <div class="account-dropdown js-dropdown">
        <div class="account-dropdown__body">
            <div class="account-dropdown__item">
                <a href="#">
                    <i class="zmdi zmdi-account"></i>Account</a>
            </div>
            <div class="account-dropdown__item">
                <a href="#">
                    <i class="zmdi zmdi-settings"></i>Setting</a>
            </div>
            
        </div>
        <div class="account-dropdown__footer">
            <a href="logout">
                <i class="zmdi zmdi-power"></i>Logout</a>
        </div>
    </div>
    </div>
     </div>
    </div>
</div>
</div>

</header>
<!-- END HEADER DESKTOP-->

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
            <div class="container-fluid">
                @section('container')
                            
                @show
            </div>
        </div>
    </div>
</div>
 
<!-- END PAGE CONTAINER-->

<!-- Jquery JS-->
<script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('admin_assets/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->