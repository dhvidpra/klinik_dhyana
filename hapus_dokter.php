<?php
    if($_GET['ID_Dokter']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from Tabel_Dokter where ID='".$_GET['ID']."'");
        if($qry_hapus){
            echo "<script>alert('Success');location.href='tampil_dokter.php';</script>";
        } else {
            echo "<script>alert('Failed');location.href='tampil_dokter.php';</script>";
        }
    }
?>