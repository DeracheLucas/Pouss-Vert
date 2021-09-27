<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../src/css/style.css">
</head>

<body>

    <section class="container-fluid">

        <div class="row">

<?php
require 'navbar.php';
?>

            <div class="row m-auto p-auto background-image  align-items-center ">
                <div class="col-6 mx-auto">
                    <h1 class="text-center">S'inscrire</h1>
                    <p class="text-center">Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
                    <form action="#" method="get">
                        <input class="col-6 form-control my-3 text" type="text" name="Pseudo" placeholder="Pseudo" required>
                        <input class="col-6 form-control mt-3 text" type="text" name="ville" placeholder="Ville" required>
                        <label class="col-6 text-start city-informations text-danger" for="ville">*Avoir le nom de votre ville nous permet de vous donnez
                            des informations local</label>
                        <input class="col-6 form-control my-3 text email" type="email" name="email" placeholder="E-mail" required>
                        <input class="col-6 form-control my-3 text email" type="email" name="email" placeholder="Confirmez votre e-mail" required>
                        <input class="col-6 form-control my-3 text" type="password" name="password" placeholder="Password" required="">
                        <input class="col-6 form-control my-3 text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
                        <div class="row">
                            <button class="col-3 mt-5 mb-0 btn fs-5 btn-outline-secondary mx-auto " type="submit">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </section>
<?php
require 'footer.php';
?>

    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../src/js/app.js"></script>
</body>

</html>