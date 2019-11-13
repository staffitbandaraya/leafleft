<?php
        include 'koneksi.php';
        $namaLengkap         = $_POST['namaLengkap'];
        $email               = $_POST['email'];
        $username            = $_POST['username'];
        $password            = $_POST['pass'];

        $cek                 = mysqli_query($conn, "INSERT INTO `akun` (`id_akun`, `username`, `password`, `nama`, `email`, `level`) 
                                                    VALUES 
                                                    (NULL, '$username', '$password', '$namaLengkap', '$email', 'user')
                                                    ");

                            echo $cek ? 'Berhasil Daftar ' : 'Gagal Mendaftar';
                            header("refresh: 2; url=login.php");

