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
  <main class="bg-image" style=" background-image: url('img/port1.png'); background-repeat: no-repeat;
      background-color: #063c66;border-width: 0px;border-color: #063c66;">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="index.php">
          <img src="img/fameperu-PhotoRoom.png" height="60" alt="" loading="lazy" style="margin-top: -1px" />
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
          <div class="col-md-6 gx-5 mb-4">
            <br />
            <h1 style="
                  color: #063c66;
                  font-weight: 800;
                  line-height: 41px;
                  letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif;
                ">
              <img src="img/fameperu-PhotoRoom.png" width="70%">
            </h1>
            <br />
            <p class="text-dark">
              Fabricación, diseño y venta de
              carrocería de carga pesada y liviana </p>
            <br />
            <a href="empresa.php" type="button" class="btn btn-rounded btn-warning btn-lg text-dark">
              MÁS INFORMACIÓN
            </a>
          </div>
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple rounded-5" data-mdb-ripple-color="light">
              <img src="img/foto_port1.png" class="img-fluid" />
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
          <div class="col-md-9 gx-5 mb-4">
            <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/izaje1.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/izaje2.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/izaje3.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/baranda.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/bombona1.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/bombona2.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/cortinero1.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/cortinero2.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                      <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="imagenes/cortinero3.jpg" class="w-100" />
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
          <div class="col-md-3 gx-5 mb-4" style="background-color: #09508a;">
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
              <h3 style="
                    color: #ffffff;
                    font-weight: 800;
                    line-height: 41px;
                    letter-spacing: 0.5px;
                    font-family: 'Montserrat', Sans-serif;
                  " class="text-left">
                ¡Vea las variedades de productos!
              </h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 gx-5 mb-4 text-center ">
            <a href="productos.php?nt=0" type="button" class="btn btn-warning btn-rounded btn-lg text-dark">
              Ver productos
            </a>
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
          Más de xx años de experiencia y clientes satisfechos nos avalan.
          Todos nuestros procesos son realizados con equipos de última
          generación y siempre con:
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="text-center">
              <img src="img/seguro-de-calidad (1).png" class="img-fluid hover-shadow" alt="..." />
              <div class="card-body">
                <h5 class="card-title">CALIDAD</h5>
                <p class="card-text">
                  Nuestros productos antes de ser entregados al cliente pasan
                  por una adecuada supervisión de calidad.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="text-center">
              <img src="img/garantia.png" class="img-fluid hover-shadow" alt="..." />
              <div class="card-body">
                <h5 class="card-title">NORMAS</h5>
                <p class="card-text">
                  Diseñamos de acuerdo a la carga del vehículo respetando las normas nacionales.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="text-center">
              <img src="img/mantenimiento.png" class="img-fluid hover-shadow" alt="..." />
              <div class="card-body">
                <h5 class="card-title">MATERIALES</h5>
                <p class="card-text">
                  Trabajamos con materiales de primera calidad.
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
              font-family: 'Montserrat', Sans-serif;">
          NUESTROS SERVICIOS
        </h3>
        <div class="mb-3">
          <div class="row g-0">
            <div class="col-md-5">
              <div class="bg-image">
                <img src="img/ser.png" class="img-fluid" alt="Sample" />
                <div class="mask">
                  <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 text-center cardti" style="background-color: rgba(0,0, 0, 0.6);">SERVICIOS FAME</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <br>
              <div class="card-body ">
                <ul class="list-group list-group-flush mt-4 mb-6 text-center">
                  <li class="list-group-item">PANTÓGRAFO CNC</li>
                  <li class="list-group-item">CORTE Y DOBLEZ</li>
                  <li class="list-group-item">ROLADO</li>
                </ul>
                <p class="card-text text-center">
                  <a href="servicios.php?nt=0" type="button" class="btn btn-warning btn-rounded btn-lg text-dark">
                    Ver servicios
                  </a>
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
        <div id="carouselExampleControls2" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/a.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/b.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/c.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/d.png" class="w-100" />
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
                    <img src="img/e.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/a.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/b.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/c.png" class="w-100" />
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
                    <img src="img/d.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/e.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/a.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="img/b.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls2" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls2" data-mdb-slide="next">
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