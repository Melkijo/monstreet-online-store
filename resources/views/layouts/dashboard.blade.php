<!doctype html>
<html lang="en">

<head>
    <title>MONSTREET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon_io/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>

    <div class=" relative overflow-hidden bg-center bg-cover" style="background-image: url(/assets/background.jpg)">
        {{-- <img src="./assets/gradient-green.png" class="absolute -right-[500px] -top-[500px] " alt="">
        <img src="./assets/gradient-green.png" class="absolute -left-[500px] -bottom-[500px] " alt=""> --}}

        @include('components.dashboard-navbar')
        @include('components.dashboard-sidebar')
        @section('extra-content')


        </div>


    </body>

    </html>
