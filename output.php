<?php 
	if(isset($_POST['submit']))
	{
		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$loginerror = 0;
		// Create connection
		$conn = new mysqli($servername, $username, $password,"iwpda");
		$database = mysqli_select_db($conn,'iwpda');
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		$customer_id = $_POST['customer_id'];
		$loan_id = $_POST['loan_id'];
		$sql= "SELECT * FROM loan_table_name WHERE customer_id = '$customer_id' AND loan_id = '$loan_id' ";
		$result = mysqli_query($conn,$sql);
		$check = mysqli_fetch_array($result);
		if(isset($check)){
			$_SESSION['customer_id'] = $customer_id;
			$_SESSION['loan_id'] = $loan_id;
			echo '
			<form method="get" action="home.php">
			    <input type="hidden" name="customer_id" value="">
			    <input type="hidden" name"loan_id", value="">
			    <input type="hidden">
			</form>';
			header("Location: home.php");
		}
		else{
		echo '<script>
				document.getElementById("loginerror").style.display = inline;
				</script>';
		}
	}
 ?>