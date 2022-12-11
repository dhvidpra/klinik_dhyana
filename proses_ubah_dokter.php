<?php

if(isset($_POST['simpan'])){

    $ID_Dokter=$_POST['ID_Dokter'];
    $ID_Departemen=$_POST['ID_Departemen'];
    $Nama=$_POST['Nama'];

    if(empty($ID_Dokter)){

        echo "<script>alert('id doctor can not be empty');location.href='tambah_dokter.php';</script>";

    } elseif(empty($ID_Departemen)){

        echo "<script>alert('id department can not be empty');location.href='tambah_dokter.php';</script>";

    } elseif(empty($Nama)){

        echo "<script>alert('name can not be empty');location.href='tambah_dokter.php';</script>";

    } else {

        include "koneksi.php";

        if(empty($password)){

            $update=mysqli_query($conn,"update Tabel_Dokter set ID_Dokter='".$ID_Dokter."', ID_Departemen='".$ID_Departemen."', Nama='".$Nama."'") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Success');location.href='tampil_dokter.php';</script>";

            } else {
                echo "<script>alert('Failed');location.href='ubah_dokter.php?ID_Dokter=".$ID_Dokter."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update Tabel_Dokter set ID_Dokter='".$ID_Dokter."', ID_Departemen='".$ID_Departemen."', Nama='".$Nama."', Alamat='".$alamat."', Tgl_Lahir='".$Tgl_Lahir."'") or die(mysqli_error($conn));

            if($update){
                    echo "<script>alert('Success');location.href='tampil_dokter.php';</script>";
    
                } else {
                    echo "<script>alert('Failed');location.href='ubah_dokter.php?id_user=".$ID_Dokter."';</script>";

            }

        }

       

    }

}

?>