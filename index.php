<?php
include'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- fontssaya -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">

    <!-- myCSS -->
    <link rel="stylesheet"href="style.css">
  </head>
  <body>

  <!-- awal navbar -->
  <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
        
        <a class="navbar-brand" href="#">Badan Karantina Nasional</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Covid-19 </a>
            <a class="nav-item nav-link" href="#">Jumlah Pasien</a>
            <a class="nav-item nav-link" href="aboutme.php">About</a>
            <a class="nav-item btn btn-light tombol" href="login.php">Masuk</a>
            </div>
          </div>
  </div>
</nav>
  <!-- akhir navbar -->

  
  <!-- JUmbotron -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">DATA PASIEN KARANTINA</h1>
      <p class="display-5">COVID-19</p>
      <br>
      <a href="pasien/indexuser.php"class="btn btn-light tombol">LIHAT PASIEN KARANTINA</a>
    </div>
    </div>
  <!-- akhirJUMBROTON> -->

  <!-- container -->
  <div class="container">

      <!-- infoPanel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row">
            <div class="col-lg">
                <img src="img/employee.png" alt="KOSONG" class="float-left">
                <h4>SIAP MELAYANI 24 JAM</h4>
                <p>Para petugas akan siap sedia saat menerima pasien pantauan baru atau pembaruab status suhu pasien per 24 jam. </p>
            </div>

            <div class="col-lg">
                <img src="img/security.png" alt="KOSONG"class="float-left">
                <h4>DATA AKAN AMAN</h4>
                <p>Data yang di tampilkan tidak akan dapat di edit oleh siapapun terkecuali petugas. </p>
            </div>
        </div>
      </div>
    </div>
  <!-- akhirinfopanel -->

  <!-- COVID-19ADALAH -->
  <div class="row workingspace">
    <div class="col">
      <img src="img/medisrevisi.jpg" alt="medis" class="img-fluid">
      </div>
    <div class="col">
      <h3>Apa sih <span>Covid-19</span> itu ?</h3>
      <p>sebuah virus yang menyerang pernafasan pada organ manusia

          COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan. Ini merupakan virus baru dan penyakit yang sebelumnya tidak dikenal sebelum terjadi wabah di Wuhan, Tiongkok, bulan Desember 2019.

          Gejala Virus Corona (COVID-19) Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. </p>

    </div>
    

  

  </div>


  <!-- akhirWORKINGSPACE -->







  </div>
  <br>
  <br>
  
  <!-- akkhirkonatiner -->
  <!-- KONTAINER BARU -->
  <div class="con">
  <div class="cover">
                <div class="overlay"></div>
                <div class="content text-center">
                    <h1>JUMLAH PASIEN KARANTINA</h1>
                    <p>
                        Setiap hari akan selalu di update
                    </p>
                    <p>
                    last updated
                    </p>
                </div>
<br>
<br>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect">
                        <h1><?php @$result = mysqli_query($kon, "SELECT count(id_pasien) as total from pasien") or die(mysqli_error($kon));
                            @$data = mysqli_fetch_assoc($result);
                            echo @$data['total']; ?></h1>
                        <p>Pasien</p>
                    </div>
                </div> 
                </div>
            </div>
</div>
            <!-- <FOOter></FOOter> -->
            <footer>
        <div class="container-fluid p-2">
            <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-light">Tentang Saya</h4>
                    <p class="text-muted">Dengan adanya web ini semoga pasien karantina covid-19 segera mendapat penangan dan wabah cepat menghilang agar seluruh aktifitas kita dapat berjalan dengan lancar seperti sedia kala.</p>
                    <p class="pt-4 text-muted">Made By
                        <span>Ferdy Wildan Pratama</span>
                    </p>
                
                    <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-light">Follow</h4>
                    <div class="column text-light">
                        <a href="https://www.instagram.com/ferdywldn/?hl=id"><i class="fab fa-instagram"> Instagram/ferdywldn</i></a>
                        
</div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

  
</body>
</html>





  








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>