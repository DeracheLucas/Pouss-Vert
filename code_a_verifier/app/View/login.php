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

<body class="">

<?php
    require 'navbar.php';
?>


    <section class="container-fluid">
        <div class="row">
            <header class="row-col-6 py-5 text-center align-middle background-image text-center">

                <h1 class="pt-5 text-light col-12">Connexion</h1>
                <p class="py-2 text-light col-12">Vous n'avez pas encore de compte ? <a href="register.php">Inscrivez-vous ici</a>.</p>

                <form class="col-6 mx-auto text-center" action="#" method="post">
                    <div class="col-8 mx-auto my-5">
                        <input class="text mb-4 form-control col-5" type="text" name="pseudo" placeholder="Pseudo . . ." required>
                        <input class="text mb-3 form-control col-5" type="password" name="password" placeholder="Password . . ." required="">
                        <button class="btn my-5 btn-outline-dark btn-light col-3 " type="submit">Se connecter</button>
                    </div>
                </form>
            </header>
<?php
require 'footer.php';
?>
        </div>
    </section>


    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../src/js/app.js"></script>
</body>

</html>