﻿<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css\style_original.css">
<link rel="stylesheet" href="/css\main-color.css" id="colors">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

	@include("admin.layouts.header-admin")

<!-- Dashboard -->
<div id="dashboard">

	@include("admin.layouts.menu-admin")

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Noticias</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Noticas</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">

					<!-- Booking Requests Filters  -->

					<!-- Booking Requests Filters  -->
					<div class="booking-requests-filter">
						<a href="{{ route('news.create') }}" class="button">Nueva Noticia</a>
					</div>

					<h4>Listado de noticias</h4>
					
					<ul>

						<li>
							<div class="list-box-listingx">

							<div class="col-sm-12">
  								@if(session()->get('success'))
    							<div class="notification success closeable">
									<p><span>{{ session()->get('success') }}</span></p>  
									<a class="close" href="#"></a>
 	  							</div>
  								@endif
							</div>
							<table id="table_id" class="display" style="width:100%">
									<thead>
										<tr>
											<th>Id</th>
											<th>Fecha</th>
											<th>Titulo</th>
											<th>¿Publicado?</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@foreach($news as $item)
											<tr>
												<td>{{$item->id}}</td>
												<td>{{$item->created_at}}</td>
												<td>{{$item->title}}</td>
												<td>
												@if($item->activated)
													SI
												@else
													NO
												@endif
											</td>
												<td><a href="{{ route('news.edit', $item->id)}}" class="button gray"><i class="sl sl-icon-note"></i> Editar</a></td>
											</tr>
										@endforeach
									</tbody>
								</table>		
							</div>
						</li>

					</ul>
				</div>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2021 Cuxeya. Propiedad de Bull & Bear Foundation.</div>
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
<script type="text/javascript" src="/scripts\jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/scripts\jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="/scripts\mmenu.min.js"></script>
<script type="text/javascript" src="/scripts\chosen.min.js"></script>
<script type="text/javascript" src="/scripts\slick.min.js"></script>
<script type="text/javascript" src="/scripts\rangeslider.min.js"></script>
<script type="text/javascript" src="/scripts\magnific-popup.min.js"></script>
<script type="text/javascript" src="/scripts\waypoints.min.js"></script>
<script type="text/javascript" src="/scripts\counterup.min.js"></script>
<script type="text/javascript" src="/scripts\jquery-ui.min.js"></script>
<script type="text/javascript" src="/scripts\tooltips.min.js"></script>
<script type="text/javascript" src="/scripts\custom.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/scripts/custom/admin-estate.js"></script>

</body>
