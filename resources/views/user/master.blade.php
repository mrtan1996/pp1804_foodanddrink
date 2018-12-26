<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- StyleSheets -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">

</head>
<body>
    <div class="top">
        <div class="container">
            <nav class="navbar navbar-dark bg-faded navbar-fixed-top menutren">
                <a class="navbar-brand logo" href="#">SOTA.food</a>
                <ul class="navbar-nav flex-md-row menutrenphai">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item active">
                                <a class="nav-link" href="#">{{ trans('messages.home') }} <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ trans('messages.menu') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ trans('messages.cart') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ trans('messages.services') }}</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="logout">{{ trans('messages.logout') }}</a>
                            </li>   
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ trans('messages.login') }} <span class="sr-only">(current)</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ trans('messages.register') }} <span class="sr-only">(current)</span></a>
                                </li>
                            @endif
                        @endauth
                    @endif   
                </ul>   
            </nav>
        </div> <!-- end menu(container) -->
        <div class="banner">
            <div class="container-fluid">
                <div class="col-sm push-sm-3 text-xl-center p-sm-5">
                    <h2 class="m-5 tieudeto">SOTA FOOD</h2>
                    <div class="trichdan">{{ trans('messages.firstmess') }}</div>
                    <a href="" class="btn btn-danger m-2 nutaction">{{ trans('messages.findout') }}</a>
                </div>
            </div>
        </div>  <!-- end banner -->
    </div> <!-- end top -->
    <div class="noidung">
        @yield('content')
    </div>
    <div class="noidung2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-sm-center">
                        <h3 class="m-5 tieudeto">At Your Service</h3>
                    </div>
                </div> <!-- hetcol -->
            </div>  <!-- hetrow -->
            <div class="row 4cot text-xl-center">
                <div class="col-sm-3">
                    <div class="fa fa-book fa-3x"></div>
                        <h4>{{ trans('messages.menu') }}</h4>
                        <p>{{ trans('messages.menumess') }}</p>
                </div>
                <div class="col-sm-3">
                    <div class="fa fa-shopping-cart fa-3x"></div>
                        <h4>{{ trans('messages.cart') }}</h4>
                        <p>{{ trans('messages.cartmess') }}</p>
                </div>
                <div class="col-sm-3">
                    <div class="fa fa-paper-plane fa-3x"></div>
                        <i class="fas fa-book-open"></i>
                        <h4>{{ trans('messages.shipping') }}</h4>
                        <p>{{ trans('messages.shippingmess') }}</p>
                </div>
                <div class="col-sm-3">
                    <div class="fa fa-heart fa-3x"></div>
                        <i class="fas fa-book-open"></i>
                        <h4>{{ trans('messages.quality') }}</h4>
                        <p>{{ trans('messages.qualitymess') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="noidung3">
        <div class="row">
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/fastfood.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.fastfood') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/dessert.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.dessert') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/drink.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.drink') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/dish.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.dish') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/fruit.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.fruit') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/cake.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.cake') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- het noidung3 -->

    <!-- jquery -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript"></script>
    
    <!-- bootstrap <-->
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
