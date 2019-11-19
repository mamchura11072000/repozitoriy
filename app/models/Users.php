<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();}

    public function MyMetod(){$string =_MainModel::$_GET["Hellow"];}

           _MainModel::viewJSON($string);   
    }

}

?>