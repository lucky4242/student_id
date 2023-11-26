Reg.php
<?php include_once "database.php" ?>
<?php if (isset($_POST["register_user"])) {
   if ($_POST['password'] = $_POST['password_2']) {

      $fname = $_POST['fname'];
      $sname = $_POST['sname'];
      $mat_no = $_POST['mat_no'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];
      // $confirm_password = $_POST ['password_2'];
      // $passw
      $_SESSION['fname'] = $fname;
      $_SESSION['sname'] = $sname;

      $query = "INSERT INTO `profile`(`fname`, `sname`, `matric_no`, `contact`, `password`) 
     VALUES ('$fname','$sname','$mat_no','$phone','$password')";
      $run = mysqli_query($con, $query);
   }
   if ($run) {
      Header("location:login.php");
   }
   echo "there is problem somewhere";
}

?>