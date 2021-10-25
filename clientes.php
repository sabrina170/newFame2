<?php
include('header.php');

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
<main>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.php">
                <img src="img/fameperu-PhotoRoom.png" height="80" alt="" loading="lazy" style="margin-top: -1px" />
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

                        <li class="nav-item ">
                            <a class="nav-link " href="productos.php?nt=0">Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php?nt=0">Servicios</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="servicios.php?nt=0">Clientes</a>
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
    <section style="padding-bottom: 30px;" class="mb-6">
        <div class="container">
            <div class="row mb-6">
                <h3 class="text-center mt-5 mb-4" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">

                    <strong>NUESTROS CLIENTES</strong>
                </h3>

                <div class="col-12 text-center">
                    <img src="img/f.png" alt="" width="20%" height="70%">
                    <h6 class="text-center" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">
                        Nos ofrece
                    </h6>
                </div>

                <div class="col-md-3 gx-5">
                    <img src="img/BOMBONAS/7.png" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/BOMBONAS/8.png" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/BOMBONAS/10.png" class="img-fluid  text-center" height="60" alt="" />
                </div>

                <br>
                <div class="col-12 text-center mt-4">
                    <img src="img/a.png" alt="" width="20%" height="70%">
                    <h6 class="text-center" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">
                        Nos ofrece
                    </h6>
                </div>

                <div class="col-md-3 gx-5">
                    <img src="img/IZAJES/2.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/IZAJES/3.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/IZAJES/5.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/IZAJES/1.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <br>
                <div class="col-12 text-center mt-4">
                    <img src="img/d.png" alt="" width="20%" height="70%">
                    <h6 class="text-center" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">
                        Nos ofrece
                    </h6>
                </div>

                <div class="col-md-3 gx-5">
                    <img src="img/CISTERNAS/1.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/CISTERNAS/2.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/CISTERNAS/3.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/CISTERNAS/4.jpg" class="img-fluid  text-center" height="60" alt="" />
                </div>

                <div class="col-12 text-center mt-4">
                    <img src="img/t.png" alt="" width="20%" height="70%">
                    <h6 class="text-center" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">
                        Nos ofrece
                    </h6>
                </div>

                <div class="col-md-3 gx-5">
                    <img src="img/SanAlejandro/11.png" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/SanAlejandro/12.png" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/SanAlejandro/13.png" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/SanAlejandro/14.png" class="img-fluid  text-center" height="60" alt="" />
                </div>
                <div class="col-12 text-center mt-4">
                    <img src="img/e.png" alt="" width="20%" height="70%">
                    <h6 class="text-center" style=" color: #09508a;  font-weight: 800;  line-height: 41px; letter-spacing: 0.5px;
                  font-family: 'Montserrat', Sans-serif; ">
                        Nos ofrece
                    </h6>
                </div>

                <div class="col-md-3 gx-5">
                    <img src="img/toñito/15.png" class=" img-fluid text-center" height="60" alt="" />
                </div>
                <div class="col-md-3 gx-5">
                    <img src="img/toñito/16.png" class=" img-fluid text-center" height="60" alt="" />
                </div>
            </div>


        </div>
    </section>
</main>
<?php
include('footer.php');
?>