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
    	if (empty($_GET['level']))=_MainModel::{$err_message .= "Не введен level";} 
    	if (empty($_GET['user_type'])) {$err_message .= "Не введен user_type";}
    	if (empty($_GET['image'])) {    $err_message .= "Не введено image";}
    	if (empty($_GET['nickname'])) {    $err_message .= "Не введено nickname";}
    	if (empty($_GET['rating'])) {    $err_message .= "Не введен rating";}
    	if (empty($_GET['description'])) {    $err_message .= "Не введено description";}
    	if (empty($_GET['role'])) {    $err_message .= "Не введена role";}
    	if (empty($_GET['status'])) {    $err_message .= "Не введен status";}

    	$b=$_GET['level'];
       	$c=$_GET['user_type'];
    	$d=$_GET['image'];
    	$e=$_GET['nickname'];
    	$f=$_GET['rating'];
    	$g=$_GET['description'];
    	$h=$_GET['role'];
    	$j=$_GET['status'];

		
    	$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	 
    	
    	 	_MainModel::viewJSON($id, $b, $c, $d, $e, $f, $g, $h, $j);
    	 	
    	 }


    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>