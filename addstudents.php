<?php
include_once('database.php');
?>

<?php

if (!isset($_SESSION['uid'])) {
  header("location:login.php");
  exit();
}
$userid = $_SESSION['uid'];
if (isset($_POST['submit'])) {
  $image_name = $_FILES['image']['name'];
  $temp_image_name =  $_FILES['image']['tmp_name'];
  $randomid = (rand(1, 1000000));
  $nation = $_POST['nation'];
  $SOR = $_POST['SOR'];
  $LGA = $_POST['LGA'];
  $degree_type = $_POST['degree_type'];
  $programme = $_POST['programme'];
  $PA = $_POST['PA'];
  $CA = $_POST['CA'];
  $contact = $_POST['phone'];
  $level1 = $_POST['height'];
  $email =  $_POST['email'];
  // $mat_no = $_POST['mat_no'];
  $gender = $_POST['gender'];
  $brith = $_POST['birth'];
  $depart = $_POST['department'];
  $YOA = $_POST['addmission'];
  $cur_session = $_POST['cur_session'];



  move_uploaded_file($temp_image_name, "image/$image_name");
  //  $query = "INSERT INTO`profile` ( `unique_id`, `nationality`, `SOR`, `LGA`, `Degree_type`, `programme`, `PA`, `CA`, `contact`, `level1`,`DOB`, `email`, `matric_no`, `img`, `gender`,`department`,`YOA`)
  //   VALUES ('$randomid','$nation','$SOR','$LGA', '$degree_type','$programme','$PA','$CA','$contact','$level1','birth','$email','$mat_no','$image_name','$gender','$depart','$YOA')";
  $query = "UPDATE `profile` SET `unique_id`='$randomid',`nationality`='$nation',`SOR`='$SOR',`LGA`='$LGA',
  `Degree_type`='$degree_type',`programme`='$programme',`PA`='$PA',`CA`='$CA',`contact`='$contact',`level1`='$level1',
  `DOB`='$brith',`email`='$email',`img`='$image_name',`gender`='$gender',
  `department`='$depart',`YOA`='$YOA', `cur_session`='$cur_session' WHERE id='$userid'";
  $run = mysqli_query($con, $query);

  if ($run) {
    $_SESSION['profile_completed'] = "profile Completed Successfull";
    $student_added =  $_SESSION['profile_completed'];
  } else {
    echo "not_successful";
    $_SESSION['profile_added_failed'] = "Failed To Add New Student";
    $student_added_failed =  $_SESSION['profile_added_failed'];
  }
}
// 
?>
<!-- The Coding Has Been Started From Here -->
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- Dropify File Upload -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css" />
  <!-- <link rel="stylesheet" href="../dist/css/demo.css"> -->
  <link rel="stylesheet" href="dist/css/dropify.min.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    header,
    .main,
    footer {
      padding-left: 300px;
    }

    .text {
      visibility: hidden;
    }

    @media only screen and (max-width: 992px) {

      header,
      .main,
      footer {
        padding-left: 0;
      }
    }
  </style>
</head>

