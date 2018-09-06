<?php 
require __DIR__.'/flag.php';
if (isset($_POST['answer'])){ 
    $number = $_POST['answer']; 
    if (noother_says_correct($number)){ 
        echo $flag; 
    }  else { 
        echo "Sorry"; 
    } 
} 

function noother_says_correct($number) 
{ 
    $one = ord('1'); 
    $nine = ord('9'); 
    # Check all the input characters! 
    for ($i = 0; $i < strlen($number); $i++) 
    { 
        # Disallow all the digits! 
        $digit = ord($number{$i}); 
        if ( ($digit >= $one) && ($digit <= $nine) ) 
        { 
            # Aha, digit not allowed! 
            return false; 
        } 
    } 
    # Allow the magic number ... 
    return $number == "3735929054"; 
} 

highlight_file(__FILE__);
?>
