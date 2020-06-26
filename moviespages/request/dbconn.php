<?php

$db = mysqli_connect("localhost","root","root","movies");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
echo "connection successfull";

?>