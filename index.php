<?php

require_once 'cal.php';

$cal = new  Calculation();

$cal->minus(20);
$cal->add(20.5);

if ($cal->result != 0) {
    $cal->add(42);
    $cal->round();
}

echo $cal;