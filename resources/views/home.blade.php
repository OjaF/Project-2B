<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Home</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    </head>
<body>
    @include('navbar')
<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators" >
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ ('img/galaxy.jpg') }}">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">  
            <h1>Astronomy addicte.</h1>
            <p>Explore the planets astronomical information about the universe.</p>
            <p><a class="btn btn-lg btn-primary" href="#">See Now</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ ('img/nebula2.jpg') }}" >
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>See the stars.</h1>
            <p>See the stars and various galaxies with our telescope.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ ('img/nebula.jpg') }}" >
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Space Exploring.</h1>
            <p>Take the first step to join with us in space.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img src="{{ ('img/galaxy2.jpg') }}" class="bd-placeholder-img rounded-circle" height="140px" width="140px">

        <h2 class="fw-normal" style="color: #7D1E6A;"><b>Galaxy</b></h2>
        <p style="color: #E0DDAA;">Explore and browse various kinds of information about the <span style="color: #7D1E6A"><b>galaxy</b></span></p>
        <p><a class="btn btn-close-white" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ ('img/plant.jpg') }}" class="bd-placeholder-img rounded-circle" height="140px" width="140px">

        <h2 class="fw-normal" style="color: #7D1E6A;"><b>Planet</b></h2>
        <p style="color: #E0DDAA;">Explore and browse various kinds of information about the <span style="color: #7D1E6A"><b>planet</b></span></p>
        <p><a class="btn btn-close-white" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ ('img/nebul.jpg') }}" class="bd-placeholder-img rounded-circle" height="140px" width="140px">

        <h2 class="fw-normal" style="color: #7D1E6A;"><b>Nebula</b></h2>
        <p style="color: #E0DDAA;">Explore and browse various kinds of information about the <span style="color: #7D1E6A"><b>nebula</b></span></p>
        <p><a class="btn btn-close-white" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="color: #E0DDAA">Ledakan bintang dari <span style="color: #7D1E6A"><b>supernova ke mikronova.</b></span></h2>
        <p class="lead" style="color: #E0DDAA">Bintang bisa meledak. Pada kenyataannya, ada bintang-bintang yang memang akhirnya meledak di akhir hidupnya.
            Tidak tanggung-tanggung, ledakan yang ditimbulkan termasuk ledakan dahsyat di alam semesta.
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{ ('img/supernova.jpg') }}" width="450px" height="450px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1" style="color: #E0DDAA">Cerita cincin di tata surya, <span style="color: #7D1E6A"><b>cincin saturnus.</b></span></h2>
        <p class="lead" style="color: #E0DDAA">Cincin Saturnus merentang sejauh 282 ribu km dari planet dan memiliki tujuh cincin utama yang dipisahkan oleh celah-celah kosong. 
            Materi di cincin berasal dari puing-puing komet, asteroid atau bahkan satelit yang hancur oleh gravitasi sebelum mencapai Saturnus. 
            Serpihan atau pecahan benda-benda tersebut kemudian terperangkap sebagai cincin. </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ ('img/saturnus.jpg') }}" width="450px" height="450px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="color: #E0DDAA">Debu didalam tata surya, <span style="color: #7D1E6A"><b>Debu Kosmik.</b></span></h2>
        <p class="lead" style="color: #E0DDAA">Di dalam Tata Surya, debu Tata Surya meliputi debu komet, debu asteroid,
             debu dari sabuk Kuiper, dan debu antarbintang yang melintasi Tata Surya. Sebagian kecil debu di ruang angkasa adalah "debu bintang" 
             yang terdiri dari mineral refraktori besar yang terkondensasi menjadi materi yang ditinggalkan oleh bintang.</p>
      </div>
      <div class="col-md-5">
        <img src="{{ ('img/kosmik.jpg') }}" width="450px" height="450px">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2022 Interstellar. </a></p>
  </footer>
</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>     
  </body>
</html>
