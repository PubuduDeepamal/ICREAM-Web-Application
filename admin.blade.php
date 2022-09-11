<html>

    <head>

		<meta charset="UTF-8">
	
		<!-- Important to make website responsive -->	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>iCREAM - Admin</title>

		<!-- Link our CSS file -->
		<link rel="stylesheet" href="css/style.css">

            <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" type="image/png" href="img/img1.png">


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
            
        <link rel="icon" type="image/png" href="img/about.jpg">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

       <script type="text/javascript">


        function submit()
		{

			var userID = document.getElementById('s1').value; 
			var password   = parseInt(document.getElementById('s2').value);

           

			if(userID == "admin" && password == 1234)
			{				
                window.location.href = "adminview.blade.php";
			}
			else 
			{          
				swal("incorect User Name or password")
                
			}
			
		}
	
	</script>

    </head>

    <body>  

                <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="Home.blade.php" class="nav-item nav-link">Home</a>
                        <a href="about.blade.php" class="nav-item nav-link">About</a>
                        <a href="product.blade.php" class="nav-item nav-link">Product</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="order.blade.php" class="nav-item nav-link">Order</a>
                        <a href="gallery.blade.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.blade.php" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

            <!-- admin Section Starts Here -->

            <section class="-search">
        
                <div class="container">
                    
                <div class="container-fluid py-5">
                    <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Log in</h1>
                    </div>
                </div>
        
                        <fieldset>

                                <input type="Password" name="userID" id='s1'placeholder="User Name" class="form-control p-4" required>
                                <p class="help-block text-danger"></p>
                                <input type="password" name="Password" id='s2' placeholder="Password"  class="form-control p-4" required>  
                                <p class="help-block text-danger"></p>
                                <input type="submit" name="submit" value="Loge in" class="btn btn-primary btn-block py-3 px-5" onclick="submit()"> 

                            </fieldset>

                        </form>
            
                    </div>
                    
                </section>

            <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">258, DS Senanayake Veediya, Kandy</p>
                            <p class="mb-0">+94 0769876856</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat : 10.00AM – 8.00PM</p>
                            <p class="mb-0">Sunday    : 10.00AM – 2.00PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; All Rights Reserved. Designed by <a href="#">Selani, Mihishani, Dineshi and Hansi</a></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    </body>

</html>