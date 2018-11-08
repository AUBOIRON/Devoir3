<?php

foreach($lesRegions as $uneRegion)
{  
    echo "<input type='checkbox' type='radio' value='". $uneRegion->nomRegion ."'>".$uneRegion->scoreRegion."</br>"; 
}
?>