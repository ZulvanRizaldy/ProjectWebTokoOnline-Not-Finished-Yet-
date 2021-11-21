<?php 
    include "header.php";
    include "koneksi.php";
    $id_makanan = $_GET['id_makanan'];
    $qry_makanan=mysqli_query($conn,"select * from makanan where id_makanan = $id_makanan");
    while($dt_makanan=mysqli_fetch_array($qry_makanan))
        ?>
<h2>Beli Makanan</h2>
<div class="row">
    <div class="col-md-4">
        <img src="foto_produk/<?=$dt_makanan['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$dt_makanan['id_makanan']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Makanan</td><td><?=$dt_makanan['nama_makanan']?></td>
                    </tr>
                    <tr>
                        <td>Harga </td><td><?=$dt_makanan['harga']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi </td><td><?=$dt_makanan['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah beli</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-outline-dark mt-auto" type="submit" value="    Beli    "></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>