<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>SoloArte</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php';



    include("../Usuario/Carrito/nav_cart.php");
    include("../Usuario/Carrito/modal_cart.php");

    ?>

    <?php include '../../Conection/cn.php' ?>



    <div id="botonFlotante" style="position: fixed; bottom: 20px; right: 20px; display: block;">
        <a href="../Chat/Ayuda.php" class="btn btn bg bg-rosaMX">
            <img src="../../Images/Chat/chat.jpg" alt="chat" width="52" height="52">
        </a>
    </div>
    <div class="container mt-4">

        <h1 class="text text-center">Productos</h1>



        <?php
        $query = "select * from productos";
        $productos = $db->query($query);
        ?>

        <div class='row'>
            <?php while ($row_productos = $productos->fetch_assoc()) :  ?>
                <div class='col-sm-12 col-md-4 d-flex justify-content-center mt-4 mb-4'>
                    <!-- <div class='col-sm-16 col-md-4'>	 -->
                    <div class='card' style='width: 18rem;'>

                        <ul class='list-group list-group-flush'>

                            <li class='list-group-item'> <span style="font-weight: bold;"></span> <?php echo $row_productos['nombre']; ?></li>

                            <li class='list-group-item'> <span style="font-weight: bold;">Precio:</span> <?php echo $row_productos['precio']; ?></li>

                            <li class='list-group-item'> <span style="font-weight: bold;">En stock:</span> <?php echo $row_productos['stock']; ?><span></span></li>





                            <form id="formulario" name="formulario" method="post" action="../Usuario/Carrito/cart.php">
                                <input name="precio" type="hidden" id="precio" value="<?php echo $row_productos['precio']; ?>" />
                                <input name="titulo" type="hidden" id="titulo" value="<?php echo $row_productos['nombre']; ?>" />
                                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                                <button class="btn btn-outline-primary bg bg-azulmaya" type="submit"><i class="fas fa-shopping-cart"></i></button>
                            </form>
                            </span>



                        </ul>
                    </div>
                </div>

            <?php endwhile ?>

        </div>

        </form>


    </div>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>