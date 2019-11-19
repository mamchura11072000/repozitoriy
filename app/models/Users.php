<?php
 
class Users {


    public function getListUsers(){
        $result = _MainModel::table("users_cards")->get()->send();}

    public function MyMetod(){
       $a = $_GET['a'];
       $b = $_GET['b'];
       $c = $_GET['c'];
       $summa = _MainModel::($a + $b + $c);

   





    
        _MainModel::($summa);   
    }

}

?>