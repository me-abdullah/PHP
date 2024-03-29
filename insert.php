<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$db_name = 'wp_db';
		$conn = mysqli_connect($servername, $username, $password, $db_name);
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$cname = $_REQUEST['cname'];
		$gname = $_REQUEST['gname'];
		$contact = $_REQUEST['contact'];
		
		$insert = "INSERT INTO students_table VALUES ('$fname', 
			'$lname','$cname','$gname','$contact')";
		
		if(mysqli_query($conn, $insert === TRUE)){
			echo "<h3>data stored</h3>"; 
		} else{
			echo "ERROR $sql. "
				. mysqli_error($conn);
		}

		if(isset($_POST['select'])){

			$select = "SELECT * FROM students_table";
			$result = $conn->query($select);
			
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				  echo "<b>First name: </b>" . $row["first_name"]. "<b> - Last Name: </b>" . $row["last_name"]. "<b> Class Name </b>" . $row["class_name"]. "<b> Group Name </b>" . $row["group_name"] . "<b> Contact Number </b>" . $row["contact_no"] . "<br>";
				}
			}
		}
		 if(isset($_POST['delete'])){

			$del = "DELETE FROM students_table WHERE first_name='$fname'";

if ($conn->query($del) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
		}

		if(isset($_POST['update'])){

			$update = "UPDATE students_table SET last_name='$lname' WHERE first_name='$fname'";

if ($conn->query($update) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
		}


		mysqli_close($conn);
		?>


</body>

</html>
