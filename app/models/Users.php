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
    	$result1=_MainModel::table("user_cards")->add(array("id" => 1, "level" => 1, "user_type"=>'volunter', "image"=>'null', "nickname"=>'mamchura', "raiting"=>5, "description"=> 'ghlbj', "role"=>'admin', "status"=>'active'))->send();

    	_MainModel::viewJSON($result1); }
}
?>