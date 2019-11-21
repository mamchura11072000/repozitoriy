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
    	
    	$id = _MainModel::table("dd_user_cards")->add(array(  "level" => "3", "user_type" => "volunter", "image" => "null", "nickname" => "dmitriev", "rating" => "5", "description" => "dfghj", "role" => "user", "status" => "active"))->send();
    	if(empty("level")){echo "level"; }else{echo 'Ошибка';};
    	if(empty("user_typ")){echo "user_type";}else{echo 'Ошибка';};
    	if(empty("image")){echo "image"; }else{echo 'Ошибка';};
    	if(empty("nickname")){echo "nickname"; }else{echo 'Ошибка';};
    	if(empty("rating")){echo "rating"; }else{echo 'Ошибка';};
    	if(empty("description")){echo "description"; }else{echo 'Ошибка';};
    	if(empty("role")){echo "role"; }else{echo 'Ошибка';};
    	if(empty("status")){echo "status"; }else{echo 'Ошибка';};
    	_MainModel::viewJSON($id);
	}


    /*public function editCardsUser(){
    	$result1=_MainModel::table("dd_user_cards")->edit(array("id"=>"3", "level"=>"1", "user_type"=>"volunter", "image"=>"null", "nickname"=>"sokolov", "rating"=>"6", "description"=>"ghjvhyinj", "role"=>"user", "status"=>"active"))->send();

    	_MainModel::viewJSON($result1); }*/
}
?>