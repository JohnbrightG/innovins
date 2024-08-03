
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
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="icon"  href="assets/images/logo-sm.png">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
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

        <div class="content dashboard-right-col" >
            
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0" >
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <p class="wlcm-txt"><span>Hi <?=$_SESSION['u_name']?>,</span> Welcome Back!</p>
                <div class="navbar-nav align-items-center ms-auto top-bar-navigation mob-hide">
                    
					
					
                </div>
            </nav>
            
			

            <div class="row copyrights" style="margin-top:500px;">
            <div class="col-lg-6">
                <span>2024 © Shop</span>
            </div>
            <div class="col-lg-6 text-end">
                <span>Powered By Shop Business Suite</span>
            </div>
        </div>
        
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="assets/js/lobibox.min.js"></script>
	
	
	<script>
		function buy_now(amount,from){
				
              var url = 'includes/ajax/payout.php';
			  
			  $.ajax({
                type: 'POST',
                url: url,
                data: {amount:amount,from:from}, // send it here
                
                success: function(Onj) {
					
					
					
					
						if(Onj.trim() === 'success'){
							
							Lobibox.notify('success', {
								size: 'mini',
								rounded: true,
								delayIndicator: false,
								position: "top right",
								sound: false, 
							   msg: 'Purchased Successfully'
						   });
							
							
							
							
							
							
						}else{
							Lobibox.notify('error', {
								size: 'mini',
								rounded: true,
								delayIndicator: false,
								position: "top right",
								sound: false, 
							   msg: 'Purchased Not Successfully'
						   });
						}
				
                },
                error: function(data) {}
            });
			}
	</script>
	
	
</body>

</html>