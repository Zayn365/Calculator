<?php
declare(strict_types=1);

if(isset($_POST['btn_sub'])){
$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calc($oper , (int)$num1 , (int)$num2);


    echo $calc->calculator();
}
else {
    echo "No Results!!";
}

