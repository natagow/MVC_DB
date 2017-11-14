<?php
class ChatboxController {

	public function __construct(){
	}
	public function createMessage(){

		if(isset($_SESSION["logged"])){
			echo "connecté";
		}
		else{
			echo "nooooooooo";
		}

	}
}
?>
