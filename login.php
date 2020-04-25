<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASUK-Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile-style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert-danger'>Username dan Password tidak sesuai !</div>";
        }
    }
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "good") {
            echo "<div class='alert-success'>Anda berhasil daftar, Silahkan masuk lagi !</div>";
        }
    }
    ?>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand">
                <i class=></i>Covid-19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Halaman Utama
                        </a>
                    </li>
                   
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="img">
            <img src="img/bookshelf.svg">
        </div>
        <div class="login-content">
            <form action="login/proses-login.php" method="post">
                <img src="img/profile.svg">
                <h2 class="title">LOGIN PETUGAS</h2>
                <p>Silahkan login untuk mengakses</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <input type="submit" name='login' class="btn" value="Login">
            </form>
        </div>
    </div>
    
</body>

</html>