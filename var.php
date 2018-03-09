<?php
error_reporting(0);
$appname="TEMPERATURE CONVERTER";
$applink="index.php";
$appdesc="Simple Temperature Converter";
$fa="font-awesome/css/font-awesome.min.css";
$gfonts="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic";
$css="css/bootstrap.min.css";
$css_lite="css/style.css";
$rel="stylesheet";
$type="text/css";
$kvalue= $_POST["kelvin"];
$cvalue = $_POST["celsius"];
$temp=273;
$master =$_POST["celsius"] + $temp;
#echo $master
?>