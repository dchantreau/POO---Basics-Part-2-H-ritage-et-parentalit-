<?php

require_once 'Truck.php';
$truck = new Truck(500,'grey', 3 ,'diesel' );
echo $truck->forward();
var_dump($truck);

 echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
 echo $truck->brake();
 echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
 echo $truck->brake();


?>
