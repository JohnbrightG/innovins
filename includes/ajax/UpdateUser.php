<?php

			require '../config.php';


			$name 		      = $_POST['name'];
			$email 		      = $_POST['email'];
			
			
			
			if($_POST['password'] !=''){
				
				$password 	      = password_hash($_POST['password'], PASSWORD_DEFAULT);
				
			}else{
				
				$sql = 'SELECT * 
				FROM users
				WHERE id = :id';
				
				$statement = $pdo->prepare($sql);
				$statement->bindParam(':id', $_POST['e_id'], PDO::PARAM_INT);
				$statement->execute();
				$user    = $statement->fetch(PDO::FETCH_ASSOC);
				
				$password 	      = $user['password'];
			}
			
			$publisher = [
				'id' 		 => $_POST['e_id'],
				'name' 		 => $name,
				'email' 	 => $email,
				'password'   => $password
				
				
			];
			
			$sql = 'UPDATE users
				SET name = :name,email = :email,password = :password
				WHERE id = :id';
				
			$statement = $pdo->prepare($sql);


			$statement->bindParam(':id', $publisher['id'], PDO::PARAM_INT);
			$statement->bindParam(':name', $publisher['name']);
			$statement->bindParam(':email', $publisher['email']);
			$statement->bindParam(':password', $publisher['password']);
			
			
			if ($statement->execute()) {
				echo 'success';
			}else{
				echo 'failed';
			}




?>

