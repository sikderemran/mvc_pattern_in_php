<!--This is a comment. Comments are not displayed in the browser-->
<?php 
	$controller='home';
	$function='home';
	if(isset($_GET['controller']) && $_GET['controller']!=''){
		$controller=$_GET['controller'];
	}
	if(isset($_GET['function']) && $_GET['function']!=''){
		$function=$_GET['function'];
	}
	if(file_exists('controller/'.$controller.'.php')){
		include 'controller/'.$controller.'.php';
		$class=$controller.'controller';
		$obj=new $class();
		if(method_exists($obj,$function)){
			$obj->$function();
		}else{
		echo "page not found";
	}

	}else{
		echo "page not found";
	}
	?>