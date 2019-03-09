<?php 
	/* backend related */
	class homeController{
		function __construct(){
			include "model/homeModel.php";
			$this->obj=new home();
		}
		function home(){
			$array=$this->obj->home();
			include "view/header.php";
			include "view/body.php";
			include "view/footer.php";
		}
		function about(){
			$array=$this->obj->about();
			include "view/header.php";
			include "view/body.php";
			include "view/footer.php";
		}
		function contact(){
			$array=$this->obj->contact();
			include "view/header.php";
			include "view/body.php";
			include "view/footer.php";
		}
	}
?>