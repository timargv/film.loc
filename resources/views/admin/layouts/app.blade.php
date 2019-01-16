<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Keen | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!-- Styles -->
    <link href="{{ asset('css_admin/admin.css') }}" rel="stylesheet">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="k-header--fixed k-header-mobile--fixed k-aside--enabled k-aside--fixed">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="k_header_mobile" class="k-header-mobile  k-header-mobile--fixed ">
    <div class="k-header-mobile__logo">
        <a href="index.html">
            <img alt="Logo" src="../assets/media/logos/logo-6.png" />
        </a>
    </div>
    <div class="k-header-mobile__toolbar">
        <button class="k-header-mobile__toolbar-toggler k-header-mobile__toolbar-toggler--left" id="k_aside_mobile_toggler"><span></span></button>
        <button class="k-header-mobile__toolbar-toggler" id="k_header_mobile_toggler"><span></span></button>
        <button class="k-header-mobile__toolbar-topbar-toggler" id="k_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->


<div class="k-grid k-grid--hor k-grid--root">
    <div class="k-grid__item k-grid__item--fluid k-grid k-grid--ver k-page">

        <!-- begin:: Aside -->
        <button class="k-aside-close " id="k_aside_close_btn"><i class="la la-close"></i></button>
        <div class="k-aside  k-aside--fixed 	k-grid__item k-grid k-grid--desktop k-grid--hor-desktop" id="k_aside">

            <!-- begin:: Aside -->
            <div class="k-aside__brand	k-grid__item " id="k_aside_brand">
                <div class="k-aside__brand-logo">
                    <a href="index.html">
                        <img alt="Logo" src="../assets/media/logos/logo-6.png" />
                    </a>
                </div>
                <div class="k-aside__brand-tools">
                    <button class="k-aside__brand-aside-toggler k-aside__brand-aside-toggler--left" id="k_aside_toggler"><span></span></button>
                </div>
            </div>

            <!-- end:: Aside -->

            <!-- begin:: Aside Menu -->
            <div class="k-aside-menu-wrapper	k-grid__item k-grid__item--fluid" id="k_aside_menu_wrapper">
                <div id="k_aside_menu" class="k-aside-menu " data-kmenu-vertical="1" data-kmenu-scroll="1" data-kmenu-dropdown-timeout="500">
                    <ul class="k-menu__nav ">
                        <li class="k-menu__item "><a href="#" class="k-menu__link "><i class="k-menu__link-icon flaticon2-gear"></i><span class="k-menu__link-text">Dashboards</span>
                                <span class="k-menu__link-badge"><span class="k-badge k-badge--brand">2</span></span>
                                <i class="k-menu__ver-arrow la la-angle-right"></i>
                            </a></li>

                        <li class="k-menu__section ">
                            <h4 class="k-menu__section-text">Components</h4>
                            <i class="k-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-layers-1"></i><span class="k-menu__link-text">Base</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="k-menu__submenu "><span class="k-menu__arrow"></span>
                                <ul class="k-menu__subnav">
                                    <li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Base</span></span></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_alert.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Alert</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_badge.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Badge</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_buttons.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Buttons</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_button-group.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Button Group</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_card.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Card</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_collapse.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Collapse</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_accordions.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Accordions</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_dropdown.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Dropdown</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_list-group.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">List Group</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_modal.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Modal</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_navs.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Navs</span></a></li>
                                    <li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Tabs</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="k-menu__submenu "><span class="k-menu__arrow"></span>
                                            <ul class="k-menu__subnav">
                                                <li class="k-menu__item " aria-haspopup="true"><a href="components_base_tabs_line.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Line Tabs</span></a></li>
                                                <li class="k-menu__item " aria-haspopup="true"><a href="components_base_tabs_button.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Button Tabs</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_pagination.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Pagination</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_popovers.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Popovers</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_tooltips.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Tooltips</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_progress.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Progress</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_breadcrumb.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Breadcrumb</span></a></li>
                                    <li class="k-menu__item " aria-haspopup="true"><a href="components_base_table.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Table</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- end:: Aside Menu -->

            <!-- begin:: Aside -->
            <div class="k-aside__footer		k-grid__item" id="k_aside_footer">
                <div class="k-aside__footer-nav">
                    <div class="k-aside__footer-item">
                        <a href="#" class="btn btn-icon"><i class="flaticon2-gear"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="#" class="btn btn-icon"><i class="flaticon2-cube"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="#" class="btn btn-icon"><i class="flaticon2-bell-alarm-symbol"></i></a>
                    </div>
                    <div class="k-aside__footer-item">
                        <button type="button" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon2-add"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-left">
                            <ul class="k-nav">
                                <li class="k-nav__section k-nav__section--first">
                                    <span class="k-nav__section-text">Export Tools</span>
                                </li>
                                <li class="k-nav__item">
                                    <a href="#" class="k-nav__link">
                                        <i class="k-nav__link-icon la la-print"></i>
                                        <span class="k-nav__link-text">Print</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="#" class="k-nav__link">
                                        <i class="k-nav__link-icon la la-copy"></i>
                                        <span class="k-nav__link-text">Copy</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="#" class="k-nav__link">
                                        <i class="k-nav__link-icon la la-file-excel-o"></i>
                                        <span class="k-nav__link-text">Excel</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="#" class="k-nav__link">
                                        <i class="k-nav__link-icon la la-file-text-o"></i>
                                        <span class="k-nav__link-text">CSV</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="#" class="k-nav__link">
                                        <i class="k-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="k-nav__link-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="k-aside__footer-item">
                        <a href="#" class="btn btn-icon"><i class="flaticon2-calendar-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- end:: Aside -->
        </div>

        <!-- end:: Aside -->
        <div class="k-grid__item k-grid__item--fluid k-grid k-grid--hor k-wrapper" id="k_wrapper">

            <!-- begin:: Header -->
            <div id="k_header" class="k-header k-grid__item  k-header--fixed ">

                <!-- begin: Header Menu -->
                <div class="k-header-menu-wrapper">
                </div>
                <!-- end: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="k-header__topbar">

                    <!--begin: Search -->
                    <div class="k-header__topbar-item k-header__topbar-item--search dropdown">
                        <div class="k-header__topbar-wrapper" id="k_offcanvas_toolbar_search_toggler_btn">
                            <span class="k-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                    </div>

                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="k-header__topbar-item dropdown">
                        <div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px -2px">
                            <span class="k-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                            <span class="k-badge k-badge--dot k-badge--notify k-badge--sm k-badge--brand"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <div class="k-head" style="background-image: url(../assets/media/misc/head_bg_sm.jpg)">
                                <h3 class="k-head__title">User Notifications</h3>
                                <div class="k-head__sub"><span class="k-head__desc">23 new notifications</span></div>
                            </div>
                            <div class="k-notification k-margin-t-30 k-margin-b-20 k-scroll" data-scroll="true" data-height="270" data-mobile-height="220">
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-line-chart k-font-success"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New order has been received
                                        </div>
                                        <div class="k-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-box-1 k-font-brand"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="k-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-chart2 k-font-danger"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            Application has been approved
                                        </div>
                                        <div class="k-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-image-file k-font-warning"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New file has been uploaded
                                        </div>
                                        <div class="k-notification__item-time">
                                            5 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-bar-chart k-font-info"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New user feedback received
                                        </div>
                                        <div class="k-notification__item-time">
                                            8 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-pie-chart-2 k-font-success"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            System reboot has been successfully completed
                                        </div>
                                        <div class="k-notification__item-time">
                                            12 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-favourite k-font-focus"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New order has been placed
                                        </div>
                                        <div class="k-notification__item-time">
                                            15 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item k-notification__item--read">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-safe k-font-primary"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            Company meeting canceled
                                        </div>
                                        <div class="k-notification__item-time">
                                            19 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-psd k-font-success"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New report has been received
                                        </div>
                                        <div class="k-notification__item-time">
                                            23 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon-download-1 k-font-danger"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            Finance report has been generated
                                        </div>
                                        <div class="k-notification__item-time">
                                            25 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon-security k-font-warning"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New customer comment recieved
                                        </div>
                                        <div class="k-notification__item-time">
                                            2 days ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="k-notification__item">
                                    <div class="k-notification__item-icon">
                                        <i class="flaticon2-pie-chart k-font-focus"></i>
                                    </div>
                                    <div class="k-notification__item-details">
                                        <div class="k-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="k-notification__item-time">
                                            3 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--end: Notifications -->

                    <!--begin: Quick actions -->
                    <div class="k-header__topbar-item dropdown">
                        <div class="k-header__topbar-wrapper" id="k_offcanvas_toolbar_quick_actions_toggler_btn">
                            <span class="k-header__topbar-icon"><i class="flaticon2-gear"></i></span>
                        </div>
                    </div>

                    <!--end: Quick actions -->


                    <!--begin: User bar -->
                    <div class="k-header__topbar-item k-header__topbar-item--user">
                        <div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px -2px">
                            <div class="k-header__topbar-user">
                                <span class="k-header__topbar-welcome k-hidden-mobile">Hi,</span>
                                <span class="k-header__topbar-username k-hidden-mobile">Alex</span>
                                <img alt="Pic" src="../assets/media/users/300_25.jpg" />

                                <!--use below badge element instead the user avatar to display username's first letter(remove k-hidden class to display it) -->
                                <span class="k-badge k-badge--username k-badge--lg k-badge--brand k-hidden">A</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-md">
                            <div class="k-user-card k-margin-b-50 k-margin-b-30-tablet-and-mobile" style="background-image: url(../assets/media/misc/head_bg_sm.jpg)">
                                <div class="k-user-card__wrapper">
                                    <div class="k-user-card__pic">
                                        <img alt="Pic" src="../assets/media/users/300_21.jpg" />
                                    </div>
                                    <div class="k-user-card__details">
                                        <div class="k-user-card__name">Alex Stone</div>
                                        <div class="k-user-card__position">CTO, Loop Inc.</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="k-nav k-margin-b-10">
                                <li class="k-nav__item">
                                    <a href="custom_user_profile-v1.html" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                                        <span class="k-nav__link-text">My Profile</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="custom_user_profile-v1.html" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                                        <span class="k-nav__link-text">My Tasks</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="custom_user_profile-v1.html" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-mail"></i></span>
                                        <span class="k-nav__link-text">Messages</span>
                                    </a>
                                </li>
                                <li class="k-nav__item">
                                    <a href="custom_user_profile-v1.html" class="k-nav__link">
                                        <span class="k-nav__link-icon"><i class="flaticon2-gear"></i></span>
                                        <span class="k-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="k-nav__item k-nav__item--custom k-margin-t-15">
                                    <a href="custom_user_login-v2.html" target="_blank" class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--end: User bar -->
                </div>
                <!-- end:: Header Topbar -->

            </div>

            <!-- end:: Header -->

            <!-- begin:: Content -->
            <div class="k-content	k-grid__item k-grid__item--fluid k-grid k-grid--hor" id="k_content">
                <!-- begin:: Content Head -->
                <div class="k-content__head	k-grid__item">
                    <div class="k-content__head-main">
                        <h3 class="k-content__head-title">Dashboard</h3>
                        <div class="k-content__head-breadcrumbs">
                            <a href="#" class="k-content__head-breadcrumb-home"><i class="flaticon2-shelter"></i></a>
                            <span class="k-content__head-breadcrumb-separator"></span>
                            <a href="" class="k-content__head-breadcrumb-link">Dashboards</a>
                            <span class="k-content__head-breadcrumb-separator"></span>
                            <a href="" class="k-content__head-breadcrumb-link">Navy Aside</a>

                            <!-- <span class="k-content__head-breadcrumb-link k-content__head-breadcrumb-link--active">Active link</span> -->
                        </div>
                    </div>
                    <div class="k-content__head-toolbar k-hide">
                        <div class="k-content__head-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-sm btn-elevate btn-danger btn-bold btn-upper dropdown-toggle-" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    New
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="la la-plus"></i> New Report</a>
                                    <a class="dropdown-item" href="#"><i class="la la-user"></i> Add Customer</a>
                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end:: Content Head -->

                <!-- begin:: Content Body -->
                <div class="k-content__body	k-grid__item k-grid__item--fluid" id="k_content_body">

                    <!--begin::Dashboard 1-->

                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

                            <!--begin::Portlet-->
                            <div class="k-portlet k-portlet--height-fluid">
                                <div class="k-portlet__head k-portlet__head--noborder">
                                    <div class="k-portlet__head-label">
                                        <h3 class="k-portlet__head-title">Author Sales</h3>
                                    </div>
                                    <div class="k-portlet__head-toolbar">
                                        <div class="k-portlet__head-toolbar-wrapper">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="flaticon-more-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="k-nav">
                                                        <li class="k-nav__section k-nav__section--first">
                                                            <span class="k-nav__section-text">Export Tools</span>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-print"></i>
                                                                <span class="k-nav__link-text">Print</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-copy"></i>
                                                                <span class="k-nav__link-text">Copy</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-excel-o"></i>
                                                                <span class="k-nav__link-text">Excel</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-text-o"></i>
                                                                <span class="k-nav__link-text">CSV</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-pdf-o"></i>
                                                                <span class="k-nav__link-text">PDF</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="k-portlet__body k-portlet__body--fluid">
                                    <div class="k-widget-19">
                                        <div class="k-widget-19__title">
                                            <div class="k-widget-19__label"><small>$</small>64M</div>
                                            <img class="k-widget-19__bg" src="../assets/media/misc/iconbox_bg.png" alt="bg" />
                                        </div>
                                        <div class="k-widget-19__data">

                                            <!--Doc: For the chart bars you can use state helper classes: k-bg-success, k-bg-info, k-bg-danger. Refer: components/custom/colors.html -->
                                            <div class="k-widget-19__chart">
                                                <div class="k-widget-19__bar">
                                                    <div class="k-widget-19__bar-45" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="45"></div>
                                                </div>
                                                <div class="k-widget-19__bar">
                                                    <div class="k-widget-19__bar-95" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="95"></div>
                                                </div>
                                                <div class="k-widget-19__bar">
                                                    <div class="k-widget-19__bar-63" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="63"></div>
                                                </div>
                                                <div class="k-widget-19__bar">
                                                    <div class="k-widget-19__bar-11" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="11"></div>
                                                </div>
                                                <div class="k-widget-19__bar">
                                                    <div class="k-widget-19__bar-46" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="46"></div>
                                                </div>
                                                <div class="k-widget-19__bar">
                                                    <div class="k-widget-19__bar-88" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="88"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Portlet-->
                        </div>
                        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

                            <!--begin::Portlet-->
                            <div class="k-portlet k-portlet--height-fluid">
                                <div class="k-portlet__head  k-portlet__head--noborder">
                                    <div class="k-portlet__head-label">
                                        <h3 class="k-portlet__head-title">Technologies</h3>
                                    </div>
                                    <div class="k-portlet__head-toolbar">
                                        <div class="k-portlet__head-toolbar-wrapper">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fal fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="k-nav">
                                                        <li class="k-nav__section k-nav__section--first">
                                                            <span class="k-nav__section-text">Export Tools</span>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-print"></i>
                                                                <span class="k-nav__link-text">Print</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-copy"></i>
                                                                <span class="k-nav__link-text">Copy</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-excel-o"></i>
                                                                <span class="k-nav__link-text">Excel</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-text-o"></i>
                                                                <span class="k-nav__link-text">CSV</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-pdf-o"></i>
                                                                <span class="k-nav__link-text">PDF</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="k-portlet__body k-portlet__body--fluid">
                                    <div class="k-widget-21">
                                        <div class="k-widget-21__title">
                                            <div class="k-widget-21__label">9.3M</div>
                                            <img src="../assets/media/misc/iconbox_bg.png" class="k-widget-21__bg" alt="bg" />
                                        </div>
                                        <div class="k-widget-21__data">

                                            <!--Doc: For the chart legend bullet colors can be changed with state helper classes: k-bg-success, k-bg-info, k-bg-danger. Refer: components/custom/colors.html -->
                                            <div class="k-widget-21__legends">
                                                <div class="k-widget-21__legend">
                                                    <i class="k-bg-brand"></i>
                                                    <span>HTML</span>
                                                </div>
                                                <div class="k-widget-21__legend">
                                                    <i class="k-shape-bg-color-4"></i>
                                                    <span>CSS</span>
                                                </div>
                                                <div class="k-widget-21__legend">
                                                    <i class="k-shape-bg-color-3"></i>
                                                    <span>Angular</span>
                                                </div>
                                            </div>
                                            <div class="k-widget-21__chart">
                                                <div class="k-widget-21__stat">+37%</div>

                                                <!--Doc: For the chart initialization refer to "widgetTechnologiesChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
                                                <canvas id="k_widget_technologies_chart" style="height: 110px; width: 110px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Portlet-->
                        </div>
                        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

                            <!--begin::Portlet-->
                            <div class="k-portlet k-portlet--height-fluid">
                                <div class="k-portlet__head  k-portlet__head--noborder">
                                    <div class="k-portlet__head-label">
                                        <h3 class="k-portlet__head-title">Total Orders</h3>
                                    </div>
                                    <div class="k-portlet__head-toolbar">
                                        <div class="k-portlet__head-toolbar-wrapper">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="flaticon-more-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="k-nav">
                                                        <li class="k-nav__section k-nav__section--first">
                                                            <span class="k-nav__section-text">Export Tools</span>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-print"></i>
                                                                <span class="k-nav__link-text">Print</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-copy"></i>
                                                                <span class="k-nav__link-text">Copy</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-excel-o"></i>
                                                                <span class="k-nav__link-text">Excel</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-text-o"></i>
                                                                <span class="k-nav__link-text">CSV</span>
                                                            </a>
                                                        </li>
                                                        <li class="k-nav__item">
                                                            <a href="#" class="k-nav__link">
                                                                <i class="k-nav__link-icon la la-file-pdf-o"></i>
                                                                <span class="k-nav__link-text">PDF</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="k-portlet__body k-portlet__body--fluid">
                                    <div class="k-widget-20">
                                        <div class="k-widget-20__title">
                                            <div class="k-widget-20__label">17M</div>
                                            <img class="k-widget-20__bg" src="../assets/media/misc/iconbox_bg.png" alt="bg" />
                                        </div>
                                        <div class="k-widget-20__data">
                                            <div class="k-widget-20__chart">

                                                <!--Doc: For the chart initialization refer to "widgetTotalOrdersChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
                                                <canvas id="k_widget_total_orders_chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Portlet-->
                        </div>
                        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

                            <!--begin::Portlet-->
                            <div class="k-portlet k-portlet--height-fluid k-widget ">
                                <div class="k-portlet__body">
                                    <div id="k-widget-slider-13-1" class="k-slider carousel slide" data-ride="carousel" data-interval="8000">
                                        <div class="k-slider__head">
                                            <div class="k-slider__label">Announcements</div>
                                            <div class="k-slider__nav">
                                                <a class="k-slider__nav-prev carousel-control-prev" href="#k-widget-slider-13-1" role="button" data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="k-slider__nav-next carousel-control-next" href="#k-widget-slider-13-1" role="button" data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active k-slider__body">
                                                <div class="k-widget-13">
                                                    <div class="k-widget-13__body">
                                                        <a class="k-widget-13__title" href="#">Keen Admin Launch Day</a>
                                                        <div class="k-widget-13__desc">
                                                            To start a blog, think of a topic about and first brainstorm party is ways to write details
                                                        </div>
                                                    </div>
                                                    <div class="k-widget-13__foot">
                                                        <div class="k-widget-13__label">
                                                            <div class="btn btn-sm btn-label btn-bold">
                                                                07 OCT, 2018
                                                            </div>
                                                        </div>
                                                        <div class="k-widget-13__toolbar">
                                                            <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item k-slider__body">
                                                <div class="k-widget-13">
                                                    <div class="k-widget-13__body">
                                                        <a class="k-widget-13__title" href="#">Incredibly Positive Reviews</a>
                                                        <div class="k-widget-13__desc">
                                                            To start a blog, think of a topic about and first brainstorm party is ways to write details
                                                        </div>
                                                    </div>
                                                    <div class="k-widget-13__foot">
                                                        <div class="k-widget-13__title">
                                                            <div class="btn btn-sm btn-label btn-bold">
                                                                17 NOV, 2018
                                                            </div>
                                                        </div>
                                                        <div class="k-widget-13__toolbar">
                                                            <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item k-slider__body">
                                                <div class="k-widget-13">
                                                    <div class="k-widget-13__body">
                                                        <a class="k-widget-13__title" href="#">Award Winning Theme</a>
                                                        <div class="k-widget-13__desc">
                                                            To start a blog, think of a topic about and first brainstorm party is ways to write details
                                                        </div>
                                                    </div>
                                                    <div class="k-widget-13__foot">
                                                        <div class="k-widget-13__label">
                                                            <div class="btn btn-sm btn-label btn-bold">
                                                                03 SEP, 2018
                                                            </div>
                                                        </div>
                                                        <div class="k-widget-13__toolbar">
                                                            <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Portlet-->
                        </div>
                    </div>
                    <!--end::Row-->

                    <!--end::Dashboard 1-->

                </div>
                <!-- end:: Content Body -->

            </div>
            <!-- end:: Content -->

        </div>
    </div>
</div>
<!-- end:: Page -->




<!-- begin::Scrolltop -->
<div id="k_scrolltop" class="k-scrolltop">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scrolltop -->


<!-- begin::Global Config -->
<script>
    var KAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "metal": "#c4c5d6",
                "light": "#ffffff",
                "accent": "#00c5dc",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995",
                "focus": "#9816f4"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!-- Scripts -->
<script src="{{ asset('js_admin/admin.js') }}" defer></script>

</body>
<!-- end::Body -->
</html>