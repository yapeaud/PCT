<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Tableau de bord - Étudiants">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.icon">

    <link rel="stylesheet" href="/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/vendors/jqvmap/dist/jqvmap.min.css">
    @yield("css")


    <link rel="stylesheet" href="/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

    <!-- Left Panel -->

    @include('internship.dashboard.aside')
    
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
                <!-- Header-->
                <header id="header" class="header">

<div class="header-menu">

    <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <div class="form-inline">
                <form class="search-form">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                </form>
            </div>

            <div class="dropdown for-notification">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="count bg-danger">5</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="notification">
                    <p class="red">You have 3 Notification</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                    <i class="fa fa-check"></i>
                    <p>Server #1 overloaded.</p>
                </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                    <i class="fa fa-info"></i>
                    <p>Server #2 overloaded.</p>
                </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                    <i class="fa fa-warning"></i>
                    <p>Server #3 overloaded.</p>
                </a>
                </div>
            </div>

            <div class="dropdown for-message">
                <button class="btn btn-secondary dropdown-toggle" type="button"
                    id="message"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-email"></i>
                    <span class="count bg-primary">9</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="message">
                    <p class="red">You have 4 Mails</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                    <span class="photo media-left"><img alt="avatar" src="/images/avatar/1.jpg"></span>
                    <span class="message media-body">
                        <span class="name float-left">Jonathan Smith</span>
                        <span class="time float-right">Just now</span>
                            <p>Hello, this is an example msg</p>
                    </span>
                </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                    <span class="photo media-left"><img alt="avatar" src="/images/avatar/2.jpg"></span>
                    <span class="message media-body">
                        <span class="name float-left">Jack Sanders</span>
                        <span class="time float-right">5 minutes ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </span>
                </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                    <span class="message media-body">
                        <span class="name float-left">Cheryl Wheeler</span>
                        <span class="time float-right">10 minutes ago</span>
                            <p>Hello, this is an example msg</p>
                    </span>
                </a>
                    <a class="dropdown-item media bg-flat-color-3" href="#">
                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                    <span class="message media-body">
                        <span class="name float-left">Rachel Santos</span>
                        <span class="time float-right">15 minutes ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </span>
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-5">
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="/images/admin.jpg" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
            </div>
        </div>

        <div class="language-select dropdown" id="language-select">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                <i class="flag-icon flag-icon-us"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="language">
                <div class="dropdown-item">
                    <span class="flag-icon flag-icon-fr"></span>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-es"></i>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-us"></i>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-it"></i>
                </div>
            </div>
        </div>

    </div>
</div>

</header><!-- /header -->
<!-- Header-->


<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
</div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">

             @yield('content')
        </div>

    </div>


    </div><!-- /#right-panel -->

    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>


    <script src="/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/widgets.js"></script>
    <script src="/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
 @yield("javascript")
</body>

</html>

