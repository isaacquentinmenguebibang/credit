<?php
    namespace credit;
    
    require 'Luhn.php';
    if(isset($_POST['nombre'])){
        if(!preg_match("#^[0-9]{16}#",$_POST['nombre'])){
            echo "Le format <strong>".$_POST['nombre']."</strong> est invalide vous devez rentrer un nombre à 16 chiffres";
        }
        if(strlen($_POST['nombre']) > 16){
            echo "Vous devez rentrer un nombre à 16 chiffre";
        }
        if(preg_match("#^[0]{16,16}$#",$_POST['nombre'])){
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
<!DOCTYPE html>
<html>
    <head>
        <title>Vérification de la validité de votre carte</title>
        <meta charset="uft-8"/>
    </head>
    <body>
        <p>
            <fieldset style="text-align:center">
                <legend>Vérification du numéro de votre carte bancaire</legend>
                <form action="card.php" method=POST>
                    <label for="nombre">Numéro carte :</label><br/>
                    <input type="text" name="nombre"><br/>
                    <input type="submit" value="Validé">
                </form>
            </fieldset>
        </p>
    </body>
</html>
