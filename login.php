<?php include('database.php') ?>
<?php
$_SESSION['message'] = "";


if (isset($_POST['login_student'])) {

  $mat_no = $_POST['mat_no'];
  $password = $_POST['password'];

  $query = "SELECT * FROM `profile` WHERE `matric_no` = '$mat_no' and `password` = '$password' ";
  $run = mysqli_query($con, $query);
  $row = mysqli_num_rows($run);
  if ($row < 1) {
    $_SESSION['message'] = "Username Or Password Wrong";
    $login_failed = $_SESSION['message'];
  } else {
    $data = mysqli_fetch_assoc($run);
    // $name = $data['name'];
    $uid = $data['id'];
    $_SESSION['uid'] = $uid;
    header("location:addstudents.php");
  }
}
?>


<?php
// if (isset($_SESSION['uid'])) {
//   header("location:addstudents.php");
// } else {
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>OAUSTECH</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
  <link rel="stylesheet" href="LoginCSS/login.css" />
  <script type="text/javascript" src="LoginJS/login.js"></script>
</head>

<body>
  <p class="tip"></p>
  <div class="cont">
    <div class="form sign-in">
      <h2>User Login</h2>
      <div class="" style="color: red; text-align:center;">
        <?php
        if (isset($login_failed)) {
          echo $login_failed;
          # code...

        }
        // if (isset($_SESSION['messages'])) {
        //   echo $_SESSION['messages'];
        // } else {
        // }
        ?>
      </div>
      <form method="post" action="" id="sign_in_form">
        <label id="email">
          <span>Mat_Number</span>
          <input type="text" name="mat_no" id="contact" required="required" /><br>
          <!-- <input type="email" name="email" id="signin_email" placeholder="johnsmith@gmail.com" required /><br /> -->
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" id="signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
        </label>
        <a href="forgot.html">
          <p class="forgot-pass">Forgot password?</p>
        </a>
        <button class="submit" id="sign_in" name="login_student">
          Sign In
        </button>
        <!-- <a href="lecturer_login.php"
            ><button type="button" class="fb-btn">
              <span>Continue as lecturer</span>
            </button></a
          > -->
      </form>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img__text m--up">
          <!-- <h2>New here?</h2> -->
          <h2>Register Now!</h2>
        </div>
        <div class="img__text m--in">
          <h3>If you already have an account, Sign in!</h3>
          <?php

          // if (isset($_SESSION['reg_messages'])) {
          //   echo $_SESSION['reg_messages'];
          // }
          ?>
        </div>

        <div class="img__btn">
          <span class="m--up">Sign Up</span>
          <span class="m--in">Sign In</span>
        </div>
      </div>

      <div class="form sign-up">
        <!--<h2 id="regtext">Register</h2>-->
        <form method="post" action="reg.php" id="register_form">
          <label>
            <span>FirstName</span>
            <input type="text" name="fname" id="fname" required title="min character is 3" placeholder="John" required /><br />
          </label>
          <label>
            <span>SurName</span>
            <input type="text" name="sname" id="sname" required title="min character is 3" placeholder="Smith" required /><br />
          </label>
          <label>
            <span>Mat_Number</span>
            <input type="text" name="mat_no" id="contact" placeholder="160404322" required="required" />
            <br />
          </label>

          <label>
            <span>Phone Number</span>
            <input type="tel" id="phone" name="phone" placeholder="5351234567" required /><br />
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" id="signup_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
            <br />
          </label>

          <label>
            <span>Confirm Password</span>
            <input type="password" name="password_2" id="confirm_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
            <br /><br />
          </label>

          <button class="submit" name="register_user" onclick="Validate()">
            Sign Up
          </button>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="LoginJS/script.js"></script>
</body>

</html>