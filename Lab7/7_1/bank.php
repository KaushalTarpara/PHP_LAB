<?php
class Bank {
    private $accountNumber;
    private $currentBalance;

    public function __construct($accountNumber, $currentBalance) {
        $this->accountNumber = $accountNumber;
        $this->currentBalance = $currentBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->currentBalance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $this->currentBalance >= $amount) {
            $this->currentBalance -= $amount;
        }
    }

    public function getAccountInfo() {
        return "Account Number: {$this->accountNumber}<br>Current Balance: {$this->currentBalance}";
    }
}
?>
