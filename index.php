<?php

    require('./calculatrice.class.php');
    require('./vue.class.php');

    //$val = [4,2,3,7];

    //$Calc = new Calculatrice($val);

    /*
     * Addition de toutes les occurences du tableau
     * */
    //echo "4+2+3+7=".$Calc->addition()."<br>";

    /*
     * Changement des valeurs
     * */
    //$Calc->setValeurs([10,2,3,4,5,6]);

    /*
     * Soustraction de toutes les occurences du tableau
     * */
    //echo "10-2-3-4-5-6=".$Calc->soustraction()."<br>";

    /*
     * Affichage de toutes les occurences du tableau
     * */
    //echo "Les valeurs sont :<br>";
    //$val = $Calc->getValeurs();
    //foreach($val as $v){
    //    echo $v."<br>";
    //}

    /*
     * Multiplication
     * */
    //$Calc->setValeurs([3,3]);
    //echo "3x3=".$Calc->multiplication()."<br>";

    //$Calc->setValeurs([4,2]);
    //echo "4/2=".$Calc->division()."<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="">
    <title>Calculatrice</title>
</head>
<body>
    <?php
        echo Vue::formulaire();

        if(isset($_POST['ok']) && !empty($_POST['numbers']) && !empty($_POST['calcul'])){
            $v = explode(',',$_POST['numbers']);
            $calc = new Calculatrice($v);
            $res = $calc->calculer($_POST['calcul']);
            echo 'Resultat : ' . $res;
        }
    ?>
</body>
</html>


