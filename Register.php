<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="Web Dev\web.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="#" />
  <title>WallVerse - Register</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url(reg2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0vw 4vw;
      font-family: raleway;
      min-height: 100vh;
    }

    .grid {
      display: grid;
      grid-template-areas:
        "logo logo logo navbar navbar navbar"
        "catg catg catg catg catg catg"
        "main main main main main main"
        "footer footer footer footer footer footer";
      grid-gap: 0px;
    }

    #logo {
      background-color: rgb(12, 11, 11);
      background-image: none;
    }

    #navbar {
      background-color: rgb(12, 11, 11);
      background-image: none;
      padding-left: 48vw;
      padding-bottom: 0vw;
      margin-bottom: 0vw;
    }

    #navbar ul {
      padding-top: 1.3vw;
      margin-bottom: -1.667vw;
    }

    #navbar ul li a:hover {
      color: rgb(86, 134, 182);
    }

    #navbar ul ul li:hover {
      background-color: rgb(86, 134, 182);
      border-color: rgb(86, 134, 182);
      transition: 0.2s linear;
    }

    .login-box {
      position: relative;
      top: 250px;
      left: 50%;
      width: 26.667vw;
      padding: 2.667vw;
      transform: translate(-50%, -50%);
      background: rgb(12, 11, 11, 0.92);
      box-shadow: 0 1vw 1.667vw rgb(86, 134, 182, 0.6);
      border-radius: 0.667vw;
    }

    .login-box h2 {
      margin: 0 0 2vw;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .login-box .user-box input {
      position: relative;
      width: 100%;
      padding: 0.667vw 0vw;
      font-size: 1.067vw;
      color: #fff;
      margin-bottom: 2vw;
      border: none;
      border-bottom: 0.067vw solid #fff;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: relative;
      left: 0vw;
      top: -4vw;
      padding: 0.667vw 0vw;
      font-size: 1.067vw;
      color: #fff;
      pointer-events: none;
      transition: 0.5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
      top: -5.667vw;
      left: 0vw;
      color: rgb(86, 134, 182);
      font-size: 0.8vw;
    }

    #submit {
      padding: 0.667vw 1.333vw;
      color: #cbbddb;
      font-size: 1.067vw;
      font-family: raleway;
      text-decoration: none;
      text-transform: uppercase;
      overflow: hidden;
      transition: 0.5s;
      letter-spacing: 0.267vw;
      border: 0.067vw solid rgb(86, 134, 182);
      background: transparent;
      margin: auto;
      cursor: pointer;
    }

    #submit:hover {
      background: rgb(86, 134, 182);
      color: #fff;
      border-radius: 0.333vw;
      box-shadow: 0 0 0.333vw rgb(86, 134, 182), 00 1.667vw rgb(86, 134, 182),
        0 0 3.333vw rgb(86, 134, 182), 6.667vw rgb(86, 134, 182);
    }

    .button-form {
      display: flex;
      flex-direction: row;
      margin-top: 1.333vw;
    }

    #register {
      font-size: 0.933vw;
      text-decoration: none;
      color: #cbbddb;
      margin: auto;
      width: 60%;
      text-align: center;
    }

    #register a {
      margin: auto;
      color: rgb(65, 130, 195);
      text-decoration: none;
    }

    p {
      color: rgb(220, 30, 30);
      font-size: 1.133vw;
      font-family: raleway;
    }

    #footer {
      background-color: rgb(86, 134, 182);
      width: 100%;
      position: fixed;
      bottom: 0;
    }
  </style>
</head>

