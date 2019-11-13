<html>
<head>
 <title>Leaflet basic example</title>
 <script src="js/jquery.min.js"></script>
 <link rel="stylesheet" href="css/leaflet.css" />
 <script src="js/leaflet.js"></script>
 
 <link rel="stylesheet" type="text/css" href="css/style.css">
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
			<button onclick="window.location.href='index.php'">HOME</button>
			<button onclick="window.location.href='login.php'">LOGIN</button>
		</p>
		</div>
			<div class="badan">			
				<div class="box-login">
		<div class="header-box">Daftar User Baru</div>
		<br><br>
		<center>
			<form action="proses_daftar.php" method="post">
				Nama Lengkap<br>
				<input type="text" name="namaLengkap" /><br>
				Email<br>
				<input type="email" name="email" /><br>
				Username<br>
				<input type="text" name="username" /><br>
				Password<br>
				<input type="password" name="pass" /><br>

				<input type="submit" value="Daftar" />
				
			</form>
		</center>
	</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center> © Raja Muchlisar </center>
		</div>
	</div>
	
</body>
</html>