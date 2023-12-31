<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])

</head>

<body>
    <div id="app">


        @include('partials.header')

        <main class="d-flex">

            {{-- left bar --}}
            <section id="left_bar" class="min-vh-100 bg-dark border-end border-2 border-dark">
                {{-- dashboard links wrapper --}}
                <div class="row">
                    <div class="col d-flex flex-column justify-content-center p-5">

                        <button class="my_btn mb-3">
                            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-landmark"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </button>
                        <button class="my_btn">
                            <a href="{{ route('admin.leads.index') }}" class="text-decoration-none fs-5 text-light">
                                <i class="fa-regular fa-envelope"></i>
                                <span>
                                    Messages
                                </span>
                            </a>
                        </button>
                        <button class="my_btn my-3">
                            <a href="{{ route('admin.projects.index') }}" class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-list-check"></i>
                                <span>
                                    Projects
                                </span>
                            </a>
                        </button>
                        <button class="my_btn">
                            <a href="{{ route('admin.projects.create') }}" class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-pen-ruler"></i>
                                <span>
                                    Create Project
                                </span>
                            </a>
                        </button>
                        <button class="my_btn my-3">
                            <a href="{{ route('admin.types.index') }}" class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                <span>
                                    Types
                                </span>
                            </a>
                        </button>
                        <button class="my_btn">
                            <a href="{{ route('admin.types.create') }}" class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-pen-ruler"></i>
                                <span>
                                    Create Type
                                </span>
                            </a>
                        </button>
                        <button class="my_btn my-3">
                            <a href="{{ route('admin.technologies.index') }}"
                                class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-microchip"></i>
                                <span>
                                    Technologies
                                </span>
                            </a>
                        </button>
                        <button class="my_btn">
                            <a href="{{ route('admin.technologies.create') }}"
                                class="text-decoration-none fs-5 text-light">
                                <i class="fa-solid fa-pen-ruler"></i>
                                <span>
                                    Create Technology
                                </span>
                            </a>
                        </button>

                    </div>
                </div>
            </section>


            {{-- right view --}}
            <section id="content" class="col bg_main">
                @yield('content')
            </section>

        </main>
    </div>
</body>

</html>
