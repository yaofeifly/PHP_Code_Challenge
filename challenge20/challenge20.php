<?php

require_once('flag.php');

if(empty($_GET['user'])) die(show_source(__FILE__));

$user = ['admin', 'xxoo'];

if($_GET['user'] === $user && $_GET['user'][0] != 'admin'){
    echo $flag;
}
?>
