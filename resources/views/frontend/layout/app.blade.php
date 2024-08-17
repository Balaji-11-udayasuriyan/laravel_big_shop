<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Default Title')
    </title>
   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="frontend/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="frontend/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="frontend/css/main.css?v=5.3" />
</head>
<body>

    <!-- Include the model partial -->
    @include('frontend.model.type1')


    <!-- Include the Header partial -->
    @include('frontend.layout.header')

    <!-- Include the Topbar partial -->
    @include('frontend.layout.topbar')

    <main class="main">
    
    <!-- Include the slider partial -->
    @include('frontend.slider.type1')

    </main>

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
                </div>
            </div>
    </section>

    @yield('content')

    <!-- Include the Footer partial -->
    @include('frontend.layout.footer')

    <!-- Include the preloader partial -->
    @include('frontend.preloader.type1')

     <!-- Vendor JS-->
    <script src="frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="frontend/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="frontend/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="frontend/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/plugins/slick.js"></script>
    <script src="frontend/js/plugins/jquery.syotimer.min.js"></script>
    <script src="frontend/js/plugins/waypoints.js"></script>
    <script src="frontend/js/plugins/wow.js"></script>
    <script src="frontend/js/plugins/perfect-scrollbar.js"></script>
    <script src="frontend/js/plugins/magnific-popup.js"></script>
    <script src="frontend/js/plugins/select2.min.js"></script>
    <script src="frontend/js/plugins/counterup.js"></script>
    <script src="frontend/js/plugins/jquery.countdown.min.js"></script>
    <script src="frontend/js/plugins/images-loaded.js"></script>
    <script src="frontend/js/plugins/isotope.js"></script>
    <script src="frontend/js/plugins/scrollup.js"></script>
    <script src="frontend/js/plugins/jquery.vticker-min.js"></script>
    <script src="frontend/js/plugins/jquery.theia.sticky.js"></script>
    <script src="frontend/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="frontend/js/main.js?v=5.3"></script>
    <script src="frontend/js/shop.js?v=5.3"></script>
</body>
</html>