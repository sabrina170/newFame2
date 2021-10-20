<?php include('header.php');

$nt = $_REQUEST["nt"]; ?>
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
        background-color: #8bbbe0;
    }

    .col:hover {
        background-color: rgb(237, 241, 244, 0.6);
    }
</style>

<body>
    <main class="bg-image" style="background-image: url('img/portada_fame8.png'); 
   background-repeat: no-repeat;background-color: #fff;border-width: 0px;">
        <nav class="navbar navbar-expand-lg navbar-light ">
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
                                <a class="nav-link " href="index.php">Inicio</a>
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
                                <a class="nav-link" href="clientes.php">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active2" href="contacto.php?nt=0">contacto</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <section>
            <div class="container mt-3">
                <?php
                if ($nt ==  1) {
                ?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire(
                            'Enviado Exitosamente!',
                            'Agradecemos contar con su consulta!',
                            'success'
                        ).then(function() {
                            window.location.href = "contacto.php?nt=0";
                        });
                        // window.location.href = "tutoriales.php ";
                    </script>
                <?php
                } else if ($nt ==  2) {
                ?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire(
                            'Error en el envio!',
                            'Revisar si los campos estan llenos!',
                            'error'
                        ).then(function() {
                            window.location.href = "contacto.php?nt=0";
                        });
                    </script>
                <?php
                }
                ?>
                <h3 class="text-center" style="
              color: #063c66;
              font-weight: 800;
              line-height: 41px;
              letter-spacing: 0.5px;
              font-family: 'Montserrat', Sans-serif;
            ">
                    CONTÁCTENOS
                </h3>
                <br>
                <div class="row mb-6">
                    <div class="col-md-3 gx-5 text-center">
                        <i class="far fa-clock fa-2x"></i>
                        <br>
                        Horario de apertura
                    </div>
                    <div class="col-md-3 gx-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Lunes:
                                08:00 - 16:00
                            </li>
                            <li class="list-group-item">Martes:
                                08:00 - 16:00</li>
                        </ul>
                    </div>
                    <div class="col-md-3 gx-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Miércoles:
                                08:00 - 16:00
                            </li>
                            <li class="list-group-item">Jueves:
                                08:00 - 16:00</li>
                        </ul>
                    </div>
                    <div class="col-md-3 gx-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Viernes:
                                08:00 - 16:00
                            </li>
                            <li class="list-group-item">Sábado:
                                08:00 - 16:00</li>
                        </ul>
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 gx-5">
                        <form action="correo.php" method="post">

                            <p class="text-center">Contáctenos:</p>
                            <input type="hidden" id="tipo" name="tipo" value="3" class="form-control" />
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="nombre" name="nombre" class="form-control" />
                                <label class="form-label" for="registerName">Nombre</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="asunto" name="asunto" class="form-control" />
                                <label class="form-label" for="registerUsername">Asunto</label>
                            </div>

                            <!-- Email input -->
                            <!-- <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" name="email" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div> -->

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="registerPassword" name="telefono" class="form-control" />
                                <label class="form-label" for="registerPassword">Telefono</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="4" required></textarea>
                                <label class="form-label" for="registerRepeatPassword">Mensaje</label>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Enviar</button>
                        </form>

                    </div>
                    <div class="col-md-6 gx-5">
                        <img src="img/jovenes-que-trabajan-centro-llamadas-acercan-nuevas-ofertas_146671-16342.jpg" class="img-fluid">
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php
    include('footer.php');
    ?>