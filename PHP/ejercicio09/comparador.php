<?php 
$num1 = trim(htmlspecialchars($_REQUEST["num1"], ENT_QUOTES, "UTF-8"));
$num2 = trim(htmlspecialchars($_REQUEST["num2"], ENT_QUOTES, "UTF-8"));
$num3 = trim(htmlspecialchars($_REQUEST["num3"], ENT_QUOTES, "UTF-8"));

if (empty(num1) || !is_numeric($num1) || ($num1)
?>