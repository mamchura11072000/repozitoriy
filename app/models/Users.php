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

    	$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();

    	 if(isset($_GET['level'])){echo 'Leve задан';} else {echo 'Level не задано';};
    	 if(isset($_GET['user_type'])){echo 'user_type задан';} else {echo 'user_type не задано';};
    	 if(isset($_GET['image'])){echo 'image задан';} else {echo 'image не задано';};
    	 if(isset($_GET['nickname'])){echo 'nickname задан';} else {echo 'nickname не задано';};
    	 if(isset($_GET['rating'])){echo 'rating задан';} else {echo 'rating не задано';};
    	 if(isset($_GET['description'])){echo 'description задан';} else {echo 'description не задано';};
    	 if(isset($_GET['role'])){echo 'role задан';} else {echo 'role не задано';};
    	 if(isset($_GET['status'])){echo 'status задан';} else {echo 'status не задано';};

    	 	_MainModel::viewJSON($id);
    	 }


    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>