<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Order</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


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


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Order Now</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" action="connect2.blade.php" method="post" novalidate="novalidate">
                            <div class="form-row">

                            <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="nic" name="nic" placeholder="Your Nic-Number" required="required" data-validation-required-message="Please enter Nic-Number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="product" name="product" placeholder="Product Name" required="required" data-validation-required-message="Please enter Product Name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="number" class="form-control p-4" id="quntity" name="quntity" placeholder="Quntity" required="required" data-validation-required-message="Please enter Quntity" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="note" name="note" placeholder="Note"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="order" name="order" onclick="ordernow();">Order Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
                    <p class="m-0">&copy; All Rights Reserved. Designed by <a href="admin.blade.php">Selani, Mihishani, Dineshi and Hansi </a></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>