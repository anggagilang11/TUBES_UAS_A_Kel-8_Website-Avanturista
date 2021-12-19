<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from andit.co/projects/html/wend/demo/{{ url('/') }} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 15:20:42 GMT -->
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Wend - Tour, Travel, Travel Agency Template" />
		<meta name="keywords" content="Tour, Travel, Travel Agency Template" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
		<!-- Title-->
		<title>Avanturista</title>
		<!--Favicon add-->
		<meta name="theme-color" content="#ffffff" />
		<!-- Bootstrap-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
		<!--magnific-popup.cs-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />
		<!--owl css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" />
		<!--	normalize css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/normalize.css') }}" />
		<!--	flacticon css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/font/flaticon.css') }}" />
		<!--	animate css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" />
		<!--Fontawesom -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.all.min.css') }}" />
		<!--Poppins-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet" />
		<!--Lato-->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;display=swap" rel="stylesheet" />
		<!-- venobox.css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}" />
		<!-- style.css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
		<!-- menu.css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}" />
		<!-- responsive.css-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
	</head>
	<body>
		<!-- navber start-->
		<header class="site-header header-style-one">
			<div class="site-navigation style-one">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="navbar navbar-expand-lg navigation-area">
								<div class="site-branding">
									<a class="site-logo" href="{{ url('/') }}">
										<h5 style="color: white;">Avanturista</h5>
									</a>
								</div>
								<div class="mainmenu-area">
									<nav class="menu">
										<ul id="nav">
											<li>
												<a href="{{ route('home') }}">Home</a>
											</li>
											<li class="dropdown-trigger">
												<a href="#">Kategori Paket</a>
												<ul class="dropdown-content">
													@foreach (\DB::table('tb_kategori_paket_wisata')->whereDeletedAt(null)->latest()->get() as $kategori_paket)
                                                        <li>
                                                            <a href="{{ route('kategori-paket', ['slug' => $kategori_paket->slug]) }}">{{ $kategori_paket->nama }}</a>
                                                        </li>
                                                    @endforeach
												</ul>
											</li>
                                            @auth
                                                <li>
                                                    <a href="{{ route('profile') }}">Profil</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout') }}">Logout</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('login') }}">Login</a>
                                                </li>
                                            @endauth
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="mobile-menu">
								<a class="mobile-logo" href="{{ url('/') }}">
									{{-- <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" /> --}}
									<h5 style="color: white;">Avanturista</h5>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
        @yield('content')

		<div class="footre-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="copy-right-para">
							<center>
                                <p>Avanturista © {{ date('Y') }}. All Rights Reserved</p>
                            </center>
						</div>
					</div>
					{{-- <div class="col-lg-6 col-md-4 col-sm-4 col-4">
						<div class="copy-right-icon">
							<a href="#">
								<i class="fab fa-facebook-f face no-ag"></i>
							</a>
							<a href="#">
								<i class="fab fa-twitter face"></i>
							</a>
							<a href="#">
								<i class="fab fa-linkedin-in face"></i>
							</a>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		<div class="go-top">
			<i class="fas fa-chevron-up"></i>
			<i class="fas fa-arrow-up"></i>
		</div>
		<!-- Backto-top-Button End-->
		<!-- Main js -->
		<script src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
		<!-- Bootstrap-->
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
		<!-- owl.carousel-->
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
		<!-- wow.min-->
		<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
		<!-- html5shiv-->
		<script src="{{ asset('frontend/assets/js/html5shiv.js') }}"></script>
		<!-- respondl-->
		<script src="{{ asset('frontend/assets/js/respond.min.js') }}"></script>
		<!-- prettifyl-->
		<script src="{{ asset('frontend/assets/js/prettify.js') }}"></script>
		<!-- venobox-->
		<script src="{{ asset('frontend/assets/js/venobox.min.js') }}"></script>
		<!-- meanu-->
		<script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
		<!-- popper js-->
		<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
		<!-- menu js-->
		<script src="{{ asset('frontend/assets/js/menu-custom.js') }}"></script>
		<script>
			$(document).ready(function() {
				$(".venobox").venobox({
					framewidth: "600px",
					frameheight: "400px",
					border: "none",
					bgcolor: "#5dff5e", // default: '#fff'
					titleattr: "data-title",
					numeratio: true,
					infinigall: true,
				});
			});
		</script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		@if(session('success'))
			<script>
				swal.fire({
					title: 'Success!',
					text: "{{ session('success') }}",
					icon: 'success',
					confirmButtonColor: '#113897',
				})
			</script>
		@endif
		
		@if(session('failed'))
			<script>
				swal.fire({
					title: 'Failed!',
					text: "{{ session('failed') }}",
					icon: 'error',
					confirmButtonColor: '#113897',
				})
			</script>
		@endif
	</body>
	<!-- Mirrored from andit.co/projects/html/wend/demo/{{ url('/') }} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 15:21:06 GMT -->
</html>