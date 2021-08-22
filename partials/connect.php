<?php
$connect = new mysqli("localhost","root","","phpstore");
if($connect -> connect_error){
    die("Connect Failed :" .$connect -> connect_error);
}
?>