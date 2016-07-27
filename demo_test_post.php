<?php

	if(isset($_POST['name']) && $city=$_POST['city']){
		$name=$_POST['name'];
		$city=$_POST['city'];
		
		echo "Dear $name. hope you live in $city.";
	

}

?>