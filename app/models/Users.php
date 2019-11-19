<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();}

    public function MyMetod(){
    	$a = $_GET 1;
    	$b = $_GET 2;
    	$c = $_GET 3;
    	$summa = $a + $b + $c;
    	echo "Сумма $a + $b + $c = $summa";}

         // _MainModel::$string;   
    }

?>