<?php
 
class Users {
   

    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();
    _MainModel::viewJSON($result);   }
//---------------------------------------------------------------------------------------------------------------------
    public function MyMetod(){
    	$a = $_GET ['a'];
    	$b = $_GET ['b'];
    	$c = $_GET ['c'];
    	$summa = $a + $b + $c;
    	echo "Сумма $a + $b + $c = $summa";}
         
//---------------------------------------------------------------------------------------------------------------------    
    public function addCardsUser(){
    	
    	if (empty($_GET['level'])||empty ($_GET['user_type'])||empty($_GET['image'])||empty($_GET['nickname'])||	empty($_GET['rating'])||empty($_GET['description'])||empty($_GET['role'])||	empty($_GET['status'])){
    		
    		$b = $_GET ['level'];
    		$c = $_GET ['user_type'];
    		$d = $_GET ['image'];
    		$e = $_GET ['nickname'];
    	$f = $_GET ['rating'];
    	$g = $_GET ['description'];
    	$h = $_GET ['role'];
    	$j = $_GET ['status'];

    	    }
    	else{
    	echo "error";
    	}
    	
    		
    	$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	     	
    	 	_MainModel::viewJSON($id [(empty($_GET['level'])=>"eror_level"]);    	 	

    	 }

//---------------------------------------------------------------------------------------------------------------------
    
    public function editCardsUser(){
    	if (empty($_GET ['id'])||
    		empty($_GET['level'])|| 
    		empty ($_GET['user_type'])||
    		empty($_GET['image'])||
    		empty($_GET['nickname'])||
    		empty($_GET['rating'])||
    		empty($_GET['description'])||
    		empty($_GET['role'])||
    		empty($_GET['status'])){
    		
    		echo "error";
    		}
    	else{

    	$a = $_GET ['id'];
    	$b = $_GET ['level'];
    	$c = $_GET ['user_type'];
    	$d = $_GET ['image'];
    	$e = $_GET ['nickname'];
    	$f = $_GET ['rating'];
    	$g = $_GET ['description'];
    	$h = $_GET ['role'];
    	$j = $_GET ['status'];

    	}

    	$result1=_MainModel::table("dd_user_cards")->edit(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j), array('id'=>$a))->send();
    }

//---------------------------------------------------------------------------------------------------------------------
    
    public function deleteCardsUser(){
    	if (empty($_GET ['id'])){echo "eror";}
    	else{$a = $_GET ['id'];}

        $result = _MainModel::table("dd_user_cards")->delete(array('id'=> $a))->send();;
        _MainModel::viewJSON($result);
        }

//---------------------------------------------------------------------------------------------------------------------

    public function addUserPersonData(){
    	
    	if (empty($_GET['password'])|| 
    		empty ($_GET['phone'])||
    		empty($_GET['phone_token'])||
    		empty($_GET['phone_token_data'])||
    		empty($_GET['doc_photo'])||
    		empty($_GET['surname'])||
    		empty($_GET['name'])||
    		empty($_GET['patronymic'])||
    		empty($_GET['timestamp'])||
    		empty($_GET['data_of_brith'])||
    		empty($_GET['address'])||
    		empty($_GET['coordinates'])||
    		empty($_GET['gender'])||
    		empty($_GET['other_data']))	{
    		
    	    echo "Введены не все значения:";     		
    		}
    	else{

    	$b = $_GET ['password'];
    	$c = $_GET ['phone'];
    	$d = $_GET ['phone_token'];
    	$e = $_GET ['phone_token_data'];
    	$f = $_GET ['doc_photo'];
    	$g = $_GET ['surname'];
    	$h = $_GET ['name'];
    	$j = $_GET ['patronymic'];
    	$k = $_GET ['timestamp'];
    	$l = $_GET ['data_of_brith'];
    	$m = $_GET ['addess'];
    	$n = $_GET ['coordinates'];
    	$o = $_GET ['gender'];
    	$p = $_GET ['other_data'];

    	}
    	
    		
    	$idPerson = _MainModel::table("dd_user_person_data")->add(array('password' => $b, 'phone' => $c, 'phone_token' => $d, 'phone_token_data' => $e, 'doc_photo' => $f, 'surname' => $g, 'name' => $h, 'patronymic' => $j, 'timestamp' => $k, 'data_of_brith' => $l, 'address' => $m, 'coordinates' => $n, 'gender' => $o, 'other_data' => $p))->send();   	
    	 
    	
    	 	_MainModel::viewJSON($idPerson);
    	 }

    	 
}
?>