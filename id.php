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
    $cur_session = $data['cur_session'];
  }
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>id card</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" />
  <style>
    * {
      box-sizing: border-box;
    }

    .container {
      position: absolute;
      left: 25%;
      top: 20%;
    }

    .card {
      height: 2.275in;

      width: 3.375in;
      padding: 1.3rem 0 1.3rem 0;
      box-shadow: 0 0 5px #b4b4b4;
      background-image: url("image/1.png");
      background-repeat: no-repeat;
      background-size: 324px 218.4px;
      border-radius: 20px;
    }

    .card2 {
      height: 2.275in;

      width: 3.375in;
      padding: 1.3rem 0 1.3rem 0;
      box-shadow: 0 0 5px #b4b4b4;
      background-image: url("image/2.png");
      background-repeat: no-repeat;
      background-size: 324px 218.4px;
      border-radius: 20px;
    }

    .company-img {
      position: absolute;
      top: 5%;
      left: 0%;
      max-width: 66px;
    }

    .profile-img {
      position: absolute;
      top: 40%;
      left: 5%;
      width: 96px;
      height: 100px;
      border-radius: 10%;
      border: 3px solid rgba(255, 255, 255, 0.2);
    }

    .sess {
      padding-left: 120px;
      padding-top: 3px;
    }

    .sess,
    .design,
    .t {
      color: aliceblue;
    }

    .t {
      position: absolute;
      padding-left: 120px;
      margin-top: -20px;
    }

    .names {
      text-transform: uppercase;
      font-size: 0.8rem;
      margin-top: 3rem;
      line-height: 2px;
      padding-left: 120px;
      color: black;
    }

    .names2 {
      position: absolute;
      padding-left: 200px;
      line-height: 2px;
      margin-top: -6.7rem;
    }

    .profile-username {
      position: absolute;
      top: 78%;
      font-weight: 300;
      text-transform: lowercase;
      font-size: 1rem;
      margin-top: 0.5rem;
      text-align: center;
      color: navy;
    }

    #qrcode {
      position: absolute;
      align-items: center;
      top: 53%;
      left: 61%;

      box-shadow: 0 0 100px #b4b4b4;
    }

    .unique {
      font-family: 'Courier New', Courier, monospace;
      position: absolute;
      top: 140px;
      right: 500px;
      transform: rotate(-90deg);

    }

    @media screen {
      #qrcode {
        left: 60%;
      }

      .unique {
        top: 138px;
        left: 50%;
      }

      .card2 {
        top: 50%;
        padding-top: 20px;
      }
    }



    @media print {

      body {
        -webkit-print-color-adjust: exact;
      }

      #print {
        display: none;
      }

      .card {
        height: 2.275in;

        width: 3.375in;
        padding: 1.3rem 0 1.3rem 0;
        box-shadow: 0 0 5px #b4b4b4;
        background-repeat: no-repeat;
        background-size: 324px 218.4px;
        border-radius: 20px;
      }

      .card2 {
        height: 2.275in;

        width: 3.375in;
        padding: 1.3rem 0 1.3rem 0;
        box-shadow: 0 0 5px #b4b4b4;
        /* background-image: url("image/2.png"); */
        background-repeat: no-repeat;
        background-size: 324px 218.4px;
        border-radius: 20px;
      }

      #qrcode {
        left: 72%;
      }

      .unique {
        top: 165px;
        left: 57%;
      }

      .img {
        left: -4%
      }

    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card" style="background-image:image/1.png">
          <div class="text-xenter">
            <div class="pp">
              <img class="company-img" src="image/oaustech-logo.png" alt="" />
              <img class="profile-img" src="image/<?php
                                                  if (isset($img) && !empty($img)) {
                                                    echo $img;
                                                  } else {
                                                    echo "lucky18.png";
                                                  }
                                                  ?>">
            </div>
            <div class="sess">
              <p><b>Session: </b><?php echo $cur_session; ?></p>
            </div>
            <div class="t">
              <p><b>Matric No:</b><?php echo $mat_no; ?></p>
            </div>
            <div class="names">
              <p class="design"><b>Surname:</b></p>
              <p><?php echo $sname; ?></p>

              <p><b>Department:</b></p>
              <p><?php echo $depart; ?></p>
              <p><b>programme:</b></p>
              <p><?php echo $pro; ?></p>
            </div>
            <div class="names2">
              <p class="design"><b>Other Names:</b></p>
              <p><?php echo $fname; ?></p>
            </div>
          </div>
        </div>

      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card2">

          <div id="qrcode"></div>
        </div>
      </div>
      <div class="img" style="margin-top: 10.5rem; margin-left:25rem; position: absolute;">
        <img src="sign.PNG" style="width:70px; height:30px; ">
      </div>
      <div class="unique">
        <p><?php echo $unique; ?></p>
      </div>

    </div>

  </div>
  <input type="button" id="print" value="print_id " onclick="printFront()">
  <script src="js/qrcode.min.js"></script>
  <script>
    document.getElementById("qrcode").innerHTML = "";
    console.log("making qr-code...");

    var qrcode = new QRCode(document.getElementById("qrcode"), {
      colorDark: "#000",
      colorLight: "#fff",
      correctLevel: QRCode.CorrectLevel.H,
      width: 97,
      height: 97,
    });

    let url = `${window.location.host}/student_ID/profile.php?uid=<?php echo $uid; ?> `;
    qrcode.makeCode(url);

    function printFront() {
      const card1 = document.querySelector(".card");
      print(" card1");

    }
  </script>
</body>

</html>