<?php
include('header.php');
include('conexion.php');

$id = $_REQUEST["id"];
$consulta = "SELECT * FROM productos where id='$id'";
$resultado = mysqli_query($cn, $consulta);

$nt = $_REQUEST["nt"];
?>
<style>
    .nav-link {
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
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
<main class="bg-image" style=" background-image: url('img/portada_productos.png'); background-repeat: no-repeat;
      background-color: #063c66;border-width: 0px;border-color: #063c66;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
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
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="empresa.php">Empresa</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link active" href="productos.php?nt=0">Productos
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
    <section class="mt-4 mb-4">
        <div class="container">
            <?php
            while ($dat = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="col-md-6">
                    <div id="carouselExampleControls<?php echo $dat['id']; ?>" class="carousel slide" data-mdb-ride="carousel">
                        <div class="carousel-inner">
                            <?php if ($dat['foto'] != null) {
                            ?>
                                <div class="carousel-item active">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="d-block w-100" alt="..." />
                                </div>
                            <?php
                            }
                            ?>
                            <?php if ($dat['foto2'] != null) {
                            ?>
                                <div class="carousel-item ">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto2']) ?>" class="d-block w-100" alt="..." />
                                </div>
                            <?php
                            } else {
                            }
                            ?>
                            <?php if ($dat['foto3'] != null) {
                            ?>
                                <div class="carousel-item ">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto3']) ?>" class="d-block w-100" alt="..." />
                                </div>
                            <?php
                            } else {
                            }
                            ?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls<?php echo $dat['id']; ?>" data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls<?php echo $dat['id']; ?>" data-mdb-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="card-img-top" alt="..." /> -->

                </div>
            <?php
            }
            ?>


        </div>
    </section>
</main>
<?php
include('footer.php');
?>