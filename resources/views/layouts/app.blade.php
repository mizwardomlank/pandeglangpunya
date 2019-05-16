<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '#PandeglangPunya') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/custom.min.css?id=130')}}" />

    <style>
        .pdg-footer{
            margin-top:100px;
        }
        .pdg-logout-icon {
			background-color: white;
			-webkit-mask: url("{{asset('images/icons/exit.svg')}}") no-repeat center;
			mask: url("{{asset('images/icons/exit.svg')}}") no-repeat center;
			width: 50px;
			height: 50px;
		}

		.pdg-login-icon {
			background-color: white;
			-webkit-mask: url("{{asset('images/icons/login.svg')}}") no-repeat center;
			mask: url("{{asset('images/icons/login.svg')}}") no-repeat center;
			width: 50px;
			height: 50px;
		}
    </style>

    @yield('styles-top')
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <div>
			<div class="skill-header-wrap mobile:bg-gradient-javascript">
				<nav class="section md:tw-overflow-y-hidden tw-pt-6 md:tw-py-0 md:tw-overflow-x-hidden new-nav tw-pb-8">
					<div>
						<div id="nav-top"
							class="tw-flex tw-flex-row tw-justify-between md:tw-items-center tw-relative tw-mb-6 md:tw-pt-8 md:tw-pb-4">
							<a href="{{ route('home') }}">
								<h1 class="series-banner-heading tw-text-white tw-text-3xl"><strong
										class="inherits-color">#Pandeglang</strong>Punya
								</h1>
							</a>
							<div class="md:tw-hidden tw-flex tw-items-start">
								<div>
									{{-- <a class="tw-block tw-leading-none">
										<div class="hamburger-nav"><span></span> <span></span> <span></span>
											<span></span></div>
                                    </a> --}}
                                    @auth
									<a href="{{ route('logout') }}" class="tw-block tw-leading-none pdg-logout-icon"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										{{-- <img src="{{ asset('images/icons/exit.svg') }}" alt="Logout" style="width:50px;">	 --}}
									</a>
									@endauth
									@guest
									<a href="{{ route('login') }}" class="tw-block tw-leading-none pdg-login-icon">
										{{-- <img src="{{ asset('images/icons/login.svg') }}" alt="Login" style="width:50px;">	 --}}
									</a>
									@endguest
								</div>
							</div>
							<div class="tw-hidden md:tw-block tw-relative tw--mt-6">
								<div class="tw-flex tw-items-center"><a href="https://infopandeglang.com"
										class="tw-text-white hover:tw-text-white link tw-font-bold tw-mr-6 tw-text-xs">
										Infopandeglang.com
									</a> 
									@auth	
										<a href="{{ route('logout') }}"
											class="tw-text-white hover:tw-bg-white hover:tw-text-blue tw-font-bold tw-border tw-rounded-full tw-text-xs tw-px-3 tw-py-2 tw-leading-tight tw-mr-6"
											onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									@else
										<a href="{{ route('login') }}"
											class="tw-text-white hover:tw-bg-white hover:tw-text-blue tw-font-bold tw-border tw-rounded-full tw-text-xs tw-px-3 tw-py-2 tw-leading-tight tw-mr-6">
											Login
										</a>
									@endauth
									
								</div>
							</div>
						</div>
					</div>
				</nav>
				<portal-target name="nav-after"></portal-target>
				{{-- <section
					class="series-banner tw-pt-0 tw-pb-10 md:tw-pt-10 md:bg-gradient-javascript tw-bg-transparent pdg-banner">
					<div class="container">
						<div class="tw-flex md:tw-items-center xl:tw-mx-10">
							<div class="primary md:tw-w-3/3 md:tw-mr-auto mobile:tw-pt-0 tw-text-white">
								<h1 class="series-banner-heading tw-text-white tw-text-3xl tw-mb-4"><strong
										class="inherits-color">#Pandeglang</strong>Punya by Infopandeglang
								</h1>
								<div
									class="series-banner-description tw-text-white tw-mb-10 tw-pb-4 generic-content tw-leading-normal">
									Pandeglang memiliki begitu banyak hal-hal positif. Ayo ceritakan hal-hal positif
									yang kamu
									punya, mulai dari komunitas, cafe, seni, karya, startup, tempat kita berkembang dan
									berkarya
									untuk
									Pandeglang.
								</div>

								<a href="#"
									class="series-banner-button tw-button mobile:tw-mx-auto is-white tw-text-white md:tw-text-xs mr-2-tablet tw-block md:tw-inline-block">
									Tambahkan Karya
								</a>
							</div>
						</div>
					</div>
				</section> --}}
			</div>
		</div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="footer-wrap mobile:tw-text-lg pdg-footer">
		<section class="footer-section bottom mobile:tw-text-center tw-py-0">
			<footer class="container">
				<div class="tw-border-t tw-border-solid tw-border-transparent-10 tw-py-4 mobile:tw-text-lg">
					<div class="tw-text-transparent-50 tw-text-base md:tw-text-xs tw-text-center">
						<p class="tw-mb-5 md:tw-mb-2 tw-tracking-normal">
							© #PandeglangPunya by Infopandeglang 2019. All rights reserved.
						</p>
						<p class="tw-tracking-normal"><span class="mobile:tw-block">Build with <img
									src="{{ asset('images/icons/heart.svg') }}" alt="heart"
                                    class="tw-px-1 tw-relative heart-pulse tw-inline" style="top: 2px;"> 
                                    {{-- by <a
									href="https://twitter.com/mvthm"
									class="tw-font-bold inherits-color link hover:tw-text-white" target="_blank">Mif</a> --}}
								at Maja
								Barat.</span>
						</p>
					</div>
				</div>
			</footer>
		</section>
	</div>
</body>
</html>
