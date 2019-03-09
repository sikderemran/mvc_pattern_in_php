<?php 
	class Home{
		function __construct(){

		}
		function home(){
			$array= array('title' =>'home' ,'data'=>'Model–View–Controller is an architectural pattern commonly used for developing user interfaces that divides an application into three interconnected parts.' );
			return $array;
		}
		function about(){
			$array= array('title' =>'about' ,'data'=>'PHP: Hypertext Preprocessor is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group' );
			return $array;
		}
		function contact(){
			$array= array('title' =>'contact' ,'data'=>'Some quick example text to build on the card title and make up the bulk of the card content' );
			return $array;
		}
	}
?>