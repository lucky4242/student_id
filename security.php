<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css" />
  <!-- <link rel="stylesheet" href="../dist/css/demo.css"> -->
  <link rel="stylesheet" href="dist/css/dropify.min.css" />
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

  .container {
    padding-top: 15%;
    justify-content: center;
    align-items: center;
  }
</style>

<body bgcolor="#ececec">
  <nav class="teal">
    <a href="" class="brand-logo center">Security Page</a>
  </nav>
  <div class="container">
    <form action="profile.php" method="GET">
      <div class="input-field">
        <i class="material-icons prefix">key</i>
        <input type="text" name="uid" id="name" required="required" placeholder="Enter Unique Key" />
      </div>
      <button type="submit" style="width: 80%; margin-left: 10%" class="btn">
        Find Student
      </button>
    </form>
  </div>
</body>

</html>