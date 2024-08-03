
<?php 
	require 'includes/config.php';
	
	if (isset($_SESSION['user'])){
			
		}else{
			$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
			$config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
			$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

			
			$redirect = $config['base_url'];
			
			
			
			header("Location: $redirect");
			exit();
		}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="icon"  href="assets/images/logo-sm.png">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Customer</title>
    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
	<link href="assets/css/lobibox.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
    <div class="container-xxl position-relative d-flex p-0">
        
		<div class="sidebar">
            <nav class="navbar navbar-light ">
                <div class="navbar-nav w-100">
                    <a href="#" class="navbar-brand mb-3" style="text-align:center;color:#fff">
                    Shop
                </a>
               
              
                     <a href="dashboard.php" class="nav-item nav-link active"><i class="fas fa-chart-pie"></i> Dashboard</a>
                    
                </div>

                <div class="navbar-nav w-100 bottom-nav">
                    <a href="user.php" class="nav-item nav-link"><i class="fas fa-user"></i> User</a>
                    
                    <a href="logout.php" class="nav-item nav-link"><img src="img/user.jpg"> Log Out</a>
                </div>
            </nav>
        </div>
		
		
        <div class="content dashboard-right-col">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <p class="wlcm-txt"><span>Hi <?=$_SESSION['u_name']?>,</span> Welcome Back!</p>
                <div class="navbar-nav align-items-center ms-auto top-bar-navigation mob-hide">
                    

                    
					
					
                </div>
            </nav>

            <div class="container mob-show">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="navbar-nav align-items-center ms-auto top-bar-navigation">
                        <select>
                            <option>Property</option>
                            <option>Property</option>
                            <option>Property</option>
                        </select>
    
                        <select>
                            <option>Portfolio</option>
                            <option>Portfolio</option>
                            <option>Portfolio</option>
                        </select>

                        <select>
                            <option>View As</option>
                            <option>View As</option>
                        <option>View As</option>
                        </select>
                      </div>
                      <button class="btn w-100"><i class="fas fa-cog"></i> Customize Dashboard</button>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                
              <div class="page-content">
                <div class="container-fluid">

                    

                    <div class="row">
                        <div class="col-xxl-3">
                            
                            
                            
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5" >
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        
										
										<li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                Create User 
                                            </a>
                                        </li>
										
										
										
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#changePassword" role="tab">
                                                User List
                                            </a>
                                        </li>
										
                                    </ul>
                                </div>
                                <div class="card-body p-4" style="min-height:400px">
                                    <div class="tab-content">
									
									
									
                                        <div class="tab-pane " id="personalDetails" role="tabpanel">
                                            
											
											
											
											
											<form  id="create_user" method="post">
											
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label"> Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="User Name" name="name">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" id="emailInput" placeholder="Email Address" name="email">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="text" class="form-control" id="password" placeholder="Password" name="password">
                                                        </div>
                                                    </div>
													
													<div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="cPassword" class="form-label">Confirm Password</label>
                                                            <input type="text" class="form-control" id="cPassword" placeholder="Confirm Password" name="cPassword">
                                                        </div>
                                                    </div>
													
													
                                                    
                                                   
                                                    <div class="col-lg-12"><hr></div>

                                                    <!--end col-->
                                                    
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Create</button>
                                                            <button type="button" class="btn btn-soft-success">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
										
										
                                        <!--end tab-pane-->
                                        <div class="tab-pane active" id="changePassword" role="tabpanel">
                                           <table id="user" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                
                                                
                                                <th>Created at</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
										<?php 
										
												
														$sql = 'SELECT * FROM users';
														$statement = $pdo->query($sql);
														
														$users = $statement->fetchAll(PDO::FETCH_ASSOC);
														
														if($users){
															foreach($users as $u){
														
													?>
										
                                            <tr>
                                                <td><?=$u['name'];?></td>
                                                <td><?=$u['email'];?></td>
                                                
                                                
                                                
                                                <td><?=$u['created_at'];?></td>
                                                
                                                <td><a onclick="edit_user('<?=$u['id']?>')" style="cursor:pointer" class="text-primary fs-12"><i class="fas fa-edit"></i></a>
												<a onclick="delete_user('<?=$u['id']?>')" style="cursor:pointer" class="text-primary fs-12"><i class="fas fa-trash"></i></a>
												</td>
                                            </tr>
											
											<?php 
												}
												}
												?>
                                            
                                        </tbody>
                                    </table>
                                        </div>
                                        <!--end tab-pane-->

                                        <!--end tab-pane-->
                                        
                                        <!--end tab-pane-->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>  
                
            </div>

        </div>

        <div class="row copyrights">
            <div class="col-lg-6">
                <span>2024 © Shop</span>
            </div>
            <div class="col-lg-6 text-end">
                <span>Powered By Shop Business Suite</span>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
	
	
	<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                                    aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="btn-close"></button>
                                            </div>
                                            <div class="modal-body p-5 text-center">
                                                <i class="fas fa-trash-alt" style="font-size: 70px;"></i>
                                                <div class="mt-4 text-center">
                                                    <h4 class="fs-semibold">You are about to delete a User ?</h4>
                                                    <p class="text-muted fs-14 mb-4 pt-1">Deleting your User will remove
                                                        all of your information from our database.</p>
                                                    <div class="hstack gap-2 justify-content-center remove">
													<input type="hidden" name="delid" id="delid">
                                                        <button class="btn" id="deleteRecord-close"
                                                            data-bs-dismiss="modal"><i class="fas fa-times"></i>
                                                            Close</button>
                                                        <button class="btn" id="delete-record">Yes, Delete It!!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



