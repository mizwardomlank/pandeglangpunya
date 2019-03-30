<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>#PandeglangPunya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/custom.min.css?id=130')}}" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>

		/* .expanded-card.is-javascript .expanded-card-left, .expanded-card.is-javascript:after, .series-card.is-javascript .card-top, .series-card.is-javascript:after, .skill-card.is-javascript, .skill-card.is-javascript:after, .skill-header-wrap.is-javascript {
			background-image: linear-gradient(0deg,#f19a1a,#ffc73c) !important;
		} */
		.pdg-card {
			margin-bottom: 10px;
			box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);
		}
		@media (min-width: 768px){
			.pdg-card {
				height: 258px;
			}
        }
        
        @media (min-width: 769px){
			.expanded-card-left{
				padding-left: 70px;
				padding-right: 70px;
			}
        }
        
		@media (max-width: 768px){
			.expanded-card-left{
				width: 100%;
				margin-left:0px;
				margin-right:0px;
			}
			.expanded-card-right{
				margin-left:10px;
				margin-right:10px;
			}
		}

		.pdg-card-content {
			display: flex;
			justify-content: space-around;
		}

		.pdg-footer {
			margin-top: 50px;
		}

		.pdg-meta:hover {
			color: white;
		}

		.pdg-banner {
			margin-bottom: 50px;
		}

		.pdg-category {
			margin-bottom: 50px;
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}

		.pdg-category-detail {
			background-image: linear-gradient(0deg, #fdc97d, #ffc73c);
			margin: 5px;
            font-size: 12px;
		}

		.pdg-category-heading {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-bottom: 20px;
		}

		.pagination {
			margin-top: 50px;
		}

		@media (max-width: 768px) {
			.pdg-card {
				margin-left: 5px;
				margin-right: 5px;
			}
		}

		.pdg-social{
			margin-right: 7px;
		}

		img.pdg-social-img {
			height: 24px;
        }

        .pdg-img-cropper {
			width: 100px;
			height: 100px;
			position: relative;
			overflow: hidden;
			border-radius: 50%;
		}
		.pdg-img-content {
			display: inline;
			margin: 0 auto;
			height: 100%;
			width: auto;
		}
	</style>
</head>

<body>
	<div id="root" class="page">
		<div>
			<div class="skill-header-wrap mobile:bg-gradient-javascript">
				<nav class="section md:tw-overflow-y-hidden tw-pt-6 md:tw-py-0 md:tw-overflow-x-hidden new-nav tw-pb-8">
					<div>
						<div id="nav-top"
							class="tw-flex tw-flex-row tw-justify-between md:tw-items-center tw-relative tw-mb-6 md:tw-pt-8 md:tw-pb-4">
							<a href="https://pandeglangpunya.infopandeglang.com">
								<h1 class="series-banner-heading tw-text-white tw-text-3xl"><strong
										class="inherits-color">#Pandeglang</strong>Punya
								</h1>
							</a>
							<div class="md:tw-hidden tw-flex tw-items-start">
								<div>
									<a class="tw-block tw-leading-none">
										<div class="hamburger-nav"><span></span> <span></span> <span></span>
											<span></span></div>
									</a>
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
				<section
					class="series-banner tw-pt-0 tw-pb-10 md:tw-pt-10 md:bg-gradient-javascript tw-bg-transparent pdg-banner"
					style="background-image: linear-gradient(0deg, {{ $category->gradient }}, {{ $category->background }});">
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

								<a href="{{ route('products.create') }}"
									class="series-banner-button tw-button mobile:tw-mx-auto is-white tw-text-white md:tw-text-xs mr-2-tablet tw-block md:tw-inline-block">
									Tambahkan Karya
								</a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="lg:tw-w-3/4 md:tw-mx-auto pdg-category-heading">
			<h3 class="expanded-card-heading tw-text-2xl tw-mb-4 tw-tracking-tight">
				<span class="no-transition" style="font-weight: 700;">
					Kategori: {{ $category->name }}
				</span>
			</h3>
		</div>
		<div class="pdg-category">
			<a href="{{ route('home') }}"
				class="tw-font-muli lg:tw-w-24 tw-rounded-full tw-py-25 tw-px-6 lg:tw-py-2 lg:tw-px-4 md:tw-inline-block tw-text-center tw-bg-black-transparent-10 tw-leading-none tw-text-white tw-text-xs md:tw-text-2xs tw-font-semibold hover:tw-bg-purple-dark hover:tw-text-white tw-tracking-wide pdg-category-detail"
				style="background-image: linear-gradient(0deg, #ec454f, #f44881);">
				semua
			</a>
			@foreach ($categories as $categoryItem)
			<a href="{{ route('categories.show', $categoryItem->slug) }}"
				class="tw-font-muli lg:tw-w-24 tw-rounded-full tw-py-25 tw-px-6 lg:tw-py-2 lg:tw-px-4 md:tw-inline-block tw-text-center tw-bg-black-transparent-10 tw-leading-none tw-text-white tw-text-xs md:tw-text-2xs tw-font-semibold hover:tw-bg-purple-dark hover:tw-text-white tw-tracking-wide pdg-category-detail"
			style="background-image: linear-gradient(0deg, {{ $categoryItem->background }}, {{ $categoryItem->gradient }});">
				{{ $categoryItem->name }}
			</a>	
			@endforeach
		</div>

		<div class="lg:tw-w-3/4 md:tw-mx-auto">
			{{-- Product --}}
			@forelse ($products as $product)
			<div
				class="is-wide tw-flex is-stacked mobile:tw-flex-col tw-rounded-lg pdg-card">
				<div
					class="expanded-card-left tw-mr-6 tw-rounded-lg tw-flex tw-flex-col tw-justify-center tw-items-center tw-px-8 tw-py-5"
					style="background-image: linear-gradient(0deg,{{ $product->category->gradient }},{{ $product->category->background }})"
					>
					<a href="{{ route('categories.show', $product->category->slug) }}"
						class="expanded-card-skill-button tw-bg-black-transparent-10 hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2 tw-leading-none tw-px-4 tw-mb-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-w-3/4 tw-text-center">
						{{ $product->category->name }}
					</a>
                    {{-- <a href="#" class="expanded-card-thumbnail tw-mb-4"><img src="{{ asset('images/ava.jpg') }}" --}}
                    <span  class="expanded-card-thumbnail tw-mb-4 pdg-img-cropper"><img src="{{ url($product->image) }}"
                        alt="Avatar Image" class="pdg-img-content" />
					</span>
				</div>
				<div class="expanded-card-right tw-flex tw-flex-col tw-py-5 tw-pr-8 pdg-card-content">
					<h3 class="expanded-card-heading tw-text-2xl tw-mb-4 tw-tracking-tight">
						<span class="no-transition">
							{{ $product->name }}
						</span>
					</h3>
					<div class="expanded-card-description md:tw-pr-6 tw-text-sm generic-content">
						<p>
							{{ $product->description }}
						</p>
					</div>
					<div class="tw-flex tw-text-xs tw-mb-1 pdg-meta">
						<!-- <div class="expanded-card-meta-lessons tw-mr-8 tw-italic tw-flex tw-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                class="expanded-card-meta-icon tw-mr-1">
                                <path fill-rule="nonzero"
                                    d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"
                                    opacity=".5" class="tw-fill-current"></path>
                            </svg>
                            <a href="#" class="inherits-color link no-transition">17 Lessons</a>
                        </div>
                        <div class="expanded-card-meta-length tw-italic tw-flex tw-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                                class="expanded-card-meta-icon tw-mr-1">
                                <path fill-rule="evenodd"
                                    d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"
                                    opacity=".5" class="tw-fill-current"></path>
                            </svg>
                            <span>2:11:29 hrs</span>
                        </div> -->
						<div class="tw-italic tw-flex tw-items-center">
							@if($product->instagram)
							<a href="{{ $product->instagram }}" target="_blank" rel="noreferrer" class="pdg-social">
                                <img src="{{ asset('images/icons/instagram.svg') }}" class="pdg-social-img" alt="Instagram">
							</a>
							@endif
							@if($product->twitter)
							<a href="{{ $product->twitter }}" target="_blank" rel="noreferrer" class="pdg-social">
								<img src="{{ asset('images/icons/twitter.svg') }}" class="pdg-social-img" alt="Twitter">
							</a>
							@endif
							@if($product->facebook)
							<a href="{{ $product->facebook }}" target="_blank" rel="noreferrer" class="pdg-social">
                                <img src="{{ asset('images/icons/facebook-circle.svg') }}" class="pdg-social-img" alt="Facebook">
							</a>
							@endif
							@if($product->website)
							<a href="{{ $product->website }}" target="_blank" rel="noreferrer" class="pdg-social">
                                <img src="{{ asset('images/icons/internet.svg') }}" class="pdg-social-img" alt="Website">
							</a>
							@endif
						</div>
					</div>
				</div>
            </div>
            @empty
            <div style="text-align:center;">
                <p>Tidak ada data</p>
            </div>
			@endforelse
            {{-- Pagination --}}
            {{ $products->links() }}
			{{-- <ul class="pagination">
				<li class="page-item tw-px-2 tw-font-bold"><a href="#" rel="prev"
						class="page-link">« Previous</a></li>
				<li class="page-item tw-px-2 tw-font-bold"><a href="#" rel="next"
						class="page-link">More »</a></li>
			</ul> --}}
		</div>
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
	@if (\Session::has('success'))
		{{-- alert --}}
		<script>
			swal("Selamat!", "{!! \Session::get('success') !!}", "success");
		</script>
	@endif
	{{-- <script src="{{ asset('js/main.js') }}"></script> --}}
</body>

</html>