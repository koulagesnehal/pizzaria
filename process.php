
<?php
   
   $myFile = "data/orders.json";
  
	
	 header("Content-Type: application/json; charset=UTF-8");
		$obj = json_decode($_POST["x"], false);

		$jsondata = json_encode($obj, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents($myFile, $jsondata)) {
	        $out= 'Your order is confirmed';
	    }
	   else 
	        $out= "Error. PHP code does not work on local machine";
		
echo $out;
?>
