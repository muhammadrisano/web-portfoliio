<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                <a href="#home" class="navbar-brand page-scroll">Muhammad Risano Akbar</a>
              </div>
              
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>
                </ul>
            </div>
          </div>
      </nav>
      <!-- end Navbar -->
    <!-- Jumbotron -->
        <div class="jumbotron text-center">
            <img src="img/eno2.gif" class="img-circle" alt="">
            <h1>Muhammad Risano Akbar</h1>
            <p>Networking | Web Programming | Linuxer</p>
        </div>
    <!-- end Jumbotron -->

    <!-- about -->
        <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">About</h2>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <p class="pkiri">Saya Muhammad Risano Akbar, tamatan dari Universita Putra Indonesia "YPTK" Padang jurusan Pendidikan Teknik Informatika yang sebenarnya tamatan jurusan tersebut mengarah ke pekerjaan menjadi seorang Guru, tapi tidak dengan saya yang memiliki kemampuan dibidang IT kususnya dibidang Networking dan Web Programming saya memeliki basic di networking ketika saya bersekolah di SMK Negeri 6 Padang Jurusan Teknik Komputer dan Jaringan, karena saya di smk sehingga banyak pelajaran yang berhubungan dengan jaringan komputer seperti Konsep dan instalasi LAN, MAN dan WAN, penyetingan Akses Point, instalasi dan konfigurasi mikrotik, instalasi dan konfigurasi Linux server (sebenarnya saya sangat kagum saya sistem operasi linux dimana saya bisa menginstal aplikasi server seperti apache2, mysql ,email server dan lainnya juga aplikasi routernya yang canggih seperti firewal, NAT, Squid ,aplikasi control SSH dan aplikasi lainnya)</p>
                    </div>
                    <div class="col-sm-5">
                        <p class="pkanan">dan selanjutnya Web Programming, sebenarnya saya baru mendalaminnya pada semester 7 di kuliah ketika saya menyusun sekripsi, saya memilih judul tentang web karenan saya ingin mendalami pemrograman web tersebut, ketika saya kuliah mata kuliah yang sangat saya sukai yaitu yang berhubungan dengan program dan jaringan komputer, dan ketika saya sudah kuliah saya ingin menjadi programmer khususnya di Programer Web walaupun saya memeliki basic di jaringan karena perkembangan dunia jaringan / networking tidak sepesat perkembangan dunia Programing, dan hal yang membuat saya semangat dalam pempelajari web programming, karena  hakikat seseorang laki-laki untuk membahagiakan orang yang di cintainya, walaupun programing tersebut kadang-kadang sangat membosankan karana yang dilihat hanya sabuah kode-kode program, tapi harus semangat dan semangat haha </p>
                    </div>
                </div>
                 
            </div>

        </section>
    <!-- end about -->
    <!-- Portfolio -->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Portfolio</h2>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><a href="" class="thumbnail"><img src="img/1.jpg" alt=""></a></div>
                    <div class="col-sm-4"><a href="" class="thumbnail"><img src="img/2.jpg" alt=""></a></div>
                    <div class="col-sm-4"><a href="" class="thumbnail"><img src="img/3.jpg" alt=""></a></div>
                    <div class="col-sm-4"><a href="" class="thumbnail"><img src="img/4.jpg" alt=""></a></div>
                    <div class="col-sm-4"><a href="" class="thumbnail"><img src="img/5.jpg" alt=""></a></div>
                    <div class="col-sm-4"><a href="" class="thumbnail"><img src="img/6.jpg" alt=""></a></div>
                </div>
            </div>
        </section>
    <!-- end Portfolio -->
    
    <!-- contact -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Contact</h2>
                        <hr/>
                    </div>    
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <form action="">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <input type="tel" name="telp" id="telp" class="form-control" placeholder="Masukan No Telepon">
                            </div>
                            <div class="form-group">
                                    <label for="pesan">Pesan</label>
                                    <textarea name="pesan" id="pesan" rows="10" class="form-control" placeholder="Masukan Pesan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>


                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- endcontact -->

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-pm-12">
                    <p>Copyright &copy; 2018  | <a href="#">Muhammad Risano Akbar</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>