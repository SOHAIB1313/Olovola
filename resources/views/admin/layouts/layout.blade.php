



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pace/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/summernote/summernote-lite.min.css')}}" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/neptune.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/neptune.png')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        {{-- <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="assets/images/avatars/avatar.png">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="active-page">
                        <a href="index.html" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="material-icons-two-tone">inbox</i>Mailbox<span class="badge rounded-pill badge-danger float-end">87</span></a>
                    </li>
                    <li>
                        <a href="file-manager.html"><i class="material-icons-two-tone">cloud_queue</i>File Manager</a>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li>
                        <a href="todo.html"><i class="material-icons-two-tone">done</i>Todo</a>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Pages<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="settings.html">Settings</a>
                            </li>
                            <li>
                                <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="sign-in.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="lock-screen.html">Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        UI Elements
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Styles<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="styles-typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="styles-code.html">Code</a>
                            </li>
                            <li>
                                <a href="styles-icons.html">Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">grid_on</i>Tables<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="tables-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">DataTable</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">sentiment_satisfied_alt</i>Elements<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui-alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="ui-avatars.html">Avatars</a>
                            </li>
                            <li>
                                <a href="ui-badge.html">Badge</a>
                            </li>
                            <li>
                                <a href="ui-breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-button-groups.html">Button Groups</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-dropdown.html">Dropdown</a>
                            </li>
                            <li>
                                <a href="ui-images.html">Images</a>
                            </li>
                            <li>
                                <a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui-popovers.html">Popovers</a>
                            </li>
                            <li>
                                <a href="ui-progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="ui-spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="ui-toast.html">Toast</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">card_giftcard</i>Components<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="components-accordions.html">Accordions</a>
                            </li>
                            <li>
                                <a href="components-block-ui.html">Block UI</a>
                            </li>
                            <li>
                                <a href="components-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="components-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="components-countdown.html">Countdown</a>
                            </li>
                            <li>
                                <a href="components-lightbox.html">Lightbox</a>
                            </li>
                            <li>
                                <a href="components-lists.html">Lists</a>
                            </li>
                            <li>
                                <a href="components-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="components-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="components-session-timeout.html">Session Timeout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="material-icons-two-tone">widgets</i>Widgets</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">edit</i>Forms<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="forms-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="forms-input-groups.html">Input Groups</a>
                            </li>
                            <li>
                                <a href="forms-input-masks.html">Input Masks</a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">Form Layouts</a>
                            </li>
                            <li>
                                <a href="forms-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="forms-file-upload.html">File Upload</a>
                            </li>
                            <li>
                                <a href="forms-text-editor.html">Text Editor</a>
                            </li>
                            <li>
                                <a href="forms-datepickers.html">Datepickers</a>
                            </li>
                            <li>
                                <a href="forms-select2.html">Select2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">analytics</i>Charts<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts-apex.html">Apex</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">ChartJS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        Layout
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_agenda</i>Content<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="content-page-headings.html">Page Headings</a>
                            </li>
                            <li>
                                <a href="content-section-headings.html">Section Headings</a>
                            </li>
                            <li>
                                <a href="content-left-menu.html">Left Menu</a>
                            </li>
                            <li>
                                <a href="content-right-menu.html">Right Menu</a>
                            </li>
                            <li>
                                <a href="content-boxed-content.html">Boxed Content</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">menu</i>Menu<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="menu-off-canvas.html">Off-Canvas</a>
                            </li>
                            <li>
                                <a href="menu-standard.html">Standard</a>
                            </li>
                            <li>
                                <a href="menu-dark-sidebar.html">Dark Sidebar</a>
                            </li>
                            <li>
                                <a href="menu-hover-menu.html">Hover Menu</a>
                            </li>
                            <li>
                                <a href="menu-colored-sidebar.html">Colored Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_day</i>Header<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="header-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="header-full-width.html">Full-width</a>
                            </li>
                            <li>
                                <a href="header-transparent.html">Transparent</a>
                            </li>
                            <li>
                                <a href="header-large.html">Large</a>
                            </li>
                            <li>
                                <a href="header-colorful.html">Colorful</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        Other
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">bookmark</i>Documentation</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">access_time</i>Change Log</a>
                    </li>
                </ul>
            </div>
        </div> --}}
        @include('admin.layouts.sidebar')

        <div class="app-container " >
          @include('admin.layouts.nav')
           @yield('content')
        
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="{{asset('assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/main.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/plugins/summernote/summernote-lite.min.js')}}"></script>
    <script src="{{asset("assets/js/pages/text-editor.js")}}"></script>


    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
</body>
</html>