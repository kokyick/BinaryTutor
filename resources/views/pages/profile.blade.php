<!-- all require css and script for basic sub pages has been linked up -->

@extends("layout/master")

@section("head")
	<title>Profile Page</title>
  <!-- header -->
@stop

@section("content")
<div class="sngl_team">
  <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
  <h3>Lisa Kudrow <span> Manager </span></h3>
  <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
</div>
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
      <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Send</button>
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
<!-- start located map Section -->
<!-- <section id="ltd_map_sec"> -->
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <div class="map">
    <h1>located THE MAP</h1><a href="#slidingDiv" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up" ></i></a>
    <div id="slidingDiv">
      <div class="map_area">
        <div id="googleMap" style="width:100%;height:300px;"></div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
<!-- </section> -->

<!-- End located map  Section -->
</div>
</div>
</section>
<!-- End contact us  Section -->
<!-- Table-->
<h4>Feburary Classes</h4>
<div class="table-responsive">
<table  class="table">
<thead>
<tr>
<th>Class ID</th>
<th>Name</th>
<th>Date</th>
<th>Venue</th>
<th>Instructor</th>
<th>Attendance</th>
<th>Manage</th>
</tr>
</thead>
<tbody>
<tr>
<td>Feb18-01</td>
<td>Yoga</td>
<td>05 Feb 2018</td>
<td>Orchard Tower #08-7194</td>
<td>Mary</td>
<td>
  <a href="#" class="button icon fa-download"></a>
  <a href="#" class="button special icon fa-search"></a>
</td>
<td><a href="#"><img src="images/edit.png" style="width: 20px;"/></a></a></td>
</tr>
<tr>
<td>Feb18-02</td>
<td>Cross Fit</td>
<td>09 Feb 2018</td>
<td>24 Kallang Basin #18-75</td>
<td>John</td>
<td>
  <a href="#" class="button icon fa-download"></a>
  <a href="#" class="button special icon fa-search"></a>
</td>
<td><a href="#"><img src="images/edit.png" style="width: 20px;"/></a></a></td>
</tr>
<tr>
<td>Feb18-03</td>
<td>Pilatates</td>
<td>15 Feb 2018</td>
<td>1 Raffles Place #05-324</td>
<td>Dick</td>
<td><a href="#" class="button icon fa-download"></a>
  <a href="#" class="button special icon fa-search"></a>
</td>
<td><a href="#"><img src="images/edit.png" style="width: 20px;"/></a></a></td>
</tr>
<tr>
<td>Feb18-04</td>
<td>Kick Boxing</td>
<td>20 Feb 2018</td>
<td>Orchard Central #09-04</td>
<td>Harry</td>
<td><a href="#" class="button icon fa-download"></a>
  <a href="#" class="button special icon fa-search"></a>
</td>
<td><a href="#"><img src="images/edit.png" style="width: 20px;"/></a></a></td>
</tr>
<tr>
<td>Feb18-05</td>
<td>Hot Yoga</td>
<td>28 Feb 2018</td>
<td>111 Somerset #18-64</td>
<td>Serene</td>
<td><a href="#" class="button icon fa-download"></a>
  <a href="#" class="button special icon fa-search"></a>
</td>
<td><a href="#"><img src="images/edit.png" style="width: 20px;"/></a></a></td>
</tr>
</tbody>

</table>
</div>
<!--End Table-->
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
