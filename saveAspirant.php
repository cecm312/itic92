<?php
$name = $_REQUEST["txtName"];
$email = $_REQUEST["txtEmail"];
$sex = $_REQUEST["selSex"];
$telephone = $_REQUEST["txtTel"];
$cellular = $_REQUEST["txtCel"];
$career = $_REQUEST["selCar"];
$observations = $_REQUEST["txtObs"];

$target_dir = "uploads/";
$aspirantPicture = $target_dir . "default.jpg";

if (isset($_FILES["fileFoto"])) {
    $path = $_FILES['fileFoto']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $target_file = $target_dir . uniqid() . "." . $ext;
    if (move_uploaded_file($_FILES["fileFoto"]["tmp_name"], $target_file)) {
        $aspirantPicture = $target_file;
    }
}
?>
<html>
    <head>
        <link href="assets/materialize/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/animate/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Registro Realizado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Universidad Tecnologica</h>
                    <h3>Registro Finalizado</h3>
                    <div class="col s12 m3 l3">            
                        <img class="responsive-img" src="<?= $aspirantPicture ?>">
                    </div>
                    <div class="col s12 m9 l9">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h4>Nombre</h4>
                                <p class="flow-text"><?= $name ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h4>Correo</h4>
                                <p class="flow-text"><?= $email ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h4>Sexo</h4>
                                <p class="flow-text"><?= $sex ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h4>Telefono</h4>
                                <p class="flow-text"><?= $telephone ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h4>Celular</h4>
                                <p class="flow-text"><?= $cellular ?></p>
                            </div>
                            <div class="col s12 m12 l12">
                                <h4>Carrera</h4>
                                <p class="flow-text"><?= $career ?></p>
                            </div>
                            <div class="col s12 m12 l12">
                                <h4>Observaciones</h4>
                                <p class="flow-text"><?= $observations ?></p>
                            </div>
                            <div class="col s12 m12 l12">
                                <a class="waves-effect waves-light btn"><i class="mdi-action-print left"></i>Imprimir</a>
                                <a href="index.html" class="waves-effect waves-light btn"><i class="mdi-action-exit-to-app right"></i>Salir</a>
                            </div>
                        </div>


                    </div>

            </div>
        </div>
        <script src="assets/jquery/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="assets/materialize/js/materialize.min.js" type="text/javascript"></script>  
    </body>
</html>
