<?php
    namespace credit;
    
    require 'Luhn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Vérification de la validité de votre carte</title>
        <meta charset="uft-8"/>
        <?php include('bootstrap_head.php'); ?>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1 class="jumbotron"> Vérification de la validité de votre carte</h1>
                    
                </div>
            </header>
            <div class="row">
                <menu class="col-md-3">
                    <?php include('menu.php'); ?>
                </menu>
                <section class="col-md-6">
                    <fieldset>
                        <form action="card.php" method=POST class="well">
                            <label for="nombre">Numéro carte :</label>
                            <input type="text" name="nombre" class="form-control"><br>
                            <button type="submit" class="btn btn-primary">Vérifier</button>
                        </form>
                    </fieldset>
                </section>
            </div>
        </div>
        <?php include('bootstrap_end.php'); ?>
    </body>
</html>
<?php
        if(isset($_POST['nombre'])){
            if(!preg_match("#^[0-9]{16}$#",$_POST['nombre'])){
                echo "Le format <strong>".$_POST['nombre']."</strong> est invalide vous devez rentrer un nombre à 16 chiffres";
            }elseif(preg_match("#^[0]{16}$#",$_POST['nombre'])){
                echo "Bien tenté mais le format avec seize zéro ne passe pas";
            }else{
                $nombre = $_POST['nombre'];
                $luhn = new Luhn();
                if($luhn->validate($nombre) == true){
                    echo "Le numéro de carte est valide";
                }else{
                    echo "Le numéro de carte n'est pas valide";
                }
            } 
        }
?>
