<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien</title>
    <link rel="stylesheet" href="http://localhost/tespasien/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/tespasien/aset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href=tabel.css>
    <link rel="stylesheet" href=../style.css>

</head>
<body>
<?php
include '../koneksi.php';

$sql = ("SELECT * FROM pasien ORDER BY nama_pasien");

$res = mysqli_query($kon, $sql);

$book = array();

while ($data = mysqli_fetch_assoc($res)) {
    $book[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-hand-holding-medical"></i> Daftar Pasien</h2>
  </div>

  </div>    
</div>
<center>
<a href="tambah.php"><button type="button" class="btn btn-outline-warning" style="width:100%; height:40px">+ Tambah data pasien</button></a>
        
</center>
<br>
<table class="table"width="600px">
  <thead >
   <tr>
   <th>No</th>
   <th>Nama</th>
   <th>Umur</th>
   <th>Kota</th>
   <th>Tanggal Periksa</th>   
   <th>Suhu</th>
   <th>Aksi</th>
   </tr>
</thead>

<?php
                    $no=1;
                    foreach($book as $p){?>

                    <tr>
                        <td ><?=$no ?></td>
                        <td><?= $p['nama_pasien']?></td>
                        <td><?= $p['umur_pasien']?></td>
                        <td><?= $p['alamat_pasien']?></td>
                        <td><?= $p['tgl_periksa']?></td>
                        <td><?= $p['suhu_pasien']?></td>
                        
                        <td>
                           <a href="detail.php?id_pasien=<?= $p["id_pasien"];?>" class="badge badge-success">Keterangan Pasien</a>
                           <!-- <a href="gejala.php?id_pasien=<?= $p["id_pasien"];?>" class="badge badge-success">Keterangan Pasien</a> -->
                           <a href="edit.php?id_pasien=<?= $p["id_pasien"];?>  " class="badge badge-warning">Update</a>
                           <a href="hapus.php?id_buku=<?= $p["id_pasien"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Remove</a>
                        </td>
                     </tr>
                 <?php
                    $no++;
                        }
                 ?> 
                
             </tbody>
            </table>
            <center>
            <a class="btn btn-warning tombol" href="http://localhost/tespasien/login/logout.php">Logout</a></a>
            </center>   
<?php
include '../aset/footer.php';
?>

</body>
</html>