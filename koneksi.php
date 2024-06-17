<?php

$hostname = "localhost:3307";
$userDatabase = "root";
$passwordUser = "";
$databaseName = "datamahasiswa";

$koneksi = mysqli_connect($hostname, $userDatabase, $passwordUser, $databaseName);

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Koneksi berhasil
}

?>