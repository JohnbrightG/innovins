




<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In</title>
	<link rel="icon"  href="assets/images/logo-sm.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	
	<link href="assets/css/lobibox.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card signin-card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100" style="background-image: url(img/auth-one-bg.jpg);">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="#" class="d-block" Style="color:#fff!important">
                                                   LuLu Mall
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="fas fa-quote-left display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign Up to continue to Affiliate.</p>
                                        </div>

                                        <div class="mt-4">
                                             <form class="form-horizontal" id="frmlogin" method="post">
												
												
												 <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter UserName">
                                                </div>
												
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">E-mail</label>
                                                    <input type="text" class="form-control" name="email" id="emailInput" placeholder="Enter E-mail">
                                                </div>

                                                <div class="mb-3">
                                                    
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="text" class="form-control pe-5 password-input" placeholder="Enter password" name="password" id="password">
                                                    </div>
                                                </div>
												
												<div class="mb-3">
                                                    
                                                    <label class="form-label" for="cPassword">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="text" class="form-control pe-5 password-input" placeholder="Enter password" name="password" id="cPassword">
                                                    </div>
                                                </div>

                                                

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">login ? <a href="index.php" class="fw-bold text-primary text-decoration-underline"> log in</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> | Powered By LuLu Mall Business Suite
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="assets/js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
	
	<script src="assets/js/lobibox.min.js"></script>
	
	<script>
		
		 
		 
		 
		 $("#frmlogin").submit(function(e) {
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
							   msg: 'Registration  Successfully'
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
    
</body>
</html>