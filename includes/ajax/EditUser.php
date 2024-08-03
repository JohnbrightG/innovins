<?php

require '../config.php';


			$id 		      = $_POST['id'];
			
			
			$sql = 'SELECT * 
		FROM users
        WHERE id = :id';
		
		$statement = $pdo->prepare($sql);
		$statement->bindParam(':id', $id, PDO::PARAM_INT);
		$statement->execute();
		$user    = $statement->fetch(PDO::FETCH_ASSOC);
			
			
		




?>

<div class="modal-content">
	<div class="modal-body">
		<div class="card">
			<div class="card-body">
				<form  id="edit_user" method="post">
					<div class="row">
						<div class="col-lg-12">
                            <div class="mb-3">
                            <label for="name" class="form-label"> Name</label>
                            <input type="text" class="form-control" id="e_name" placeholder="User Name" name="name" value="<?=$user['name'];?>">
                           </div>
                        </div>
						<div class="col-lg-12">
                           <div class="mb-3">
                             <label for="e_email" class="form-label">Email Address</label>
                             <input type="email" class="form-control" id="e_email" placeholder="Email Address" name="email" value="<?=$user['email'];?>">
                           </div>
                      </div>
					  <div class="col-lg-12">
                           <div class="mb-3">
                              <label for="e_password" class="form-label">Password</label>
                               <input type="text" class="form-control" id="e_password" placeholder="Password" name="password">
                           </div>
                      </div>
					  <div class="col-lg-12">
                           <div class="mb-3">
                            <label for="e_cPassword" class="form-label">Confirm Password</label>
                             <input type="text" class="form-control" id="e_cPassword" placeholder="Confirm Password" name="cPassword">
                           </div>
                       </div>
					  
							  
							  <input type="hidden" name="e_id" value="<?=$user['id'];?>">
							  <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                            
                                                        <button class="btn btn-danger" 
                                                            data-bs-dismiss="modal" style="background:#f17171;"><i class="fas fa-times"></i>
                                                            Close</button>
														</div>
                                                    </div>
					  
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script>
		$("#edit_user").submit(function(e) {
			
			  e.preventDefault();
			  var name 				= $('#e_name').val();
			  var email 			= $('#e_email').val();
			  var password 			= $('#e_password').val();
			  var cPassword 		= $('#e_cPassword').val();
			 
			  
			  if(name == ""){
				 Lobibox.notify('error', {
					size: 'mini',
					rounded: true,
					delayIndicator: false,
					position: "bottom right",
					sound: false, 
					msg: 'Please Enter the name'
				});
			  }else if(email == ""){
				  Lobibox.notify('error', {
					size: 'mini',
					rounded: true,
					delayIndicator: false,
					position: "bottom right",
					sound: false, 
					msg: 'Please Enter the E-mail'
				});
			  }else if(password != cPassword){
				  Lobibox.notify('error', {
					size: 'mini',
					rounded: true,
					delayIndicator: false,
					position: "bottom right",
					sound: false, 
					msg: 'Password Not Match'
				});
			  }else{
				  var data = new FormData(this);
              var url = 'includes/ajax/UpdateUser.php';
			  
			  $.ajax({
                type: 'POST',
                url: url,
                data: data, // send it here
                contentType: false, // this
                cache: false,
                processData: false, // and this should be false in case of uploading files
                beforeSend: function(xhr) {},
                success: function(Onj) {
					
					
					
					
						if(Onj.trim() === 'success'){
							
							Lobibox.notify('success', {
								size: 'mini',
								rounded: true,
								delayIndicator: false,
								position: "bottom right",
								sound: false, 
							   msg: 'User Created Successfully'
						   });
							
							
							
							setTimeout(function() {
								location.reload();
							}, 2000);
							
							
						}else{
							Lobibox.notify('error', {
								size: 'mini',
								rounded: true,
								delayIndicator: false,
								position: "bottom right",
								sound: false, 
							   msg: 'Please check the credentials'
						   });
						}
				
                },
                error: function(data) {}
            });
			  }
			  
			  
		 });
</script>