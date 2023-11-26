<?php
include_once "database.php";
if (!isset($_GET['uid'])) {
  //  header("Location:index.p")
  echo "invalid id numberr";
  exit();
}
$uid = $_GET['uid'];


$query = "SELECT * FROM `profile` WHERE `id`= '$uid'";
$run = mysqli_query($con, $query);
$row = mysqli_num_rows($run);




if ($row == 0) {
  //  echo "<script> alert('Please Enter Correct Information')</script>";
} else {

  $data = mysqli_fetch_assoc($run);
  $fname = $data['fname'];
  $sname = $data['sname'];
  $unique = $data['unique_id'];
  $nation = $data['nationality'];
  $sor = $data['SOR'];
  $lga = $data['LGA'];
  $dt = $data['Degree_type'];
  $pro = $data['programme'];
  $pa = $data['PA'];
  $ca = $data['CA'];
  $contact = $data['contact'];
  $level1 = $data['level1'];
  $dob = $data['DOB'];
  $email = $data['email'];
  $mat_no = $data['matric_no'];
  $img = $data['img'];
  $gender = $data['gender'];
  $depart = $data['department'];
  $YOA = $data['YOA'];
  $cur_session = $data['cur_session'];
}
if (!isset($_GET['uid'])) {
  //  header("Location:index.p")
  echo "invalid id numberr";
  exit();
}
$uid = $_GET['uid'];


$query1 = "SELECT * FROM `profile` WHERE `unique_id`= '$uid'";
$run = mysqli_query($con, $query1);
$row = mysqli_num_rows($run);




if ($row == 0) {
  //  echo "<script> alert('Please Enter Correct Information')</script>";
} else {

  $data = mysqli_fetch_assoc($run);
  $fname = $data['fname'];
  $sname = $data['sname'];
  $unique = $data['unique_id'];
  $nation = $data['nationality'];
  $sor = $data['SOR'];
  $lga = $data['LGA'];
  $dt = $data['Degree_type'];
  $pro = $data['programme'];
  $pa = $data['PA'];
  $ca = $data['CA'];
  $contact = $data['contact'];
  $level1 = $data['level1'];
  $dob = $data['DOB'];
  $email = $data['email'];
  $mat_no = $data['matric_no'];
  $img = $data['img'];
  $gender = $data['gender'];
  $depart = $data['department'];
  $YOA = $data['YOA'];
  $cur_session = $data['cur_session'];
}


?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<style>
  header,
  .mufazmi,
  footer {
    padding-left: 300px;
  }

  @media only screen and (max-width: 992px) {

    header,
    .mufazmi,
    footer {
      padding-left: 0;
    }
  }
</style>

<body bgcolor="#ececec">
  <nav class="teal">
    <a href="" class="brand-logo center">Student profile</a>
    <!-- <a href="" class="sidenav-trigger" data-target="slide-out"
        ><i class="material-icons">menu</i></a
      > -->
  </nav>


  <div class="row mufazmi">
    <div class="col s12 m12 l3">
      <div class="card-panel z-depth-0" style="padding: 15px">
        <div class="card-image center">
          <!-- <img
              src="image/lucky17.png"
              class="circle responsive-img"
              style="width: 120px; border: 3px solid gray"
              alt=""
            /> -->
          <img src="image/<?php
                          if (isset($img) && !empty($img)) {
                            echo $img;
                          } else {
                            echo "lucky18.png";
                          }
                          ?>" alt="" class="circle responsive-img">
          <h5 class="center"><?php echo $fname . " " . $sname; ?></h5>
          <div class="divider"></div>
          <table>
            <thead>
              <tr>
                <th>Addmission</th>
                <td class="blue-text"><?php echo $YOA; ?></td>
              </tr>
              <tr>
                <th>Current_session</th>
                <td class="blue-text"><?php echo $cur_session; ?></td>
              </tr>
              <tr>
                <th>Matric Number</th>
                <td class="blue-text"><?php echo $mat_no; ?></td>
              </tr>
              <tr>
                <th>Current Level</th>
                <td class="blue-text"><?php echo $level1; ?></td>
              </tr>
              <tr>
                <th>Department</th>
                <td class="blue-text"><?php echo $depart; ?></td>
              </tr>
              <tr>
                <th>Program</th>
                <td class="blue-text"><?php echo $pro; ?></td>
              </tr>
              <tr>
                <th>Unique_ID</th>
                <td class="blue-text"><?php echo $unique; ?></td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l9">
      <div class="card z-depth-0">
        <div id="profile" class="col s12 white">
          <div class="card" style="padding-left: 10px; padding-right: 10px">
            <table>
              <tbody>
                <tr>
                  <th>Nationality</th>
                  <td><?php echo $nation; ?></td>
                </tr>
                <tr>
                  <th>State of Origin</th>
                  <td><?php echo $sor; ?></td>
                </tr>
                <tr>
                  <th>Degree type</th>
                  <td><?php echo $dt; ?></td>
                </tr>
                <tr>
                  <th>Date Of Birth</th>
                  <td><?php echo $dob; ?></td>
                </tr>
                <tr>
                  <th>Mobile Number</th>
                  <td><?php echo $contact; ?></td>
                </tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card" style="padding-left: 10px; padding-right: 10px">
            <div class="left">
              <h5>Address</h5>
            </div>
            <table>
              <tbody>
                <tr>
                  <th>Current Address</th>
                  <td><?php echo $ca; ?></td>
                </tr>
                <tr>
                  <th>Permanent Address</th>
                  <td><?php echo $pa; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- right sidenav's profile pic dropdown -->

  <ul class="dropdown-content" id="dropdown">
    <li>
      <a href=""><i class="material-icons">logout</i>Logout</a>
    </li>
  </ul>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".sidenav").sidenav();
      $(".dropdown-trigger").dropdown();
      $(".tabs").tabs();
    });
  </script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>