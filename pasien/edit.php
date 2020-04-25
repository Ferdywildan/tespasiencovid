<?php 

include '../koneksi.php';
include '../aset/header.php';

$id = $_GET["id_pasien"];

$query = mysqli_query($kon, "SELECT * FROM pasien WHERE pasien.id_pasien = '$id' ");

$query1 = mysqli_query($kon, "SELECT * FROM rujukan");



if(isset($_POST['simpan'])){

    $id = $_GET['id_pasien'];

    $namalengkap_pasien = $_POST['namalengkap_pasien'];
    $nama_pasien = $_POST['nama_pasien'];
    $umur_pasien = $_POST['umur_pasien'];
    $alamat_pasien = $_POST['alamat_pasien'];
    $kecamatan_pasien = $_POST['kecamatan_pasien'];
    $kelurahan_pasien = $_POST['kelurahan_pasien'];
    $tgl_periksa = $_POST['tgl_periksa'];
    $suhu_pasien = $_POST['suhu_pasien'];
    $id_kategori = 2;
    

    $sql = "UPDATE pasien SET
            namalengkap_pasien = '$namalengkap_pasien',
            nama_pasien  = '$nama_pasien',
            umur_pasien = '$umur_pasien',
            alamat_pasien = '$alamat_pasien',
            kecamatan_pasien = '$kecamatan_pasien',
            kelurahan_pasien = '$kelurahan_pasien',
            tgl_periksa = '$tgl_periksa',
            suhu_pasien = '$suhu_pasien',
            id_kategori = '$id_kategori'
            WHERE id_pasien = '$id'
            ";

    $res = mysqli_query($kon, $sql);

    $count = mysqli_affected_rows($kon);

    // var_dump($count);
         
    if($count==1){
        echo "<script>
                alert('Data Berhasil Diubah'); 
                document.location.href='index.php';
              </script>";
        
    }
    else{
        echo "<script>
        alert('Data Gagal Diubah'); 
        document.location.href='edit.php';
      </script>";
    }
}
?>

<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Perbarui Data Pasien</h2>
    </div>
    <div class="card-body">
         <form method="post" action="">

         <?php while($edit = mysqli_fetch_assoc($query)): ?>
                <div class="form-group">
                 <label for="buku">Nama Lengkap</label>
                 <input type="text" class="form-control" name="namalengkap_pasien" id="namalengkap_pasien"  value="<?= $edit['namalengkap_pasien']?>">
                </div>

                <div class="form-group">
                 <label for="buku">Nama</label>
                 <input type="text" class="form-control" name="nama_pasien" id="nama_pasien"   value="<?= $edit['nama_pasien']?>">
                </div>  

                <div class="form-group">
                 <label for="buku">Umur</label>
                 <input type="text" class="form-control" name="umur_pasien" id="umur_pasien"  value="<?= $edit['umur_pasien']?>">
                </div>

                <div class="form-group">
                 <label for="buku">Kota</label>
                 <input type="text" name="alamat_pasien" id="alamat_pasien" class="form-control" value="<?= $edit['alamat_pasien']?>"></textarea>
                </div>

                <div class="form-group">
                 <label for="buku">Kecamatan</label>
                 <input type="text" name="kecamatan_pasien" id="kecamatan_pasien" class="form-control" value="<?= $edit['kecamatan_pasien']?>"></textarea>
                </div>

                <div class="form-group">
                 <label for="buku">Kelurahan</label>
                 <input type="text" name="kelurahan_pasien" id="kelurahan_pasien" class="form-control" value="<?= $edit['kelurahan_pasien']?>"></textarea>
                </div>

                <div class="form-group">
                 <label for="buku">Tanggal Periksa</label>
                 <input type="text" class="form-control" name="tgl_periksa" id="tgl_periksa"  value="<?= $edit['tgl_periksa']?>"> 
                 </div>

                 <div class="form-group">
                 <label for="buku">Suhu</label>
                 <input type="text" class="form-control" name="suhu_pasien" id="suhu_pasien"  value="<?= $edit['suhu_pasien']?>"> 
                 </div>

            
              
                
                <?php
                     endwhile;
                ?>
                               
                <button type="submit" class="btn btn-warning" name="simpan">Simpan</button>
         </form>        
    </div>
   </div>
  </div>
 </div>
</div>    






<?php

include '../aset/footer.php';

?>
