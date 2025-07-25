<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Cheapest Trek an Tours</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- custom font  --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')
    @yield('styles')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>

</head>

<body class="font-rubik">

    {{-- <h1 class="font-caveat text-h1">Heading with Playwriter font</h1> --}}

    @include('frontend.layout.navbar')


    @yield('content')


    @include('frontend.layout.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')


</body>


<script>
    $(document).ready(function() {
        // Toggle mobile menu
        $('#menuBtn').click(function() {
            $('#mobileMenu').toggleClass('hidden');
        });

        // Handle dropdown toggles
        $('.dropdown-toggle').click(function(e) {
            e.preventDefault();

            const $arrow = $(this).find('.arrow');
            const $dropdown = $(this).next('.dropdown-menu');

            // Close other dropdowns
            $('.dropdown-menu').not($dropdown).slideUp();
            $('.arrow').not($arrow).removeClass('rotate-180');

            // Toggle selected
            $dropdown.slideToggle();
            $arrow.toggleClass('rotate-180');
        });
    });
</script>

</html>
