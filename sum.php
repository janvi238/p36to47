<?php
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $a = $_GET['num1'];
    $b = $_GET['num2'];
    $sum = $a + $b;
    echo "The sum of $a and $b is $sum";
}
?>