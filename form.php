<?php

$sum = 260;

function start(){
    global $sum;
    $arr = [];
    $sum = $_REQUEST['sum'];
    if (($sum > 0)&&($sum != '')){
        include 'cashMachine.php';
        //print_r($atm->getBills($sum));
        $arr = $atm->getBills($sum);
        //print_r($arr);
        foreach ($atm->getBills($sum) as $key => $item){
            echo 'Номинал '.$key.' - '.$item;
            echo "<br>";
        }
        return $arr;
    }
    else 
    {
        echo 'Вы ввели некорректные данные';
    }
}

function begin(){
     echo 'Введите сумму';
}

if (isset($_POST["submit"])) {
    
    start();
} else {    
   
    begin();
}


?>