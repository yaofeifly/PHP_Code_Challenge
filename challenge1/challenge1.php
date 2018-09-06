<?php

error_reporting(0);
require __DIR__.'/lib.php';

echo base64_encode(hex2bin(strrev(bin2hex($flag)))), '<hr>';

highlight_file(__FILE__);