<?php 
    if($_GET['id_makanan']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from makanan where id_makanan='".$_GET['id_makanan']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus Makanan');location.href='datamakanan.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus Makanan');location.href='datamakanan.php';</script>";
        }
    }
?>
