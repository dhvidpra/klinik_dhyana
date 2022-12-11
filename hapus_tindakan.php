<?php
    if($_GET['ID_Tindakan']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from Tabel_Tindakan where ID_Tindakan='".$_GET['ID_Tindakan']."'");
        if($qry_hapus){
            echo "<script>alert('Success');location.href='tampil_tindakan.php';</script>";
        } else {
            echo "<script>alert('Failed');location.href='tampil_tindakan.php';</script>";
        }
    }
?>