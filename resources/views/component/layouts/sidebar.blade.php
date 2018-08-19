<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/icon.png"/>
    <title>Dashboard SIKAMPUS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <script src="http://pages.revox.io/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{asset('corporate/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('corporate/pages/css/themes/corporate.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-header dashboard menu-pin menu-behind">

  <nav class="page-sidebar" data-pages="sidebar">

          <div class="sidebar-overlay-slide from-top" id="appMenu">
              <div class="row">
                  <div class="col-xs-6 no-padding">
                      <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
                      </a>
                  </div>
                  <div class="col-xs-6 no-padding">
                      <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
                      </a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-6 m-t-20 no-padding">
                      <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
                      </a>
                  </div>
                  <div class="col-xs-6 m-t-20 no-padding">
                      <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
                      </a>
                  </div>
              </div>
          </div>

          <div class="sidebar-header">
              <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
              <div class="sidebar-header-controls">
                  <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
                  </button>
                  <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
                  </button>
              </div>
          </div>

          <div class="sidebar-menu">

              <ul class="menu-items">
                  <li class="m-t-30 ">
                      <a href="/schedule" class="detailed">
                          <span class="title">Jadwal</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="/mahasiswa"><span class="title">Mahasiswa</span></a>

                  </li>
                  <li class="">
                      <a href="/jamah"><span class="title">Jadwal Mhs</span></a>
                  </li>
                  <li class="">
                      <a href="/matkul"><span class="title">Mata Kuliah</span></a>
                      <span class="icon-thumbnail"></span>
                  </li>
                  <li class="">
                      <a href="/dosen"><span class="title">Dosen</span></a>
                      <span class="icon-thumbnail"></span>
                  </li>
                  <li class="">
                      <a href="/class"><span class="title">Kelas</span></a>
                      <span class="icon-thumbnail"></span>
                  </li>
                  <li class="">
                      <a href="/staff"><span class="title">Staff</span></a>
                      <span class="icon-thumbnail"></span>
                  </li>
                  <li class="">
                      <a href="/profile"><span class="title">Profile</span></a>
                      <span class="icon-thumbnail"></span>
                  </li>
                  <li class="">
                      <a href="/keluar"><span class="title">Logout</span></a>
                      <span class="icon-thumbnail"></span>
                  </li>
              </ul>
              <div class="clearfix"></div>
          </div>

      </nav>

    <div class="page-container ">

            <div class="header ">

                <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
                </a>

                <div class="">
                    <div class="brand inline   m-l-10">
                        {{-- <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22" alt="Iki Logo"> --}}
                      <b>Sistem Informasi Kampus</b>
                    </div>
                    </div>
            </div>

            <div class="page-content-wrapper ">

                <div class="content sm-gutter">

                    <div class="container-fluid padding-25 sm-padding-10">

                       @yield('content')

                    </div>

                </div>

                <div class=" container-fluid  container-fixed-lg footer">
                    <div class="copyright sm-text-center">
                        <p class="small no-margin pull-left sm-pull-reset">

                            <span class="hint-text">Copyright &copy; SIKAMPUS 2018. All Rights Reserved.</span>
                            <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>

        </div>


    <script src="{{asset('corporate/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/popper/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/select2/js/select2.full.min.js')}}" type="text/javascript" ></script>
    <script src="{{asset('corporate/assets/plugins/classie/classie.js')}}" type="text/javascript" ></script>
    <script src="{{asset('corporate/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/lib/d3.v3.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/nv.d3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/utils.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/interactiveLayer.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/models/axis.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/models/line.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/models/lineWithFocusChart.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/mapplic/js/hammer.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/mapplic/js/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/mapplic/js/mapplic.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/skycons/skycons.js')}}" type="text/javascript"></script>

    <script src="{{asset('corporate/pages/js/pages.js')}}"></script>

    <script src="{{asset('corporate/assets/js/scripts.js')}}" type="text/javascript"></script>

    <script src="{{asset('corporate/assets/js/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/js/scripts.js')}}" type="text/javascript"></script>

    <script src="{{asset('corporate/assets/js/demo.js')}}" type="text/javascript"></script>
</body>


</html>
