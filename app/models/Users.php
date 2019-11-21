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
       	$b=$_GET['level'];
    	$c=$_GET['user_type'];
    	$d=$_GET['image'];
    	$e=$_GET['nickname'];
    	$f=$_GET['rating'];
    	$g=$_GET['description'];
    	$h=$_GET['role'];
    	$j=$_GET['status'];

    	$id = _MainModel::table("dd_user_cards")->add(array("level" => $b, "user_type" => $c, "image" => $d, "nickname" => $e, "rating" => $f, "description" => $g, "role" => $h, "status" => $j))->send();
    	if(empty("level")){echo "level"; }else{echo 'Ошибка level';};
    	if(empty("user_typ")){echo "user_type";}else{echo 'Ошибка user_type';};
    	if(empty("image")){echo "image"; }else{echo 'Ошибка image ';};
    	if(empty("nickname")){echo "nickname"; }else{echo 'Ошибка nickname';};
    	if(empty("rating")){echo "rating"; }else{echo 'Ошибка rating';};
    	if(empty("description")){echo "description"; }else{echo 'Ошибка description';};
    	if(empty("role")){echo "role"; }else{echo 'Ошибка role';};
    	if(empty("status")){echo "status"; }else{echo 'Ошибка status';};
    	_MainModel::viewJSON($id);
	}


    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>