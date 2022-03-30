<?php

if (isset($_COOKIE['vote'])){
    echo "Vous avez déja voté. Votre premier vote est: ". strtoupper($_COOKIE['vote']).". Vous ne pouvez pas voter une autre fois.";
}
else{
    $vote = $_POST["sondage"];

    setcookie('vote', $vote, time()+60*2);
    
    echo "Vous avez voté " .strtoupper($vote).".";

}