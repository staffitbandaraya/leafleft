<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if($_SESSION['level'] == 'admin'){

echo '<ul>
			<a href="dashboardadmin.php"><li><i class="fa fa-home" aria-hidden="true"></i> Dashboard</li> </a>
			<a href="datalokasi.php"><li><i class="fas fa-map-marker"></i> Data Lokasi</li> </a>
			<a href="persetujuan.php"><li><i class="fas fa-clipboard-check"></i> Persetujuan</li> </a>
			<a href="#"><li><i class="fas fa-male"></i> Kelola Admin</li> </a>
			
			<a href="#"><li></li> </a>
			<a href="profil.php"><li><i class="fas fa-tools"></i> Profil</li> </a>
        </ul>';
        
    
}
        elseif ($_SESSION['level'] == 'user' AND $_SESSION['status'] =='1'){
            echo '<ul>
            <a href="dashboarduser.php"><li><i class="fa fa-home" aria-hidden="true"></i> Dashboard</li> </a>
            <a href="datalokasi.php"><li><i class="fas fa-map-marker"></i> Data Lokasi</li> </a>

            <a href="profil.php"><li><i class="fas fa-tools"></i> Profil</li> </a>
        </ul>';

        }
        else{
            echo '<ul>
        <h2 style="color:salmon;">Akun Anda Belum di aktifkan</h2>
        </ul>';
        }
?>