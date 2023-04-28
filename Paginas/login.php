<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../Layout/estilos.php'  ?>
    <title>Inicia Sesion</title>
</head>

<body>
    <?php include '../Layout/navbar.php' ?>


    <?php if (isset($_GET["resul"]) ===  "1") : ?>
        <!-- Codigo para activar sweet alert -->
        <script>
            Swal.fire(
                'Usuario Creado Correctamente',
                'Ahora puede acceder.',
                'success'
            );
        </script>

    <?php endif ?>

    <section class="" style="background-color: #eee; height: 100%;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">SoloArte</h4>
                                    </div>

                                    <form action="../Transacciones/validarLogin.php" method="POST">
                                        <p>Por favor inicia sesion con tu cuenta</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Usuario o Direcion de Correo electronico" required />
                                            <label class="form-label" for="email">Correo Electronico</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control" required />
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">

                                            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                                            <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                            <a href="crearUsuario.php" class="btn btn-outline-danger">Crea una</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include '../Layout/scripts.php' ?>
</body>

</html>