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
        $insert=mysqli_query($conn,"insert into Tabel_Dokter (ID_Dokter, ID_Departemen, Nama) value ('".$ID_Dokter."', '".$ID_Departemen."', '".$Nama."')");
        if($insert){
            echo "<script>alert('Success');location.href='tambah_dokter.php';</script>";
        } else {
            echo "<script>alert('Failed');location.href='tambah_dokter.php';</script>";
        }
    }
}
?>