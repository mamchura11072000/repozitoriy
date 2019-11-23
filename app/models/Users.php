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
    		empty($_GET['nickname'])||
    		empty($_GET['rating'])||
    		empty($_GET['description'])||
    		empty($_GET['role'])||
    		empty($_GET['status'])){
    		
    		$eror= _MainModel::get($_GET['level']='eror level')||($_GET['user_type']='eror user_type')||($_GET['image']='eror image')||($_GET['nickname']='eror nickname')||($_GET['rating']='erorr rating')||($_GET['description']='eror description')||($_GET['role']='eror role')||($_GET['status']='error status');

    		}
    	else{

    	$b = $_GET ['level'];
    	$c = $_GET ['user_type'];
    	$d = $_GET ['image'];
    	$e = $_GET ['nickname'];
    	$f = $_GET ['rating'];
    	$g = $_GET ['description'];
    	$h = $_GET ['role'];
    	$j = $_GET ['status'];

    	}
    	
    		
    	$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	 
    	
    	 	_MainModel::viewJSON($id, $eror);
    	 }

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
    		
    		echo "empty";
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


    public function deleteCardsUser(){
    	if (empty($_GET ['id'])){echo "eror";}
    	else{$a = $_GET ['id'];}

        $result = _MainModel::table("dd_user_cards")->delete(array('id'=>$a))->send();
        _MainModel::viewJSON($result);
        }
    	 
}
?>