<?php
header( "refresh:5; url= Contact.html" ); 
$thx = "Thankyou, ";
echo $thx;
echo $_POST["name"];
ini_set('display_errors', 1);
?>