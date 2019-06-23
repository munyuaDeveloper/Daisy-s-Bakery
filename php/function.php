 <?php
	function display(){
		if (isset($_POST['signup'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$products = $_POST['product'];
		$birthday = $_POST['birthday'];
		$data=strtotime($birthday);
		$month=date("F",$data);
		$day=date("j",$data);
		$array = array("Select product:", "Caramel", "Chocolate chip", "Bluberry Muffin", "Lemon Meringue");
		$pro = $array[$products];
		
		$message ="<div style='text-align:center;'><h1>Thank you for signing up for the Tropical Treats Weekly newsletter.</h1><br>

			<h3>We have added the following information to our files regarding your interests:</h3><br>

			<strong>Name: </strong>".$name ."<br><strong>Email: </strong>". $email ."<br><strong>Birthday: </strong>". $day ." ". $month;
			echo $message;
			echo "<br Your Product of Interest:</div> " .$pro;
		}
	}

?>