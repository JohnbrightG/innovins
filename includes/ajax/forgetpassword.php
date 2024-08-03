<?php

			require '../config.php';


			
			$email 		      = $_POST['email'];
			
			
			
			
				
			$password 	      = password_hash($_POST['password'], PASSWORD_DEFAULT);
				
			
			
			$publisher = [
				
				'email' 	 => $email,
				'password'   => $password
				
				
			];
			
			$sql = 'UPDATE users
				SET password = :password
				WHERE email = :email';
				
			$statement = $pdo->prepare($sql);


			$statement->bindParam(':email', $publisher['email'], PDO::PARAM_INT);
			
			$statement->bindParam(':password', $publisher['password']);
			
			
			if ($statement->execute()) {
				echo 'success';
			}else{
				echo 'failed';
			}




?>

