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
    	$b=isset($_GET['level']);
       	$c=isset($_GET['user_type']);
    	$d=isset($_GET['image']);
    	$e=isset($_GET['nickname']);
    	$f=isset($_GET['rating']);
    	$g=isset($_GET['description']);
    	$h=isset($_GET['role']);
    	$j=isset($_GET['status']);
    	if($b!="" && $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $j!=""){echo "Error"}

		
    	$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	 
    	
    	 	_MainModel::viewJSON($id);
    	 	
    	 }

    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>