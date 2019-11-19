<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();}

    public function MyMetod(){
    	echo 'Привет, ' . htmlspecialchars($_GET["name"]) . '!';
    }

         // _MainModel::$string;   
    }

?>