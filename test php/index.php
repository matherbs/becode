<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test php</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body>

        <header>
              On verra bien ....
        </header>

        <div class="boujour">
              <h1>hello world !</h1>
        </div>

<?php echo "salut math"; ?><br>
<?php echo date('d/m/Y h:i:s'); ?><br>

<?php

 $ageduvisiteur = 25;

 echo 'le visiteur a ' . $ageduvisiteur . ' ans';
 ?>

<?php
for ($repetitions=0; $repetitions < 6 ; $repetitions++) {
  echo "<p>
  test $repetitions
  </p>";
  $repetitions;
}
 ?>

 <?php
$prenoms = array("mathieu","pedro","juan");

foreach ($prenoms as $prenom) {
  echo "$prenom","<br />";
}
  ?>



  </body>
</html>
