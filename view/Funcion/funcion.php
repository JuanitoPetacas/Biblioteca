<?php
require_once '../../model/data.php';

// Crear una instancia de la clase Conexion
$conexion = new Conexion();

// Llamar a la función conectar para obtener la conexión
$pdo = $conexion->conectar();

// A partir de aquí, puedes utilizar $pdo para ejecutar consultas SQL
// Por ejemplo:
try {
    $stmt = $pdo->prepare("SELECT * FROM bibliotecasena.funcion");
    $stmt->execute();

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BIBLIOSENA</title>

        <!-- Custom fonts for this template -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/css/style-dashboard.css">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav dashboard sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <div class="d-flex align-items-center">
                    <div class="icon-dash" id="icon-dash">
                        <img src="../../assets/img/kisspng-logo-brand-line-5af66c2d1dfee7.1992848415260989891229.png" alt="" srcset="" class="" width="80rem" height="55rem">
                    </div>
                    <div class="title-dash sidebar-brand-text" id="title">BIBLIOSENA</div>
                </div>



                <!-- Divider -->

                <!-- Nav Item - Dashboard -->


                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Componentes
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <i class="fa fa-address-book" aria-hidden="true"></i>

                        <span>Registro</span>
                    </a>

                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="inventario.html">
                        <i class="fa fa-database" aria-hidden="true"></i>

                        <span>Inventario</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa fa-database" aria-hidden="true"></i>





                        <span>Graficas</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline mt-4">
                    <button class="rounded-circle border-0" id="sidebarToggle" onclick="borrarTitle()"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <!-- Topbar Search -->

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">





                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                    <img class="img-profile rounded-circle" src="../../assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Actividad
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cerrar session
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Crear Usuario
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Button trigger modal -->




                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <section class="h-100 bg-dark">
                            <div class="container py-5 h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col">
                                        <div class="card card-registration my-4">
                                            <div class="row g-0">
                                                <div class="col-xl-5 d-none d-xl-block">
                                                    <img src="../../assets/img/library-5219747_1920.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 800px;;" />
                                                </div>
                                                <div class="col-lg-7" style="margin-top: 5rem;">
                                                    <div class="card-body p-md-5 text-black">
                                                        <h3 class="mb-5 text-uppercase text-center">Funcion del Aprendiz
                                                        </h3>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>IdFuncion</th>
                                                                        <th>Funcion</th>
                                                                        <th>Acciones</th>

                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php
                                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                                                        <tr>
                                                                            <td><?php echo $row['idFuncion'] ?></td>
                                                                            <td><?php echo $row['descripcion']; ?></td>
                                                                            <form action="../../controller/funcion.php?idFuncion=<?php echo $row['idFuncion'] ?>" method="post">
                                                                                <td class="m-0 text-center"><button type="submit" class="btn btn-danger m-0"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                                    </button></td>
                                                                            </form>
                                                                        </tr>

                                                                <?php
                                                                    }
                                                                } catch (PDOException $e) {
                                                                    echo "Error: " . $e->getMessage();
                                                                } ?>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Agregar Funcion
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src="../../assets/vendor/jquery/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../assets/js/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../../assets/js/pepe.js"></script>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <div class="col-12 d-flex justify-content-center">
                            <h1 class="modal-title fs-5 " id="exampleModalLabel">Agregar Funcion de Aprendiz</h1>
                        </div>






                    </div>
                    <div class="modal-body">
                        <form action="../../controller/funcion.php" method="post">
                            <div class="col-md-12 mb-4 d-flex justify-content-center">
                                <div data-mdb-input-init class="form-outline">
                                    <form action="../../controller/funcion.php" method="post">
                                        <label class="form-label" for="form3Example1n">Funcion a Agregar</label>
                                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="nombre" />
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="row ">
                            <div class="col-md-6  d-flex justify-content-center">
                                <div data-mdb-input-init class="form-outline">

                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <div data-mdb-input-init class="form-outline">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button </div>
                                </div>


                            </div>
                        </div>


                        </form>
                    </div>
                </div>
            </div>

    </body>

    </html>
    <script>
        if (<?php echo ($_GET['Hecho']) ?> == true) {
            Swal.fire({
                icon: "success",
                title: "Hecho Correctamente",
                text: "<?php echo ($_GET['Mensaje']) ?>",

            });

        }
    </script>