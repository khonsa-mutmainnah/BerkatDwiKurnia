<!-- konten atas -->
    <div id="carouselExampleControls" class="carousel slide jumbo" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/atas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/atas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/atas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
   </div>
   <!-- akhir konten atas -->

   <!-- value perusahaan -->
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9 value">
            <div class="row text-center">
               <div class="col-lg">
                  <img src="img/1.png" alt="" style="width: 80px; height: 60px;" class="img-value">
                  <h5>profesional</h5>
               </div>
               <div class="col-lg">
                  <img src="img/2.png" alt="" style="width: 80px; height: 70px;" class="img-value">
                  <h5>profesional</h5>
               </div>
               <div class="col-lg">
                  <img src="img/3.png" alt="" style="width: 80px; height: 70px;" class="img-value">
                  <h5>profesional</h5>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- akhir value -->

   <!-- projek -->

    <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
            <h1 class="heading mb-4 judul">on going project</h1>
            <!-- <p class="mb-4 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quod aliquam repellat quibusdam! At a unde aut velit animi. Accusantium dolor deserunt voluptatum illum dolorum perferendis unde adipisci dignissimos rem?</p>
            <p class="mb-0">
                <a href="" class="btn tombol">Lihat lebih banyak proyek</a>
            </p> -->
        </div>
    </div>

   <section>
      <div class="container proyek">
         <div class="row mt-5 ">
         <div class="owl-carousel owl-theme">
            <div class="item mb-4">
               <div class="card">
                  <a href=""><img src="img/slide1.jpg" alt="" class="card-img-top"></a> 
                  <div class="card-body">
                     <h4 class="text-center">rumah bandung</h4>
                  </div>
               </div>
            </div>

            <div class="item mb-4">
               <div class="card">
                  <a href=""><img src="img/slide2.jpg" alt="" class="card-img-top"></a> 
                  <div class="card-body">
                     <h4 class="text-center">rumah banjar</h4>
                  </div>
               </div>
            </div>

            <div class="item mb-4">
               <div class="card">
                  <a href=""><img src="img/slide3.jpg" alt="" class="card-img-top"></a> 
                  <div class="card-body">
                     <h4 class="text-center">rumah jakarta</h4>
                  </div>
               </div>
            </div>

            <div class="item mb-4">
               <div class="card">
                  <a href=""><img src="img/slide4.jpg" alt="" class="card-img-top"></a> 
                  <div class="card-body">
                     <h4 class="text-center">gedung</h4>
                  </div>
               </div>
            </div>


         </div>
         </div>
      </div>
   </section>
   
   <p class="mb-0 text-center">
      <a href="?p=project" class="btn tombol">Lihat lebih banyak proyek</a>
   </p>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>
      $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         animateOut: 'fadeOut',
    animateIn: 'fadeIn',
         nav:true,
         responsive:{
            0:{
               items:1,
               nav:false
            },
            600:{
               items:2,
               nav:false
            },
            1000:{
               items:3,
               nav:true,
               loop:false
            }
         }
      })
   </script>
   <!-- akhir projek -->

   <!-- lini bisnis -->
   <h1 class="heading mb-4 text-center judul mb-10">lini bisnis</h1>

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 lini-bisnis">
            <div class="row">
               <div class="col-lg">
                  <a href=""><img src="img/slide1.jpg" alt="" class="card-img-top"></a>
                  <h3 class="text-center">gedung</h3>
                  <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam sequi at facere autem placeat corporis, quas necessitatibus itaque eligendi illum sunt minima aut molestiae saepe nostrum ratione non laboriosam rem.</p>
               </div>
               <div class="col-lg">
                  <a href=""><img src="img/slide2.jpg" alt="" class="card-img-top"></a>
                  <h3 class="text-center">manufaktur</h3>
                  <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam sequi at facere autem placeat corporis, quas necessitatibus itaque eligendi illum sunt minima aut molestiae saepe nostrum ratione non laboriosam rem.</p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg">
                  <a href=""><img src="img/slide3.jpg" alt="" class="card-img-top"></a>
                  <h3 class="text-center">infrastruktur</h3>
                  <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam sequi at facere autem placeat corporis, quas necessitatibus itaque eligendi illum sunt minima aut molestiae saepe nostrum ratione non laboriosam rem.</p>
               </div>
               <div class="col-lg">
                  <a href=""><img src="img/slide4.jpg" alt="" class="card-img-top"></a>
                  <h3 class="text-center">rumah</h3>
                  <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam sequi at facere autem placeat corporis, quas necessitatibus itaque eligendi illum sunt minima aut molestiae saepe nostrum ratione non laboriosam rem.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- akhir lini bisnis -->