<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Farm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/style.css">
    

     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Farm</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index9.html"><img src="assets/img/logo/logoo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="about">About</a></li>
                                        <li><a href="">Activity</a>
                                            <ul class="submenu">
                                                <li><a href="News">News</a></li>
                                                <li><a href="Posts">Post</a></li>
                                                <li><a href="questions">questions</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Farms</a>
                                            <ul class="submenu">
                                                <li><a href="add">Add Farm</a></li>
                                                <li><a href="farms">All Farms</a></li>

                                            </ul>
                                        </li>

                                        </li>
                                        <li><a href="Contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                        
                            <!-- header-btn -->
                                   @guest
                               
                            <div class="header-btn">
                                <div class="header-right-action">
                                     @if (Route::has('register'))
                                    <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1"
                                        data-toggle="modal" data-target="#signupPopupForm">{{ __('Register') }}</a>  
                                           @endif 
                                          @if (Route::has('login'))
                                    <a href="#" class="theme-btn theme-btn-small" data-toggle="modal"
                                        data-target="#loginPopupForm">{{ __('Login') }}</a>     
                                           @endif
                                </div>

                            </div>
                      
                        </div>
                        <ul>
                               @else
                                 <li style="margin-top: 15px;" class="nav-item ">
                                    <li style="margin-top: 15px" class="nav-item ">
                             
                                    <li style="margin-top: 15px;" class="nav-item ">
                                    <li style="margin-top: 25px;margin-left: 10px" class="nav-item ">
                                        <div class="nav-item dropdown">
                                            <button style="text-transform: uppercase;" class="btn btn-outline-primary ml-2 dropdown-toggle"
                                                class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __(Auth::user()->name) }}
                                            </button>
                                            
                                                
                                                <a class="dropdown-item" style="color: #ff6600c2 "
                                                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
               
                         @endguest   </ul>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Header End -->
    </header>

    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                            <p class="font-size-14">Hello! Welcome Create a New Account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-box">
                                    <label class="label-text">{{ __('Name') }}</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required type="text" 
                                            placeholder="Type your username">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">{{ __('Email Address') }}</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input type='email'
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required
                                            autocomplete="email"placeholder="Type your email">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">{{ __('Password') }}</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">{{ __('Confirm Password') }}</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Type again password">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100"> {{ __('Register') }}</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Sign up Using</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i
                                                    class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#" class="bg-6 text-white"><i
                                                    class="lab la-twitter"></i></a></li>
                                        <li><a href="#" class="bg-7 text-white"><i
                                                    class="lab la-instagram"></i></a></li>
                                        <li><a href="#" class="bg-5 text-white"><i
                                                    class="lab la-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                            <p class="font-size-14">Hello! Welcome to your account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="POST" action="{{ route('login') }}">
                              @csrf
                                <div class="input-box">
                                    <label class="label-text">{{ __('Email Address') }}</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Type your email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Type your password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                            <label for="rememberchb">  {{ __('Remember Me') }}</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="recover.html">Forgot Password?</a>
                                        </p>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">{{ __('Login') }}</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Login Using</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i
                                                    class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#" class="bg-6 text-white"><i
                                                    class="lab la-twitter"></i></a></li>
                                        <li><a href="#" class="bg-7 text-white"><i
                                                    class="lab la-instagram"></i></a></li>
                                        <li><a href="#" class="bg-5 text-white"><i
                                                    class="lab la-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->
