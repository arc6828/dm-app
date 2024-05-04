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
    <link href="{{ asset("blogzine/css2.css")}}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("blogzine/tiny-slider.css")}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("blogzine/style.css")}}">
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
                <a class="navbar-brand" href="https://blogzine.webestica.com/index.html">
                    <img class="navbar-brand-item light-mode-item"
                        src="{{ asset('blogzine/logo.svg') }}" alt="logo">
                    <img class="navbar-brand-item dark-mode-item"
                        src="{{ asset('blogzine/logo-light.svg') }}" alt="logo">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://blogzine.webestica.com/about-us.html#"
                                id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Home</a>
                            <ul class="dropdown-menu" aria-labelledby="homeMenu">
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index.html">Home
                                        default</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-lazy.html">Home
                                        lazy load</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/index-2.html">Magazine classic</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/index-3.html">Magazine</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-4.html">Home
                                        cards</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-5.html">Blog
                                        classic</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-6.html">Blog
                                        Personal </a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-7.html">Blog
                                        Vintage</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-8.html">Blog
                                        Tech</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-9.html">Blog
                                        Fashion</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-10.html">Blog
                                        Podcast</a></li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-11.html">Home
                                        Shop </a></li>
                            </ul>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://blogzine.webestica.com/about-us.html#"
                                id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/about-us.html">About</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/contact-us.html">Contact</a></li>
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="https://blogzine.webestica.com/about-us.html#">Shop</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/shop-grid.html">Shop grid</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/shop-detail.html">Shop detail</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/checkout.html">Checkout</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/my-cart.html">Cart</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/empty-cart.html">Empty Cart</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="https://blogzine.webestica.com/about-us.html#">Other Archives</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/author.html">Author Page</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/categories.html">Category page
                                                1</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/categories-2.html">Category page
                                                2</a> </li>
                                        <li> <a class="dropdown-item" href="https://blogzine.webestica.com/tag.html">#
                                                tag</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/search-result.html">Search
                                                result</a> </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="https://blogzine.webestica.com/404.html">Error
                                        404</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/signin.html">signin</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/signup.html">signup</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/offline.html">offline</a></li>
                                <!-- Dropdown submenu levels -->
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="https://blogzine.webestica.com/about-us.html#">Dropdown levels</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <!-- dropdown submenu open right -->
                                        <li class="dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle"
                                                href="https://blogzine.webestica.com/about-us.html#">Dropdown (end)</a>
                                            <ul class="dropdown-menu" data-bs-popper="none">
                                                <li> <a class="dropdown-item"
                                                        href="https://blogzine.webestica.com/about-us.html#">Dropdown
                                                        item</a> </li>
                                                <li> <a class="dropdown-item"
                                                        href="https://blogzine.webestica.com/about-us.html#">Dropdown
                                                        item</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/about-us.html#">Dropdown item</a>
                                        </li>
                                        <!-- dropdown submenu open left -->
                                        <li class="dropdown-submenu dropstart">
                                            <a class="dropdown-item dropdown-toggle"
                                                href="https://blogzine.webestica.com/about-us.html#">Dropdown
                                                (start)</a>
                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                                <li> <a class="dropdown-item"
                                                        href="https://blogzine.webestica.com/about-us.html#">Dropdown
                                                        item</a> </li>
                                                <li> <a class="dropdown-item"
                                                        href="https://blogzine.webestica.com/about-us.html#">Dropdown
                                                        item</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/about-us.html#">Dropdown item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                        <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://blogzine.webestica.com/docs/index.html"
                                        target="_blank">
                                        <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://blogzine.webestica.com/rtl"
                                        target="_blank">
                                        <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"
                                        target="_blank">
                                        <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 3 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://blogzine.webestica.com/about-us.html#"
                                id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Post</a>
                            <ul class="dropdown-menu" aria-labelledby="postMenu">
                                <!-- dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="https://blogzine.webestica.com/about-us.html#">Post grid</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/post-grid.html">Post grid</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/post-grid-4-col.html">Post grid 4
                                                col</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/post-grid-masonry.html">Post grid
                                                masonry</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/post-grid-masonry-filter.html">Post
                                                grid masonry filter</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://blogzine.webestica.com/post-large-and-grid.html">Post
                                                mixed large than grid</a> </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-list.html">Post list</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-list-2.html">Post list 2</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-cards.html">Post card</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-overlay.html">Post Overlay</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-types.html">Post types</a> </li>
                                <li class="dropdown-divider"></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-single.html">Post single magazine</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-single-2.html">Post single
                                        classic</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-single-3.html">Post single
                                        minimal</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-single-4.html">Post single card</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-single-5.html">Post single review</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/post-single-6.html">Post single video</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/podcast-single.html">Podcast single</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li> <a class="dropdown-item"
                                        href="https://blogzine.webestica.com/pagination-styles.html">Pagination
                                        styles</a> </li>
                            </ul>
                        </li>

                        <!-- Nav item 4 Mega menu -->
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link dropdown-toggle" href="https://blogzine.webestica.com/about-us.html#"
                                id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lifestyle</a>
                            <div class="dropdown-menu" aria-labelledby="megaMenu">
                                <div class="container">
                                    <div class="row g-4 p-3 flex-fill">
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded"
                                                    src="{{ asset('blogzine/01.jpg') }}"
                                                    alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a
                                                            href="https://blogzine.webestica.com/about-us.html#"
                                                            class="btn-link text-reset fw-bold">7 common mistakes
                                                            everyone makes while traveling</a></h6>
                                                    <!-- Card info -->
                                                    <ul
                                                        class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            <a href="https://blogzine.webestica.com/about-us.html#"
                                                                class="text-reset btn-link">Joan Wallace</a>
                                                        </li>
                                                        <li class="nav-item">Feb 18, 2022</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded"
                                                    src="{{ asset('blogzine/02.jpg') }}"
                                                    alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a
                                                            href="https://blogzine.webestica.com/about-us.html#"
                                                            class="btn-link text-reset fw-bold">12 worst types of
                                                            business accounts you follow on Twitter</a></h6>
                                                    <!-- Card info -->
                                                    <ul
                                                        class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            <a href="https://blogzine.webestica.com/about-us.html#"
                                                                class="text-reset btn-link">Lori Stevens</a>
                                                        </li>
                                                        <li class="nav-item">Jun 03, 2022</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded"
                                                    src="{{ asset('blogzine/03.jpg') }}"
                                                    alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a
                                                            href="https://blogzine.webestica.com/about-us.html#"
                                                            class="btn-link text-reset fw-bold">Skills that you can
                                                            learn from business</a></h6>
                                                    <!-- Card info -->
                                                    <ul
                                                        class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            <a href="https://blogzine.webestica.com/about-us.html#"
                                                                class="text-reset btn-link">Judy Nguyen</a>
                                                        </li>
                                                        <li class="nav-item">Sep 07, 2022</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
                                                <span>The Blogzine</span>
                                                <h3>Premium Membership</h3>
                                                <p>Become a Member Today!</p>
                                                <a href="https://blogzine.webestica.com/about-us.html#"
                                                    class="btn btn-warning">View pricing plans</a>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                    </div> <!-- Row END -->
                                    <!-- Trending tags -->
                                    <div class="row px-3">
                                        <div class="col-12">
                                            <ul class="list-inline mt-3">
                                                <li class="list-inline-item">Trending tags:</li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-primary-soft">Travel</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-warning-soft">Business</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-success-soft">Tech</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-danger-soft">Gadgets</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-success-soft">Sports</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                                                <li class="list-inline-item"><a
                                                        href="https://blogzine.webestica.com/about-us.html#"
                                                        class="btn btn-sm btn-info-soft">Politics</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- Row END -->
                                </div>
                            </div>
                        </li>

                        <!-- Nav item 5 link-->
                        <li class="nav-item"> <a class="nav-link"
                                href="https://blogzine.webestica.com/dashboard.html">Dashboard</a></li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav right START -->
                <div class="nav ms-sm-3 flex-nowrap align-items-center">
                    <!-- Dark mode options START -->
                    <div class="nav-item dropdown ms-3">
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
                    <div class="nav-item dropdown dropdown-toggle-icon-none">
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
                    <div class="nav-item d-none d-md-block">
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
                    <img class="light-mode-item" src="{{ asset('blogzine/logo.svg') }}"
                        alt="logo">
                    <img class="dark-mode-item"
                        src="{{ asset('blogzine/logo-light.svg') }}" alt="logo">
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
    <script src="{{ asset("blogzine/bootstrap.bundle.min.js")}}"></script>

    <!-- Vendors -->
    <script src="{{ asset("blogzine/tiny-slider.js")}}"></script>

    <!-- Template Functions -->
    <script src="{{ asset("blogzine/functions.js")}}"></script>


</body>

</html>
