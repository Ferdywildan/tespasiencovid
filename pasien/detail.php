<?php

include '../koneksi.php';

include '../aset/header.php';

$id = $_GET["id_pasien"];

$query = mysqli_query($kon, "SELECT * FROM pasien INNER JOIN rujukan  USING(id_kategori) WHERE pasien.id_pasien = '$id' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail_pasien</title>
</head>
<body>
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
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id_pasien=<?= $pasien_karantina["id_pasien"];?>  " class="badge badge-warning">Update Stats</a>
                           <a href="hapus.php?id_pasien<?= $pasien_karantina["id_pasien"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
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