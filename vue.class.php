<?php


class Vue {
    public function __construct(){

    }

    public static function formulaire(){
        ob_start();?>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Calculer</legend>
            Entrez les nombres a calculer :<br>
            <input type="text" name="numbers" placeholder="1,7,3,6..."><br>
            Type d'operation :<br>
            <input type="radio" name="calcul" value="a">Addition
            <input type="radio" name="calcul" value="s">Soustraction
            <input type="radio" name="calcul" value="m">Multiplication
            <input type="radio" name="calcul" value="d">Division
            </fieldset>
            <input type="submit" name="ok" value="Calculer">
        </form>
        <?php $vue = ob_get_clean();
        return $vue;
    }
}
?>