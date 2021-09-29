<?php

//include './index.php'
class CashMachine {

    private $bills = array(5, 10, 20, 50, 100, 200, 500);
    private $money_left;
    private $cash = array();
    private $mess = 'No correct';

    function __construct() {
        rsort($this->bills);
    }


    public function getBills($withdrawAmount) {
        $this->cash = array();
        $this->money_left = $withdrawAmount;
        while ($this->money_left > 0) {
            if ($this->money_left < min($this->bills)) {
                //throw new WithdrawException('This amount cannot be paid.');
                //throw new Exception('Неправильно ввели сумму.');
                echo $this->mess;
                return;
            }
            $bill = $this->configureBills();
            $this->cash[] = $bill;
            $this->money_left -= $bill;
        }
        return array_count_values($this->cash);
    }

    private function configureBills() {
        foreach ($this->bills as $bill) {
            
            $division = $this->money_left / $bill;
            $rest = $this->money_left % $bill;
            //echo $bill.' '.$division.' '.$rest;
            //echo "<br>";
            if ( ($division >= 1) && ( $rest > (min($this->bills)+1) || ($rest === min($this->bills)) || ($rest === 0) ) ) {
                return $bill;
            }
        } 
        return min($this->bills);
    }

}

$atm = new CashMachine;
// print_r($atm->getBills($sum));

// foreach ($atm->getBills($sum) as $item){
//     echo $item;
//     echo "<br>";
// }
?>