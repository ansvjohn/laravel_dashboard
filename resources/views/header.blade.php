<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Relationship Management Admin">
	<meta property="og:title" content="Relationship Management Admin">
	<meta property="og:description" content="Relationship Management Admin">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	
	<!-- PAGE TITLE HERE -->
	<title>Dashboard</title>
	<!-- FAVICONS ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">
	
	<link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">		
	<link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	
	<!-- tagify-css -->
	
	<!-- Style css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<style>
    #map {
      height: 400px;
      width: 100%;
    }
	#search-box {
  background-color: #fff;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  width: 300px;
  height: 40px;
}
  </style>
  <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 12.9716, lng: 77.5946},
        zoom: 12
      });

      
    }
  </script>

	
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
				 <img src="{{asset('images/logo.png')}}" class="img-fluid rounded" alt="Responsive image">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area">	
								<span class="input-group-text"></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</a>
							</li>
							
							<li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
												<img src="{{asset('images/1.jpg')}}" alt="">
											</div>
											
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<div class="card border-0 mb-0">
											<div class="card-header py-2">
												<div class="products">
													<img src="{{asset('images/1.jpg')}}" class="avatar avatar-md" alt="">
													<div>
														<h6>Thomas Fleming</h6>
														<span>Web Designer</span>	
													</div>	
												</div>
											</div>
											<div class="card-body px-0 py-2">
												<a href="#" class="dropdown-item">
												    <span class="ms-2">Profile </span>
												</a>
												<a href="#" class="dropdown-item">
												    <span class="ms-2">Logout</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li>
					  <a href="#">
					    <div class="menu-icon">
					      <i class="fas fa-tachometer-alt"><img src="{{ asset('images/dashboard.png') }}" style="width: 40px; height: 40px;"></i>
					    </div>    
					    <span class="nav-text"> Dashboard</span>
					  </a>
					</li>

					<li>
					  <a href="#">
					    <div class="menu-icon">
					      <i class="fas fa-tachometer-alt"><img src="{{ asset('images/map.png') }}" style="width: 40px; height: 40px;"></i>
					    </div>    
					    <span class="nav-text"> Map</span>
					  </a>
					</li>

					<li>
					  <a href="#">
					    <div class="menu-icon">
					      <i class="fas fa-tachometer-alt"><img src="{{ asset('images/report.png') }}" style="width: 40px; height: 40px;"></i>
					    </div>    
					    <span class="nav-text"> Report</span>
					  </a>
					</li>
				</ul>
			</div>
        </div>
		
        <!--**********************************
            Sidebar end
        ***********************************-->
		