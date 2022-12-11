<?php

if(isset($_POST['simpan'])){

    $No_Rm=$_POST['No_Rm'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];
    $Tgl_Lahir=$_POST['Tgl_Lahir'];
    $Jenis_Kelamin=$_POST['Jenis_Kelamin'];

    if(empty($No_Rm)){
                    echo "<script>alert('no rm can not be empty');location.href='tambah_pasien.php';</script>";
                } elseif(empty($Nama)){
                    echo "<script>alert('name can not be empty');location.href='tambah_pasien.php';</script>"; 
                } elseif(empty($Alamat)){
                   echo "<script>alert('address can not be empty');location.href='tambah_pasien.php';</script>";    
                } elseif(empty($Tgl_Lahir)){
                    echo "<script>alert('date of birth can not be empty');location.href='tambah_pasien.php';</script>";
                } elseif(empty($Jenis_Kelamin)){
                    echo "<script>alert('gender can not be empty');location.href='tambah_pasien.php';</script>";
                } else {

        include "koneksi.php";

        if(empty($password)){

            $update=mysqli_query($conn,"update Tabel_Pasien set No_Rm='".$No_Rm."', Nama='".$Nama."', Alamat='".$Alamat."', Tgl_Lahir='".$Tgl_Lahir."', Jenis_Kelamin='".$Jenis_Kelamin."'") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Success');location.href='tampil_pasien.php';</script>";

            } else {
                echo "<script>alert('Failed');location.href='ubah_pasien.php?ID_Pasien=".$ID_Pasien."';</script>";

            }

        } else {

                    $update=mysqli_query($conn,"update Tabel_Pasien set No_Rm='".$No_Rm."', Nama='".$Nama."', Alamat='".$Alamat."', Tgl_Lahir='".$Tgl_Lahir."', Jenis_Kelamin='".$Jenis_Kelamin."'") or die(mysqli_error($conn));

                    if($update){
                        echo "<script>alert('Success');location.href='tampil_pasien.php';</script>";
        
                    } else {
                        echo "<script>alert('Failed');location.href='ubah_pasien.php?ID_Pasien=".$ID_Pasien."';</script>";
        
                    }

        }

       

    }

}

?>