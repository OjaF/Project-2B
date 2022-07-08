<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Galaxy</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
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
  </head>
<body> 
  @include('navbar') 
  <main>
  <div class="album py-5" style="background-color: #0F0E0E;">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 text-center" style="margin-top: 10px;">
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Debu <span style="color: #7D1E6A"><b>Kosmik</b></h4>
            </div>
            <img src="{{ ('img/kosmik.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Galaksi <span style="color: #7D1E6A"><b>Alcyoneus</b></h4>
            </div>
            <img src="{{ ('img/terbesar.jpeg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Galaksi <span style="color: #7D1E6A"><b>Bima Sakti</b></h4>
            </div>
            <img src="{{ ('img/andromeda.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Galaksi <span style="color: #7D1E6A"><b>Magellan</b></h4>
            </div>
            <img src="{{ ('img/magellan.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Galaksi <span style="color: #7D1E6A"><b>Ursa Mayor</b></h4>
            </div>
            <img src="{{ ('img/ursa.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Galaksi <span style="color: #7D1E6A"><b>Pusaran Air</b></h4>
            </div>
            <img src="{{ ('img/pusaran.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Planet <span style="color: #7D1E6A"><b>Saturnus</b></h4>
            </div>
            <img src="{{ ('img/saturn.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Planet <span style="color: #7D1E6A"><b>Bumi</b></h4>
            </div>
            <img src="{{ ('img/bumi.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Planet <span style="color: #7D1E6A"><b>Mars</b></h4>
            </div>
            <img src="{{ ('img/mars.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Planet <span style="color: #7D1E6A"><b>Jupiter</b></h4>
            </div>
            <img src="{{ ('img/jupiter.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Planet <span style="color: #7D1E6A"><b>Venus</b></h4>
            </div>
            <img src="{{ ('img/venus.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Planet <span style="color: #7D1E6A"><b>Uranus</b></h4>
            </div>
            <img src="{{ ('img/uranus.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
                <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="col">
          <div class="card shadow-sm" style="background-color: #151515;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Nebula <span style="color: #7D1E6A"><b>Orion</b></h4>
            </div>
            <img src="{{ ('img/orion.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA;">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Nebula <span style="color: #7D1E6A"><b>Kupu-Kupu</b></h4>
            </div>
            <img src="{{ ('img/butterfly.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Nebula <span style="color: #7D1E6A"><b>Elang</b></h4>
            </div>
            <img src="{{ ('img/elang.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Nebula <span style="color: #7D1E6A"><b>Kepiting</b></h4>
            </div>
            <img src="{{ ('img/crab.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Nebula <span style="color: #7D1E6A"><b>Jam Pasir</b></h4>
            </div>
            <img src="{{ ('img/jam.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="background-color: #171717;">
            <div class="card-header py-3" style="color: #E0DDAA;">
              <h4 class="my-0 fw-normal">Nebula <span style="color: #7D1E6A"><b>Emisi</b></h4>
            </div>
            <img src="{{ ('img/emisi.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225px">

            <div class="card-body" style="background-color: #171717;">
                <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #E0DDAA">View</button>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p>&copy; 2022 Interstellar. </a></p>
  </div>
</footer>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>