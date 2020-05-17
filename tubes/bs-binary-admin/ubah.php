<?php
session_start();

require 'function.php';

$id = $_GET["id"];
$elek = query("SELECT * FROM elektronik WHERE id = $id")[0];

if( isset($_POST['submit'])){
    if(ubah($_POST) > 0 ){
        print "<script>
            alert('data berhasil diubah');
            document.location.href = 'produk.php';
            </script>";
    }else{
        print "<script>
            alert('data gagal diubah');
            document.location.href = 'produk.php';
            </script>";
    }
}
?>

<html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/ubah.css">
        <title>Tambah Data Elktronik Terbaru</title>
    </head>
    <body>
        <center><h1>FORM ubah Data Elektronik</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$elek["id"];?>">

           <label for="nama_barang" > Nama Barang : </label><br>
            <input type="text" name="nama_barang" id="nama_barang" value="<?= $elek['nama_barang']; ?>" required><br>

            <label for="fungsi"> Fungsi : </label><br>
            <input type="fungsi" name="fungsi" id="fungsi" value="<?=$elek['fungsi'];?>" required><br>

            <label for="tahun_produksi">Tahun : </label><br>
            <input type="textarea" name="tahun_produksi" id="tahun_produksi" value="<?=$elek['tahun_produksi'];?>" required><br>

            <label for="harga_baru">Harga Baru : </label><br>
            <input type="text" name="harga_baru" id="harga_baru" value="<?=$elek['harga_baru'];?>" required><br>

            <label for="harga_sekon">Harga Seken : </label><br>
            <input type="text" name="harga_sekon" id="harga_sekon" value="<?=$elek['harga_sekon'];?>" required><br>
    
            <label for="garansi">Garansi : </label><br>
            <input type="text" name="garansi" id="garansi" value="<?=$elek['garansi'];?>" required><br>
            
            <label for="pusat">Pusat : </label><br>
            <input type="text" name="pusat" id="pusat" value="<?=$elek['pusat'];?>" required><br>
            

            <label for="merek">Merek : </label><br>
            <input type="text" name="merek" id="merek" value="<?=$elek['merek'];?>" required><br>


            <label for="berat_barang">Berat Barang : </label><br>
            <input type="text" name="berat_barang" id="berat_barang" value="<?=$elek['berat_barang'];?>" required><br>

            <label for="gambar">Gambar : </label><br>
            <img src="../bs-binary-admin/assets/img/<?= $elek['gambar']; ?>" width="40"> <br>
            <input type="file" name="gambar" id="gambar"required><br>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
        </form>
    </center> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>