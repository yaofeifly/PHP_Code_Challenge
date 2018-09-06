<?php
if($_POST["user"] && $_POST["pass"]) {
	$mysqli = new mysqli("localhost", "root", "2wsx3edctf", "challenges");  
    
    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);
    $sql = "select pwd from interest where uname='$user'";
    $result = $mysqli->query($sql);  
    $row = $result->fetch_assoc();
    //echo $row["pwd"];
    if (($row["pwd"]) && (!strcasecmp($pass, $row["pwd"]))) {
        echo "<p>Logged in! Key:flag{xiaohdaldahdkajsdhja} </p>";
    }
    else {
        echo("<p>Log in failure!</p>");
    }
	$result->free(); 
	$mysqli->close();  
}
else{

    echo "nonono";
}
?>
