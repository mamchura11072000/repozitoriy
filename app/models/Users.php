<?php
 
class Users extends _MainModel {
//------------------------------------------------------------------------------------------------------------------  
    public function addCardsUser(){
    	if (empty($_GET['level'])||empty ($_GET['user_type'])||empty($_GET['image'])||
    		empty($_GET['nickname'])||  		empty($_GET['rating'])||empty($_GET['description'])||
    		empty($_GET['role'])||empty($_GET['status'])){
            _MainModel::viewJSON(["error"=>"Empty params"]);; 
    	}else{
    		$b = $_GET ['level'];
    		$c = $_GET ['user_type'];
    		$d = $_GET ['image'];
    		$e = $_GET ['nickname'];
    		$f = $_GET ['rating'];
    		$g = $_GET ['description'];
    		$h = $_GET ['role'];
    		$j = $_GET ['status'];
    		$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();_MainModel::viewJSON($id);
       	}
    }
//--------------------------------------------------------------------------------------------------------------------
    public function editCardsUser(){
		if (empty($_GET ['id'])){
      		_MainModel::viewJSON(["error"=>"Empty ID"]); 
    	}else{
    		$id = $_GET ['id'];
    		$arr=[];
    		if(!empty($_GET['level'])){$arr['level']=$_GET['level'];}
    		if(!empty($_GET['user_type'])){$arr['user_type']=$_GET ['user_type'];}
    		if(!empty($_GET['image'])){$arr['image']=$_GET ['image'];}
    		if(!empty($_GET['nickname'])){$arr['nickname']=$_GET ['nickname'];}
    		if(!empty($_GET['rating'])){$arr['rating']=$_GET ['rating'];}
    		if(!empty($_GET['description'])){$arr['description']=$_GET ['description'];}
    		if(!empty($_GET['role'])){$arr['role']=$_GET ['role'];}
    		if(!empty($_GET['status'])){$arr['status']=$_GET ['status'];}
    		$result = _MainModel::table("dd_user_cards")->edit($arr, array('id'=>$id))->send();
   	    }     	          
    }
//--------------------------------------------------------------------------------------------------------------------
    
    public function deleteCardsUser(){
    	if (empty($_GET ['id'])){
    		_MainModel::viewJSON(["error"=>"Empty ID"]);
    	}else{
    		$id = $_GET ['id'];
    		$result = _MainModel::table("dd_user_cards")->delete(array('id' => $id))->send();
    	}
    }
//--------------------------------------------------------------------------------------------------------------------
	public function editStatusUser(){
    	if (empty($_GET ['id'])||empty($_GET['status'])){
    		_MainModel::viewJSON(["error"=>"Empty params"]); 
    	}else{
    		$a = $_GET ['id'];
    		$j = $_GET ['status'];
    		$result1=_MainModel::table("dd_user_cards")->edit(array('status' => $j), array('id'=>$a))->send();
        }
    }
//--------------------------------------------------------------------------------------------------------------------
    public function addUserPersonData(){
    	if (empty($_GET['password'])||empty ($_GET['phone'])||empty($_GET['phone_token'])||empty($_GET['phone_token_data'])||empty($_GET['doc_photo'])||empty($_GET['surname'])||empty($_GET['name'])||empty($_GET['patronymic'])||empty($_GET['timestamp'])||empty($_GET['data_of_brith'])||empty($_GET['address'])||empty($_GET['coordinates'])||empty($_GET['gender'])||empty($_GET['other_data'])){
    		_MainModel::viewJSON(["error"=>"Empty params"]);
    	}else{ 
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
    		$m = $_GET ['address'];
    		$n = $_GET ['coordinates'];
    		$o = $_GET ['gender'];
    		$p = $_GET ['other_data'];	
    		$id = _MainModel::table("dd_user_person_data")->add(array('password' => $b, 'phone' => $c, 'phone_token' => $d, 'phone_token_data' => $e, 'doc_photo' => $f, 'surname' => $g, 'name' => $h, 'patronymic' => $j, 'timestamp' => $k, 'data_of_brith' => $l, 'address' => $m, 'coordinates' => $n, 'gender' => $o, 'other_data' => $p))->send();
    		_MainModel::viewJSON($id);
    	}
    }
//--------------------------------------------------------------------------------------------------------------------
   public function editUserPersonData(){
    	if (empty($_GET ['id'])){
    		_MainModel::viewJSON(["error"=>"Empty ID"]);  	    	
    	}else{
    		$a = $_GET ['id'];
    	 	$arr=[];
    		if(!empty($_GET['password'])){$arr['password']=$_GET ['password'];}
    		if(!empty($_GET['phone'])){$arr['phone']=$_GET ['phone'];}
    		if(!empty($_GET['phone_token'])){$arr['phone_token']=$_GET ['phone_token'];}
    		if(!empty($_GET['phone_token_data'])){$arr['phone_token_data']=$_GET ['phone_token_data'];}
    		if(!empty($_GET['doc_photo'])){$arr['doc_photo']=$_GET ['doc_photo'];}
    		if(!empty($_GET['surname'])){$arr['surname']=$_GET ['surname'];}
    		if(!empty($_GET['name'])){$arr['name']=$_GET ['name'];}
    		if(!empty($_GET['patronymic'])){$arr['patronymic']=$_GET ['patronymic'];}
    		if(!empty($_GET['timestamp'])){$arr['timestamp']=$_GET ['timestamp'];}
    		if(!empty($_GET['data_of_brith'])){$arr['data_of_brith']=$_GET ['data_of_brith'];}
    		if(!empty($_GET['address'])){$arr['address']=$_GET ['address'];}
    		if(!empty($_GET['coordinates'])){$arr['coordinates']=$_GET ['coordinates'];}
    		if(!empty($_GET['gender'])){$arr['gender']=$_GET ['gender'];}
    		if(!empty($_GET['other_data'])){$arr['other_data']=$_GET ['other_data'];}
    		$result = _MainModel::table("dd_user_person_data")->edit($arr, array('id'=>$a))->send();    		
    	}
    }
//--------------------------------------------------------------------------------------------------------------------
    public function deleteUserPersonData(){
    	if (empty($_GET ['id'])){
    		_MainModel::viewJSON(["error"=>"Empty ID"]); 
    	}else{
    		$id = $_GET ['id'];
    		$result = _MainModel::table("dd_user_person_data")->delete(array('id' => $id))->send();
    	}
    }
//--------------------------------------------------------------------------------------------------------------------
 	public function getPDOUserPersonDataANDCardUser (){
 		if(empty(_MainModel::$params_url ['id'])){
 			_MainModel::viewJSON(["Error"=>"Empty ID"]);
 	   }else{
			$stmt = self::$db->prepare("SELECT * FROM dd_user_person_data JOIN dd_user_cards WHERE dd_user_cards.id = dd_user_person_data.id AND dd_user_person_data.id=:id");
			$result_query = $stmt->execute(array(":id"=>_MainModel::$params_url ['id']));
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			_MainModel::viewJSON($rows);
 	   	}
 	}			
//--------------------------------------------------------------------------------------------------------------------
	public function getPDOAll (){
			$stmt = self::$db->prepare("SELECT * FROM dd_user_cards JOIN dd_user_person_data WHERE dd_user_cards.id = dd_user_person_data.id");
			$result_query = $stmt->execute(array());
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			_MainModel::viewJSON($rows);
	}
}
?>