<?php
$firstArg = $argv[1];
$sign = $argv[2];
$secondArg = $argv[3];
// Gestion premier agruments (1ere valeur)
    if (isset($argv[1])) {
        if (is_numeric($firstArg)){}
        else {print "Erreur !! Veuillez entrer un nombre\n";}
    }
// Gestion du troisieme argument(2eme valeurs)
    if (isset($argv[3])) {
        if (is_numeric($secondArg)){}
        else {print "Erreur !! Veuillez entrer un nombre\n";}
        }
//Gestion du signe et du calcul
    if (isset($argv[2])) {
            switch ($sign) {
        case '+':
            $result = $firstArg + $secondArg;
            break;
        case '-':
            $result = $firstArg - $secondArg;
            break;
        case '*':
            $result = $firstArg * $secondArg;
            break;
        case '/':
            $result = $firstArg / $secondArg;
            break;
        default: echo "Erreur !! Ceci n'est pas un signe \n";
            }
    }
    print "Votre resultat est ".$result.".\n";
?>
