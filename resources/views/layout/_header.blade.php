        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom position-sticky top-0" style="z-index: 100">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ route('home') }}">Wookiee Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">{{ __('About') }}</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('Shop') }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('product.total') }}">{{ __('All Products') }}</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">{{ __('Popular Items') }}</a></li>
                                <li><a class="dropdown-item" href="#!">{{ __('New Arrivals') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mx-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            {{ __('Cart') }}
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    <div class="ms-3 d-flex justify-content-end align-items-center dropdown">
                        @auth
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: brown">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">{{ __('My Profile') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ __('My Products') }}</a></li>
                                <li><a class="dropdown-item" href={{ route('product.create') }}>{{ __('Create Product') }}</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <li><button class="dropdown-item">{{ __('Sign out') }}</button></li>
                                </form>
                        @else
                            <a class="ms-2 btn btn-outline-dark" href="{{ route('auth.register') }}">{{ __('Sign up') }}</a>
                            <a class="ms-2 btn btn-outline-dark" href="{{ route('auth.login') }}">{{ __('Sign in') }}</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">{{ __('Wookiee Store') }}</h1>
                    <p class="lead fw-normal text-white-50 mb-0"> {{ __("Chewbacca's favorite online shop.") }}</p>
                </div>
            </div>
        </header>
