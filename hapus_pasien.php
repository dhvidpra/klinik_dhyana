<?php
    if($_GET['ID_Pasien']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from Tabel_Pasien where ID_Pasien='".$_GET['ID_Pasien']."'");
        if($qry_hapus){
            echo "<script>alert('Success');location.href='tampil_pasien.php';</script>";
        } else {
            echo "<script>alert('Failed');location.href='tampil_pasien.php';</script>";
        }
    }
?>