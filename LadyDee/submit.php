
<?php
	$db = mysqli_connect("localhost", "root", "","ladydee"); 
	// $db = mysql_select_db('ladydee');

    $name ="";
	$email ="";
	$messages ="";
	if(isset($_POST['send'])){
        // echo '<script> alert("Good to go"); </script>';
		$name =mysql_real_escape_string($_POST['names']);
		$email = mysql_real_escape_string($_POST['email']);
		$messages = mysql_real_escape_string($_POST['comments']);
		$sql="INSERT INTO enquiry (names,email,messages) VALUES ('$name','$email','$messages')";
        $sent = mysqli_query($db,$sql);
	}
?>