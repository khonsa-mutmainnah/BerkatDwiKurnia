<!DOCTYPE html>
<html lang="en">
<head>
   <title>PT BERKAT DWI KURNIA</title>

   <!-- css bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

   <!-- js bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

   <!-- js -->
   <script src="script.js"></script>

   <!-- CSS -->
   <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <!-- font -->
   <style>@import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');</style>
</head>
<body class="all">
   <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #2F3131;">
         <div class="container">
            <a class="navbar-brand" href="?p=home"><img src="img/logo.jpg" alt="logo" style="width: 40px; margin-left:20px;"></a>
            <a class="navbar-brand" href="?p=home">PT. BERKAT DWI KURNIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto justify-content-end" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-link" href="?p=home">Beranda</a>
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        tentang kami
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?p=visi-misi">visi misi</a></li>
                        <li><a class="dropdown-item" href="#">struktur organisasi</a></li>
                        <li><a class="dropdown-item" href="#">tata kelola perusahaan</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        lini bisnis
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?p=project">proyek berjalan</a></li>
                        <li><a class="dropdown-item" href="?p=kategori">rumah</a></li>
                     </ul>
                  </li>
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">berita</a>
               </div>
            </div>
         </div>
      </nav>
   <!-- akhir navbar -->

   <!-- php things -->
   <div class="isi">
        <?php
            $pages_dir = 'pages';
            if (!empty($_GET['p'])) {
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);

                $p = $_GET['p'];

                if (in_array($p . '.php', $pages)) {
                    include($pages_dir . '/' . $p .  '.php');
                } else {
                    echo "Halaman Tidak Ditemukan";
                }
            } 
            else {
                include "./pages/home.php";
            }
        ?>
    </div>
    <!-- akhir php -->

    <!-- footer -->
   <div class="footer" style="width: ">
      <div class="container">
         <div class="row">
            <div class="col profil">
               <img src="img/logo.jpg" alt="" style="width: 50px;">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem reiciendis odit error numquam! Illum, veritatis maxime dolore optio sunt odit porro rem sit, laboriosam explicabo recusandae cumque nobis obcaecati.</p>
            </div>
            <div class="col kontak">
               <h3>kontak</h3>
               <h5>telepon/Whatsapp</h5>
               <p>(024)86001610</p>
               <br>
               <h5>alamat</h5>
               <p>Ruko Peterongan Plaza Blok C-2 Jalan MT. Haryono No 719,<br> Semarang, Jawa Tengah</p>
               <br>
               <h5>jam operasional</h5>
            </div>
         </div>
      </div>
   </div>
   <!-- akhir footer -->
</body>
</html>