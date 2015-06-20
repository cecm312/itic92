<?php
$name = $_POST["txtName"];
$email = $_POST["txtEmail"];
$sex = $_POST["selSex"];
$telephone = $_POST["txtTel"];
$cellular = $_POST["txtCel"];
$career = $_POST["selCar"];
$observations = $_POST["txtObs"];

var_dump($_FILES);

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
        <link href="assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Registro Realizado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>
        <div class="container">
            <div class="row divPrint">
                <h3>Universidad Tecnologica</h3>
                    <h4>Registro Finalizado</h4>
                    <div class="col s12 m3 l3">            
                        <img class="responsive-img" src="<?= $aspirantPicture ?>">
                    </div>
                    <div class="col s12 m9 l9">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h5>Nombre</h5>
                                <p ><?= $name ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h5>Correo</h5>
                                <p ><?= $email ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h5>Sexo</h5>
                                <p ><?= $sex ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h5>Telefono</h5>
                                <p ><?= $telephone ?></p>
                            </div>
                            <div class="col s6 m6 l6">
                                <h5>Celular</h5>
                                <p ><?= $cellular ?></p>
                            </div>
                            <div class="col s12 m12 l12">
                                <h5>Carrera</h5>
                                <p ><?= $career ?></p>
                            </div>
                            <div class="col s12 m12 l12">
                                <h5>Observaciones</h5>
                                <p ><?= $observations ?></p>
                            </div>
                            <div class="col s12 m12 l12">
                                <a class="waves-effect waves-light btn btnPrint"><i class="mdi-action-print left"></i>Imprimir</a>
                                <a href="index.html" class="waves-effect waves-light btn"><i class="mdi-action-exit-to-app right"></i>Salir</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <script src="assets/jquery/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="assets/materialize/js/materialize.min.js" type="text/javascript"></script>
        <script src="assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/saveAspirante.js" type="text/javascript"></script>
        <script>
            var data={
                name : "<?=$name?>",
                email : "<?=$email?>",
                sex : "<?=$sex?>",
                telephone : "<?=$telephone?>",
                cellular : "<?=$cellular?>",
                career : "<?=$career?>",
                observations : "<?=$observations?>",
                aspirantPicture : "<?=$aspirantPicture?>",
            }
            console.log(data);
        </script>
    </body>
</html>
