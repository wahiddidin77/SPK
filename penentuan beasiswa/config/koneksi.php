<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "penentuan beasiswa");
if(!$koneksi) {
	echo "Koneksi Error!";
}
?>