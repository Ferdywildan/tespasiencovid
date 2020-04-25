<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/tespasien/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/tespasien/aset/fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href=tabel.css> -->

    <title>Karantina</title>
</head>
<body>

   

   
  <nav class="navbar navbar-light" style="background-color: rgb(255, 181, 21)";>
   <a class="navbar-brand" href="index.php"><i class="fas fa-clinic-medical ml-2 mr-2 " ></i>Karantina Covid-19 | Admin Mode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      
  <nav class="navbar navbar-light" style="background-color: rgb(255, 181, 21)";>
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tespasien/pasien/index.php">Pasien</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tespasien/login/logout.php">Logout</a></a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
