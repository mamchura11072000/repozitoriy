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
    	$b = $_GET ['level'];
    	$c = $_GET ['user_type'];
    	$d = $_GET ['image'];
    	$e = $_GET ['nickname'];
    	$f = $_GET ['rating'];
    	$g = $_GET ['description'];
    	$h = $_GET ['role'];
    	$j = $_GET ['status'];
    	
    	 echo empty($_GET['level']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['user_type']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['image']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['nickname']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['rating']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['description']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['role']) ? 'пустая' : 'не пустая', '<br>'; 
    	 echo empty($_GET ['status']) ? 'пустая' : 'не пустая', '<br>';


		
    	$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	 
    	
    	 	_MainModel::viewJSON($id);
    	 	
    	 }

    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>