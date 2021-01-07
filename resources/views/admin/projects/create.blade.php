﻿<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/admin"><img src="{{ asset('images\logo_cuxeya.png') }}" alt=""></a>
					<a href="/admin" class="dashboard-logo"><img src="{{ asset('images\logo_cuxeya.png') }}" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="{{ asset('images\avatar.png') }}" alt=""></span>Mi cuenta</div>
						<ul>
							<li><a href="/logout"><i class="sl sl-icon-power"></i> Salir</a></li>
						</ul>
					</div>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
	
	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

		<ul data-submenu-title="Principal">
				<li class="active"><a href="admin"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<!-- <li><a href="{{ route('users.index') }}"><i class="sl sl-icon-user"></i> Usuarios</a></li>
				<li><a href="{{ route('estates.index') }}"><i class="sl sl-icon-star"></i> Estados</a></li>
				<li><a href="/admin-cat"><i class="sl sl-icon-star"></i> Categorías</a></li>
				<li><a href="/admin-blog"><i class="fa fa-calendar-check-o"></i> Blog <span class="nav-tag messages">2</span></a></li>
				<li><a href="/admin-testimonios"><i class="fa fa-calendar-check-o"></i> Testimonios</a></li> -->
			</ul>
			
			<ul data-submenu-title="Brazos de Ayuda">
				<!-- <li><a><i class="sl sl-icon-layers"></i> Mis Brazos de Ayuda</a>
					<ul>
						<li><a href="#">Activos <span class="nav-tag green">0</span></a></li>
						<li><a href="#">Pendientes <span class="nav-tag yellow">0</span></a></li>
						<li><a href="#">Expirados <span class="nav-tag red">0</span></a></li>
					</ul>	
				</li> -->
				<li><a href="{{ route('projects.create') }}"><i class="sl sl-icon-plus"></i> Agregar Ayuda</a></li>
				<li><a><i class="sl sl-icon-plus"></i> Beneficiario/Ayudador</a>
					<ul>
						<li><a href="{{ route('savinglives.index') }}">Salvando vidas un platillo de esperanza</a></li>
						<li><a href="{{ route('adoptgrandpa.index') }}">Adoptando abuelitos</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'freedom-nets']) }}">Tejiendo redes de libertad</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'underdogs']) }}">Underdog university</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'ropa-bebe']) }}">Abriga un bebé</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'laptops']) }}">Laptops con causa</a></li>
					</ul>
				</li>
			</ul>	

			<ul data-submenu-title="Cuenta">
				<!-- <li><a href="#"><i class="sl sl-icon-user"></i> Mi perfil</a></li> -->
				<li><a href="/inicio"><i class="sl sl-icon-power"></i> Salir</a></li>
			</ul>

		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Listing</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
								<input class="search-field" type="text" value="">
							</div>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Status -->
							<div class="col-md-6">
								<h5>Category</h5>
								<select class="chosen-select-no-single">
									<option label="blank">Select Category</option>	
									<option>Eat & Drink</option>
									<option>Shops</option>
									<option>Hotels</option>
									<option>Restaurants</option>
									<option>Fitness</option>
									<option>Events</option>
								</select>
							</div>

							<!-- Type -->
							<div class="col-md-6">
								<h5>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
								<input type="text" placeholder="Keywords should be separated by commas">
							</div>

						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-location"></i> Location</h3>
						</div>

						<div class="submit-section">

							<!-- Row -->
							<div class="row with-forms">

								<!-- City -->
								<div class="col-md-6">
									<h5>City</h5>
									<select class="chosen-select-no-single">
										<option label="blank">Select City</option>	
										<option>New York</option>
										<option>Los Angeles</option>
										<option>Chicago</option>
										<option>Houston</option>
										<option>Phoenix</option>
										<option>San Diego</option>
										<option>Austin</option>
									</select>
								</div>

								<!-- Address -->
								<div class="col-md-6">
									<h5>Address</h5>
									<input type="text" placeholder="e.g. 964 School Street">
								</div>

								<!-- City -->
								<div class="col-md-6">
									<h5>State</h5>
									<input type="text">
								</div>

								<!-- Zip-Code -->
								<div class="col-md-6">
									<h5>Zip-Code</h5>
									<input type="text">
								</div>

							</div>
							<!-- Row / End -->

						</div>
					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Gallery</h3>
						</div>

						<!-- Dropzone -->
						<div class="submit-section">
							<form action="{{ route('dropzone.store') }}" enctype="multipart/form-data" class="dropzone">
								@csrf
							</form>
						</div>

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-docs"></i> Details</h3>
						</div>

						<!-- Description -->
						<div class="form">
							<h5>Description</h5>
							<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5>Phone <span>(optional)</span></h5>
								<input type="text">
							</div>

							<!-- Website -->
							<div class="col-md-4">
								<h5>Website <span>(optional)</span></h5>
								<input type="text">
							</div>

							<!-- Email Address -->
							<div class="col-md-4">
								<h5>E-mail <span>(optional)</span></h5>
								<input type="text">
							</div>

						</div>
						<!-- Row / End -->


						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
								<input type="text" placeholder="https://www.facebook.com/">
							</div>

							<!-- Website -->
							<div class="col-md-4">
								<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></h5>
								<input type="text" placeholder="https://www.twitter.com/">
							</div>

							<!-- Email Address -->
							<div class="col-md-4">
								<h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optional)</span></h5>
								<input type="text" placeholder="https://plus.google.com">
							</div>

						</div>
						<!-- Row / End -->


						<!-- Checkboxes -->
						<h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
						<div class="checkboxes in-row margin-bottom-20">
					
							<input id="check-a" type="checkbox" name="check">
							<label for="check-a">Elevator in building</label>

							<input id="check-b" type="checkbox" name="check">
							<label for="check-b">Friendly workspace</label>

							<input id="check-c" type="checkbox" name="check">
							<label for="check-c">Instant Book</label>

							<input id="check-d" type="checkbox" name="check">
							<label for="check-d">Wireless Internet</label>

							<input id="check-e" type="checkbox" name="check">
							<label for="check-e">Free parking on premises</label>

							<input id="check-f" type="checkbox" name="check">
							<label for="check-f">Free parking on street</label>

							<input id="check-g" type="checkbox" name="check">
							<label for="check-g">Smoking allowed</label>	

							<input id="check-h" type="checkbox" name="check">
							<label for="check-h">Events</label>
					
						</div>
						<!-- Checkboxes / End -->

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="fa fa-calendar-check-o"></i> Availability</h3>
							<!-- Switcher -->
							<label class="switch"><input type="checkbox" checked=""><span class="slider round"></span></label>
						</div>
						
						<!-- Switcher ON-OFF Content -->
						<div class="switcher-content">
								
								<!-- Availablity Slots -->
								<!-- Set data-clock-type="24hr" to enable 24 hours clock type -->
								<div class="availability-slots" data-clock-type="24hr">

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Monday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Tuesday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Wednesday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Thursday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Friday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>

											<!-- Single Slot -->
											<div class="single-slot">
												<div class="single-slot-left">
													<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>

												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Saturday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

									<!-- Single Day Slots -->
									<div class="day-slots">
										<div class="day-slot-headline">
											Sunday
										</div>
										
										<!-- Slot For Cloning / Do NOT Remove-->
										<div class="single-slot cloned">
											<div class="single-slot-left">
												<div class="single-slot-time"></div>
												<button class="remove-slot"><i class="fa fa-close"></i></button>
											</div>

											<div class="single-slot-right">
												<strong>Slots:</strong>
												<div class="plusminus horiz">
													<button></button>
													<input type="number" name="slot-qty" value="1" min="1" max="99">
													<button></button> 
												</div>
											</div>
										</div>		
										<!-- Slot For Cloning / Do NOT Remove-->


										<!-- No slots -->
										<div class="no-slots">No slots added</div>

										<!-- Slots Container -->
										<div class="slots-container">
											
										</div>
										<!-- Slots Container / End -->


										<!-- Add Slot -->
										<div class="add-slot">
											<div class="add-slot-inputs">
        										<input type="time" class="time-slot-start" min="00:00" max="12:00">
												<select class="time-slot-start twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
        										<span>-</span>

   												<input type="time" class="time-slot-end" min="00:00" max="12:00">
												<select class="time-slot-end twelve-hr" id="">
													<option>am</option>
													<option>pm</option>
												</select>
											</div>
											<div class="add-slot-btn">
												<button>Add</button>
											</div>
										</div>

									</div>
									<!-- Single Day Slots / End -->

								</div>
								<!-- Availablity Slots / End -->

						</div>
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
							<!-- Switcher -->
							<label class="switch"><input type="checkbox" checked=""><span class="slider round"></span></label>
						</div>
						
						<!-- Switcher ON-OFF Content -->
						<div class="switcher-content">

							<!-- Day -->
							<div class="row opening-day">
								<div class="col-md-2"><h5>Monday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<option label="Opening Time"></option>
										<option>Closed</option>
										<option>1 AM</option>
										<option>2 AM</option>
										<option>3 AM</option>
										<option>4 AM</option>
										<option>5 AM</option>
										<option>6 AM</option>
										<option>7 AM</option>
										<option>8 AM</option>
										<option>9 AM</option>
										<option>10 AM</option>
										<option>11 AM</option>
										<option>12 AM</option>	
										<option>1 PM</option>
										<option>2 PM</option>
										<option>3 PM</option>
										<option>4 PM</option>
										<option>5 PM</option>
										<option>6 PM</option>
										<option>7 PM</option>
										<option>8 PM</option>
										<option>9 PM</option>
										<option>10 PM</option>
										<option>11 PM</option>
										<option>12 PM</option>
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<option label="Closing Time"></option>
										<option>Closed</option>
										<option>1 AM</option>
										<option>2 AM</option>
										<option>3 AM</option>
										<option>4 AM</option>
										<option>5 AM</option>
										<option>6 AM</option>
										<option>7 AM</option>
										<option>8 AM</option>
										<option>9 AM</option>
										<option>10 AM</option>
										<option>11 AM</option>
										<option>12 AM</option>	
										<option>1 PM</option>
										<option>2 PM</option>
										<option>3 PM</option>
										<option>4 PM</option>
										<option>5 PM</option>
										<option>6 PM</option>
										<option>7 PM</option>
										<option>8 PM</option>
										<option>9 PM</option>
										<option>10 PM</option>
										<option>11 PM</option>
										<option>12 PM</option>
									</select>
								</div>
							</div>
							<!-- Day / End -->

							<!-- Day -->
							<div class="row opening-day js-demo-hours">
								<div class="col-md-2"><h5>Tuesday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
							</div>
							<!-- Day / End -->

							<!-- Day -->
							<div class="row opening-day js-demo-hours">
								<div class="col-md-2"><h5>Wednesday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
							</div>
							<!-- Day / End -->

							<!-- Day -->
							<div class="row opening-day js-demo-hours">
								<div class="col-md-2"><h5>Thursday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
							</div>
							<!-- Day / End -->

							<!-- Day -->
							<div class="row opening-day js-demo-hours">
								<div class="col-md-2"><h5>Friday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
							</div>
							<!-- Day / End -->

							<!-- Day -->
							<div class="row opening-day js-demo-hours">
								<div class="col-md-2"><h5>Saturday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
							</div>
							<!-- Day / End -->

							<!-- Day -->
							<div class="row opening-day js-demo-hours">
								<div class="col-md-2"><h5>Sunday</h5></div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Opening Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
								<div class="col-md-5">
									<select class="chosen-select" data-placeholder="Closing Time">
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>
								</div>
							</div>
							<!-- Day / End -->

						</div>
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
							<!-- Switcher -->
							<label class="switch"><input type="checkbox" checked=""><span class="slider round"></span></label>
						</div>

						<!-- Switcher ON-OFF Content -->
						<div class="switcher-content">

							<div class="row">
								<div class="col-md-12">
									<table id="pricing-list-container">
										<tr class="pricing-list-item pattern">
											<td>
												<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
												<div class="fm-input pricing-name"><input type="text" placeholder="Title"></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="Description"></div>
												<div class="fm-input pricing-price"><input type="text" placeholder="Price" data-unit="USD"></div>
												<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
											</td>
										</tr>
									</table>
									<a href="#" class="button add-pricing-list-item">Add Item</a>
									<a href="#" class="button add-pricing-submenu">Add Category</a>
								</div>
							</div>

						</div>
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->


					<a href="#" class="button preview">Preview <i class="fa fa-arrow-circle-right"></i></a>

				</div>
			</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
			</div>

		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\jquery-migrate-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\custom.js') }}"></script>


<!-- Opening hours added via JS (this is only for demo purpose) -->
<script>
$(".opening-day.js-demo-hours .chosen-select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{ asset('scripts\dropzone.js') }}"></script>
<script type="text/javascript">
        Dropzone.options.dropzone =
        {
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
				console.log(response);
				console.log('error porque no se jajajaja :(');
                return false;
            }
        };
    </script>

</body>
