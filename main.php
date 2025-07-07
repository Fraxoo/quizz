<?php

$ancien = file_get_contents("resultat.txt", "r");

    echo "ancien score : $ancien/50\n";


$score = 0;

$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];
$sus = "\n\nSuspennnnce !\n\n";

$reponses = [1, 2, 3, 1, 3];

echo    "###################################################\n";
echo    "######## Qui veux gagner des millions ?! ##########\n";
echo    "###################################################\n";

echo "\n";

echo    "###################################################\n";
echo "                   score : $score\n";
echo    "###################################################\n\n";

for($i = 0;$i <count($questions);$i++){
    echo $questions[$i]."\n";
    $rep = trim(fgets(STDIN));
    echo $sus;
    if($rep == $reponses[$i]){
        echo "Bien joué !\n\n";
        $score = $score+10;
        echo "le score augmente de 10\n\n";
        echo    "###################################################\n";
        echo "                   score : $score\n";
        echo    "###################################################\n\n";
    }else{
        echo "Mauvaise reponse !\n\n";
        echo    "###################################################\n";
        echo "                   score : $score\n";
        echo    "###################################################\n\n";
    }
}
$pourcentage = $score/50*100;

if($pourcentage >= 50){
    echo "########### WINNER !!! ###########\n";
    echo "pourcentage de bonne reponse : $pourcentage\n";
    echo "Bien joué tu as gagné des millions !\n";
}else{
    echo "########### GAME OVER ###########\n";
    echo "pourcentage de bonne reponse : $pourcentage\n";
    echo "Perdu ! tu peux toujours reesayer\n";
}



$resultat = fopen("resultat.txt", "w+");
fwrite($resultat,$score);
fclose($resultat);