<body>
  <nav class="teal">
    <div class="container">
      <div class="nav-wrapper">
        <a href="" class="brand-logo center">Update Profile</a>
        <a href="" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
      </div>
    </div>
  </nav>

  <!-- The Dashboard Coding Started From Here -->

  <div class="row main">
    <div class="col l12 m12 s12">
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="card-panel">
          <div class="cente">
            <h5 class="center red-text">
              <?php

              if (isset($student_added)) {
                echo $student_added;
              }


              ?>
            </h5>
          </div>
          <div class="row">
            <div class="col l4 m12 s12 center">
              <div class="input-field file-field">
                <input type="file" name="image" class="dropify" required="required" data-show-remove="false" data-default-file="image/memoji.png" />
              </div>
            </div>

            <div class="col l4">
              <div class="input-field">
                <i class="material-icons prefix">flag</i>
                <!-- <input type="text" name="nation" id="rollno" required="required" /> -->
                <select class="form-select" id="country" name="nation" id="rollno" required>
                  <option>Nationality</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, Democratic Republic of the Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote D'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curacao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="XK">Kosovo</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthelemy</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="CS">Serbia and Montenegro</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.s.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
                <!-- <label for="rollnow">Nationality</label> -->
              </div>
              <div class="input-field">
                <i class="material-icons prefix">location_city</i>
                <!-- <input type="text" name="SOR" id="contact" required="required" /> -->
                <select class="form-select" id="contact" name="SOR" required>
                  <option disabled selected>State of Origin</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="Akwa Ibom">Akwa Ibom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">Federal Capital Territory</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>
                </select>
                <!-- <label for="contact">state of origin</label> -->
              </div>
              <div class="input-field">
                <i class="material-icons prefix">location_city</i>
                <input type="text" name="LGA" id="contact" required="required" />
                <label for="contact">Local Government Area</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">school</i>
                <!-- <input type="text" name="degree_type" id="name" required="required" /> -->
                <select class="form-select" id="country" name="degree_type" id="name" required>
                  <option value="AF">Degree Type</option>
                  <option value="B_Tech">B_Tech</option>
                  <option value="B_Sci">B_Sci</option>
                </select>
                <!-- <label for="name">Degree Type</label> -->
              </div>
              <div class="input-field">
                <i class="material-icons prefix">height</i>
                <input type="text" name="department" id="city" required="required" />
                <label for="city">Department</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">bookmark</i>
                <input type="text" name="programme" id="contact" required="required" />
                <label for="contact">Progarmme</label>
              </div>

              <div class="input-field">
                <i class="material-icons prefix">height</i>
                <input type="text" name="addmission" id="city" required="required" />
                <label for="city">Year of Addmission</label>
              </div>
            </div>
            <div class="row">
              <div class="col l4">

                <div class="input-field">
                  <i class="material-icons prefix">height</i>
                  <input type="text" name="height" id="city" required="required" />
                  <label for="city">Level</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">home</i>
                  <input type="text" name="PA" id="city" required="required" />
                  <label for="city">Permanent Address</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">home</i>
                  <input type="text" name="CA" id="city" required="required" />
                  <label for="city">Current address</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">call</i>
                  <input type="text" name="phone" id="city" />
                  <label for="city">contact</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">dataset</i>
                  <input type="date" name="birth" id="city" required="required" />
                  <!-- <label for="city">DOB (DD/MM/YY)</label> -->
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">height</i>
                  <input type="text" name="cur_session" id="cur_session" />
                  <label for="email">Enter current session</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input type="email" name="email" id="email" required="required" />
                  <label for="Email">Email</label>
                </div>
              </div>
            </div>
            <div class="col l4 center"></div>
            <div class="col l8 center large">
              <input type="radio" name="gender" id="male" value="male" required="required" />
              <label for="male">Male</label>
              <input type="radio" name="gender" id="female" value="female" required="required" />
              <label for="female">Female</label>
            </div>
          </div>

          <button type="submit" name="submit" style="width: 100%" class="btn">
            Add Students
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- The Navbar Menu Collection List -->
  <ul class="sidenav collapsible sidenav-fixed" id="slide-out">
    <li>
      <div class="user-view">
        <!-- <div class="background">
            <img
              src="lucky17.png"
              class="responsive-img"
              alt="image-background"
            />
          </div> -->
        <!-- <div class="text"> -->
        <!-- <span class="name white-text">Umair Farooqui</sp -->
        <!-- <span class="name white-text">Umair Farooqui</span>s -->
        <!-- <span class="name white-text">Umair Farooqui</span> -->
        <!-- <span class="name white-text">Umair Farooqui</span> -->

        <!-- <span class="email white-text">info.mufazmi@gmail.com</span> -->
        <!-- </div> -->
        <!-- <a href="profile.php" class="">
            <img src="../img/<?php
                              // if (isset($image) && !empty($image)){
                              //  echo $image;
                              // }
                              // else
                              // {
                              //   echo "teacher.png";
                              // }
                              ?>" alt="" class="responsive-img circle">
          </a> -->
        <span class="name"></span>
        <span class="email"></span>
      </div>
    </li>
    <li>
      <a href="index.php"><i class="material-icons">dashboard</i>Dashboard</a>
    </li>
    <li>
      <a href="index.php"><i class="material-icons">person</i>profile</a>
    </li>
    <li>
      <div class="collapsible-header">
        <!-- <i class="collapsible-header material-icons">person</i>
          <span style="margin-left: 25px">Students</span> -->
        <!-- <i
            class="material-icons right prefix"
            style="margin-right: 0; margin-left: 80px"
            
            >arrow_drop_down</i
          > -->
      </div>
      <div class="collapsible-body">
        <!-- <ul>
                  <li>
                  <a href="addstudent.php"><i class="material-icons">person_add</i>Add Student</a>
                  <li><a href="editstudent.php?id=20"><i class="material-icons">edit</i>Edit Student</a></li>
                  <li><a href="deletestudent.php"><i class="material-icons">delete</i>Delete Student</a></li>
                  <li><a href="allstudents.php"><i class="material-icons">person</i>All Student</a></li>
                  
                  </li>
                </ul> -->
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        <ul>
          <!-- <li>
              <i class=" collapsible-header material-icons">person</i> <span style="margin-left:25px;">Teacher</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li> -->
        </ul>
      </div>
      <div class="collapsible-body">
        <!-- <ul>
              <li>
              <li><a href="addteacher.php"><i class="material-icons">group_add</i>Add Teacher</a></li>
              <li><a href="editteacher.php?id=1"><i class="material-icons">edit</i>Edit Teacher</a></li>
              <li><a href=""><i class="material-icons">delete</i>Delete Teachers</a></li>
              <li><a href="teachers.php"><i class="material-icons">groups</i>All Teachers</a></li>
              </li>
            </ul> -->
      </div>
    </li>
    <li></li>
    <li>
      <div class="collapsible-header">
        <!-- <i class="collapsible-header material-icons">library_books</i> <span style="margin-left:25px;">Course</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:91px;">arrow_drop_down</i> -->
      </div>
      <div class="collapsible-body">
        <!-- <ul>
              <li>
              <a href="addcourse.php"><i class="material-icons">library_books</i>Add Course</a>
              <a href="course.php"><i class="material-icons">library_books</i>All Course</a>
              </li>
            </ul> -->
      </div>
    </li>
    <div class="divider"></div>
    <li>
      <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
    </li>
    <!-- <li><a href="about.php"><i class="material-icons">info</i>About Us</a></li> -->
  </ul>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="dist/js/dropify.min.js"></script>
  <script>
    $(document).ready(function() {
      // Basic
      $(".dropify").dropify();

      // Translated
      $(".dropify-fr").dropify({
        messages: {
          default: "Glissez-déposez un fichier ici ou cliquez",
          replace: "Glissez-déposez un fichier ou cliquez pour remplacer",
          remove: "Supprimer",
          error: "Désolé, le fichier trop volumineux",
        },
      });

      // Used events
      var drEvent = $("#input-file-events").dropify();

      drEvent.on("dropify.beforeClear", function(event, element) {
        return confirm(
          'Do you really want to delete "' + element.file.name + '" ?'
        );
      });

      drEvent.on("dropify.afterClear", function(event, element) {
        alert("File deleted");
      });

      drEvent.on("dropify.errors", function(event, element) {
        console.log("Has Errors");
      });

      var drDestroy = $("#input-file-to-destroy").dropify();
      drDestroy = drDestroy.data("dropify");
      $("#toggleDropify").on("click", function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
          drDestroy.destroy();
        } else {
          drDestroy.init();
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".sidenav").sidenav();
      $(".collapsible").collapsible();
      $("select").formSelect();
      $(".tooltipped").tooltip({
        delay: 50
      });
      $(".dropdown-trigger").dropdown();
    });
  </script>
</body>

</html>