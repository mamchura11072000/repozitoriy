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
    	
    	if (empty($_GET['level'])|| 
    		empty ($_GET['user_type'])||
    		empty($_GET['image'])||
    		empety($_GET['nickname'])||
    		empety($_GET['rating'])||
    		empety($_GET['description'])||
    		empety($_GET['role'])||
    		empety($_GET['status'])){
    		
    		echo 'error level';
    	}
    	else{

    	$b = $_GET ['level'];
    	echo 'yjhv';
    	$c = $_GET ['user_type'];
    	$d = $_GET ['image'];
    	$e = $_GET ['nickname'];
    	$f = $_GET ['rating'];
    	$g = $_GET ['description'];
    	$h = $_GET ['role'];
    	$j = $_GET ['status'];

    	}
    	
    	
    	
    			
    	//$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	 
    	
    	 	//_MainModel::viewJSON($id);
    	 	
    	 }

    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>