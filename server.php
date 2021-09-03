<?php

$server = "sql305.epizy.com";
$admin = "epiz_29615558";
$password = "QpqRDYj3mjrxpk";
$database = "epiz_29615558_murugaraj";

$connect = mysqli_connect($server,$admin,$password) or die ("Unable to connect");
mysqli_select_db($connect,$database);


?>