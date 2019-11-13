<!-- tolong buat form persetujuan, dimana saat user menambah data, maka secara automatis data tersebut berstatus (nonaktif).
form persetujuan ini hanya bisa terbuka dengan login sebgaai admin. dan hanya akun berlevel admin yang dapat merubah status ( nonaktif) ke (aktif).

dan di index.php tolong buat hanya data yang berstatus aktif saja yang hanya tampil di index. sedangkan yang status non aktif tidak tampil.

asd -->

<?php
include "koneksi.php";
?>
	<html>
<head>
	<title>Data Lokasi
	</title>
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
			<div class="profil">			
			
			<div class="content">
			<h3><center>Persetujuan User </center></h3>
 	<table border="1" class="table"  cellpadding=3 cellspacing=3
            align=center>
		<tr>
			<th>Username</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Status</th>
			<th>Level</th>		
		</tr>
		<?php 
			$query = mysqli_query($conn, "SELECT * FROM akun where status ='0' AND level = 'user'");
			while($data = mysqli_fetch_array($query )){
				if($data['status']=='0'){
					$status = "Belum Aktif";
				}
				else{
					$status = "Sudah AKtif";
				}
		?>
		<tr>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $status; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td>
				<a class="edit" href="aktifkanAkun.php?id=<?php echo $data['id_akun']; ?>">Aktifkan</a> |
				<a class="edit" href="editcompany.php?id=<?php echo $data['id_akun']; ?>">Edit</a> |
				<a class="hapus" href="deletecompany.php?id=<?php echo $data['id_akun']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
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