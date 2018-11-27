<?php
if(isset($_POST["number"])){	
	$number = $_POST["number"];	
	$array = array();
	 
	while ($number > 0) { 
    	$array[] = $number % 10; 
    	$number = intval($number / 10);  
	}

	$result=array_sum($array);	
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Task1</title>
  </head>
  <body>
  	<center><p>Please, enter a number:</p>
    <form name="calc" method="post" action="">
    <input type="number" name="number">
    <input type="submit" value="Calculate">
    </form>
    <?php echo "Result: $result"; ?>
    </center>
  </body>
</html>

