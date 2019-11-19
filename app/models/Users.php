<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();}

    public function MyMetod(){
        $a=5;
        $b=7;
    	$result1=$a+$b;
    	}





    

        _MainModel::viewJSON($result1);   
    }

}

?>