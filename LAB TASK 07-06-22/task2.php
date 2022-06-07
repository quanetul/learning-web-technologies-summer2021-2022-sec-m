<?php

$price = 250;
$vat = 15;

echo "Price with vat =" ;
echo round($price * (($vat / 100) + 1), 2);
?>