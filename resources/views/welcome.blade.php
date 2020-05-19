<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/styles/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119386393-1');
    </script>

</head>
<body>
    <div id="app">

        <div class="header clearfix">
            <div class="header-right">
                <div class="brand-logo">
                    <a href="index.php">
                        <img src="{{ asset('vendors/images/logo.png') }}" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon"><i class="fa fa-user-o"></i></span>
                            <span class="user-name">Johnny Brown</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
                            <a class="dropdown-item" href="faq.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>
                            <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="index.php">
                    <img src="{{ asset('vendors/images/deskapp-logo.png') }}" alt="">
                </a>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        <li>
                            <router-link to="/example1" class="dropdown-toggle no-arrow ">
                                <span class="fa fa-map-o"></span><span class="mtext">Invoice</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/example2" class="dropdown-toggle no-arrow ">
                                <span class="fa fa-map-o"></span><span class="mtext">Invoice</span>
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-container">
            <router-view></router-view>
            {{-- <div class="pd-ltr-20 xs-pd-20-10">
                <div class="row clearfix progress-box">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                            <div class="project-info clearfix">
                                <div class="project-info-left">
                                    <div class="icon box-shadow bg-blue text-white">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                </div>
                                <div class="project-info-right">
                                    <span class="no text-blue weight-500 font-24">40</span>
                                    <p class="weight-400 font-18">My Earnings</p>
                                </div>
                            </div>
                            <div class="project-info-progress">
                                <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Target</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                            <div class="project-info clearfix">
                                <div class="project-info-left">
                                    <div class="icon box-shadow bg-light-green text-white">
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                </div>
                                <div class="project-info-right">
                                    <span class="no text-light-green weight-500 font-24">50</span>
                                    <p class="weight-400 font-18">Business Captured</p>
                                </div>
                            </div>
                            <div class="project-info-progress">
                                <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Target</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                            <div class="project-info clearfix">
                                <div class="project-info-left">
                                    <div class="icon box-shadow bg-light-orange text-white">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                </div>
                                <div class="project-info-right">
                                    <span class="no text-light-orange weight-500 font-24">2 Lakhs</span>
                                    <p class="weight-400 font-18">Projects Complete</p>
                                </div>
                            </div>
                            <div class="project-info-progress">
                                <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Review</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
                            <div class="project-info clearfix">
                                <div class="project-info-left">
                                    <div class="icon box-shadow bg-light-purple text-white">
                                        <i class="fa fa-podcast"></i>
                                    </div>
                                </div>
                                <div class="project-info-right">
                                    <span class="no text-light-purple weight-500 font-24">5.1 Lakhs</span>
                                    <p class="weight-400 font-18">Pending Business</p>
                                </div>
                            </div>
                            <div class="project-info-progress">
                                <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Review</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>


    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendors/scripts/script.js') }}"></script>
    
</body>
</html>