<?php
$secretvalue = $argv[1];
$nombreEssaiPrevu=$argv[2];

var_dump($nombreEssaiPrevu);

do {


            var_dump($nombreEssai);
            $testvalue = readline(" votre proposition: ");
            readline_add_history($testvalue);
            switch (variable) {
                case ($testvalue > $secretvalue):
                    print "c'est moins\n";
                    $victory=false;
                    //$nombreEssai++;

                    break;
                case ($testvalue < $secretvalue):
                    print "C'est plus\n";
                    $victory=false;
                    //$nombreEssai++;
                    break;
                case ($testvalue == $secretvalue):
                    $victory=true;
                    break;


                default:
                    print "erreur";

                    break;}

} while($victory == false);


    print "Bravo vous avez gagner en ".$nombreEssai.".\n";







?>
