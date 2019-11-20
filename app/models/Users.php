<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();
    _MainModel::viewJSON($result);   }

    public function MyMetod(){
    	$a = $_GET ['a'];
    	$b = $_GET ['b'];
    	$c = $_GET ['c'];
    	$summa = $a + $b + $c;
    	echo "Сумма $a + $b + $c = $summa";}
         
    

    public function addCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->add($a=$_GET['id'], $b=$_GET['level'], $c=$_GET['user_type'], $d=$_GET['image'], $e=$_GET['nickname'], $f=$_GET['rating'], $g=$_GET['description'], $a=$_GET['role'], $a=$_GET['status'])->send();

    	_MainModel::viewJSON($result1); }
}
?>