<div class="modal fade" id="edit_model" role="dialog">
		<div class="modal-dialog">
			<div class="edit_model">
				
			</div>
		</div>
   </div>

<!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="assets/js/lobibox.min.js"></script>
	
	
	
	<!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="assets/js/pages/datatables.init.js"></script>
	
	
	<script>
		 $("#create_user").submit(function(e) {
			  e.preventDefault();
			  
			  
			  var name 				= $('#name').val();
			  var email 			= $('#emailInput').val();
			  var password 			= $('#password').val();
			  var cPassword 		= $('#cPassword').val();
			  
			  
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
			  }else if(password == ""){
				  Lobibox.notify('error', {
					size: 'mini',
					rounded: true,
					delayIndicator: false,
					position: "bottom right",
					sound: false, 
					msg: 'Please Enter the Password'
				});
			  }else if(cPassword == ""){
				  Lobibox.notify('error', {
					size: 'mini',
					rounded: true,
					delayIndicator: false,
					position: "bottom right",
					sound: false, 
					msg: 'Please Enter the Confirm Password'
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
              var url = 'includes/ajax/CreateUser.php';
			  
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
							   msg: 'User Updated Successfully'
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
		 
		 
		 
		 
		 function edit_user(id){
			 
			 
			 var modal = $('#edit_model');
			 modal.modal('show');
			 
			$('.edit_model').html('');
			
            var url = 'includes/ajax/EditUser.php';
			
			$.ajax({
                type: 'POST',
                url: url,
                data: {id:id},
                
                success: function(Onj) {
					
					
					$('.edit_model').html(Onj);
					
						
				
                },
                error: function(data) {}
            });
			 
			 
		 }
		 
		 
		 
		 
		 
		 function delete_user(id){
			 
			 
			 var modal = $('#deleteRecordModal');
			modal.find('input[name=delid]').val(id);
			modal.modal('show');
		 }
		 
		 $("#delete-record").click(function (e) {
			 e.preventDefault();
			
			var delid       = $('#delid').val();
			
            var url = 'includes/ajax/DeleteUser.php';
			
			$.ajax({
                type: 'POST',
                url: url,
                data: {id:delid},
                
                success: function(Onj) {
					
					
					
					
						if(Onj.trim() === 'success'){
							Lobibox.notify('success', {
								size: 'mini',
								rounded: true,
								delayIndicator: false,
								position: "bottom right",
								sound: false, 
							   msg: 'User Deleted Successfully'
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
							   msg: 'User Not Deleted'
						   });
						}
				
                },
                error: function(data) {}
            });
			
			
			
			
		});
	
	$(document).ready(function() {
  $('#user').dataTable();
  
  $('#transcation').dataTable();
  
  
  new DataTable('#hie', {
    order: [[3, 'asc']]
});
});
	
	
	
	
	</script>
	
	
	
</body>




</html>