<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 * branch b1
 */

class Testpresenter extends MainPresenter {

public function MyMetod(){echo (new Users())->MyMetod();}

public function getListUsers(){ echo (new Users())->getListUsers();}

public function addCardsUser(){echo (new Users())->addCardsUser();}

public function editCardsUser(){echo (new Users())->editCardsUser();}

public function deleteCardsUser(){echo (new Users())->deleteCardsUser();}

public function addUserPersonData(){echo (new users())->addUserPersonData();}

	/* labels */
	//public function ruLableTable(){ $this->renderLabel('rus', 'labelLayoutTable'); }

	//public function table(){ $this->render(["title" => "table", "type" => "widgets"]); }

	//public function hello(){ $this->render(["title" => "hello", "type" => "widgets"]); }

}

?>