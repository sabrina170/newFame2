<?php include('header.php'); ?>
<style>
    .nav-link {
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        color: #030303;
    }

    .active {
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
<main class="bg-image" style=" background-image: url('img/portada_empresa2.png'); background-repeat: no-repeat;
      background-color: #063c66;border-width: 0px;border-color: #063c66;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.php">
                <img src="img/fameperu-PhotoRoom.png" height="100" alt="" loading="lazy" style="margin-top: -1px" />
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
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="empresa.php">Empresa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="productos.php?nt=0">Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php?nt=0">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientes.php">Clientes</a>
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
            <div class="row mb-6">
                <h3 class="text-center mt-5 mb-4" style=" color: #063c66;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">

                    <strong>¿QUIENES SOMOS?</strong>
                </h3>
                <div class="col-md-7 gx-5">
                    <br />
                    <h5 class="text-dark">
                        Desde hace 25 años nos hemos dedicado a la fabricación y diseño de carrocerías,
                        contamos con amplia experiencia dentro del mercado
                        metal mecánica asimismo satisfaciendo a nuestros
                        clientes con nuestras unidades demostrando la
                        calidad de fabricación. Nuestro personal está
                        altamente calificado para así realizar un producto
                        innovador y resistente.
                    </h5>
                    <div class="row mb-4">

                        <div class="col-md-6 gx-5 mb-4 text-center">
                            <br />
                            <h4 style=" color: #063c66;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
  font-family: 'Montserrat', Sans-serif; ">
                                <strong>MISIÓN</strong>
                            </h4>
                            <br />
                            <h5 class="text-dark">
                                Somos fabricantes de carrocerías con una amplia experiencia dentro del mercado,
                                ofreciendo así a nuestros clientes calidad de nuestras unidades.
                            </h5>
                            <br />
                        </div>
                        <div class="col-md-6 gx-5 mb-4 text-center">
                            <br>
                            <h4 style=" color: #063c66;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
  font-family: 'Montserrat', Sans-serif; ">
                                <strong>VISIÓN</strong>
                            </h4>
                            <br />
                            <h5 class="text-dark">
                                Ser la empresa líder dentro del mercado
                                metalmecánica, para ellos generar crecimiento positivo para la satisfacción de nuestros clientes.
                            </h5>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="col-md-5 gx-5">
                    <img src="img/nosotros.png" class="img-fluid shadow-2-strong text-center" alt="" />
                </div>
            </div>


        </div>
    </section>
</main>
<?php
include('footer.php');
?>