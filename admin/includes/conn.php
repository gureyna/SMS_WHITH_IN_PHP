<?php
$conn = mysqli_connect('localhost','root','','sms');

if(!$conn){
    die("Couldn't connect to");
}