<?php
require_once 'class_Account.php';

class AccountBank extends Account{
    public $customer;
    static $biaya_admin=6500;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }
    public function transfer($ab_tujuan,$uang){
        $ab_tujuan->deposit($uang);//account bank tujuan bertambah saldonya
        $this->witdraw($uang);
        $this->witdraw(self::$biaya_admin);
    }
    public function cetak(){
        parent::cetak();
    }
}




?>