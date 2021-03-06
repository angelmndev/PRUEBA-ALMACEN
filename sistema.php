
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="recursos/js/jquery-3.4.1.min.js"></script>
    <link href="recursos/css/bootstrap.min.css" rel="stylesheet">
    <script src="recursos/js/bootstrap.min.js"></script>
    <script src="recursos/js/icono.js"></script>

    <link href="recursos/css/estilo.css" rel="stylesheet">

    <title>PRUEBA ALMACEN</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-2 bg-danger">             
                <?php
                include("./vista/sidebar.php");
                ?>
            </div>
        
            <!-- datos -->
            <div class="col-10 ">
                <div class="row">
                    <div class="col bg-warning">
                        <?php
                        include("./vista/header.php");
                        ?>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row" id="control">

                        </div>
                        <div class="row" id="datos">
    
                        </div>
                    </div>                                    
                </div>
            </div>
        </div>
    </div>
   

    <?php
    include_once("vista/view_modal.php");
    ?>

    <script src="controller/js/ctrl_marca.js"></script>
    <script src="recursos/js/sistema.js"></script>
</body>

</html>