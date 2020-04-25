<?php

include '../koneksi.php';



$id = $_GET["id_pasien"];

$query = mysqli_query($kon, "SELECT * FROM pasien INNER JOIN rujukan  USING(id_kategori) WHERE pasien.id_pasien = '$id' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail_pasien</title>

    <link rel="stylesheet" href="http://localhost/tespasien/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/tespasien/aset/fontawesome/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="index.php"><i class="fas fa-book-reader text-white mr-2"></i>Karantina Covid-19 | Mode User View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav">
      
     
    </ul>
  </div>
</nav>
<center>
<div class="container ">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card">
            <div class="card-header">
            <h2 class="card-title">Tentang Pasien</h2>      
            
                      
            </div>
            <div class="card-body">

                <table class="table">    
                <?php
                    while($pasien_karantina = mysqli_fetch_assoc($query)):?>
                    
                    <tr>
                        <td width="150px">Nama</td>
                        <td><?= $pasien_karantina['namalengkap_pasien']?></td>
                    </tr>    
                    <tr>
                        <td>Pasien No.</td>
                        <td><?= $pasien_karantina['id_pasien']?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><?= $pasien_karantina['umur_pasien']?></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td><?= $pasien_karantina['alamat_pasien']?></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td><?= $pasien_karantina['kecamatan_pasien']?></td>
                    </tr>
                    <tr>
                        <td>Kelurahan/Desa</td>
                        <td><?= $pasien_karantina['kelurahan_pasien']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Periksa</td>
                        <td><?= $pasien_karantina['tgl_periksa']?></td>
                    </tr>
                    <tr>
                        <td>Suhu (saat ini)</td>
                        <td><?= $pasien_karantina['suhu_pasien']?></td>
                    </tr>

                    <?php
                            $id =['suhu_pasien']; 
                          
                            if ($id > 37) {
                            echo "<h2>PDP (Pasien Dalam Pengawasan)</h2>";
                            } else  {
                            echo "<h2>ODP(Orang Dalam Pengawasan)</h2>";
                            }
                    ?>    


                  <tr>  
                        <td>Kategori</td>
                        <td><?=  $pasien_karantina['kategori']?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?= $pasien_karantina['status']?></td>
                    </tr>
                    <td>
                    <a href="indexuser.php" class="badge badge-success">Kembali</a>
                    </td>
                     </tr>
                 <?php
                   endwhile;
                 ?>            
                </center>
                </table>
                            </div>
                            </div>
                            </div>







                            </body>
</html>

<?php

include '../aset/footer.php';

?>