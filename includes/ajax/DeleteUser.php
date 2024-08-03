<?php

require '../config.php';


			$id 		      = $_POST['id'];
			
			
			$sql = 'DELETE FROM users
        WHERE id = :id';

		// prepare the statement for execution
		$statement = $pdo->prepare($sql);
		$statement->bindParam(':id', $id, PDO::PARAM_INT);

		// execute the statement
		if ($statement->execute()) {
			echo 'success';
		}else{
			echo 'failed';
		}
			
			
		




?>

