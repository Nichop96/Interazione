
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ORC Sensorial Analysis</title>
        <link rel="icon" href="{{asset('public-part/img/logos/logo_transparent.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/bootstrap.min.css')}}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/animate.css')}}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/owl.carousel.min.css')}}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/themify-icons.css')}}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/flaticon.css')}}">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/magnific-popup.css')}}">
        <!-- nice select CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/nice-select.css')}}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/slick.css')}}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{asset('public-part/css/style.css')}}">
        
        <link rel="stylesheet" href="{{asset('public-part/css/flag.css')}}">
    </head>

    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{route('index')}}"> <img class="col-sm-2" src="{{asset('public-part/img/logos/logo_transparent.png')}}" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav align-items-center">  
                                    <li class="nav-item" active>
                                        <a class="nav-link font-weight-bold text-primary" href="{{route('index')}}">Home</a>
                                    </li>
                                    <li class="nav-item" active>
                                        <a class="nav-link" href="{{route('about')}}">About</a>
                                    </li>
                                    @if (Route::has('login'))
                                    @auth
                                    @hasrole('admin')
                                    <a class="btn_1  mr-5" href="{{ route('admin.index') }}">Dashboard</a>
                                    @endhasrole
                                    @hasrole('user')
                                    <a class="btn_1 mr-5" href="{{ route('user.index') }}">Dashboard</a>
                                    @endhasrole                        
                                    @else
                                    <a class="btn_1" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                    <a class="btn_1 mr-5" href="{{ route('register') }}">Register</a>
                                    @endif
                                    @endauth

                                    @endif

                                    <li><a href="{{ url('locale/it') }}" ><i class="italy flag"></i></li>
                                    <li><a href="{{ url('locale/en') }}" ><i class="uk flag"></i></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- our_ability part start-->
        <section class="our_ability ">
            <br>
            <br>
            <br>
            <br>

            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-md-6 col-lg-5">
                        <div class="our_ability_member_text">
                            <h1>{{__('public.sens')}}</h1>
                            <p>{{__('public.funnel')}}
                            </p>

                            @if (Route::has('login'))

                            @auth
                            @hasrole('admin')
                            <a class="btn_2" href="{{ route('admin.index') }}">{{__('public.continue')}}</a>
                            @endhasrole
                            @hasrole('user')
                            <a class="btn_2" href="{{ route('user.index') }}">{{__('public.complete')}}</a>
                            @endhasrole                        
                            @else
                            <a class="btn_2" href="{{ route('register') }}">{{__('public.get_sta')}}</a>
                            @endauth

                            @endif

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="our_ability_img">
                            <img src="{{asset('public-part/img/banner11.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our_ability part end-->

        <!-- feature_part start-->
        <section class="feature_part ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 align-self-center">
                        <div class="single_feature_text ">
                            <h2>{{__('public.What')}}
                            </h2>
                            <p>{{__('public.The_sens')}}</p>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="feature_item">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_feature">
                                        <div class="single_feature_part">
                                            <span class="single_feature_icon"><img src="{{asset('public-part/img/icon/taste.svg')}}"
                                                                                   alt=""></span>
                                            <h4>{{__('public.taste')}}</h4>
                                            <p>{{__('public.tastemi')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_feature">
                                        <div class="single_feature_part">
                                            <span class="single_feature_icon"><img src="{{asset('public-part/img/icon/touch.svg')}}"
                                                                                   alt=""></span>
                                            <h4>{{__('public.touch')}}</h4>
                                            <p>{{__('public.touchmi')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_feature">
                                        <div class="single_feature_part">
                                            <span class="single_feature_icon"><img src="{{asset('public-part/img/icon/hear.svg')}}"
                                                                                   alt=""></span>
                                            <h4>{{__('public.hearing')}}</h4>
                                            <p>{{__('public.hearingmi')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_feature">
                                        <div class="single_feature_part">
                                            <span class="single_feature_icon"><img src="{{asset('public-part/img/icon/smell.svg')}}"
                                                                                   alt=""></span>
                                            <h4>{{__('public.smell')}}</h4>
                                            <p>{{__('public.smellmi')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_part start-->

        <!-- our_ability part start-->
        <section class="our_ability section_padding">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="our_ability_img">
                            <img src="{{asset('public-part/img/Cinque_sensi.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="our_ability_member_text">
                            <h2>{{__('public.experience')}}</h2>
                            <p>{{__('public.proto')}}</p>
                            <ul>
                                <li><span class="ti-mouse"></span>{{__('public.modern')}}</li>
                                <li><span class="ti-gallery"></span>{{__('public.world')}}</li>
                                <li><span class="ti-anchor"></span>{{__('public.tester')}}</li>
                                <li><span class="ti-headphone-alt"></span>{{__('public.hours')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our_ability part end-->
        <br>
        <br>
        <!-- top_service part start-->
        <section class="top_service our_ability ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5 col-lg-5">
                        <div class="our_ability_member_text">
                            <h2>{{__('public.about')}}</h2>
                            <p>{{__('public.group')}}
                            </p>
                            <a href="{{route('about')}}" class="btn_2">{{__('public.more')}}</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="our_ability_img">
                            <img class="rounded" src="{{asset('public-part/img/contactus.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top_service part end-->


        <br>
        <br>
        <!--::doctor_part start::-->
        <section class="doctor_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <h2>{{__('public.docto')}}</h2>
                            <p>{{__('public.degree')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="{{asset('public-part/img/doctor/castel.jpg')}}" alt="doctor">                               
                            </div>
                            <div class="single_text">
                                <div class="single_blog_text">
                                    <h3>DR Federico Castelnovo</h3>
                                    <p>Smelling Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="{{asset('public-part/img/doctor/rock.jpg')}}" alt="doctor">                                
                            </div>
                            <div class="single_text">
                                <div class="single_blog_text">
                                    <h3>DR Matteo Rocco</h3>
                                    <p>Tasting specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="{{asset('public-part/img/doctor/nico.jpg')}}" alt="doctor">                              
                            </div>
                            <div class="single_text">
                                <div class="single_blog_text">
                                    <h3>DR Nicholas Onger</h3>
                                    <p>Hearing specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--::doctor_part end::-->

        <br>
        <br>

        <!-- footer part start-->
        <footer class="footer-area">


            <div class="copyright_part">
                <div class="container">
                    <div class="row align-items-center">
                        <p class="footer-text m-0 col-lg-8 col-md-12">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="{{asset('index')}}" target="_blank">ORC</a>
                        </p>                       
                    </div>
                </div>
            </div>
        </footer>






        <!-- jquery plugins here-->

        <script src="{{asset('public-part/js/jquery-1.12.1.min.js')}}"></script>
        <!-- popper js -->
        <script src="{{asset('public-part/js/popper.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('public-part/js/bootstrap.min.js')}}"></script>
        <!-- easing js -->
        <script src="{{asset('public-part/js/jquery.magnific-popup.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('public-part/js/swiper.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('public-part/js/masonry.pkgd.js')}}"></script>
        <!-- particles js -->
        <script src="{{asset('public-part/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public-part/js/jquery.nice-select.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('public-part/js/slick.min.js')}}"></script>
        <script src="{{asset('public-part/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public-part/js/waypoints.min.js')}}"></script>
        <!-- contact js -->
        <script src="{{asset('public-part/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('public-part/js/jquery.form.js')}}"></script>
        <script src="{{asset('public-part/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public-part/js/mail-script.js')}}"></script>
        <script src="{{asset('public-part/js/contact.js')}}"></script>
        <!-- custom js -->
        <script src="{{asset('public-part/js/custom.js')}}"></script>
    </body>

</html>
