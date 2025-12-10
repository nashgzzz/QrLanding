<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Mi Landing')</title>
        {{-- FAVICON --}}
<link rel="icon" type="image/png" href="/img/LogoBSB.jpeg">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    @yield('content')

    {{-- @include('components.footer')

<script>
let currentSlide = 0;
const track = document.getElementById("sliderTrack");
const totalSlides = track.children.length;

function moveSlide(direction) {
    currentSlide += direction;

    if (currentSlide < 0) currentSlide = totalSlides - 1;
    if (currentSlide >= totalSlides) currentSlide = 0;

    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}
</script> --}}
@include('sweetalert::alert')

</body>
</html>
