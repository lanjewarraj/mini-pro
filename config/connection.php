<?php
$connection = mysqli_connect('localhost','root','','tgp');
if(!$connection){
    echo mysqli_query($connection);
    die("fails to connect to database");
}