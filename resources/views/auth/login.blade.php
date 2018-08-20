<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 23:42:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
        University of Mines Basic School
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-dashboard-pro" />


    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, now ui dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, now ui design, now ui dashboard bootstrap 4 dashboard">
    <meta name="description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Now Ui Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Now Ui Dashboard PRO by Creative Tim">

    <meta name="twitter:description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Now Ui Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="../dashboard.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg"/>
    <meta property="og:description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/css/now-ui-dashboard.min.css?v=1.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/demo/demo.css" rel="stylesheet" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->


</head>

<body class=" sidebar-mini ">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper wrapper-full-page ">
    <div class="full-page login-page section-image" filter-color="black" data-image="{{asset('images/background.jpg')}}">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="card card-login card-plain">

                            <div class="card-header ">
                                <div class="logo-container">
                                    <img src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/img/now-logo.png" alt="">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="input-group no-border form-control-lg">
        <span class="input-group-prepend">
          <div class="input-group-text">
            <i class="now-ui-icons users_circle-08"></i>
          </div>
        </span>
                                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder="Email...."  value="{{ old('email') }}" name="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                                    @endif
                                </div>

                                <div class="input-group no-border form-control-lg">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="password" placeholder="Password....."
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button  class="btn btn-success btn-round btn-lg btn-block mb-3" type="submit">Login</button>
                                <div class="pull-left">
                                    <h6><a href="#pablo" class="link footer-link">Forgot password</a></h6>
                                </div>

                                <div class="pull-right">
                                    <h6><a href="#pablo" class="link footer-link">Need Help?</a></h6>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


        <footer class="footer" >
            <div class="container-fluid">
                <div class="copyright" id="copyright">
                    &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="#" target="_blank">AdynsSolutions</a>. Coded by <a href="#" target="_blank">Adyns Team</a>.
                </div>
            </div>
        </footer>
    </div>
</div>

<!--   Core JS Files   -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/core/jquery.min.js" ></script>
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/core/popper.min.js" ></script>

<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/core/bootstrap.min.js" ></script>

<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/perfect-scrollbar.jquery.min.js" ></script>

<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/moment.min.js"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/sweetalert2.min.js"></script>

<!-- Forms Validations Plugin -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/bootstrap-selectpicker.js" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/bootstrap-datetimepicker.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/jquery.dataTables.min.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/bootstrap-tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/nouislider.min.js" ></script>
<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chart JS -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --><script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/js/now-ui-dashboard.min.js?v=1.1.2" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/demo/demo.js"></script>


<!-- Sharrre libray -->
<script src="https://demos.creative-tim.com/now-ui-dashboard-pro/assets/demo/jquery.sharrre.js"></script>

<script>
    $(document).ready(function(){


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: { twitter: {via: 'CreativeTim'}},
            click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });



        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46172202-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        // Facebook Pixel Code Don't Delete
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','http://connect.facebook.net/en_US/fbevents.js');

        try{
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        }catch(err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />

</noscript>

<script>
    $(document).ready(function(){
        $().ready(function(){
            $sidebar = $('.sidebar');
            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
            //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
            //         $('.fixed-plugin .dropdown').addClass('show');
            //     }
            //
            // }

            $('.fixed-plugin a').click(function(event){
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if($(this).hasClass('switch-trigger')){
                    if(event.stopPropagation){
                        event.stopPropagation();
                    }
                    else if(window.event){
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if($sidebar.length != 0){
                    $sidebar.attr('data-color',new_color);
                }

                if($full_page.length != 0){
                    $full_page.attr('filter-color',new_color);
                }

                if($sidebar_responsive.length != 0){
                    $sidebar_responsive.attr('data-color',new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function(){
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if( $sidebar_img_container.length !=0 && $('.switch-sidebar-image input:checked').length != 0 ){
                    $sidebar_img_container.fadeOut('fast', function(){
                        $sidebar_img_container.css('background-image','url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0 ) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function(){
                        $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if( $('.switch-sidebar-image input:checked').length == 0 ){
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image','url("' + new_image + '")');
                    $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                }

                if($sidebar_responsive.length != 0){
                    $sidebar_responsive.css('background-image','url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function(){
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if($input.is(':checked')){
                    if($sidebar_img_container.length != 0){
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image','#');
                    }

                    if($full_page_background.length != 0){
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image','#');
                    }

                    background_image = true;
                } else {
                    if($sidebar_img_container.length != 0){
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if($full_page_background.length != 0){
                        $full_page.removeAttr('data-image','#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function(){
                var $btn = $(this);

                if(sidebar_mini_active == true){
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    nowuiDashboard.showSidebarMessage('Sidebar mini deactivated...');
                }else{
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    nowuiDashboard.showSidebarMessage('Sidebar mini activated...');
                }
                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function(){
                    window.dispatchEvent(new Event('resize'));
                },180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function(){
                    clearInterval(simulateWindowResize);
                },1000);
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        demo.checkFullPageBackgroundImage();
    });
</script>
</body>
</html>