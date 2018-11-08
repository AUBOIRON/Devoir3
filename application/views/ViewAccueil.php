<!DOCTYPE html>
<html>
<head>
	
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
    
    <input class="form-control" placeholder="Pas fastoche" name="login" type="text" required autofocus>
    <input class="btn btn-lg btn-success btn-block" type="submit" value="Connexion" name="connexion" >
<!--<?php
        foreach($lesUsers as $unUser){

?>    
<?php
                    echo "<option value='" .$unUser->idUser. "'>".$unUser->nomUser."</option>";
?>
<?php

   if ($unUser->statutUser == "admin"){
    echo "<option value='" .$uneRegion->nomRegion. "'>".$uneRegion->scoreRegion."</option>";
    
   }
   else {
     
   }


?>
</body>
</html>
<?php
              }
          ?>
