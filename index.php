<?php
include_once "database.php";
if (!isset($_SESSION['uid'])) {
  header("location:login.php");
  exit();
}
$uid = $_SESSION['uid'];

if (isset($_SESSION['uid'])) {
  $query = "SELECT * FROM `profile` WHERE id='$uid'";
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

  .text {
    visibility: hidden;
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
    <a href="" class="sidenav-trigger" data-target="slide-out"><i class="material-icons">menu</i>
      <li>
        <a href="index.php"><i class="material-icons">dashboard</i> Dashboard</a>
      </li>

      <li>
        <a href="addstudents.php"><i class="material-icons">person</i> Update Profile</a>
      </li>
      <li>
        <a href="id.php"><i class="material-icons">credit_card</i> ID-Card</a>
      </li>
      <!-- <li>
        <a href=""><i class="material-icons"></i> Dashboard</a>
      </li> -->
      <div class="divider"></div>
      <li>
        <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
      </li>
      </ul>
    </a>
    <a href=""><img src="image/<?php
                                if (!empty($img)) {
                                  echo $img;
                                } else {
                                  echo "memoji.png";
                                }
                                ?>" class="dropdown-trigger right responsive-img circle brand-logo" data-target="dropdown" alt="" style="width: 40px; margin-top: 8px; margin-right: 8px" /></a>
  </nav>
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li class="user-view">
      <div class="background">
        <img src="image/<?php
                        if (isset($img) && !empty($img)) {
                          echo $img;
                        } else {
                          echo "memoji.png";
                        }
                        ?>" alt="" style="width:280px; height:280; padding-left:10px;padding-top:10px;">
      </div>
      <!-- <img src="" alt="" class="responsive-img circle" /> -->
      <div class="text">
        <span class="name white-text">Umair Farooqui</span>
        <span class="name white-text">Umair Farooqui</span>
        <span class="name white-text">Umair Farooqui</span>
        <span class="name white-text">Umair Farooqui</span>
        <span class="name white-text">Umair Farooqui</span>
        <span class="name white-text">Umair Farooqui</span>

        <span class="email white-text">info.mufazmi@gmail.com</span>
      </div>
    </li>
    <li>
      <a href="index.php"><i class="material-icons">dashboard</i> Dashboard</a>
    </li>

    <li>
      <a href="addstudents.php"><i class="material-icons">person</i> Update Profile</a>
    </li>
    <li>
      <a href="id.php"><i class="material-icons">credit_card</i> ID-Card</a>
    </li>
    <!-- <li>
        <a href=""><i class="material-icons"></i> Dashboard</a>
      </li> -->
    <div class="divider"></div>
    <li>
      <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
    </li>
  </ul>

  <div class="row mufazmi">
    <div class="col s12 m12 l3">
      <div class="card-panel z-depth-0" style="padding: 15px">
        <div class="card-image center">
          <h5 class="center"><?php if (isset($fname) && !empty($fname)) {
                                echo $fname . " " . $sname;
                              } else {
                                echo "null";
                              } ?></h5>
          <div class="divider"></div>
          <table>
            <thead>
              <tr>
                <th>Addmission</th>
                <td class="blue-text"><?php if (isset($YOA) && !empty($YOA)) {
                                        echo $YOA;
                                      } else {
                                        echo "null";
                                      } ?></td>
              </tr>
              <th>Current_Session</th>
              <td class="blue-text"><?php if (isset($cur_session) && !empty($cur_session)) {
                                      echo $cur_session ;
                                    } else {
                                      echo "null";
                                    } ?></td>
              </tr>
              <tr>
                <th>Matric Number</th>
                <td class="blue-text"><?php if (isset($mat_no) && !empty($mat_no)) {
                                        echo $mat_no;
                                      } else {
                                        echo "null";
                                      } ?></td>
              </tr>
              <tr>
                <th>Current Level</th>
                <td class="blue-text"><?php if (isset($level1) && !empty($level1)) {
                                        echo $level1;
                                      } else {
                                        echo "null";
                                      } ?></td>
              </tr>
              <tr>
                <th>Department</th>
                <td class="blue-text"><?php if (isset($depart) && !empty($depart)) {
                                        echo $depart;
                                      } else {
                                        echo "null";
                                      } ?></td>
              </tr>
              <tr>
                <th>Program</th>
                <td class="blue-text"><?php if (isset($pro) && !empty($pro)) {
                                        echo $pro;
                                      } else {
                                        echo "null";
                                      } ?></td>
              </tr>
              <tr>
                <th>Unique_ID</th>
                <td class="blue-text"><?php if (isset($unique) && !empty($unique)) {
                                        echo $unique;
                                      } else {
                                        echo "null";
                                      } ?></td>
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
                  <td><?php if (isset($nation) && !empty($nation)) {
                        echo $nation;
                      } else {
                        echo "null";
                      } ?></td>
                </tr>
                <tr>
                  <th>State of Origin</th>
                  <td><?php if (isset($sor) && !empty($sor)) {
                        echo $sor;
                      } else {
                        echo "null";
                      } ?></td>
                </tr>
                <tr>
                  <th>Degree type</th>
                  <td><?php if (isset($dt) && !empty($dt)) {
                        echo $dt;
                      } else {
                        echo "null";
                      } ?></td>
                </tr>
                <tr>
                  <th>Date Of Birth</th>
                  <td><?php if (isset($dob) && !empty($dob)) {
                        echo $dob;
                      } else {
                        echo "null";
                      } ?></td>
                </tr>
                <tr>
                  <th>Mobile Number</th>
                  <td><?php if (isset($contact) && !empty($contact)) {
                        echo $contact;
                      } else {
                        echo "null";
                      }
                      ?></td>
                </tr>
                <th>Email</th>
                <td><?php if (isset($email) && !empty($email)) {
                      echo $email;
                    } else {
                      echo "null";
                    } ?></td>
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
                  <td><?php if (isset($ca) && !empty($ca)) {
                        echo $ca;
                      } else {
                        echo "null";
                      } ?></td>
                </tr>
                <tr>
                  <th>Permanent Address</th>
                  <td><?php if (isset($pa) && !empty($pa)) {
                        echo $pa;
                      } else {
                        echo "null";
                      } ?></td>
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
      <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
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