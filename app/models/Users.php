<?php
 
class Users extends _MainModel {

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
         
        	 _MainModel::viewJSON(["error"=>"errror"]); 	
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

    		$id = _MainModel::table("dd_user_cards")->add(array('level' => $b, 'user_type' => $c, 'image' => $d, 'nickname' => $e, 'rating' => $f, 'description' => $g, 'role' => $h, 'status' => $j))->send();   	
    	     	 _MainModel::viewJSON($id);
    	}
    	
    }

//---------------------------------------------------------------------------------------------------------------------
    
    public function editCardsUser(){
  
    	if (empty($_GET ['id'])){
    		
    	
    		 _MainModel::viewJSON(["error"=>"errror"]); 

    		}
    	else{
    		$id = $_GET ['id'];
    	
    		$arr=[];
    		
    		if(!empty($_GET['level'])){$arr['level']=$b; $arr['level']=$b;}
    		if(!empty($_GET['user_type'])){$c = $_GET ['user_type']; $arr['user_type']=$c;}
    	    if(!empty($_GET['image'])){$d = $_GET ['image']; $arr['image']=$d;}
    	    if(!empty($_GET['nickname'])){$e = $_GET ['nickname']; $arr['nickname']=$e;}
    	    if(!empty($_GET['rating'])){$f = $_GET ['rating']; $arr['rating']=$f;}
    	    if(!empty($_GET['description'])){$g = $_GET ['description']; $arr['description']=$g;}
    	    if(!empty($_GET['role'])){$h = $_GET ['role']; $arr['role']=$h;}
    	    if(!empty($_GET['status'])){$j = $_GET ['status']; $arr['status']=$j;}
    	 

    	   
    	    $result = _MainModel::table("dd_user_cards")->edit($arr, array('id'=>$id))->send();
   	        } 
    	          
    	}    	

//--------------------------------------------------------------------------------------------------------------------
    
    public function deleteCardsUser(){
    	if (empty($_GET ['id'])){

			_MainModel::viewJSON(["error"=>"errror"]); 
    		}
    	else{

    		$id = $_GET ['id'];
    		$result = _MainModel::table("dd_user_cards")->delete(array('id' => $id))->send();
    	    }
    	}
//--------------------------------------------------------------------------------------------------------------------

	public function editStatusUser(){
    	if (empty($_GET ['id'])||
    		empty($_GET['status'])){
    		
    		 _MainModel::viewJSON(["error"=>"errror"]); 
    		}
    	else{

    	$a = $_GET ['id'];
       	$j = $_GET ['status'];

        $result1=_MainModel::table("dd_user_cards")->edit(array('status' => $j), array('id'=>$a))->send();
            }
    	}

//--------------------------------------------------------------------------------------------------------------------

    public function addUserPersonData(){
    	if (empty($_GET['password'])||empty ($_GET['phone'])||empty($_GET['phone_token'])||empty($_GET['phone_token_data'])||empty($_GET['doc_photo'])||empty($_GET['surname'])||empty($_GET['name'])||empty($_GET['patronymic'])||empty($_GET['timestamp'])||empty($_GET['data_of_brith'])||empty($_GET['address'])||empty($_GET['coordinates'])||empty($_GET['gender'])||empty($_GET['other_data']))	{

    		_MainModel::viewJSON(["error"=>"errrror"]);
    	    	      		
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
    		$m = $_GET ['address'];
    		$n = $_GET ['coordinates'];
    		$o = $_GET ['gender'];
    		$p = $_GET ['other_data'];	

    		
    		}
    	  	 $id = _MainModel::table("dd_user_person_data")->add(array('password' => $b, 'phone' => $c, 'phone_token' => $d, 'phone_token_data' => $e, 'doc_photo' => $f, 'surname' => $g, 'name' => $h, 'patronymic' => $j, 'timestamp' => $k, 'data_of_brith' => $l, 'address' => $m, 'coordinates' => $n, 'gender' => $o, 'other_data' => $p))->send();
    		   _MainModel::viewJSON($id);
    	
    	 }


//--------------------------------------------------------------------------------------------------------------------

   public function editUserPersonData(){
    	if (empty($_GET ['id'])){

    		_MainModel::viewJSON(["error"=>"errrror"]);
    	    	      		
    		}
    	else{    

    	 	$a = $_GET ['id'];

    	 	$arr=[];
    		if(!empty($_GET['password'])){$b = $_GET ['password']; $arr['password']=$b;}
    		if(!empty($_GET['phone'])){$c = $_GET ['phone'];$arr['phone']=$c;}
    		if(!empty($_GET['phone_token'])){$d = $_GET ['phone_token'];$arr['phone_token']=$d;}
    		if(!empty($_GET['phone_token_data'])){$e =$_GET ['phone_token_data'];$arr['phone_token_data']=$e;}
    		if(!empty($_GET['doc_photo'])){$f = $_GET ['doc_photo'];$arr['doc_photo']=$f;}
    		if(!empty($_GET['surname'])){$g = $_GET ['surname'];$arr['surname']=$g;}
    		if(!empty($_GET['name'])){$h = $_GET ['name'];$arr['name']=$h;}
    		if(!empty($_GET['patronymic'])){$j = $_GET ['patronymic'];$arr['patronymic']=$j;}
    		if(!empty($_GET['timestamp'])){$k = $_GET ['timestamp'];$arr['timestamp']=$k;}
    		if(!empty($_GET['data_of_brith'])){$l = $_GET ['data_of_brith'];$arr['data_of_brith']=$l;}
    		if(!empty($_GET['address'])){$m = $_GET ['address'];$arr['address']=$m;}
    		if(!empty($_GET['coordinates'])){$n = $_GET ['coordinates'];$arr['coordinates']=$n;}
    		if(!empty($_GET['gender'])){$o = $_GET ['gender'];$arr['gender']=$o;}
    		if(!empty($_GET['other_data'])){$p = $_GET ['other_data'];$arr['other_data']=$p;}
    		$result = _MainModel::table("dd_user_person_data")->edit($arr, array('id'=>$a))->send();    		
    	        }
    	    }


//--------------------------------------------------------------------------------------------------------------------

    public function deleteUserPersonData(){
    	if (empty($_GET ['id'])){

			_MainModel::viewJSON(["error"=>"errror"]); 
    		}
    	else{

    		$id = $_GET ['id'];
    		$result = _MainModel::table("dd_user_person_data")->delete(array('id' => $id))->send();
    	    }
    	}

//--------------------------------------------------------------------------------------------------------------------
 	public function getPDOUserPersonDataANDCardUser (){
 	   		
   		$stmt = self::$db->prepare("SELECT * FROM dd_user_cards, dd_user_person_data ");
   		$result_query = $stmt->execute(array());

		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

		_MainModel::viewJSON($rows);
	}

//--------------------------------------------------------------------------------------------------------------------
 	public function getPDOAll (){
 	   	/*if(empty(_MainModel::$params_url ['id'])){

 	   	_MainModel::viewJSON(["Error"=>"отсутствует id"]);
 	   	    }
 	   	 else{
 	   	 
 	   	 }*/	
 	   	$stmt = self::$db->prepare("SELECT * FROM dd_user_person_data
        LEFT JOIN dd_user_cards ON dd_user_cards.id = dd_user_person_data.id AND dd_user_cards.id=:id");

		$result_query = $stmt->execute(array(":id"=>_MainModel::$params_url ['id']));

		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

		_MainModel::viewJSON($rows);

   		 	  
	}

}
?>