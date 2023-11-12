<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - NGO</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png"
        href="https://script.viserlab.com/ngolab/assets/images/logoIcon/favicon.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/bootstrap.min.css">
    <!-- bootstrap toggle css -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/bootstrap-toggle.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/line-awesome.min.css">


    <!-- custom select box css -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/nice-select.css">
    <!-- code preview css -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/prism.css">
    <!-- select 2 css -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/select2.min.css">
    <!-- jvectormap css -->
    <link rel="stylesheet"
        href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/jquery-jvectormap-2.0.5.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/datepicker.min.css">
    <!-- timepicky for time picker css -->
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/jquery-timepicky.css">
    <!-- bootstrap-clockpicker css -->
    <link rel="stylesheet"
        href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/bootstrap-clockpicker.min.css">
    <!-- bootstrap-pincode css -->
    <link rel="stylesheet"
        href="https://script.viserlab.com/ngolab/assets/admin/css/vendor/bootstrap-pincode-input.css">

    <!-- dashdoard main css -->
    {{--
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/app.css"> --}}

    {{--
    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/admin/css/custom.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @vite('resources/css/app.css')

</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <div class="sidebar capsule--rounded bg--dark "
            data-background="https://script.viserlab.com/ngolab/assets/admin/images/sidebar/2.jpg">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">

                <x-app.sidebar.logo />

                <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item active">

                            <x-app.sidebar.links.dashboard />

                        </li>



                        <li class="sidebar-menu-item sidebar-dropdown">

                            <x-app.sidebar.links.loan />

                            <div class="sidebar-submenu ">
                                <ul>
                                    <li class="sidebar-menu-item ">
                                        <x-app.sidebar.links.loan.applyloan />
                                    </li>

                                    <li class="sidebar-menu-item ">

                                        <x-app.sidebar.links.loan.pending />
                                    </li>
                                    <li class="sidebar-menu-item ">

                                        <x-app.sidebar.links.loan.active />
                                    </li>
                                    <li class="sidebar-menu-item ">

                                        <x-app.sidebar.links.loan.paid />
                                    </li>
                                    <li class="sidebar-menu-item ">

                                        <x-app.sidebar.links.loan.closed />
                                    </li>
                                    <li class="sidebar-menu-item ">

                                        <x-app.sidebar.links.loan.all />
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">

                            <x-app.sidebar.links.savings />

                            <div class="sidebar-submenu ">
                                <ul>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('saving.plan') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Apply for savings</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('saving.pending') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('loan.active') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Active</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('loan.paid') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Paid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('saving.close') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Closed</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('saving.all') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="sidebar-menu-item sidebar-dropdown">

                            <x-app.sidebar.links.payment />

                            <div class="sidebar-submenu ">
                                <ul>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('payment.all') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('payment.loan') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Loan</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="{{ route('payment.saving') }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Savings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">

                            <x-app.sidebar.links.ticket />

                            <div class="sidebar-submenu ">
                                <ul>
                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/ngolab/ticket/new" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Open Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/ngolab/ticket" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">My Tickets</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/ngolab/user/profile-setting" class="nav-link ">
                                <i class="menu-icon las la-user"></i>
                                <span class="menu-title">Profile</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/ngolab/user/twofactor" class="nav-link ">
                                <i class="menu-icon las la-shield-alt"></i>
                                <span class="menu-title">2FA Security</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/ngolab/user/change-password" class="nav-link ">
                                <i class="menu-icon las la-lock"></i>
                                <span class="menu-title">Change Password</span>
                            </a>
                        </li> --}}

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/ngolab/logout" class="nav-link ">
                                <i class="menu-icon las la-sign-out-alt"></i>
                                <span class="menu-title">logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- sidebar end -->
        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper">
            <form class="navbar-search" onsubmit="return false;">
                <button type="submit" class="navbar-search__btn">
                    <i class="las la-search"></i>
                </button>
                <input type="search" name="navbar-search__field" id="navbar-search__field" placeholder="Search...">
                <button type="button" class="navbar-search__close"><i class="las la-times"></i></button>

                <div id="navbar_search_result_area">
                    <ul class="navbar_search_result"></ul>
                </div>
            </form>

            <div class="navbar__right">
                <a href="https://script.viserlab.com/ngolab/user/profile-setting"
                    class="px-3 py-2 border-0 dropdown-menu__item d-flex align-items-center">
                    <i class="dropdown-menu__icon las la-user-circle"></i>
                    <span class="dropdown-menu__caption">Profile</span>
                </a>
            </div>
        </nav>
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            {{-- <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Dashboard</h6>
                    </div>
                    <div class="mt-3 col-lg-6 col-sm-6 text-sm-right mt-sm-0 right-part">
                    </div>
                </div>


                <div class="row mb-none-30">
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="las la-comment-dollar"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">83</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small">Active Loans</span>
                                </div>
                                <a href="https://script.viserlab.com/ngolab/user/loan/active"
                                    class="mt-3 btn btn-sm text--small bg--white text--black box--shadow3">View All</a>
                            </div>
                        </div>
                    </div><!-- dashboard-w1 end -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--cyan b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="las la-file-invoice-dollar"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="currency-sign">$</span>
                                    <span class="amount">4,267.68</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small">Loan Total Due</span>
                                </div>
                                <a href="https://script.viserlab.com/ngolab/user/loan/active"
                                    class="mt-3 btn btn-sm text--small bg--white text--black box--shadow3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--orange b-radius--10 box-shadow ">
                            <div class="icon">
                                <i class="las la-coins"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">20</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small">Active Savings</span>
                                </div>
                                <a href="https://script.viserlab.com/ngolab/user/savings/active"
                                    class="mt-3 btn btn-sm text--small bg--white text--black box--shadow3">View All</a>
                            </div>
                        </div>
                    </div><!-- dashboard-w1 end -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--pink b-radius--10 box-shadow ">
                            <div class="icon">
                                <i class="las la-wallet"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="currency-sign">$</span>
                                    <span class="amount">15,657.40</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small">Payable Savings</span>
                                </div>

                                <a href="https://script.viserlab.com/ngolab/user/savings/active"
                                    class="mt-3 btn btn-sm text--small bg--white text--black box--shadow3">View All</a>
                            </div>
                        </div>
                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->

                <div class="mt-4 card b-radius--10">
                    <div class="card-header">
                        <h5 class="d-inline">Payment History</h5>
                        <a href="https://script.viserlab.com/ngolab/user/payment-history/all"
                            class="float-right btn btn-sm btn--primary box--shadow1 text--small">View All</a>
                    </div>
                    <div class="p-0 card-body">
                        <div class="table-responsive--md table-responsive">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Type</th>
                                        <th>Plan Name</th>
                                        <th>Paid Through</th>
                                        <th>Amount</th>
                                        <th>Late Fee</th>
                                        <th>Total Amount</th>
                                        <th>Date Time</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td data-label="S.N">1</td>
                                        <td data-label="Type">Loan</td>
                                        <td data-label="Plan Name">Eagan Greene</td>
                                        <td data-label="Paid Through"> Staff </td>
                                        <td data-label="Amount">$5.00</td>
                                        <td data-label="Late Fee">$0.00</td>
                                        <td data-label="Total Amount">$5.00</td>
                                        <td data-label="Date Time">2023-10-26 10:58 AM</td>
                                    </tr>


                                </tbody>
                            </table><!-- table end -->
                        </div>
                    </div>
                </div>


            </div><!-- bodywrapper__inner end --> --}}

            @yield('content')
        </div><!-- body-wrapper end -->
    </div>




    <!-- jQuery library -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- bootstrap-toggle js -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/bootstrap-toggle.min.js"></script>

    <!-- slimscroll js for custom scrollbar -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/jquery.slimscroll.min.js"></script>
    <!-- custom select box js -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/jquery.nice-select.min.js"></script>


    <link rel="stylesheet" href="https://script.viserlab.com/ngolab/assets/global/css/iziToast.min.css">
    <script src="https://script.viserlab.com/ngolab/assets/global/js/iziToast.min.js"></script>

    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>

    <script src="https://script.viserlab.com/ngolab/assets/admin/js/nicEdit.js"></script>

    <!-- code preview js -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/prism.js"></script>
    <!-- seldct 2 js -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/vendor/select2.min.js"></script>
    <!-- main js -->
    <script src="https://script.viserlab.com/ngolab/assets/admin/js/app.js"></script>


    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });
        })(jQuery);
    </script>



    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script>
        if (window.top != window.self) {
            document.body.innerHTML +=
                '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' +
                window.self.location +
                '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
        }
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
        adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
        adroll_version = "2.0";
        (function(w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id +
                "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                    return function() {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script>


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8940522890323334"
        crossorigin="anonymous"></script>


</body>

</html>
