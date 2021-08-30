<?php
include('header.php');
include('conexion.php');

$consulta = "SELECT * FROM servicios";
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
    <nav class="navbar navbar-expand-lg navbar-light ">
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
                            <a class="nav-link text-white" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="empresa.php">Empresa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="productos.php?nt=0">Productos
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="servicios.php?nt=0">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contacto.php?nt=0">contacto</a>
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
                <h3 class="text-center mt-5 mb-4" style=" color: #fff;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">

                    <strong>NUESTROS SERVICIOS</strong>
                </h3>
                <p class="text-white">FAMEDI cuenta con un departamento de post venta que ofrece principalmente 3
                    servicios que se acomodan a las necesidades de cada cliente,
                    con la finalidad de anticipar futuros problemas técnicos por
                    mal funcionamiento de los transportistas y así lograr que sus unidades estén siempre operativas</p>

            </div>


        </div>
    </section>
</main>
<main>
    <section>
        <div class="container">
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
                        window.location.href = "servicios.php?nt=0";
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
                        window.location.href = "servicios.php?nt=0";
                    });
                </script>
            <?php
            }
            ?>
            <div class="row row-cols-1 row-cols-md-3 mt-4 g-4 mb-6">
                <?php
                while ($dat = mysqli_fetch_assoc($resultado)) {
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="card-img-top" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $dat['nombre'] ?></h5>
                                <p class="card-text">
                                    <?php echo $dat['descripcion'] ?>
                                </p>
                                <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal<?php echo $dat['id']; ?>" class="btn btn-warning btn-rounded text-dark">Consultar</button>
                            </div>
                        </div>
                    </div>
                <?php
                    include('modal2.php');
                }

                ?>
            </div>
        </div>
    </section>
</main>
<?php
include('footer.php');
?>