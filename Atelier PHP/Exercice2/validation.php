<?php

if (isset($_COOKIE['vote'])){
    echo "Vous avez déja voté : ". strtoupper($_COOKIE['vote']).". Vous devez attendre.";
}
else{
    $vote = $_POST["sondage"];

    setcookie('vote', $vote, time()+60*2);
    
    echo "Deja fait " .strtoupper($vote).".";

}
