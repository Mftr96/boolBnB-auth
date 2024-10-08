<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/svg+xml" href="/logo.png" />


    {{-- irnia font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet" />
    {{-- suse font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">

    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>


<body>
    <div id="app">
        <div class="container-fluid ">
            <div class="row h-100 d-md-flex">
                {{-- ------------------------- navbar mobile -------------------- --}}
                <nav class="navbar-mobile position-fixed d-lg-none navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="col-3 navbar-brand d-flex align-items-center" href="{{ url('http://localhost:5173') }}">
                            <div class="logo_laravel">
                                <img src="{{ asset('logo.png') }}" class="img-fluid" alt="">
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            {{-- lista link --}}
                            <ul class="nav nav-pills flex-column justify-content-between mb-auto">
                                <li class="nav-item link-navbar">
                                    <a href="{{ route('dashboard') }}"
                                        class="nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'dashboard' ? 'fw-bold text-decoration-underline' : '' }}"
                                        aria-current="page">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('apartments.index') }}"
                                        class="nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'apartments.index' ? 'fw-bold text-decoration-underline' : '' }}"
                                        aria-current="page">
                                        I miei appartamenti
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('apartments.create') }}"
                                        class="nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'apartments.create' ? 'fw-bold text-decoration-underline' : '' }}"
                                        aria-current="page">
                                        Aggiungi un appartamento
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('message.index') }}"
                                        class="nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'message.index' || Route::currentRouteName() == 'message.show' ? 'fw-bold text-decoration-underline' : '' }}"
                                        aria-current="page">
                                        Messaggi
                                    </a>
                                </li>
                                <hr>
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->email }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                        aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item"
                                                href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ url('profile') }}">{{ __('Profile') }}</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                {{-- ------------------------- navbar desktop -------------------- --}}
                <div
                    class="custom-border position-fixed text-center d-none col-lg-2 d-lg-block vh-100 flex-shrink-0 text-white navbar-dark sidebar h-100 px-0">

                    <nav class="navbar-desktop vh-100 d-flex flex-column p-3">
                        {{-- logo --}}
                        <a class="d-none d-md-block navbar-brand d-flex align-items-center" href="{{ url('http://localhost:5173') }}">
                            <div class="logo_laravel">
                                <img src="{{ asset('logo.png') }}" class="img-fluid" alt="">
                            </div>
                        </a>
                        <hr class="d-none d-md-block">
                        {{-- lista link --}}
                        <ul class="nav nav-pills flex-md-column mb-auto">
                            <li class="nav-item link-navbar">
                                <a href="{{ route('dashboard') }}"
                                    class="d-flex gap-2  align-items-center  nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'dashboard' ? 'fw-bold text-decoration-underline' : '' }}"
                                    aria-current="page">
                                    <i class="fa-solid fa-table-columns fs-4"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('apartments.index') }}"
                                    class="d-flex gap-2 align-items-center  nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'apartments.index' ? 'fw-bold text-decoration-underline' : '' }}"
                                    aria-current="page">
                                    <i class="fa-solid fa-house-chimney"></i>
                                    I miei appartamenti
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('message.index') }}"
                                    class="d-flex gap-2  align-items-center  nav-link-desktop nav-link text-dark {{ Route::currentRouteName() == 'message.index' || Route::currentRouteName() == 'message.show' ? 'fw-bold text-decoration-underline' : '' }}"
                                    aria-current="page">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                    Messaggi
                                </a>
                            </li>
                        </ul>
                        <hr>
                        {{-- opzioni utente --}}
                        <div class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                                {{ Auth::user()->email }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                <li><a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </nav>
                </div>
                {{-- ------------------------- main app -------------------- --}}
                <main class=" mt-md-0 ms-sm-auto col-lg-10 px-md-4 overflow-auto  p-3" style="height:100vh;">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
<style scoped>
    .navbar-desktop {
        background: rgba(255, 255, 255, 0.887);
        /* border-right: 2px solid #a09d9fc2; */
        border-radius: 0 20px 20px 0;
        z-index: 1;
    }


    .custom-border {
        background: linear-gradient(180deg, #ffd489a4, #8cd7f298);
        border-radius: 0 15px 15px 0;
        padding-right: .3rem !important;
    }

    .navbar-mobile {
        background: linear-gradient(130deg, #ffd489, #8cd7f2);
        border-bottom: 2px solid #a09d9fc2;
        box-shadow: 2px 5px 20px 2px black;
        z-index: 999;
    }

    .nav-link-desktop {
        border: none;
        color: #2e2b2bc2 !important;
        background-color: transparent !important;
        transition: background-color .3s ease, color .3s ease;
    }

    .nav-link-desktop:hover {
        /* background: linear-gradient(130deg, #c3b49ba4, #94a7ae98); */
        /* background-color: rgba(183, 139, 103, 0.506); */
        color: black !important;
        text-decoration: none;

    }

    .nav-link-desktop.fw-bold {
        border: 2px solid rgba(0, 0, 0, 0.316);
        color: black !important;
        text-decoration: none !important;
        /* background: rgb(197, 251, 255) !important; */
        /* border: 1px solid #a09d9fc2; */
    }
</style>

</html>
