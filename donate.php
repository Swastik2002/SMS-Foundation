<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMS Foundation</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />


    <script>
	function validate() {
		var name=document.myform.name.value;
		var email=document.myform.email.value;
		var phno=document.myform.phno.value;
		var amount=document.myform.amount.value;

		atpos=email.indexOf("@");
		dotpos=email.lastIndexOf(".");
		if(atpos<1 || (dotpos - atpos)<2)
		{
			alert("Incorrect Email Format");
			return false;
		}
		if(phno.length<10 || phno.length>10)
		{
			alert("Incorrect Phone Number Format");
			return false;
		}

		localStorage.setItem("name", name);
		localStorage.setItem("email", email);
		localStorage.setItem("phno", phno);
		localStorage.setItem("amount", amount);
	}
    </script>


</head>



<body>



    <!-- ******************** Header Starts Here ******************* -->
    <header>
        <div class="container-fluid header-top" style="background-color: #262626;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 logo-dv">
                        <img src="images/Logo.png" alt="SMS Foundation" height="100" width="100">
                    </div>
		    <div class="col-md-4 logo-dv">
			<img src="images/SMS Foundation.png">
		    </div>
                    <div class="col-md-6 bonto">
                        <ul>
                            <a href="donate.html">
                            <li><div class="donta-btn">
                                <p>Please make your</p>
                                <strong>Donation</strong>
                            </div></li>
			    </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

     <!-- ******************** Nav Starts Here ******************* -->

        <div id="menu-jk" class="headwe-nav container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 nav-div">
                       <nav class="navbar navbar-expand-lg navbar-light     ">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                         

                          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                              <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="index.html">About Us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="index.html"  >Team</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="index.html"  >Causes</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="contact_us.html" >Contact US</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="donate.html" ><strong>Donate Now</strong></a>
                              </li>
                            </ul>
                          
                          </div>
                        </nav>
                                            </div>
                    <div class="col-lg-3 d-none d-lg-block social-div">
                        <ul class="ulright">
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                            <li>
                                <i class="fab fa-pinterest-square"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>DONATE NOW</h2>
                <ul>
                    <li> <a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Donate Now</li>
                </ul>
            </div>
        </div>
    </div>



      <!--  ************************* Donate Starts Here ************************** -->


    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">

                <div style="padding:20px" class="col-sm-7">

	    	<form name="myform" onsubmit="return(validate())" action="output.html" method="get" target="_blank">
                    <h2 >Contact Form</h2> <br>
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" id = "name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" id="email" class="form-control input-sm"  ></div>
                    </div>
		    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Gender </label><span>:</span></div>
                        <div class="col-sm-8"><input type="radio" name="gender" id="gender">MALE
								 <input type="radio" name="gender" id="gender">FEMALE<br>
			</div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="phno" placeholder="Enter Mobile Number" id="phno" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Amount</label><span>:</span></div>
                        <div class="col-sm-8">
                           <input type="integer" name="amount" placeholder="Enter Donation Amount" class="form-control input-sm"  >
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-success btn-sm">
                        </div>
                    </div>
	        </form>
                </div>



                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                        Jaypee College, <br>
                        Sector - 62, Noida<br>
                        UP, India<br>
                        Phone:+91 9871370232<br>
                        Email:support@smsfoundation.com<br>
                        Website:www.smsfoundation.com<br>

                    </div>


                </div>

            </div>
        </div>

    </div>




    <!-- ******************** Footer Starts Here ******************* -->  
    
    <footer class="container-fluid footer-cont">
        <div class="container">
            <div class="footer-top row">
                <div class="col-md-4 foot-logo">
                    <h2>Charity for Educaton</h2>
                </div>
                <div class="col-md-6 foot-logo">
                    <p><h2>SMS Foundation - Donate Today, Change Tomorrow.</h2></p>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> JIIT, Noida Sector - 62, Uttar Pradesh</li>
                        <li><i class="fas fa-mobile-alt"></i> +91 - 9871370232</li>
                        <li><i class="far fa-envelope"></i> support@smsfoundation.com </li>
                    </ul>
                </div>
            </div>
            <div class="foot-botom row">
                <div class="col-md-3">
                    <div class="fotter-coo">
                        <h5>IMPORTANT LINKS</h5>
                        <ul>
                            <li><i class="fas fa-caret-right"></i> ABOUT US</li>
                            <li><i class="fas fa-caret-right"></i> COMPANY PROFILE</li>
                            <li><i class="fas fa-caret-right"></i> OUR SERVICES</li>
                            <li><i class="fas fa-caret-right"></i> CONTACT US</li>
                            <li><i class="fas fa-caret-right"></i> READ BLOG</li>
                        </ul>
                    </div>
                    
                </div>
                 <div class="col-md-4">
                    <div class="fotter-coo">
                        <h5>GLOBAL UPDATE NEWS</h5>
                        <ul>
                            <li><i class="fas fa-caret-right"></i> 100 CHILDREN RESCUE FROM WAR ZONE</li>
                            <li><i class="fas fa-caret-right"></i> THR FRESH HOUSE CHILD</li>
                            <li><i class="fas fa-caret-right"></i> CREATE AWARENESS IN EDUCATON</li>
                            <li><i class="fas fa-caret-right"></i> WHAT HAPPEN WHEN WE LIVE!</li>
                            <li><i class="fas fa-caret-right"></i> READ BLOG</li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-5">
                    <div class="fotter-coo">
                        <h5>PHOTO GALLERY</h5>
                        <div class="gallery-row row">
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images/g1.jpg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images/g2.jpg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images/g3.jpg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images/g4.jpg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images/g5.png" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images/g6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>



    <?php
    $servername = "admin";
    $username = "root";
    $password = "28102002";
    $dbname = "college";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO donations (amount, name, email) VALUES ('$amount', '$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Donation successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>






</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
