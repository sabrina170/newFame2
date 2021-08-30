<?php include('header.php'); ?>
<style>
  .pm {
    color: #030303;
    font-family: 'Montserrat', Sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2.6px;
  }

  .nav-link {
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    color: #030303;
  }

  .active2 {
    background-color: #09508a;
    color: #fff !important;
  }


  .nav-item :hover {
    background-color: #09508a;
    color: #fff !important;
    padding: 10px;
  }



  .cards {

    border-style: solid;
    border-width: 3px 3px 3px 3px;
    border-color: #62a7db;
    transition: background 0.3s, border 0.3s, border-radius 0.3s,
      box-shadow 0.3s;
    background-color: #1178c6;
  }

  .cardti {
    color: #fff;
    font-weight: 800;
    line-height: 41px;
    letter-spacing: 0.5px;
    font-family: 'Montserrat', Sans-serif;
  }

  .list-group-item:hover {
    background-color: #fcd462;
  }

  .col:hover {
    background-color: rgb(237, 241, 244, 0.6);
  }
</style>

<body>
  <main class="bg-image" style=" background-image: url('img/portada_fame1.png'); background-repeat: no-repeat;
      background-color: #063c66;border-width: 0px;border-color: #063c66;">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
          <img src="img/logo.png" height="60" alt="" loading="lazy" style="margin-top: -1px" />
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
          <!-- Left links -->

          <div class="d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active2" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="empresa.php">Empresa</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="productos.php?nt=0">Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servicios.php?nt=0">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php?nt=0">contacto</a>
              </li>

            </ul>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 gx-5 mb-4 mt-5">
            <br />
            <h1 style="
                  color: #063c66;
                  font-weight: 800;
                  line-height: 41px;
                  letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif;
                ">
              <strong>FAME PERÚ S.A.C</strong>
            </h1>
            <br />
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
              consequatur eligendi quisquam doloremque vero ex debitis
              veritatis placeat unde animi laborum sapiente illo possimus,
              commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <br />
            <button type="button" class="btn btn-rounded btn-lg" style="background-color: #ffbd59">
              MÁS INFORMACIÓN
            </button>
          </div>
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple rounded-5" data-mdb-ripple-color="light">
              <img src="img/carro_fame2.png" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <main class="bg-image" style="background-image: url('img/portada_fame2.png'); 
   background-repeat: no-repeat;background-color: #fff;border-width: 0px;">
    <section>
      <div class="container">
        <br />
        <div class="row">
          <div class="col-md-3 gx-5 mb-4">
            <div class="card hover-overlay cards">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/4.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-center cardti">
                  REMOLQUE
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 gx-5 mb-4">
            <div class="card hover-overlay cards">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/2.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-center cardti">
                  SEMI-REMOLQUE
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 gx-5 mb-4">
            <div class="card hover-overlay cards">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/3.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-center cardti">
                  CHASIS
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 gx-5 mb-4">
            <p class="mt-4" style="
                    color: #fff;
                    font-family: 'Montserrat', Sans-serif;
                    font-size: 16px;
                    font-weight: 700;
                    text-transform: uppercase;
                    letter-spacing: 2.6px;
                  ">
              Somos fabricantes de carrocerías
            </p>
            <div style="background-color: #09508a;">
              <h1 style="
                    color: #ffffff;
                    font-weight: 800;
                    line-height: 41px;
                    letter-spacing: 0.5px;
                    font-family: 'Montserrat', Sans-serif;
                  " class="text-left">
                ¡Vea las variedades de productos!
              </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </main>
  <br />
  <main class="bg-image" style="background-image: url('img/portada_fame8.png'); 
   background-repeat: no-repeat;background-color: #fff;border-width: 0px;">
    <section>
      <div class="container">
        <h3 class="text-center" style="
              color: #063c66;
              font-weight: 800;
              line-height: 41px;
              letter-spacing: 0.5px;
              font-family: 'Montserrat', Sans-serif;
            ">
          ¿PORQUÉ ELEJIRNOS?
        </h3>
        <br>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
          consequatur eligendi quisquam doloremque vero ex debitis
          veritatis placeat unde animi laborum sapiente illo possimus,
          commodi dignissimos obcaecati illum maiores corporis.
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="text-center">
              <img src="img/practica.png" class="img-fluid hover-shadow" alt="..." />
              <div class="card-body">
                <h5 class="card-title">EXPERIENCIA</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="text-center">
              <img src="img/garantia.png" class="img-fluid hover-shadow" alt="..." />
              <div class="card-body">
                <h5 class="card-title">GARANTÍA</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="text-center">
              <img src="img/mantenimiento.png" class="img-fluid hover-shadow" alt="..." />
              <div class="card-body">
                <h5 class="card-title">MANTENIMIENTO</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
        </div>
        <br>
        <h3 class="text-center mb-6" style="
              color: #063c66;
              font-weight: 800;
              line-height: 41px;
              letter-spacing: 0.5px;
              font-family: 'Montserrat', Sans-serif;
            ">
          NUESTROS SERVICIOS
        </h3>
        <div class="mb-3">
          <div class="row g-0">
            <div class="col-md-5">
              <div class="bg-image">
                <img src="img/servicios.png" class="img-fluid" alt="Sample" />
                <div class="mask">
                  <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 text-center cardti" style="background-color: rgba(0,0, 0, 0.6);">Aprovados todos nuestros servicios?</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card-body ">
                <ul class="list-group list-group-flush mt-4 mb-6">
                  <li class="list-group-item">SERVICIO DE INSPECCIONES PREVENTIVAS</li>
                  <li class="list-group-item">SERVICIO DE MANTENIMIENTO</li>
                  <li class="list-group-item">SERVICIO DE CAPACITACIONES TÉCNICAS</li>
                  <li class="list-group-item">DISEÑO</li>
                  <li class="list-group-item">FABRICACIÓN</li>
                </ul>
                <p class="card-text">
                  <button type="button" class="btn btn-warning">Warning</button>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <main class="bg-image" style="background-image: url('img/portada_fame11.png'); 
   background-repeat: no-repeat;background-color: #fff;border-width: 0px; background-attachment: fixed;">
    <section>
      <div class="container mb-6">
        <h3 class="text-center mt-4 mb-6" style="
              color: #fff;
              font-weight: 800;
              line-height: 41px;
              letter-spacing: 0.5px;
              font-family: 'Montserrat', Sans-serif;
            ">
          CLIENTES
        </h3>
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli1.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli2.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli3.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli4.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded">
                    <img src="img/cli1.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli2.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli3.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/cli4.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
  </main>
  <?php
  include('footer.php');
  ?>