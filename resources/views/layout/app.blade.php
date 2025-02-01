<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Hospital San Francisco | @yield('title')</title>    

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->    
    @vite(['resources/assets/vendor/bootstrap/css/bootstrap.min.css',
    'resources/assets/vendor/bootstrap-icons/bootstrap-icons.css',    
    'resources/assets/vendor/fontawesome-free/css/all.min.css',
    'resources/assets/vendor/glightbox/css/glightbox.min.css',
    'resources/assets/vendor/swiper/swiper-bundle.min.css'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main CSS File -->      
     @vite('resources/assets/css/main.css')
</head>

<body class="index-page">
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->    
    @vite([
        'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/vendor/php-email-form/validate.js',        
        'resources/assets/vendor/glightbox/js/glightbox.min.js',
        'resources/assets/vendor/purecounter/purecounter_vanilla.js',
        'resources/assets/vendor/swiper/swiper-bundle.min.js',
        ])
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Main JS File -->    
    @vite('resources/assets/js/main.js')
    @yield('scripts')
</body>

</html>