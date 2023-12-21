<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitha Travels | Login Page</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="lbody">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo-1.png" alt="Logo">
            </a>
        </div>
        <form class="login" action="login.php" method="post">
            <div class="login-form">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="t1" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="t2" required>
                </div>
                <div class="form-group">
                <input type="submit" value="login" class="btn" name="sub" />               
                </div>
                <a href="index.php">
                    <i class="fa-solid fa-house" style="font-size: 25px;margin-left: 14rem;color: var(--main-color);transition: transform 0.3s ease;"></i>
                </a>                 
            </div>
        </form>>
    </div>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>

<?php
if(isset($_POST['sub']))
{
    $a = $_POST['t1'];
    $b = $_POST['t2'];

    $con = mysqli_connect("localhost","root","","hitha_travels");
    $query = "select * from login where(suname ='$a') and (spwd='$b')";

    $check = mysqli_query($con,$query);

    if(mysqli_num_rows($check)==1)
    {
        echo "Successfully login";
    }
    else{
        echo "Login failure";
    }
}
?>