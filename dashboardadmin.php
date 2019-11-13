<?php
session_start();
include 'proses.php';
	// cek apakah yang mengakses halaman ini sudah login
if(@$_SESSION['level']=="user"){
 header("location:index.php");
}

	?>

<html>
<head>
	<title>Halaman Admin</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	<script
      src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"
      data-auto-a11y="true"
    ></script>
	</head>
<body>

<div class="wrap">
		<div class="header">
			<div class="logo">
				<img src="img/idwifi.png"/>
			</div>
			
			<div class="title">
			Peta Lokasi Layanan @Wifi.id Kota Sigli
		</div>
		
		<div class="home">
		<p> <center>
			<button onclick="window.location.href='logout.php'">Log Out</button>
					</p>
		</div>
		
		
		</div>
		<div class="menu">
		<?php include 'ul.php';?>
		</div>
			<div class="badanadmin">			
			<center/> 
			<div class="contentadmin">
					Selamat Datang, <br/> <b>
	<?php 
		echo $_SESSION['nama']; 
	?>
	</b><br>Akun anda sebagai <b>
	<?php 
	echo $_SESSION['level'];
	?>
	</b>
	
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center>© Raja Muchlisar </center>
		</div>
	</div>
	
 </div>

</body>
</html>