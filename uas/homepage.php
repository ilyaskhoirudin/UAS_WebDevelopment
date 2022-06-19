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
    <title>Percobaan2</title>
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
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
          </div>
        <div class="carousel-inner">  
            <div class="carousel-item active">
                <div class="position-absolute top-50 start-50">
                    <a href="deskripsi.php" class="btn btn-warning top-50 end-50">Play Sekarang</a>
                </div>
                <img src="gambar/kung-fu-panda-30e1f6.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Kung Fu Panda</h1>
                  <p>Yang mengejutkan semua orang, termasuk dirinya sendiri, Po, panda yang kelebihan berat badan dan canggung, dipilih sebagai pelindung Lembah Damai. Kesesuaiannya akan segera diuji saat musuh bebuyutan lembah datang kembali.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/transformer.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Transformers: Revenge of the Fallen</h1>
                  <p>Sam Witwicky meninggalkan Autobots untuk kehidupan normal. Tetapi ketika pikirannya dipenuhi dengan simbol-simbol samar, Decepticons menargetkannya dan dia diseret kembali ke perang Transformers.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/war-oftheworld.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">War of the Worlds</h1>
                  <p>Invasi alien mengancam masa depan umat manusia. Mimpi buruk bencana digambarkan melalui mata satu keluarga Amerika yang berjuang untuk bertahan hidup</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/megamind.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Megamind</h1>
                  <p>Jenius jahat Megamind akhirnya mengalahkan musuh bebuyutannya, Metro Man, tetapi dibiarkan tanpa tujuan di dunia bebas superhero.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/johnwick.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">John Wick: Chapter 2</h1>
                  <p>Setelah kembali ke dunia kriminal untuk membayar hutang, John Wick menemukan bahwa hidupnya telah diberi hadiah besar.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/hitsman.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">The Hitman's Bodyguard</h1>
                  <p>Pengawal top dunia mendapat klien baru, pembunuh bayaran yang harus bersaksi di Pengadilan Kriminal Internasional. Mereka harus mengesampingkan perbedaan mereka dan bekerja sama untuk sampai ke pengadilan tepat waktu.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/robinhood.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Robin Hood</h1>
                  <p>Seorang Tentara Salib yang keras terhadap perang dan komandan Moor-nya melakukan pemberontakan yang berani melawan mahkota Inggris yang korup.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/hacksaw.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Hacksaw Ridge</h1>
                  <p>Petugas Medis Angkatan Darat Amerika Perang Dunia II Desmond T. Doss, yang bertugas selama Pertempuran Okinawa, menolak untuk membunuh orang dan menjadi orang pertama dalam sejarah Amerika yang menerima Medal of Honor tanpa melepaskan tembakan.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/transpoter.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Transporter 3</h1>
                  <p>Frank terpaksa menggantikan temannya setelah dia meninggal saat mengantarkan sebuah paket. Dia harus tetap dekat dengan mobil atau mobil itu akan meledak, dan melakukan pengiriman tanpa terbunuh dalam tawar-menawar.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="position-absolute top-50 start-50">
                    <button type="button" class="btn btn-warning">Play Sekarang</button>
                </div>
                <img src="gambar/before.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="carousell">Before I Wake</h1>
                  <p>Sepasang suami istri mengadopsi seorang anak yatim piatu yang mimpi - dan mimpi buruknya - terwujud secara fisik saat dia tidur.</p>
                </div>
              </div>
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>Yang Baru di Nonton</h3>
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
            <div class="carousel-item">
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
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>Video Original</h3>
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
          </div>
          <div class="carousel-item">
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
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>Eksklusif di Nonton</h3>
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
          </div>
          <div class="carousel-item">
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
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>Sinetron Pilihan</h3>
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
          </div>
          <div class="carousel-item">
            <table class="posisi">
                <tr>
                    <td><img src="gambar/charlie.png" class="d-block w-100" alt="..."></td>
                    <td> <img src="gambar/hitsman.png" alt="Deskripsi Gambar"> </td>
                    <td> <img src="gambar/before.png" alt="Deskripsi Gambar"> </td>
                    <td> <img src="gambar/6 day.png" alt="Deskripsi Gambar"> </td>
                    <td> <img src="gambar/hacksaw.png" alt="Deskripsi Gambar"> </td>
                    <td> <img src="gambar/kill-mobile-32a97e.png" alt="Deskripsi Gambar"> </td>                      
                </tr>
            </table>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>Penonton Lain Nonton Ini Juga</h3>
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
          <div class="carousel-item">
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
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>