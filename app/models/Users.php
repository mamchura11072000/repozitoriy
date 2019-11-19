<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();}

    public function MyMetod(){

        $result1=_MainModel::table("dd_user_log")->get("id_user", "info")->send();}





    
        _MainModel::viewJSON($summa);   
    }

}

?>