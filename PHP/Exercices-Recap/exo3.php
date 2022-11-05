<?php

$question;
$answer;

echo "Pensez à un personnage : Mlle Rose, le Professeur Violet,
le Colonel Moutarde, le Révérend Olive ou Mme Leblanc." . "\n";

$question = readline("Votre personnage a-t-il une moustache ? ");

if($answer = true){
    echo "Votre personnage est le Colonel Moutarde.";
}

?>