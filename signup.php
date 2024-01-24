<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    //Something was posted
    $full_name = $_POST['full_name'];
    $desig = $_POST['desig'];
    $email = $_POST['email'];
    $mobile_num = $_POST['mobile_num'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!empty($email) && !empty($password) && !is_numeric($email)){
      if($password != $cpassword){
        echo "Password does not match.";
        die;
      }else{
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (full_name, desig, user_id, email, mobile_num, password) values('$full_name', '$desig', '$user_id', '$email', '$mobile_num', '$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
      }
    }else{
      echo "Please enter valid information!";
    }
  }
?>

<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Sleuth Guide Signup Page</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="icon" type="image/png" href="images/icons/SBJain_logo.png"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style type="text/css">
        .txt2 {
          font-family: Poppins-Regular;
          font-size: 18px;
          line-height: 0.1;
          color: #666666;
        }
     </style>
   </head>
<body>
  <div class="container">
    <div class="title">Admin Signup</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input name="full_name" id="full_name" type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input name="desig" id="desig" type="text" placeholder="Enter your Designation" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" id="email" type="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input name="mobile_num" id="mobile_num" type="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name="password" id="password" type="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input name="cpassword" id="cpassword" type="password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="button">
          <input id="button" type="submit" value="Register">
        </div>
        <div class="text-center p-t-50">
          Already have an account?
            <a class="txt2" href="login.php">
              Login here
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
