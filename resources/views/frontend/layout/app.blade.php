<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Default Title')
    </title>

   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/imgs/theme/favicon.svg') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css?v=5.3') }}" />

</head>

<body>

    <!-- Include the model partial -->
    @include('frontend.model.type1')


    <!-- Include the Header partial -->
    @include('frontend.layout.header')

    <!-- Include the Topbar partial -->
    @include('frontend.layout.topbar')

    <!-- slider -->

    <main class="main">

        @if(
            
            Request::is('login') || 
            Request::is('register') || 
            Request::is('forgetpassword') || 
            Request::is('resetpassword') || 
            Request::is('myaccount') || 
            Request::is('wishlist') ||
            Request::is('privacypolicy') || 
            Request::is('terms') || 
            Request::is('error') ||
            Request::is('purchase_guide') ||
            Request::is('about') ||
            Request::routeIs('product.show') ||
            Request::routeIs('cart.index') ||
            Request::is('checkout') ||
            Request::routeIs('order.place_an_order') ||
            Request::routeIs('order.confirmation') ||
            Request::routeIs('invoice.show') 

            )

            @yield('content')

        @elseif (
            request()->query('category')
        )    
        
        @yield('content')

        @elseif(Request::is('/'))

    
            <!-- Include the slider partial -->
            @include('frontend.slider.type1')


            <!-- Include the feature categories partial -->
            @include('frontend.slider.feature_categories.type1')

            <!-- Include the banner partial -->
            @include('frontend.slider.banner.type1')

            <!-- Include the popular product partial -->
            @include('frontend.slider.popular_product.type1')

            <!-- Include the daily best sells partial -->
            @include('frontend.slider.daily_best_sells.type1')

            <!-- Include the deal of the day partial -->
            @include('frontend.slider.deal_of_the_day.type1')

            <!-- Include the Search partial -->
            <!-- @include('frontend.layout.search') -->

            <section class="section-padding mb-30">            
                    <div class="container">
                        <div class="row">

                            <!-- Include the top selling partial -->
                            @include('frontend.slider.top_selling.type1')

                            <!-- Include the trending products partial -->
                            @include('frontend.slider.trending_products.type1')

                            <!-- Include the recently_added slider partial -->
                            @include('frontend.slider.recently_added.type1')

                            <!-- Include the top rated  slider partial -->
                            @include('frontend.slider.top_rated.type1')

                        </div>
                    </div>
            </section>
        @endif
   </main>
    

    <!-- @yield('content') -->

    <!-- Include the Footer partial -->
    @include('frontend.layout.footer')

    <!-- Include the preloader partial -->
    @include('frontend.preloader.type1')

     <!-- Vendor JS-->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend/js/main.js?v=5.3') }}"></script>
    <script src="{{ asset('frontend/js/shop.js?v=5.3') }}"></script>
</body>
</html>