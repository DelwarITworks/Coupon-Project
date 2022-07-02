{{-- @php 
      $setting = App\Models\Admin\Setting::first();
@endphp --}}

<!doctype html>
<html lang="en">

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @yield('header_css')
      {{-- @if($setting)
        <meta property="og:type" content="Training Institute,Training Institute sylhet" />
        <meta property="og:url" content="{{ URL::current() }}" />
        <meta property="og:site_name" content="DelwarIT" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/app/public/'.$setting->favicon)}}">
        <meta name="og:image" content="{{ asset('/storage/app/public/'.$setting->logo) }}"/>
        <meta name="og:title" content="{{ $setting->title }}" />
        <meta name="og:description" content="{{ $setting->meta_description }}" />
      @endif --}}

    <!-- App css -->
    <link href="{{ url('public/back') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/back') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/back') }}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/back') }}/assets/css/style.css" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/css/toastr/toastr.min.css')}}">

    <script src="{{ url('public/back') }}/assets/js/modernizr.min.js"></script>

   
      <link rel="stylesheet" type="text/css" href="{{ asset('public/back/assets/css/toastr/toastr.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/back/assets/css/sweetalert/sweetalert.css')}}">

      {{-- data table start --}}
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap4.min.css">
      {{-- data table end --}}

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="" class="logo">
                        <span>
                            <img src="{{ url('public/back') }}/assets/images/logo1.png" alt="" height="37">
                        </span>
                        <i>
                            <img src="{{ url('public/back') }}/assets/images/logo1.png" alt="" height="38">
                        </i>
                    </a>
                </div>

                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                       {{--  @php
                            $user = App\Models\User::findOrFail(Auth::user()->id);
                        @endphp
                        <img src="{{ asset('storage/app/public/',$user->userdetail->image) }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid"> --}}
                    </div>
                    <h5><a href="">{{Auth::user()->name ?? ""}}</a> </h5>
                    <p class="text-muted">{{Auth::user()->type ?? ""}}</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="fa-solid fa-chart-line"></i> <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="fas fa-chalkboard"></i> <span> Courses </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('admin.website') }}">Website</a></li>
                                <li><a href="{{ route('admin.category') }}">Category</a></li>
                                <li><a href="{{ route('create.coupon') }}">Create Coupon</a></li>
                                <li><a href="{{ route('index.coupon') }}">List Coupon</a></li>
                            </ul>
                        </li>


                    </ul>

                </div>
                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>

        <!-- Left Sidebar End -->
        <!-- ============================================================== -->

        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="hide-phone app-search">
                            <form>
                                <input type="text" placeholder="Search..." class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link arrow-none" target="_blank" href="{{ route('home') }}">
                                <i class="fa fa-home noti-icon"></i>
                                <span class="badge badge-success badge-pill noti-icon-badge">Home</span>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-bell noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-speech-bubble noti-icon"></i>
                                <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">{{-- <img src="{{ url('public/back') }}/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> --}}  </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                               {{--  <img src="{{ url('public/back') }}/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> --}}<i class="fa-solid fa-user"></i>  <span class="ml-1">{{Auth::user()->name ?? ""}}<i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                @if(Auth::user()->is_editor == 1)
                                <!-- item-->
                                <a href="{{ route('user.profile') }}" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>


                                <form action="{{route('logout')}}" method="POST" id="logout-form">
                                    @csrf
                                    <i class="fi-power" style="padding: 10px 0px 15px 20px;"></i> <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); " style="color: black;">Logout</a>
                                </form>

                                @endif

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrhumb-item active">Welcome {{Auth::user()->name ?? ""}} in Delwarit Admin Panel !</li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
            @yield('content')

        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ url('public/back') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public/back') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/back') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ url('public/back') }}/assets/js/waves.js"></script>
    <script src="{{ url('public/back') }}/assets/js/jquery.slimscroll.js"></script>

    <!-- Flot chart -->
    <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="../plugins/flot-chart/curvedLines.js"></script>
    <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
    <script src="../plugins/jquery-knob/jquery.knob.js"></script>

    <!-- Dashboard Init -->
    <script src="{{ url('public/back') }}/assets/pages/jquery.dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ url('public/back') }}/assets/js/jquery.core.js"></script>
    <script src="{{ url('public/back') }}/assets/js/jquery.app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    @yield('footer_js')

    {{-- toastr alert --}}
    

        {{-- toastr alert --}}
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(Session::has('messege'))
                var type="{{Session::get('alert-type','info')}}"
                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('messege') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('messege') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('messege') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('messege') }}");
                        break;
                }
              @endif
        </script>

        {{-- sweet alert --}}
        <script src="{{ asset('public/back/assets/js/sweetalert.min.js') }}"></script>
        
        <script>
            //Delete Alert
            $(document).on("click","#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
                swal({
                title: "Are you sure?",
                text: "Delete for everytime!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Your file is safe!");
                }
                });
            });
        </script>


        
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
        {{-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

          <script>
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                } );
             
                table.buttons().container()
                    .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            } );
        </script>

        
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:50 GMT -->

</html>