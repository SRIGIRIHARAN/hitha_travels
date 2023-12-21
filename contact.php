<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitha Travels | Contact Us</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    
        <!-- booking pop section starts -->
        
        <img src="images/enquire-icon.png" class="pop-img" onclick="openForm()">                   
        
        <!-- The form -->
        <div class="form-popup" id="myForm">
            <form action="pop-up.php" class="form-container" method="post">            
                <input type="text" id="name" placeholder="Name" name="t1"><br><br><br>
                <input type="number" id="number" placeholder="Contact Number" name="t2"><br><br><br>
                <textarea name="t3" placeholder="Send A message" name="t3" required></textarea>
                <input type="submit" value="submit" class="btn" name="sub" >       
                <input type="button" class="btn" onclick="closeForm()" value="Close"/>
            </form>
            <script src="js/pop.js"></script>
        </div>       

    <!-- booking pop section ends -->

    <!-- header section starts -->

    <!-- header-1 section starts -->

    <section class="header-1">
        <div class="phone">
          <i class="fa-solid fa-phone"></i>
          <div class="ph-num">+91 9087720004</div>
        </div>
        <div class="mail">
          <i class="fa-regular fa-envelope"></i>
          <div class="email">helpdesk.shikshaa@gmail.com</div>
        </div>
        <div class="social">
          <div class="logo">
            <a href="https://www.facebook.com/shikshaasimplelearn">
                <i class="fa-brands fa-facebook" style="color: white"></i>
            </a> 
          </div>
          <div class="logo">
            <a href="https://www.instagram.com/shikshaa_simple_learn/?igshid=YmMyMTA2M2Y%3D">
              <i class="fa-brands fa-instagram" style="color: white"></i>
            </a>
          </div>
          <div class="logo">
            <a href="https://www.youtube.com/channel/UCrRvgXjjhqcTC8iCeFmPkVQ">
              <i class="fa-brands fa-youtube" style="color: white"></i>
            </a>
          </div>
          <div class="logo">
            <a href="bypassmdu@gmail.com">
              <i class="fa-brands fa-google" style="color: white"></i>
            </a>
          </div>
          <div class="logo">
            <a href="https://www.linkedin.com/company/shikshaasimplelearn">
              <i class="fa-brands fa-linkedin" style="color: white"></i>
            </a>
          </div>
        </div>
    </section>

    <!-- header-1 section ends -->

    <!-- header-2 section starts -->

    <section class="header-2">
        <a href="index.php" class="logo">
            <img src="images/logo-1.png">
        </a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about us</a>
            <div class="dropdown">
                <a href="package.php" class="dropbtn">package</a>
                <div class="dropdown-content">
                    <a href="package1.php">Package 1</a>
                    <a href="package2.php">Package 2</a>
                    <a href="package3.php">Package 3</a>
                </div>
            </div>
            <a href="gallery.php">gallery</a>
            <a href="contact.php">contact us</a>
        </nav>
        
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header-2 section ends -->

    <!-- header section ends -->



    <div class="heading" style="background: url(images/header-bg.jpg) no-repeat;">
        <h1>contact us</h1>
    </div>


    <!-- contact section starts -->


    <section class="contact">
        <div class="content">
            <!-- <h2>Contact Us</h2><br><br> -->
            <p>Contact us for Booking Your Safe Ride</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icons"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>23,sbi staff colony,<br>kanadasan street,ss colony,<br>near sboa children school,<br>Madurai,Tamil Nadu 625016 </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icons"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91 6374446988</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icons"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>helpdesh@shikshaalearn.com</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="contact.php" method="post">
                    <h2>Feedback</h2>
                    <div class="inputbox">
                        <input type="text" name="t1" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="t2" required>
                        <span>Phone</span>
                    </div>
                    <div class="inputbox">
                        <textarea required="required" name="t3"></textarea>
                        <span>Type Your Feedback..</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="sub">
                        
                    </div>
                </form>
            </div>

        </div>
    </section>


    <!-- contact section ends -->









    <!-- footer section starts -->
    <section class="footer">
        <div class="row">
            <div class="col">
                <img src="images/logo-2.png" class="logo">
                <p>SHIKSHAA ISO 21001:2018 started its updated technology 
                   training activity in the year 2018. It is a pioneer in 
                   IT education.
                </p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>23, sbi staff II Colony kanadasan street,</p> 
                <p>ss colony, near Sboa children school,</p> 
                <p>Madurai, Tamil Nadu 625016</p>
                <p class="email-id">helpdesk@shikshaalearn.com</p>
                <h4>+91 9087710004</h4>
                <div class="social-icons">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>                    
                </div>
            </div>
            <div class="col">
                <h3>Our Page <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="package.php">Package</a></li>
                    <li><a href="gallery.php">Gallarey</a></li>
                    <li><a href="book.php">Book</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>

                <a href="login.php" class="btn">login</a>                
            </div>
            <div class="col">
                <h3>Location <div class="underline"><span></span></div></h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19312.450843944014!2d78.09588955253338!3d9.921487783286622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cf6e5a4f2d85%3A0x2123b3a90de53af7!2sShikshaa%20Simple%20Learn!5e0!3m2!1sen!2sin!4v1695288415720!5m2!1sen!2sin" 
                 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map">
                </iframe>                
            </div>
        </div>
        <hr>
        <p class="copyright">© Copyrights 2023 shikshaalearn All rights reserved</p>
    </section>
    <!-- footer section ends -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
    

</body>
</html>

<?php
if(isset($_POST['sub']))
{
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];
    $con=new mysqli("localhost","root","","hitha_travels");
    $sql="insert into contact(suname,sphone,smsg) values('$a','$b','$c')";
    if($con->query($sql)==TRUE)
    {   
        $msg="successfully Added";
        echo "<script> alert('$msg')</script>";
    }
    else{
        echo "error:" .$sql. "<br>". $con->error;
    }
    $con->close();
}
?>