<?php

require '../config.php';


$username = $_POST['username'];
$password = $_POST['password'];


$sql = 'SELECT *
		FROM users
        WHERE email = :email';
		
		$statement = $pdo->prepare($sql);
		$statement->bindParam(':email', $username, PDO::PARAM_STR);
		$statement->execute();
		$user    = $statement->fetch(PDO::FETCH_ASSOC);
		
		//print_r($user);
		
		if($user){
			if (password_verify($password, $user['password'])) {
				
				
				$_SESSION['user'] 			= $user['id'];
				$_SESSION['u_name'] 		= $user['name'];
				
				
				echo 'success';
				
				
				
			}else{
				echo 'failed';
			}
		}else{
			echo  'failed';
		}
		
		

		




?>

