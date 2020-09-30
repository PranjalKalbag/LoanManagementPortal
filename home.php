<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script type="text/javascript" src="script2.js"></script>
	</head>
	<body>
		<?php
		session_start();
		$conn=mysqli_connect('localhost','root','','iwpda');
		if (!$conn) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		$customer_id = $_SESSION['customer_id'];
		$sql= "SELECT * FROM loan_table_name WHERE customer_id = '$customer_id'  ";
		$result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($result))
        {
		?>
		<div id='maindiv'>
			<div class="jumbotron">
				<h3>ABC BANK LOAN MANAGEMENT</h3>
			</div>	
			<div>
				<table>
					<tr>
						<td><b>Customer ID:</b></td>
						<td><?php echo $row ['customer_id']; ?>  </td>
					</tr>
					<tr>
						<td><b>Loan ID:</b></td>
						<td><?php echo $row ['loan_id']; ?>  </td>
					</tr>
					<tr>
						<td><b>Loan Type:</b></td>
						<td><?php echo $row ['loan_type']; ?>  </td>
					</tr>
					<tr>
						<td><b>Loan Amount:</b></td>
						<td><?php echo $row ['loan_amount']; ?>  </td>
					</tr>
					<form  action="home.php" method="POST" onsubmit="return validateemi()" class="update
					" name="update" id='update'>
					<tr>
						<td><b>EMI:</b></td>
						<td>
							<input type="text" name="emiu" value="<?php echo $row ['emi']; ?> ">
						</td>
					</tr>
					<tr>
						<td><b>Tenure:</b></td>
						<td>
							<select id="tenureval" name="tenureval">
								<option><?php echo $row ['tenure']; ?> </option>
							    <option value="3">3</option>
							    <option value="6">6</option>
							    <option value="9">9</option>
							    <option value="12">12</option>
							    <option value="22">22</option>
							    <option value="24">24</option>
							 </select>
						</td>
					</tr>
						</form>
					<tr>
						<td><b>Date of Opening:</b></td>
						<td><?php echo $row ['opening_date']; ?>  </td>
					</tr>
					<tr>
						<td><b>Status:</b></td>
						<td><?php echo $row ['status']; ?>  </td>
					</tr>
				</table>
				<br>
				<br>	
				<div class="buttons">
					<button class="btn btn-secondary" type='submit' name="submit" form="update" onclick="return validateemi()" >Update Loan</button>
				</div>		
				<?php
					if (isset($_POST['submit'])) {
						$emi = $_POST['emiu'];
						$tenure = $_POST['tenureval'];
						$sql= "SELECT * FROM loan_table_name WHERE customer_id = '$customer_id'  ";
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);
						if ($row['status'] == 'New') {
							$sql2 = "UPDATE loan_table_name SET
							emi = '$emi',
							tenure = '$tenure'
							WHERE customer_id = '$customer_id'
							";
							mysqli_query($conn,$sql2);
							$sql= "SELECT * FROM loan_table_name WHERE customer_id = '$customer_id'  ";
							$result = mysqli_query($conn,$sql);
							$row = mysqli_fetch_array($result);
							echo "<script>alert('Loan Details Updated Successfully');</script>";
							sleep(5);
							header("Refresh:0");
						}
						else{
							echo "<script>alert('Loan Cannot be Updated');</script>";
							echo "<h3>Loan Cannot be Updated</h3>";
						}
					}
		        }
		        ?>
			</div>
		</div>
	</body>
</html>