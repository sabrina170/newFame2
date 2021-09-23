<?php
include('header.php');
include('conexion.php');

$consulta = "SELECT * FROM productos";
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
            <a class="navbar-brand me-2" href="index.php">
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
    <section>
        <div class="container">
            <div class="row mb-6">
                <h3 class="text-center mt-5 mb-4" style=" color: #fff;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">

                    <strong>NUESTROS PRODUCTOS</strong>
                </h3>
                <div class="col-md-4 gx-5">
                    <img src="img/producto1.png" class="img-fluid  text-center" alt="" />
                </div>
                <div class="col-md-4 gx-5">
                    <img src="img/producto2.png" class="img-fluid  text-center" alt="" />
                </div>
                <div class="col-md-4 gx-5">
                    <img src="img/producto3.png" class="img-fluid  text-center" alt="" />
                </div>
            </div>


        </div>
    </section>
</main>
<main>
    <section>
        <div class="container">
            <h3 class="text-center mb-4" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">

                <strong>NUESTROS PRODUCTOS</strong>
            </h3>
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
                        window.location.href = "productos.php?nt=0";
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
                        window.location.href = "productos.php?nt=0";
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
                            <div class="card-header">
                                <h6>Categoria : <?php echo $dat['categoria']; ?></h6>
                            </div>
                            <div id="carouselExampleControls<?php echo $dat['id']; ?>" class="carousel slide" data-mdb-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if ($dat['foto'] != null) {
                                    ?>
                                        <div class="carousel-item active">
                                            <img src="<?php echo $dat['foto'] ?>" class="d-block w-100" alt="..." />
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="carousel-item active">
                                            <img src="imagenes/defecto.jpg" class="d-block w-100" alt="..." />
                                        </div>
                                    <?php
                                    }

                                    if ($dat['foto2'] != null) {
                                    ?>
                                        <div class="carousel-item ">
                                            <img src="<?php echo $dat['foto2'] ?>" class="d-block w-100" alt="..." />
                                        </div>
                                    <?php
                                    } else {
                                    }
                                    ?>
                                    <?php if ($dat['foto3'] != null) {
                                    ?>
                                        <div class="carousel-item ">
                                            <img src="<?php echo $dat['foto3'] ?>" class="d-block w-100" alt="..." />
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
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $dat['nombre'] ?></h5>
                                <p class="card-text">
                                    <?php echo $dat['descripcion'] ?>
                                </p>
                                <!-- <a href="detalle-producto.php?id=<?php echo $dat["id"]; ?>&nt=0" type="button" class="btn btn-dark btn-rounded text-white">Detalle</a> -->

                                <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal<?php echo $dat['id']; ?>" class="btn btn-warning btn-rounded text-dark">Consultar</button>

                            </div>
                        </div>
                    </div>
                <?php
                    include('modal.php');
                }

                ?>
            </div>
        </div>
    </section>
</main>
<?php
include('footer.php');
?>