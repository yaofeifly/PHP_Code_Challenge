<?php 
require __DIR__.'/flag.php'; 
$IsMatch= preg_match("/hongya.*ho.*ngya.{4}hongya{3}:\/.\/(.*hongya)/i", trim($_POST["id"]), $match);
if( $IsMatch ){  
  die('Flag: '.$flag);
}

highlight_file(__FILE__);
?>
