<?php

$question;

echo "Pensez à un personnage : Mlle Rose, le Professeur Violet,
le Colonel Moutarde, le Révérend Olive ou Mme Leblanc." . "\n";


$question = readline("Votre personnage a-t-il une moustache ? ");

if($question == "true"){
    echo "Votre personnage est le Colonel Moutarde.";
}

elseif ($question == "false"){
    $question = readline ("Votre personnage porte-t-il des lunettes ? ");
}

if ($question == "false"){
    echo  "Votre personnage est Mlle Rose.";
}

elseif ($question == "true"){
    $question = readline ("Votre personnage porte-t-il un chapeau ? ");
}

if ($question == "true"){
    echo ("Votre personnage est le Professeur Violet.");
}

elseif ($question == "false"){
    $question = readline ("Votre personnage est un homme ? ");
}

if ($question == "true"){
    echo "Votre personnage est Le Révérand Olive.";
}

else{
    echo "Votre personnage est Mme Leblanc.";
}

?>