<?php

require_once 'robot.php';

$robot1 = new mesin ('wak',88);

$robot1->set_suara('wak');
$robot1->set_berat(300);


echo "suara mesinnya : " .$robot1->get_suara() .'<br>'.' Dan mempunyai berat :' .$robot1->get_berat().' kg' .'<br>';
?>