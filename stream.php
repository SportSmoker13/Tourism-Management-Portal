<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'tourism';

	session_start();
    $_SESSION['username'] = $_POST['username'];

	
	if(isset($_POST['submit']))
	{
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		if(!$conn)
			echo "Couldn't Connect to Server!!!";
	

		$username = $_POST['username'];
		$pass	  = $_POST['password'];

		$result = mysqli_query($conn,"SELECT * FROM data WHERE UserName = '$username' and PassWord = '$pass'");

		$row = mysqli_fetch_array($result);
		if($row['UserName'] == $username && $row['PassWord'] == $pass &&  $row['admin'] != NULL)
		{
			echo "<alert> Admin Logged in Successfully </alert>";
			header( "Location: register_admin.php" );
			exit();
		}
		else if($row['UserName'] == $username && $row['PassWord'] == $pass)
		{
			session_start();

			$_SESSION['username']   = $username;
	    	$_SESSION['pass']   	= $pass;

			echo "<alert> Logged in Successfully </alert>";
			header( "Location: home.php" );
			exit();
		}
		else
		{
			echo "<alert> Invalid User !!! </alert>";
			exit();
		}
	}
	
	//For Register:
	if(isset($_POST['submit_1']))
	{
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		if(!$conn)
			echo "Couldn't Connect to Server!!!";

		$username = $_POST['username'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass = $_POST['pass'];

		$query = "INSERT INTO data (Name,UserName,PassWord,PhoneNo,Email) VALUES ('$name','$username','$pass','$phone','$email')";

		mysqli_select_db($conn,'tourism');
		$end = mysqli_query($conn,$query);

		if($end)
		 {

			echo "<alert> Data Added Successfully</alert>";
			header( "Location: login_page.php" );
			exit();

		}
		else
		{
			echo "<alert> Data Entry Failed</alert>";
			exit();
		}
	}
	if(isset($_POST['submit_2']))
	{
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		if(!$conn)
			echo "Couldn't Connect to Server!!!";

		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.',$fileName);
		$fileActExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png');

		if(in_array($fileActExt, $allowed)){
			if($fileError === 0){
				if($fileSize < 100000){
					$fileNameNew = uniqid('',TRUE).".".$fileActualExt;
					$fileDestn = 'image/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestn);
					header("Location: register_admin.php?UplaodSuccessful");
				}else{
					echo "<alert> File Size Limit Exceeded</alert>";
				}
			}else{
				echo "<alert> Error in Uploading File </alert>";
			}
		}else{
			echo "<alert> Invalid File Type</alert>";
		}

		/*$nameplace = $_POST['nameplace'];
		$descrp = $_POST['descrp'];
		$image = $fileDestn;
		$location = $_POST['location'];
		$travel = $_POST['travel'];
		$special = $_POST['special'];
		$cuisene = $_POST['cuisene'];
		$stay = $_POST['stay'];
		
		$query = "INSERT INTO locations (NameOfPlace,Description,Image,Location,Travel,Special,Cuisene,Stay) VALUES ('$nameplace','$descrp','$image','$location','$travel'.'$special','$cuisene','$stay')"; 

		mysqli_select_db($conn,'tourism');
		$end = mysqli_query($conn,$query);

		if($end && move_uploaded_file($_FILES['dan']['name'],$target))
		 {

			echo "<alert> Data Added Successfully</alert>";
			header( "Location: register_admin.php" );
			exit();

		}
		else
		{
			echo "<alert> Data Entry Failed</alert>";
			exit();
		}*/
	}

 ?>