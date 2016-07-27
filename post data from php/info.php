<?php
	$name=array("RAVI",
				"SURAJ",
				"SARIM",
				"SHUBHAM",
				"ABHISHEKH",
				"JATIN",
				"CHAYAN",
				"NIPUN",
				"ASHUTOSH",
				"ZEESHAN",
				"LOKESH",
				"NAMAN",
				"NAYAN",
				"CHAMAN",
				 "SHEETAL",
				 "YASH");


	if(isset($_POST['suggest'])){
		$suggest = $_POST['suggest'];

		$len = strlen($suggest);

			
		 if(!empty($suggest)){
		 	
		 	foreach ($name as $namesearch => $element) {

		 		if(substr_compare($element,$suggest,0,$len,true)==0)
		 			echo $element.'<br>';
		 		
		 	
		  	}
		 }

	 }else{
	 	echo "Please enter character to suggest.";
	 }

?>