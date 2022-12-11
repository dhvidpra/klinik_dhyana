<?php

if(isset($_POST['simpan'])){

                    $No_Reg=$_POST['No_Reg'];
                    $ID_Dokter=$_POST['ID_Dokter'];
                    $Nama_Pasien=$_POST['Nama_Pasien'];
                    $Jam=$_POST['Jam'];
                    $Diagnosa=$_POST['Diagnosa'];
                    $Tindakan_Kedokteran=$_POST['Tindakan_Kedokteran'];
                    $No_Ruang=$_POST['No_Ruang'];
                    $Keterangan=$_POST['Keterangan'];

                    if(empty($No_Reg)){
                        echo "<script>alert('no reg can not be empty');location.href='tambah_tindakan.php';</script>";
                    } elseif(empty($ID_Dokter)){
                        echo "<script>alert('id doctor name can not be empty');location.href='tambah_tindakan.php';</script>";
                    } elseif(empty($Nama_Pasien)){
                       echo "<script>alert('patient name can not be empty');location.href='tambah_tindakan.php';</script>";    
                    } elseif(empty($Jam)){
                        echo "<script>alert('time can not be empty');location.href='tambah_tindakan.php';</script>";
                    } elseif(empty($Diagnosa)){
                        echo "<script>alert('diagnosis can not be empty');location.href='tambah_tindakan.php';</script>";
                    } elseif(empty($Tindakan_Kedokteran)){
                        echo "<script>alert('medical action can not be empty');location.href='tambah_tindakan.php';</script>";
                    } elseif(empty($No_Ruang)){
                        echo "<script>alert('room can not be empty');location.href='tambah_tindakan.php';</script>";
                    } elseif(empty($Keterangan)){
                        echo "<script>alert('description can not be empty');location.href='tambah_tindakan.php';</script>";
                    } else {

                                        include "koneksi.php";

                                        if(empty($password)){
                                
                                            $update=mysqli_query($conn,"update Tabel_Dokter set No_Reg='".$No_Reg."', ID_Dokter='".$ID_Dokter."', Nama_Pasien='".$Nama_Pasien."', Jam='".$Jam."', Diagnosa='".$Diagnosa."', Tindakan_Kedokteran='".$Tindakan_Kedokteran."', No_Ruang='".$No_Ruang."', Keterangan='".$Keterangan."'") or die(mysqli_error($conn));
                                
                                            if($update){
                                                echo "<script>alert('Success');location.href='tampil_tindakan.php';</script>";
                                
                                            } else {
                                                echo "<script>alert('Failed');location.href='ubah_tindakan.php?ID_Tindakan=".$ID_Tindakan."';</script>";
                                
                                            }
                                
                                        } else {
                                
                                                            $update=mysqli_query($conn,"update Tabel_Dokter set No_Reg='".$No_Reg."', ID_Dokter='".$ID_Dokter."', Nama_Pasien='".$Nama_Pasien."', Jam='".$Jam."', Diagnosa='".$Diagnosa."', Tindakan_Kedokteran='".$Tindakan_Kedokteran."', No_Ruang='".$No_Ruang."', Keterangan='".$Keterangan."'") or die(mysqli_error($conn));
                                
                                                            if($update){
                                                                echo "<script>alert('Success');location.href='tampil_tindakan.php';</script>";
                                                
                                                            } else {
                                                                echo "<script>alert('Failed');location.href='ubah_tindakan.php?ID_Tindakan=".$ID_Tindakan."';</script>";
                                                
                                                            }
                                
                                        }
                                
                                       
                                
                                    }
                                
                                }
                                
                                ?>