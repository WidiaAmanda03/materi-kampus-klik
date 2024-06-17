<?php

    // Membuat variabel
    $nama_mahasiswa = "Widia amanda";
    $nama_kamu = "reni putri";
    $pekerjaan = "ibu rumah tangga";

    if ($nama_mahasiswa == "Widia amanda") {
        if ($pekerjaan == "Aktris") {
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 1000000000;
        } else {
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 2000000;
        }

    } else if ($nama_kamu == "reni") {
        $jenis_kelamin = "Laki - laki";
    } else {
        $jenis_kelamin = "??";
    }

    echo "Hallo ".$nama_mahasiswa.", Selamat <br> datang, saya ".$nama_kamu.". Jenis kelamin kamu adalah ".$jenis_kelamin." penghasilan Anda ".$penghasilan_perbulan;
?>

<html>
    <title>Profil</title>
    <body>
        <br>
        Calon Pacar saya ....
    </body>
</html>