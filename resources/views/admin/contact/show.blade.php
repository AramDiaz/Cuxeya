﻿<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style_original.css') }}">
<link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
<link rel="stylesheet" href="{{ asset('css/richtext.min.css') }}">

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

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Contacto</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Admin</a></li>
							<li>Contacto</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<div id="response-validate"></div>

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Información</h3>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<div class="row with-forms">
								<div class="col-md-6">
									<h5>Nombre</h5>
									<h4>{{$contact->full_name}}</h4>
								</div>
							</div>

							<div class="row with-forms">
								<div class="col-md-6">
									<h5>Email</h5>
									<h4>{{$contact->email}}</h4>
								</div>
							</div>
						
						</div>
						<!-- Row / End -->

						<!-- Row -->
						<div class="row with-forms">

							<div class="row with-forms">
								<div class="col-md-12">
									<h5>Motivo</h5>
									<h4>{{$contact->subject}}</h4>
								</div>
							</div>

							<div class="row with-forms">
								<div class="col-md-12">
									<h5>Mensaje</h5>
									<h4>{{$contact->message}}</h4>
								</div>
							</div>

						</div>
						<!-- Row / End -->


					</div>
					<!-- Section / End -->

					<a href="{{ route('contact.index')}}" class="button preview">Volver <i class="fa fa-arrow-circle-right"></i></a>

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

<div id="loading-always" class="loading-div">
          This div is always loading
</div>

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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery.richtext.js') }}"></script>

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
                return file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
				console.log(response);
                return false;
			},
			init: function() {
				this.on("addedfile", function(file) {
					console.log("Added file:" + file.name);
					add_file_element(file.name);
				});
				this.on("removedfile", function(file) {
					console.log("removed file:" + file.name); 
					remove_file_element(file.name);
				});
  			}
        	};
    </script>

</body>
