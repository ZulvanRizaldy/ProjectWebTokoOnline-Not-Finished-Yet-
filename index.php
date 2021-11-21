<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- Header-->
<header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                </div>
            </div>
        </header>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
            <?php 
    include "koneksi.php";
    $qry_makanan=mysqli_query($conn,"select * from makanan");
    while($dt_makanan=mysqli_fetch_array($qry_makanan)){
        ?>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <?php
                            if (isset($dt_makanan['foto']) && $dt_makanan['foto'] != ''){
                            ?>
                            <img src="<?php echo $dt_makanan['foto'];?>"class="card-img-top">
                            <?php /* ?><img src="foto_produk/<?=$dt_makanan['foto']?>"> <?php */ ?>
                            <?php } else {?>
                            <img src="" alt="">
                            <?php } ?>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?=$dt_makanan['nama_makanan']?></h5>
                                    <!-- Product price-->
                                    <p class="card-text"><?=substr($dt_makanan['harga'], 0,20)?></p>
                                </div>
                            </div>
                             <!-- Product actions-->
                             <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                             <div class="text-center"><a href="beli.php?id_makanan=<?=$dt_makanan['id_makanan']?>" class="btn btn-outline-dark mt-auto">Tambah</a></div>
                            </div>
                        </div>
                    </div>
                    <?php
                     }
                     ?>
        
<?php
    include "footer.php";
?>