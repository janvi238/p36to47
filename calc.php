<!-- calc.php -->
<?php
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['op'];

    switch($op){
        case '+': echo "Result: ".($a+$b); break;
        case '-': echo "Result: ".($a-$b); break;
        case '*': echo "Result: ".($a*$b); break;
        case '/': 
            if($b != 0) echo "Result: ".($a/$b); 
            else echo "Division by zero not allowed!";
            break;
    }
}
?>