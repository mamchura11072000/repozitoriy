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
    	$id = $_GET ['a'];
    	$level = $_GET ['b'];
    	$user_type = $_GET ['c'];
    	$image = $_GET ['d'];
    	$nickname = $_GET ['e'];
    	$rating= $_GET ['f'];
    	$description = $_GET ['g'];
    	$role = $_GET ['h'];
    	$status = $_GET ['h'];

    	$result1=_MainModel::table("dd_user_cards")->add(array($id=>"5", $level=>"3", $user_type=>"volunter", $image=
    		>"null", $nickname=>"dmitriev", $rating=>"5", $description=>"dfghj", $role=>"user", $status=>"active"))=>send();

    _MainModel::viewJSON($result1);}


    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>