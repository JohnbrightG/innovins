<?php

require '../config.php';


			$name 		      = $_POST['name'];
			$email 		      = $_POST['email'];
			$password 	      = password_hash($_POST['password'], PASSWORD_DEFAULT);
			
			$created_at       =  date('d-m-Y h:i:s a');

			
			$sql = 'INSERT INTO users(name,email,password,created_at) VALUES(:name,:email,:password,:created_at)';

			$statement = $pdo->prepare($sql);

			$statement->execute([
				':name' 			    => $name,
				':email' 			    => $email,
				':password' 		    => $password,
				
				':created_at' 		    => $created_at
			]);
		
			$user_id = $pdo->lastInsertId();
			
			if($user_id){
				echo 'success';
			}else{
				echo 'failed';
			}
		




?>

