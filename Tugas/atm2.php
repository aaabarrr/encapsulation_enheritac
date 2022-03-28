<?php
require_once 'class_AccountBank.php';

$ab1= new AccountBank("010",5000000,"Adam");
$ab2= new AccountBank("070",1500000,"saiful");

$ab1->cetak();
echo "<br/>";
$ab2->cetak();

?>