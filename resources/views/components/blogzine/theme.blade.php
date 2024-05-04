<!DOCTYPE html>
<!-- saved from url=(0044)https://blogzine.webestica.com/about-us.html -->
<html lang="en" data-bs-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>
    <!-- Meta Tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://blogzine.webestica.com/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="{{ asset('blogzine/css2.css') }}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('blogzine/tiny-slider.css') }}">

    <link rel="stylesheet" type="text/css" href="https://blogzine.webestica.com/assets/vendor/apexcharts/css/apexcharts.css">
	<link rel="stylesheet" type="text/css" href="https://blogzine.webestica.com/assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blogzine/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}

</head>

<body>

    <!-- =======================
Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="navbar-brand-item light-mode-item" src="{{ asset('blogzine/logo.svg') }}"
                        alt="logo">
                    <img class="navbar-brand-item dark-mode-item" src="{{ asset('blogzine/logo-light.svg') }}"
                        alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll ms-auto">

                        <!-- Nav item 1 Demos -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>



                        <!-- Nav item 5 link-->

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="https://blogzine.webestica.com/dashboard.html">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav right START -->
                <div class="nav ms-sm-3 flex-nowrap align-items-center">
                    <!-- Dark mode options START -->
                    <div class="nav-item dropdown ms-3 d-none">
                        <!-- Switch button -->
                        <button class="modeswitch" id="bd-theme" type="button" aria-expanded="false"
                            data-bs-toggle="dropdown" data-bs-display="static">
                            <svg class="theme-icon-active">
                                <use href="#"></use>
                            </svg>
                        </button>
                        <!-- Dropdown items -->
                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="light">
                                    <svg width="16" height="16" fill="currentColor"
                                        class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                        </path>
                                        <use href="#"></use>
                                    </svg>Light
                                </button>
                            </li>
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                                        </path>
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                        </path>
                                        <use href="#"></use>
                                    </svg>Dark
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                        <use href="#"></use>
                                    </svg>Auto
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- Dark mode options END -->
                    <!-- Nav additional link -->
                    <div class="nav-item dropdown dropdown-toggle-icon-none  d-none">
                        <a class="nav-link dropdown-toggle" role="button"
                            href="https://blogzine.webestica.com/about-us.html#" id="navAdditionalLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded text-end"
                            aria-labelledby="navAdditionalLink">
                            <li><a class="dropdown-item fw-normal"
                                    href="https://blogzine.webestica.com/about-us.html#">About</a></li>
                            <li><a class="dropdown-item fw-normal"
                                    href="https://blogzine.webestica.com/about-us.html#">Newsletter</a></li>
                            <li><a class="dropdown-item fw-normal"
                                    href="https://blogzine.webestica.com/about-us.html#">Author</a></li>
                            <li><a class="dropdown-item fw-normal"
                                    href="https://blogzine.webestica.com/about-us.html#">#Tags</a></li>
                            <li><a class="dropdown-item fw-normal"
                                    href="https://blogzine.webestica.com/about-us.html#">Contact</a></li>
                            <li><a class="dropdown-item fw-normal"
                                    href="https://blogzine.webestica.com/about-us.html#"><span
                                        class="badge bg-danger me-2 align-middle">2 Job</span>Careers</a></li>
                        </ul>
                    </div>
                    <!-- Nav Button -->
                    <div class="nav-item d-none">
                        <a href="https://blogzine.webestica.com/about-us.html#"
                            class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
                    </div>
                    <!-- Nav Search -->
                    <div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
                        <a class="nav-link pe-0 dropdown-toggle" role="button"
                            href="https://blogzine.webestica.com/about-us.html#" id="navSearch"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-search fs-4"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                            <form class="input-group">
                                <input class="form-control border-success" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-success m-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>

                    @auth
                        <!-- Notification dropdown START -->
                        <div class="nav-item ms-2 ms-md-3 dropdown">
                            <!-- Notification button -->
                            <a class="btn btn-primary-soft btn-round mb-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                <i class="bi bi-bell fa-fw"></i>
                            </a>
                            <!-- Notification dote -->
                            <span class="notif-badge animation-blink"></span>

                            <!-- Notification dropdown menu START -->
                            <div
                                class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                                <div class="card bg-transparent">
                                    <div
                                        class="card-header bg-transparent border-bottom p-3 d-flex justify-content-between align-items-center">
                                        <h6 class="m-0">Notifications <span
                                                class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                        <a class="small" href="#">Clear all</a>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-unstyled list-group-flush">
                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                    <div class="me-3">
                                                        <div class="avatar avatar-sm">
                                                            <img class="avatar-img rounded-circle" src="blogzine/08.jpg"
                                                                alt="avatar">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">12 new members joined</h6>
                                                        <span class="small"> <i class="bi bi-clock"></i> 3 min ago</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                    <div class="me-3">
                                                        <div class="avatar avatar-sm">
                                                            <img class="avatar-img rounded-circle" src="blogzine/02.jpg"
                                                                alt="avatar">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">Larry Lawson deleted account</h6>
                                                        <span class="small"> <i class="bi bi-clock"></i> 6 min ago</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                    <div class="me-3">
                                                        <div class="avatar avatar-sm">
                                                            <img class="avatar-img rounded-circle" src="blogzine/05.jpg"
                                                                alt="avatar">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">Byan commented on your post</h6>
                                                        <span class="small"> <i class="bi bi-clock"></i> 10 min
                                                            ago</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                    <div class="me-3">
                                                        <div class="avatar avatar-sm">
                                                            <img class="avatar-img rounded-circle" src="blogzine/03.jpg"
                                                                alt="avatar">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">Settings updated</h6>
                                                        <span class="small"> <i class="bi bi-clock"></i> Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                        <a href="#" class="stretched-link">See all incoming activity</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification dropdown menu END -->
                        </div>
                        <!-- Notification dropdown END -->

                        <!-- Profile dropdown START -->
                        <div class="nav-item ms-2 ms-md-3 dropdown">
                            <!-- Avatar -->
                            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                                data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="avatar-img rounded-circle" src="blogzine/03.jpg" alt="avatar">
                            </a>

                            <!-- Profile dropdown START -->
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                aria-labelledby="profileDropdown">
                                <!-- Profile info -->
                                <li class="px-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <img class="avatar-img rounded-circle shadow" src="blogzine/03.jpg"
                                                alt="avatar">
                                        </div>
                                        <div>
                                            <a class="h6 mt-2 mt-sm-0" href="#"> {{ Auth::user()->name }}</a>
                                            <p class="small m-0"> {{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                </li>
                                <!-- Links -->
                                <li>
                                    <a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit
                                        Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account
                                        Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="bi bi-info-circle fa-fw me-2"></i>Help</a>
                                </li>
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="bi bi-power fa-fw me-2"></i>Sign Out
                                        </a>
                                    </form>
                                </li>
                                <li class="dropdown-divider mb-2 d-none"></li>
                                <li class="d-none">
                                    <div class="align-items-center text-center py-0">
                                        <span class="me-3">mode:</span>
                                        <div class="btn-group theme-icon-active" role="group"
                                            aria-label="Default button group">
                                            <button type="button" class="btn btn-light btn-sm mb-0"
                                                data-bs-theme-value="light">
                                                <svg width="16" height="16" fill="currentColor"
                                                    class="bi bi-brightness-high-fill fa-fw mode-switch"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                                    <use href="#"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm mb-0"
                                                data-bs-theme-value="dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                                    <path
                                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                                    <use href="#"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm mb-0 active"
                                                data-bs-theme-value="auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                                    viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                                    <use href="#"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Profile dropdown END -->
                        </div>
                        <!-- Profile dropdown END -->
                    @endauth
                </div>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <div id="sticky-space"></div>
    <!-- =======================
Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        {{ $slot }}

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================Footer START -->
    <footer class="pb-0">
        <div class="container">
            <hr>
            <!-- Widgets START -->
            <div class="row pt-5">
                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <img class="light-mode-item" src="{{ asset('blogzine/logo.svg') }}" alt="logo">
                    <img class="dark-mode-item" src="{{ asset('blogzine/logo-light.svg') }}" alt="logo">
                    <p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your
                        stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the
                        news.</p>
                    <div class="mt-4">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link"
                            target="_blank">Webestica</a>. All rights reserved
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <h5 class="mb-4">Navigation</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link pt-0"
                                        href="https://blogzine.webestica.com/about-us.html#">Features</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Style Guide</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Get Theme</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link pt-0"
                                        href="https://blogzine.webestica.com/about-us.html#">News</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Career <span
                                            class="badge text-bg-danger ms-2">2 Job</span></a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Technology</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Startups</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://blogzine.webestica.com/about-us.html#">Gadgets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-4">Browse by Tag</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-primary-soft">Travel</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-warning-soft">Business</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-success-soft">Tech</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-danger-soft">Gadgets</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-warning-soft">Marketing</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-success-soft">Sports</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                        <li class="list-inline-item"><a href="https://blogzine.webestica.com/about-us.html#"
                                class="btn btn-sm btn-info-soft">Politics</a></li>
                    </ul>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-2 mb-4">
                    <h5 class="mb-4">Our Social handles</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link pt-0"
                                href="https://blogzine.webestica.com/about-us.html#"><i
                                    class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="https://blogzine.webestica.com/about-us.html#"><i
                                    class="fab fa-twitter-square fa-fw me-2 text-twitter"></i>Twitter</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="https://blogzine.webestica.com/about-us.html#"><i
                                    class="fab fa-linkedin fa-fw me-2 text-linkedin"></i>Linkedin</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="https://blogzine.webestica.com/about-us.html#"><i
                                    class="fab fa-youtube-square fa-fw me-2 text-youtube"></i>YouTube</a></li>
                    </ul>
                </div>
            </div>
            <!-- Widgets END -->
        </div>
    </footer>
    <!-- =======================Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

    <!-- =======================JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('blogzine/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('blogzine/tiny-slider.js') }}"></script>
    <!-- Vendors -->
    <script src="https://blogzine.webestica.com/assets/vendor/apexcharts/js/apexcharts.min.js"></script>
    <script src="https://blogzine.webestica.com/assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

    <!-- Template Functions -->
    <script src="{{ asset('blogzine/functions.js') }}"></script>


</body>

</html>
