<?php
include  '../modules/db_sql.php';

//encrypt the user input
$inputUserName = $_POST["email"];
$inputPw = $_POST["pw"];
$sugar = '$1$auDzMD4Y$';
$inputUserNameEncry = crypt($inputUserName, $sugar);
$inputPwEncry = crypt($inputPw, $sugar);
$inputUserNameFin = str_replace($sugar, '', $inputUserNameEncry);
$inputPwFin = str_replace($sugar, '', $inputPwEncry);

// read the data from DB
$sql = "SELECT user_name, pw FROM user_login";
$result = dbSelectData($sql);
if ($result == '0 Result')
{
	echo "No Match Find!";
}
else{
	
	while($row = mysqli_fetch_assoc($result))
	{
		$sqlUserName = $row['user_name'];
		$sqlPw = $row['pw'];
		if (($sqlUserName == $inputUserNameFin) && ($sqlPw == $inputPwFin))
		{
			session_start();
			
			//echo "ok";
		}
		else
		{
			echo "error";
		}
	//echo "id:".$row['user_name']."<br/>"."password:".$row['pw'];
	}
}



?>