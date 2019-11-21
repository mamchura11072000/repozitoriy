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
    	$a=$_GET['id'];
    	$b=$_GET['level'];
    	$c=$_GET['user_type'];
    	$d=$_GET['image'];
    	$e=$_GET['nickname'];
    	$f=$_GET['rating'];
    	$g=$_GET['description'];
    	$h=$_GET['role'];
    	$j=$_GET['status'];


    	$id = _MainModel::table("dd_user_cards")->add(array( 'id'=>"5", "level" => "3", "user_type" => "volunter", "image" => "null", "nickname" => "dmitriev", "rating" => "5", "description" => "dfghj", "role" => "user", "status" => "active"))->send();
    	if(isset($_GET['id'])&&!empty($_GET['id'])){echo $_GET['id']; }else{echo 'Ошибка';};
    	if(isset($_GET['level'])&&!empty($_GET['level'])){echo $_GET['level']; }else{echo 'Ошибка';};
    	if(isset($_GET['user_type'])&&!empty($_GET['user_typ'])){echo $_GET['user_type']; }else{echo 'Ошибка';};
    	if(isset($_GET['image'])&&!empty($_GET['image'])){echo $_GET['image']; }else{echo 'Ошибка';};
    	if(isset($_GET['nickname'])&&!empty($_GET['nickname'])){echo $_GET['nickname']; }else{echo 'Ошибка';};
    	if(isset($_GET['rating'])&&!empty($_GET['rating'])){echo $_GET['rating']; }else{echo 'Ошибка';};
    	if(isset($_GET['description'])&&!empty($_GET['description'])){echo $_GET['description']; }else{echo 'Ошибка';};
    	if(isset($_GET['role'])&&!empty($_GET['role'])){echo $_GET['role']; }else{echo 'Ошибка';};
    	if(isset($_GET['status'])&&!empty($_GET['status'])){echo $_GET['status']; }else{echo 'Ошибка';};
    	_MainModel::viewJSON($id);
	}


    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>