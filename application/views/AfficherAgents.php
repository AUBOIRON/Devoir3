<?php

foreach($lesAgents as $unAgent)
{  
    echo "<input type='checkbox' value=".$unAgent->code."'>".$unAgent->nom ." - ".$unAgent->prenom."<br>"; 
}
echo "<input type ='button' value='Valider presence' onclick='ValiderPresence()'>";
?>