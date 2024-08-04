<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',"UserAuth")</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
                background-color: #70C6CD;
                /* Pink */
            }

            50% {
                background-position: 100% 50%;
                background-color: #7A3EF2;
                /* Indigo */
            }

            100% {
                background-position: 0% 50%;
                background-color: #70C6CD;
                /* Pink */
            }
        }

        .gradient-animation {
            background: linear-gradient(90deg, #70C6CD, #7A3EF2);
            /* Pink to Indigo */
            background-size: 200% 200%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientAnimation 5s ease infinite;
        }
    </style>


    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-Rubik">
    @include('components.navbar')


    @error('error')
    <script>
        Swal.fire({
            icon: "error",
            title: "Error occures",
            text: "{{$message}}",
        });
    </script>
    @enderror


    @yield('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