<body>
  <div class="grid">
    <div class="item" id="logo">
      <a href="Web Dev\home.html">WallVerse</a>
    </div>
    <div class="item" id="navbar">
      <ul>
        <li>
          <a href="Web Dev\LA1.html" style="padding-right: 0.5vw"><i class="fa fa-fw fa-clock-o"></i> Latest</a>
          <ul>
            <li>
              <a href="Web Dev\LA1.html" style="padding-left: 1.7vw">All</a>
            </li>
            <li>
              <a href="Web Dev\LP1.html" style="padding-left: 0.6vw">Phone</a>
            </li>
            <li>
              <a href="Web Dev\LD1.html" style="padding-right: 0.733vw">Desktop</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="Web Dev\PA1.html" style="padding-right: 0.5vw"><i class="fa fa-fw fa-fire"></i> Popular</a>
          <ul>
            <li>
              <a href="Web Dev\PA1.html" style="padding-left: 1.7vw">All</a>
            </li>
            <li>
              <a href="Web Dev\PP1.html" style="padding-left: 0.6vw">Phone</a>
            </li>
            <li>
              <a href="Web Dev\PD1.html" style="padding-right: 0.733vw">Desktop</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="http://localhost/WebPro/Login.php"><i class="fa fa-fw fa-user"></i> Login</a>
        </li>
      </ul>
    </div>

    <div id="main" style="margin-top: 4vw">
      <div class="login-box">
        <h2 style="color: whitesmoke">Register</h2>
        <form method="post"> <!-- action not used since php written in same file -->
          <div class="user-box">
            <input type="text" name="uname" id="uname" required="" />
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="email" name="mail" id="mail" required="" />
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" id="pass" required="" />
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" name="cpass" id="cpass" required="" />
            <label>Confirm Password</label>
          </div>

          <p id="display"></p>

          <div class="button-form">
            <button id="submit" name="submit" type="submit">Submit</button>
            <div id="register">
              Already have an account ?
              <a href="http://localhost/WebPro/Login.php">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="item" id="footer" style="margin-top: 5vw">
      <section style="height: 3.2vw">
        <ul class="icon-list" id="icon-item" style="margin-top: -0.5vw">
          <li style="margin-top: 1.267vw">
            <a href="https://www.instagram.com/" class="insta"><i class="fa fa-fw fa-instagram"></i></a>
          </li>
          <li style="margin-top: 1.267vw">
            <a href="#" class="fb"><i class="fa fa-fw fa-facebook-f"></i></a>
          </li>
          <li style="margin-top: 1.267vw">
            <a href="https://www.pinterest.com/cooler_than_thou/" class="pint"><i class="fa fa-fw fa-pinterest"></i></a>
          </li>
        </ul>
      </section>

      <h5>
        All images remain property of their original owners. Copyright 2023 ©
        WallVerse.com. All Rights Reserved.
      </h5>
    </div>
  </div>
</body>
<script>
  $("#submit").click(function() {
    var name1 = $("#uname").val();
    var pattern = /^[a-zA-Z0-9].{5,15}$/; // name and password of 6-14 characters
    var mail1 = $("#mail").val();
    var pass1 = $("#pass").val();
    var pass2 = $("#cpass").val();
    if (name1 == "") {
      $("#display").text("*Please Enter Username");
      return false;
    } else if (!name1.match(pattern)) {
      $("#display").text("*Username Must Have 6-14 Characters");
      return false;
    } else if (mail1 == "") {
      $("#display").text("*Please Enter Email");
      return false;
    } else if (pass1 == "") {
      $("#display").text("*Please Enter Password");
      return false;
    } else if (!pass1.match(pattern)) {
      $("#display").text("*Password Must Have 6-14 Characters");
      return false;
    } else if (pass2 == "") {
      $("#display").text("*Please Confirm Your Password");
      return false;
    } else if (!pass2.match(pass1)) {
      $("#display").text("*Passwords do not match");
      return false;
    } else {
      return true;
    }
  });
</script>
<script>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "user_data";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if (!$conn) {
    die("Sorry, connection was not established" . mysqli_connect_error());
  }

  // $name = "";
  // $email = "";
  // $pass = "";

  if (isset($_POST["submit"])) {
    $name = $_POST["uname"];
    $email = $_POST["mail"];
    $pass = $_POST["pass"];


    $sql = "INSERT INTO info (Username, Email, Password) VALUES ('$name', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo 'alert("Sign Up Successful")';
    } else {
      die(mysqli_connect_error());
    }
  }
  ?>
</script>

</html>