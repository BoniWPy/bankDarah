<!DOCTYPE HTML>
<html>
<head> 
<title>Bank Darah</title>
<link rel="icon" href="images/logo.jpg" type="image/png">
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
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
				<h1 class="titlehead">Login</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Bandung</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		
		<div class="row space-top">
			<!-- CONTACT FORM -->
			<div class="c4 space-top">
				
				
			</div>
			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-user"></i> Silahkan Login</span>
				</h1>
				<div class="wrapcontact">
					 <?php 
//error_reporting(0);
include 'config.php';

if(!isset($_SESSION['nip'] )== 0) {
	header('Location: distributor/index.php');
}

if(isset($_POST['login'])) {
	$nip = $_POST['nip'];
	$password = md5($_POST['password']."ALS52KAO09");

	try {
		$sql = "SELECT * FROM distributor WHERE nip = :nip AND password = :password";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':nip', $nip);
		$stmt->bindParam(':password', $password);
		$stmt->execute();

		$count = $stmt->rowCount();
		if($count == 1) {
			$_SESSION['nip'] = $nip;
			echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="distributor/index.php";</script>';
			return;
		}else{
			echo "Anda tidak dapat login";
		}
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
}

?>
					<form method="post" action="" >
						<div class="form">
							<div class="c12 noleftmargin">
								<label>NIP</label>
								<input type="text" name="nip">
							</div>
							<div class="c12 noleftmargin">
								<label>Password</label>
								<input type="password" name="password">
							</div>
							
							<input type="submit" name="login" class="button" style="font-size:12px;" value="Login">
						</div>
					</form>
				</div>
			</div>
			<div class="c4 space-top">
				
				
			</div>
			
		</div>
		</br>
			</br>
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
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- contact form -->
<script src="js/contact.js"></script>

</body>
</html>
