 <?php
	$servername = "localhost";
	
	$username = "root";
	$password = "";
	$database="test1";


	

// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
// Check connection
	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
	}




	else{
	
	echo "Database connected successfully";	


	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$city = $_POST['city'];
	// echo "Database connected successfully";	

	$sql = "INSERT INTO `contact` (`email`, `fname`, `city`) VALUES ('$email', '$fname', '$city')";	
	// echo "Database connected successfully";	

	if($_GET['action'] == 'contact'){
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$city = $_POST['city'];
	$sql = "INSERT INTO `contact` (`email`, `fname`, `city`) VALUES ('$email', '$fname', '$city')";

	if ($conn->query($sql)) {
  	echo "New record created successfully";
	}
	else {
  	echo "Error: ";
	}
	}	
	else if($_GET['action'] == 'adoptform'){

	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$city = $_POST['city'];
	$cnum = $_POST['cnum'];
	$yes = $_POST['yes'];
	$no = $_POST['no'];
	$des = $_POST['des'];

	// print_r($yes);

	$sql = "INSERT INTO `adopt` (`email`, `fname`, `city`,`cnum`,`yes`,`no`,`des`) VALUES ('$email', '$fname', '$city','$cnum','$yes','$no','$des')";
	
	if($conn->query($sql)){
		echo "Data Inserted Into Adopt Table";

	}
	else{
		echo "error: ";		
	}

		
	

	// if ($conn->query($sql)) {
 //  	echo "New record created successfully";
	// }



	// $sql =  "SELECT ALL email from `adopt`";
	// $result=array();
	// $a = array();
	// $result = $conn->query($sql);
	// // $result = $conn->query($sql);
	// // $arra = mysqli_fetch_array();
	// print_r($result);
	// while ($row = $result -> fetch_row()) {
	// 	// $a = $result -> fetch_row();
	// 	// $email = $_POST['email']
 //    printf ("%s\n", $row[0]);

    // if(){
    // 	echo "unable to post this this entry ";

    // }
  }
  $sql = "SELECT * FROM `team`" ;

		if(conn->query($sql)){
			$result = $conn->query($sql);
			while ($row= $result -> fetch_row()) {
				# code...
				printf("%s ", $row[0]);
			}
		}
		else{
			echo "Not Inserted";
		}
  		// print_r(array_values($row));




	// $row = $result -> fetch_array(MYSQLI_ASSOC);
	// mysql_num_rows($row);
	// $row = $result -> fetch_array(MYSQLI_ASSOC);
	// $row = $result -> fetch_array(MYSQLI_ASSOC);
	// print_r(count($row));
	// $row = $result -> fetch_array();
	// printf ("%s\n", $row["email"]);
	// printf ("%s\n", $row["email"]);
// $i=0;
// 	for ($i=0;$i<= count($))

	

		// echo "Data Inserted : ";
	}
	
	
	$conn->close();


?>