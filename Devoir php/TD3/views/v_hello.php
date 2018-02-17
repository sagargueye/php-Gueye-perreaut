<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
?>

<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>


<!--  Début de la page -->
<h1>Les détails du film</h1>

<!--  Liste  -->
     <img
         src="<?= PATH_IMAGES.$image?>"
    alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]"
    height="200px" 
    width="200px" 
    /> 
<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 