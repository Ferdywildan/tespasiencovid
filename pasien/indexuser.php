<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>

    <link rel="stylesheet" href="http://localhost/tespasien/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/tespasien/aset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="pasien.css"
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


?>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="index.php"><i class="fas fa-clinic-medical ml-2 mr-2 " ></i>Karantina Covid-19 | Mode User View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tespasien/">Halaman Utama</a></a>
      </li>
    </ul>
  </div>
</nav>

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
 


<br>
<table class="table"width="600px">
  <thead class="thead-light">
   <tr>
   <th scope="col">No</th>
   <th scope="col">Nama</th>
   <th scope="col">Umur</th>
   <th scope="col">Kota</th>
   <th scope="col">Tanggal Periksa</th>   
   <th scope="col">Suhu</th>
   <th scope="col">Aksi</th>
   </tr>
</thead>

<?php
                    $no=1;
                    foreach($book as $p){?>

                    <tr>
                        <th scope="row"><?=$no ?></th>
                        <td><?= $p['nama_pasien']?></td>
                        <td><?= $p['umur_pasien']?></td>
                        <td><?= $p['alamat_pasien']?></td>
                        <td><?= $p['tgl_periksa']?></td>
                        <td><?= $p['suhu_pasien']?></td>
                        
                        <td>
                           <a href="detail_user.php?id_pasien=<?= $p["id_pasien"];?>" class="badge badge-success">Keterangan Pasien</a>
                           
                        </td>
                     </tr>
                 <?php
                    $no++;
                        }
                 ?> 
                
             </tbody>
            </table>


</body>
</html>