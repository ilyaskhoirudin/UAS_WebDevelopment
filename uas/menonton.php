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
    <title>Menonton</title>
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
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
        </div>
      </nav>
      <img src="gambar/layarhitam.png">
      <h4>AVENGERS KUMPUL !!! RAFFI, GADING, ARMUH, DEN DIMAS BIKIN GEGER ANDARA....</h4>
      <table class="posisi">
        <tr class="tabel">
            <td><button type="button" class="btn btn-outline-secondary">Komentar</button></td>
            <td><button type="button" class="btn btn-outline-secondary">Bagikan</button></td>
            <td><button type="button" class="btn btn-outline-secondary">Laporan</button></td>
        </tr>
      </table>
</body>
</html>