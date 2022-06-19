<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "film";

$koneksi = mysqli_connect($host, $user, $pass, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-light main-nav">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="gambar/rsz_logo.png" class="logo" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link px-3" aria-current="page" href="#">Sports</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Tv Show</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Kids</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Top Picks</a></li>
                  <li><a class="dropdown-item" href="#">Anime</a></li>
                  <li><a class="dropdown-item" href="#">News</a></li>
                  <li><a class="dropdown-item" href="#">Music</a></li>
                  <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                  <li><a class="dropdown-item" href="#">Entertainment</a></li>
                  <li><a class="dropdown-item" href="#">Education</a></li>
                  <li><a class="dropdown-item" href="#">Fantasy Team</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="position-absolute top-35 end-0">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Cari di Nonton" aria-label="Search">
                  <a href="pencarian.php" class="btn btn-outline-success" type="submit">Search</a>
                </form>
              </div>
        </div>
      </nav>
      <div class="card" style="width: 18rem;">
        <img src="gambar/kungfu-panda.png" class="card-img-top" alt="...">
      </div>
    <h1>Kungfu Panda</h1>
    <button type="button" class="btn btn-secondary">7+</button>
    <h5>Cartoon, Action</h5>
    <p>Yang mengejutkan semua orang, termasuk dirinya sendiri, Po, panda yang kelebihan berat badan dan canggung, dipilih sebagai pelindung Lembah Damai. Kesesuaiannya akan segera diuji saat musuh bebuyutan lembah datang kembali.</p>
    <p><b>Sutradara:</b> Verdi Solaiman</p>
    <p><b>Pemain:</b> Ajil Ditto, Shakira Jasmine, Ashira Zamita Teir, Teuku Rizky Muhammad, Dito Darmawan</p>
    <div class="card">
        <table class="posisi">
            <tr>
                <td><img src="gambar/ezgif.com-gif-maker (3).png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/cool-boy-vs-cool-girl-7a4ac1.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/dilema-3318e4.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (1).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (10).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (11).png" alt="Deskripsi Gambar"> </td>                       
            </tr>
        </table>
        <table class="posisi">
            <tr>
                <td><img src="gambar/ezgif.com-gif-maker (14).png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/ezgif.com-gif-maker (2).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (13).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (8).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (6).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (3).png" alt="Deskripsi Gambar"> </td>                      
            </tr>
        </table>
        <table class="posisi">
            <tr>
                <td><img src="gambar/dating-queen.png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/code-helix.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/daniel-nicolette.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/dating-queen.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/virgin-mom.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/shock-wave-2.png" alt="Deskripsi Gambar"> </td>                       
            </tr>
        </table>
        <table class="posisi">
            <tr>
                <td><img src="gambar/ezgif.com-gif-maker (6).png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/ezgif.com-gif-maker (5).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (4).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/janet-jamilah-c6210f.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/pertaruhan.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/satria-november-531bc4.png" alt="Deskripsi Gambar"> </td>                      
            </tr>
        </table>
        <table class="posisi">
            <tr>
                <td><img src="gambar/dilema-3318e4.png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/thecallup.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/she-s-a-man-he-s-a-woman.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/my-love-my-enemy-affd65.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/minority.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ghost.png" alt="Deskripsi Gambar"> </td>                       
            </tr>
        </table>
        <table class="posisi">
            <tr>
                <td><img src="gambar/charlie.png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/ezgif.com-gif-maker (10).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (7).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/6 day.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/ezgif.com-gif-maker (6).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/kill-mobile-32a97e.png" alt="Deskripsi Gambar"> </td>                      
            </tr>
        </table>
        <table class="posisi">
            <tr>
                <td><img src="gambar/6 day.png" class="d-block w-100" alt="..."></td>
                <td> <img src="gambar/ezgif.com-gif-maker (4).png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/daniel-nicolette.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/nania-lain-dunia-e00263.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/welcome.png" alt="Deskripsi Gambar"> </td>
                <td> <img src="gambar/escape.png" alt="Deskripsi Gambar"> </td>                       
            </tr>
        </table>
      </div>
</body>
</html>