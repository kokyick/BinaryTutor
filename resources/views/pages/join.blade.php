<!-- all require css and script for basic sub pages has been linked up -->

@extends("layout/master")

@section("head")
	<title>Blank Template page</title>
  <!-- header -->
@stop

@section("content")
<!-- start slider Section -->
<section id="slider_sec">
	<div class="container">
		<div class="row">
			<div class="slider">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We are webeeo</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>
						</div>
					</div>
					<div class="item">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We are Creative</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>
						</div>
					</div>
					<div class="item ">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We Have Greate Team</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>
						</div>
					</div>
				  </div>

				  <!-- Controls -->
				  <a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End slider Section -->

<!-- start about Section -->
<section id="abt_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>ABOUT</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="abt">
					<p>Mauris luctus aliquet nunc quis consectetur. Curabitur elit massa, consequat vel velit sit amet, scelerisque hendrerit mi. Cras pellentesque sem turpis, quis interdum mi sagittis a. Donec mattis porttitor eleifend</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About Section -->

<!-- start contact us Section -->
<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Contact Info</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-sm-6">
				<div id="cnt_form">
					<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
						<div class="form-group">
						<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
						</div>
            <div class="form-group">
              <input type="text" name="contact-number" class="form-control mail-field" required="required" placeholder="Your Contact Number">
            </div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Address"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Sign Me Up!</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cnt_info">
					<ul>
						<li><i class="fa fa-facebook"></i><p>121 King Street, Melbourne Victoria 3000 Australia</p></li>
						<li><i class="fa fa-envelope"></i><p>contact@info.com</p></li>
						<li><i class="fa fa-phone"></i><p>+0987654321 (+012345678)</p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section("scripts")
<!-- Scripts -->
<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 14,
				scrollwheel: false,
				center: new google.maps.LatLng(41.092586000000000000, -75.592688599999970000)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<script src="js/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({
		speed: 1000,  // speed you want the toggle to happen
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open

	});


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded
$(window).load(function(){
    $("body").css("overflow", "visible");
    var nice=$('html').niceScroll({
	cursorborder:"5",
	cursorcolor:"#00AFF0",
	cursorwidth:"3px",
	boxzoom:true,
	autohidemode:true
	});

});
</script>

@stop
