<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Bank Darah </title>
<link rel="icon" href="images/logo.jpg" type="image/png">
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts are at the bottom of the document -->
</head>
<body>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="index.html">
			<img src="images/logo.jpg" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<?php
		include "menu_head.php";
		?>
	</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Visi & Misi</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Pandeglang</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row">
			<div class="c12">
				<h1 class="maintitle" style="font-size:15px; line-height: 1.5em;">
				<center><span>Visi & Misi UTD PMI Cabang Pandeglang</span></center>
				</h1>
				<p align="justify">
					<strong>Visi</strong></br>
					Palang Merah Indonesia menjadi Organisasi Kemanusiaan yang Berkarakter, Profesional, Mandiri dan dicintai masyarakat.
					</br></br>
					<strong>Misi</strong></br>
					</p>1.	Menguatkan dan mengembangkan organisasi
					</p>2.	Meningkatkan dan mengembangkan Kualitas SDM
					</p>3.	Meningkatkan Kualitas Pelayanan Kepalangmerahan
					</p>4.	Mengembangkan kegiatan Kepalangmerahan yang berbasis masyarakat
					</p>5.	Meningkatkan dan mengembangkan jejaring kerjasama
					</p>6.	Menyebarluaskan, mengadvokasi dan melaksanakan Prinsip-prinsip Dasar Gerakan Internasional Palang Merah dan Bulan Sabit Merah serta Hukum Perikemanusiaan Internasional
					</p>7.	Mengembangkan Komunikasi, Informasi dan Edukasi 


				</p>
				
			</div>
		
		</div>
		
		 </br>
		 </br>
		 </br>
		 </br>
		
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
<?php
include "footer.php";
?>
</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all-->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- testimonial rotator -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- CALL Showcase - change 5 from min:5 and max:5 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 5,
						max: 5
					}
				}
			});
		});	
</script>

<!-- CALL opacity on hover images -->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

<!-- CALL tabs -->
<script type="text/javascript">
$(document).ready(function() {	
	$('#tabs li a:not(:first)').addClass('inactive');
	$('.container:not(:first)').hide();	
	$('#tabs li a').click(function(){		
		var t = $(this).attr('href');
		if($(this).hasClass('inactive')){ //added to not animate when active
			$('#tabs li a').addClass('inactive');		
			$(this).removeClass('inactive');
			$('.container').hide();
			$(t).fadeIn('slow');	
		}			
		return false;
	}) //end click
});
</script>
</body>
</html>