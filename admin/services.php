<?php
ob_start();
session_start();

//Page Title
$pageTitle = 'Servicios';

//Includes
include 'connect.php';
include 'Includes/functions/functions.php';
include 'Includes/templates/header.php';

//Extra JS FILES
echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

//Check If user is already logged in
if (isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4'])) {
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <?php
        $do = '';

        if (isset($_GET['do']) && in_array($_GET['do'], array('Add', 'Edit'))) {
            $do = htmlspecialchars($_GET['do']);
        } else {
            $do = 'Manage';
        }

        if ($do == 'Manage') {
            $stmt = $con->prepare("SELECT * FROM services s, service_categories sc where s.category_id = sc.category_id");
            $stmt->execute();
            $rows_services = $stmt->fetchAll();
        ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Servicios</h6>
                </div>
                <div class="card-body">

                    <!-- ADD NEW SERVICE BUTTON -->

                    <a href="services.php?do=Add" class="btn btn-success btn-sm" style="margin-bottom: 10px;">
                        <i class="fa fa-plus"></i>
                        Agregar Servicio
                    </a>

                    <!-- SERVICES TABLE -->

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nombre de Servicio</th>
                                <th scope="col">Categoría de Servicio</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Gestionar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rows_services as $service) {
                                echo "<tr>";
                                echo "<td>";
                                echo $service['service_name'];
                                echo "</td>";
                                echo "<td>";
                                echo $service['category_name'];
                                echo "</td>";
                                echo "<td style = 'width:30%'>";
                                echo $service['service_description'];
                                echo "</td>";
                                echo "<td>";
                                echo $service['service_price'];
                                echo "</td>";
                                echo "<td>";
                                echo $service['service_duration'];
                                echo "</td>";
                                echo "<td>";
                                $delete_data = "delete_" . $service["service_id"];
                            ?>
                                <ul class="list-inline m-0">

                                    <!-- EDIT BUTTON -->

                                    <li class="list-inline-item" data-toggle="tooltip" title="Editar">
                                        <button class="btn btn-success btn-sm rounded-0">
                                            <a href="services.php?do=Edit&service_id=<?php echo $service['service_id']; ?>" style="color: white;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </button>
                                    </li>

                                    <!-- DELETE BUTTON -->

                                    <li class="list-inline-item" data-toggle="tooltip" title="Eliminar">
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $delete_data; ?>" data-placement="top"><i class="fa fa-trash"></i></button>

                                        <!-- Delete Modal -->

                                        <div class="modal fade" id="<?php echo $delete_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $delete_data; ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Deseas eliminar este servicio?"<?php echo $service['service_name']; ?>"?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="button" data-id="<?php echo $service['service_id']; ?>" class="btn btn-danger delete_service_bttn">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <?php
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
        } elseif ($do == 'Add') {
        ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agregar Nuevo Servicio</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="services.php?do=Add">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service_name">Nombre Servicio</label>
                                    <input type="text" class="form-control" value="<?php echo (isset($_POST['service_name'])) ? htmlspecialchars($_POST['service_name']) : '' ?>" placeholder="Nombre Servicio" name="service_name">
                                    <?php
                                    $flag_add_service_form = 0;
                                    if (isset($_POST['add_new_service'])) {
                                        if (empty(test_input($_POST['service_name']))) {
                                    ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                Nombre de Servicio es Requerido
                                            </div>
                                    <?php

                                            $flag_add_service_form = 1;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $stmt = $con->prepare("SELECT * FROM service_categories");
                                $stmt->execute();
                                $rows_categories = $stmt->fetchAll();
                                ?>
                                <div class="form-group">
                                    <label for="service_category">Categoría de Servicio</label>
                                    <select class="custom-select" name="service_category">
                                        <?php
                                        foreach ($rows_categories as $category) {
                                            echo "<option value = '" . $category['category_id'] . "'>";
                                            echo $category['category_name'];
                                            echo "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service_duration">Duración de Servicio(min)</label>
                                    <input type="text" class="form-control" value="<?php echo (isset($_POST['service_duration'])) ? htmlspecialchars($_POST['service_duration']) : '' ?>" placeholder="Duración de Servicio" name="service_duration">
                                    <?php

                                    if (isset($_POST['add_new_service'])) {
                                        if (empty(test_input($_POST['service_duration']))) {
                                    ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                Duración de Servicio es requerido
                                            </div>
                                        <?php

                                            $flag_add_service_form = 1;
                                        } elseif (!ctype_digit(test_input($_POST['service_duration']))) {
                                        ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                Duración inválida
                                            </div>
                                    <?php

                                            $flag_add_service_form = 1;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service_price">Precio de Servicio($)</label>
                                    <input type="text" class="form-control" value="<?php echo (isset($_POST['service_price'])) ? htmlspecialchars($_POST['service_price']) : '' ?>" placeholder="Precio de Servicio" name="service_price">
                                    <?php

                                    if (isset($_POST['add_new_service'])) {
                                        if (empty(test_input($_POST['service_price']))) {
                                    ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                Precio de Servicio es Requerido
                                            </div>
                                        <?php

                                            $flag_add_service_form = 1;
                                        } elseif (!is_numeric(test_input($_POST['service_price']))) {
                                        ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                Precio Inválido
                                            </div>
                                    <?php

                                            $flag_add_service_form = 1;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service_description">Descripción de Servicio</label>
                                    <textarea class="form-control" name="service_description" style="resize: none;"><?php echo (isset($_POST['service_description'])) ? htmlspecialchars($_POST['service_description']) : ''; ?></textarea>
                                    <?php

                                    if (isset($_POST['add_new_service'])) {
                                        if (empty(test_input($_POST['service_description']))) {
                                    ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                Se requiere descripción del servicio
                                            </div>
                                        <?php

                                            $flag_add_service_form = 1;
                                        } elseif (strlen(test_input($_POST['service_description'])) > 250) {
                                        ?>
                                            <div class="invalid-feedback" style="display: block;">
                                                La longitud de la descripción debe ser inferior a 250 letras.
                                            </div>
                                    <?php

                                            $flag_add_service_form = 1;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- SUBMIT BUTTON -->

                        <button type="submit" name="add_new_service" class="btn btn-primary">Agregar Servicio</button>

                    </form>

                    <?php

                    /*** ADD NEW SERVICE ***/
                    if (isset($_POST['add_new_service']) && $_SERVER['REQUEST_METHOD'] == 'POST' && $flag_add_service_form == 0) {
                        $service_name = test_input($_POST['service_name']);
                        $service_category = $_POST['service_category'];
                        $service_duration = test_input($_POST['service_duration']);
                        $service_price = test_input($_POST['service_price']);
                        $service_description = test_input($_POST['service_description']);

                        try {
                            $stmt = $con->prepare("insert into services(service_name,service_description,service_price,service_duration,category_id) values(?,?,?,?,?) ");
                            $stmt->execute(array($service_name, $service_description, $service_price, $service_duration, $service_category));

                    ?>
                            <!-- SUCCESS MESSAGE -->

                            <script type="text/javascript">
                                swal("Nuevo Servicio", "El nuevo servicio ha sido creado con éxito.", "success").then((value) => {
                                    window.location.replace("services.php");
                                });
                            </script>

                    <?php

                        } catch (Exception $e) {
                            echo "<div class = 'alert alert-danger' style='margin:10px 0px;'>";
                            echo 'Ocurrió un error: ' . $e->getMessage();
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </div>


            <?php
        } elseif ($do == "Edit") {
            $service_id = (isset($_GET['service_id']) && is_numeric($_GET['service_id'])) ? intval($_GET['service_id']) : 0;

            if ($service_id) {
                $stmt = $con->prepare("Select * from services where service_id = ?");
                $stmt->execute(array($service_id));
                $service = $stmt->fetch();
                $count = $stmt->rowCount();

                if ($count > 0) {
            ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Editar Servicio</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="services.php?do=Edit&service_id=<?php echo $service_id; ?>">
                                <!-- SERVICE ID -->
                                <input type="hidden" name="service_id" value="<?php echo $service['service_id']; ?>">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="service_name">Nombre de Servicio</label>
                                            <input type="text" class="form-control" value="<?php echo $service['service_name'] ?>" placeholder="Nombre de Servicio" name="service_name">
                                            <?php
                                            $flag_edit_service_form = 0;

                                            if (isset($_POST['edit_service_sbmt'])) {
                                                if (empty(test_input($_POST['service_name']))) {
                                            ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        El nombre del servicio es obligatorio.
                                                    </div>
                                            <?php

                                                    $flag_edit_service_form = 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        $stmt = $con->prepare("SELECT * FROM service_categories");
                                        $stmt->execute();
                                        $rows_categories = $stmt->fetchAll();
                                        ?>
                                        <div class="form-group">
                                            <label for="service_category">Categoría de Servicio</label>
                                            <select class="custom-select" name="service_category">
                                                <?php
                                                foreach ($rows_categories as $category) {
                                                    if ($category['category_id'] == $service['category_id']) {
                                                        echo "<option value = '" . $category['category_id'] . "' selected>";
                                                        echo $category['category_name'];
                                                        echo "</option>";
                                                    } else {
                                                        echo "<option value = '" . $category['category_id'] . "'>";
                                                        echo $category['category_name'];
                                                        echo "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="service_duration">Duración de Servicio(min)</label>
                                            <input type="text" class="form-control" value="<?php echo $service['service_duration'] ?>" placeholder="Duración de Servicio" name="service_duration">
                                            <?php

                                            if (isset($_POST['edit_service_sbmt'])) {
                                                if (empty(test_input($_POST['service_duration']))) {
                                            ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        Duración de servicio es requerido
                                                    </div>
                                                <?php

                                                    $flag_edit_service_form = 1;
                                                } elseif (!ctype_digit(test_input($_POST['service_duration']))) {
                                                ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        Duración Inválida.
                                                    </div>
                                            <?php

                                                    $flag_edit_service_form = 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="service_price">Precio de Servicio($)</label>
                                            <input type="text" class="form-control" value="<?php echo $service['service_price'] ?>" placeholder="Precio de Servicio" name="service_price">
                                            <?php

                                            if (isset($_POST['edit_service_sbmt'])) {
                                                if (empty(test_input($_POST['service_price']))) {
                                            ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        Precio de servicio es requerido
                                                    </div>
                                                <?php

                                                    $flag_edit_service_form = 1;
                                                } elseif (!is_numeric(test_input($_POST['service_price']))) {
                                                ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        Precio inválido
                                                    </div>
                                            <?php

                                                    $flag_edit_service_form = 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="service_description">Descripción de Servicio</label>
                                            <textarea class="form-control" name="service_description" style="resize: none;"><?php echo $service['service_description']; ?></textarea>
                                            <?php

                                            if (isset($_POST['edit_service_sbmt'])) {
                                                if (empty(test_input($_POST['service_description']))) {
                                            ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        Descripción de servicio es requerido
                                                    </div>
                                                <?php

                                                    $flag_edit_service_form = 1;
                                                } elseif (strlen(test_input($_POST['service_description'])) > 250) {
                                                ?>
                                                    <div class="invalid-feedback" style="display: block;">
                                                        La longitud de la descripción debe ser inferior a 250 letras.
                                                    </div>
                                            <?php

                                                    $flag_edit_service_form = 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- SUBMIT BUTTON -->
                                <button type="submit" name="edit_service_sbmt" class="btn btn-primary">Guardar Cambios</button>
                            </form>

                            <?php
                            /*** EDIT SERVICE ***/
                            if (isset($_POST['edit_service_sbmt']) && $_SERVER['REQUEST_METHOD'] == 'POST' && $flag_edit_service_form == 0) {
                                $service_id = $_POST['service_id'];
                                $service_name = test_input($_POST['service_name']);
                                $service_category = $_POST['service_category'];
                                $service_duration = test_input($_POST['service_duration']);
                                $service_price = test_input($_POST['service_price']);
                                $service_description = test_input($_POST['service_description']);

                                try {
                                    $stmt = $con->prepare("update services set service_name = ?, service_description = ?, service_price = ?, service_duration = ?, category_id = ? where service_id = ? ");
                                    $stmt->execute(array($service_name, $service_description, $service_price, $service_duration, $service_category, $service_id));

                            ?>
                                    <!-- SUCCESS MESSAGE -->

                                    <script type="text/javascript">
                                        swal("Servicio Actualizado", "Este servicio ha sido actualizado, correctamente", "success").then((value) => {
                                            window.location.replace("services.php");
                                        });
                                    </script>

                            <?php

                                } catch (Exception $e) {
                                    echo "<div class = 'alert alert-danger' style='margin:10px 0px;'>";
                                    echo 'Ocurrió un error: ' . $e->getMessage();
                                    echo "</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
        <?php
                } else {
                    header('Location: services.php');
                    exit();
                }
            } else {
                header('Location: services.php');
                exit();
            }
        }
        ?>
    </div>

<?php

    //Include Footer
    include 'Includes/templates/footer.php';
} else {
    header('Location: login.php');
    exit();
}

?>