<?php

require '../config.php';


			
			
			$sth = $pdo->prepare('SELECT * FROM store_users
				WHERE hierarchy != ? ');
				$sth->execute([6]);
			$user = $sth->fetchAll();
			
			
			foreach($user as $u){
				
				
				$sql = 'SELECT * 
						FROM hierarchy
						WHERE id = :id';
												
				$statement = $pdo->prepare($sql);
				$statement->bindParam(':id', $u['hierarchy'], PDO::PARAM_INT);
				$statement->execute();
				$one    = $statement->fetch(PDO::FETCH_ASSOC);
			
			
				$sale_amount 		      = $_POST['amount'];
				$from                 	  = $_POST['from'];
			
				$trx_id                   = time().uniqid(mt_rand(),true);
				$created_at               = date('d-m-Y h:i:s a');
			
				$commision_amount         = ($one['commision_percentage']/100)*$sale_amount;
				
				
				
				$payout = $u['wallet']+$commision_amount;
			
				$publisher = [
				'id' 		 	 => $u['id'],
				'wallet' 		 => $payout
				
				];
				
				$sql = 'UPDATE store_users
				SET wallet = :wallet
				WHERE id = :id';
				
				$statement = $pdo->prepare($sql);


				$statement->bindParam(':id', $publisher['id'], PDO::PARAM_INT);
				$statement->bindParam(':wallet', $publisher['wallet']);
				$statement->execute();
			
			

			
			$sql = 'INSERT INTO transaction(trx_id,user_id,sale_amount,commision_amount,t_from,created_at) VALUES(:trx_id,:user_id,:sale_amount,:commision_amount,:t_from,:created_at)';

			$statement1 = $pdo->prepare($sql);
			
			//print_r($statement);

			
			
			
			$statement1->execute([
				':trx_id' 			    		=> $trx_id,
				':user_id'						=> $u['id'],
				':sale_amount' 			    	=> $sale_amount,
				':commision_amount' 		    => $commision_amount,
				':t_from' 		    			=> $from,
				':created_at' 		        	=> $created_at,
				
			]);
			
			
			
			
			
			}
			
		
			echo 'success';
		




?>

