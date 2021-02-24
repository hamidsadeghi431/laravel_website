<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index,follow">
    <!-- SEO Meta Tags -->
    @yield('seo')
    <!-- end seo section -->
    <!-- Website Title -->
    <title>Aria - Business HTML Landing Page Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href={{asset("front/css/bootstrap.css")}} rel="stylesheet">
    <link href={{asset("front/css/fontawesome-all.css")}} rel="stylesheet">
    <link href={{asset("front/css/swiper.css")}} rel="stylesheet">
    <link href={{asset("front/css/magnific-popup.css")}} rel="stylesheet">
    <link href={{asset("front/css/styles.css")}} rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href={{asset("front/images/favicon.png")}}>
    @yield('css')
</head>

@yield('content')
 of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src={{asset("front/js/jquery.min.js")}}></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src={{asset("front/js/popper.min.js")}}></script> <!-- Popper tooltip library for Bootstrap -->
<script src={{asset("front/js/bootstrap.min.js")}}></script> <!-- Bootstrap framework -->
<script src={{asset("front/js/jquery.easing.min.js")}}></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src={{asset("front/js/swiper.min.js")}}></script> <!-- Swiper for images and text sliders -->
<script src={{asset("front/js/jquery.magnific-popup.js")}}></script> <!-- Magnific Popup for lightboxes -->
<script src={{asset("front/js/morphext.min.js")}}></script> <!-- Morphtext rotating text in the header -->
<script src={{asset("front/js/isotope.pkgd.min.js")}}></script> <!-- Isotope for filter -->
<script src={{asset("front/js/validator.min.js")}}></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src={{asset("front/js/scripts.js")}}></script> <!-- Custom scripts -->
@yield('js')
</body>
</html>
