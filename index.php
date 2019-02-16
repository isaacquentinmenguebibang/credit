<!DOCTYPE html>
<html>
    <head>
        <title>Page d'accueil</title>
        <meta chaset="utf-8"/>
        <?php include('bootstrap_head.php'); ?>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1 class="jumbotron">Bienvenu</h1>
                </div>
            </header>
            <div class="row">
                <menu class="col-md-3">
                    <?php include('menu.php'); ?>
                </menu>
                <section class="col-md-9">
                    <p style="text-align:center">
                        <img src="image/gim.png" alt="gim" srcset="">
                        <img src="image/mastercard.png" alt="mastercard" srcset="">
                        <img src="image/visa.png" alt="visa" srcset="">
                    </p>
                </section>
            </div>
        </div>
        <?php include('bootstrap_end.php'); ?>
    </body>
</html>