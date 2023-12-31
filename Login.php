<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_data";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Sorry, connection was not established" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $pass = $_POST["pass"];

  // if ($name = "adminuser" && $pass = "admin123") {  //for admin panel
  //   header("location:http://localhost/WebPro/Admin.php");
  // }

  $sql = "SELECT Username AND Password from ad_info where Username='$name' AND Password='$pass'";  //for admin login
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      header("location:http://localhost/WebPro/Admin.php");
    }
  } else {
    $msg = "Invalid Credentials";
  }



  $sql = "SELECT Username AND Password from info where Username='$name' AND Password='$pass'";  //for user login
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['Username'] = $name;
      header("location:Web Dev/home2.php");
    }
  } else {
    $msg = "Invalid Credentials";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="Web Dev\web.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="#" />
  <title>WallVerse - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url(lform2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0vw -6vw;
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

    #catg {
      grid-area: catg;
    }

    .category {
      display: inline-flex;
      justify-content: center;
      background: transparent;
    }

    .category h1 {
      font-family: raleway;
      text-decoration: none;
      margin-top: 3vw;
      padding: 1.333vw 0.8vw 1.333vw 0vw;
      font-size: 2vw;
      font-weight: 700;
      word-spacing: 0.4vw;
      letter-spacing: 0.06vw;
      color: whitesmoke;
      text-shadow: -0.067vw 0.067vw 0.133vw #000, 0.067vw 0.067vw 0.133vw #000,
        0.067vw -0.067vw 0 #000, -0.067vw -0.067vw 0 #000;
    }

    .category a:hover {
      color: whitesmoke;
    }

    .login-box {
      position: relative;
      top: 50%;
      left: 50%;
      width: 26.667vw;
      padding: 2.667vw;
      transform: translate(-50%, -50%);
      background: rgb(12, 11, 11, 0.92);
      box-shadow: 0 1vw 1.667vw rgb(253, 219, 28, 0.6);
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
      color: rgb(253, 219, 28);
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
      border: 0.067vw solid rgb(253, 219, 28);
      background: transparent;
      margin: auto;
      cursor: pointer;
    }

    #submit:hover {
      background: rgb(199, 171, 15);
      color: #fff;
      border-radius: 0.333vw;
      box-shadow: 0 0 0.333vw rgb(199, 171, 15), 00 1.667vw rgb(199, 171, 15),
        0 0 3.333vw rgb(199, 171, 15), 6.667vw rgb(199, 171, 15);
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
      color: rgb(253, 219, 28);
      text-decoration: none;
    }

    p {
      color: rgb(220, 30, 30);
      font-size: 1.133vw;
      font-family: sans-serif;
    }

    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
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

    <div id="catg" class="category">
      <h1>《 A FEAST FOR YOUR EYES 》</h1>
    </div>

    <div id="main" style="margin-top: 3vw">
      <div class="login-box">
        <h2 style="color: whitesmoke">Login</h2>
        <form method="post">
          <div class="user-box">
            <input type="text" name="name" required="" />
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" required="" />
            <label>Password</label>
          </div>

          <p id="display"><?php
                          if (isset($msg)) {
                            echo $msg;
                          }
                          ?></p>

          <div class="button-form">
            <button id="submit" type="submit">Submit</button>
            <div id="register">
              Don't have an account ?
              <a href="Register.php"> Register</a>
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


</html>