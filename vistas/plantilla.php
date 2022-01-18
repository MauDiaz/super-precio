<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" icon" href="assets/img/logo.ico     ">
    <title>SuperPrecio | Backend</title>

    <!-- vinculos CSS -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/plugins/css/adminlte.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https:////cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- vinculos JS -->


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

   
    <script src="https:////cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="assets/plugins/js/adminlte.min.js"></script>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">

    <div class="wrapper">

        <?php
        include "vistas/paginas/modulos/header.php";

        include "vistas/paginas/modulos/sidebar.php";

        if(isset($_GET["ruta"])){

            if($_GET["ruta"] == "departamentos" ||
               $_GET["ruta"] == "cortecaja" ||
               $_GET["ruta"] == "empleados" ||
               $_GET["ruta"] == "herramientas" ||
               $_GET["ruta"] == "inicio" ||
               $_GET["ruta"] == "productos" ||
               $_GET["ruta"] == "proveedores" ||
               $_GET["ruta"] == "reportes" ||
               $_GET["ruta"] == "sistema" ||
               $_GET["ruta"] == "ventas" ||
               $_GET["ruta"] == "venues"
            ){
                include "vistas/paginas/".$_GET["ruta"].".php";
            }

        }else{

            include "vistas/paginas/inicio.php";

        }
        
        ?>

    </div>

    <script src="assets/js/datatables.js"></script>
    <script src="assets/js/forms.js"></script>

</body>

</html>