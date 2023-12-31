<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_data";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Sorry, connection was not established" . mysqli_connect_error());
}

$name = $_GET["editUser"];
$sql = "SELECT * FROM info WHERE Username = '$name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["Username"];
$pass = $row["Password"];
$email = $row["Email"];


if (isset($_POST["submit"])) {
  $name = $_POST["uname"];
  $email = $_POST["mail"];
  $pass = $_POST["pass"];


  $sql = "UPDATE info SET Username = '$name', Email = '$email', Password = '$pass' WHERE Username = '$name'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header('location:Admin.php');
  } else {
    die(mysqli_connect_error());
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
  <title>WallVerse - Update</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url(edit.png);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: raleway;
      min-height: 100vh;
    }

    .login-box {
      position: relative;
      top: 250px;
      left: 50%;
      width: 26.667vw;
      padding: 2.667vw;
      transform: translate(-50%, -50%);
      background: rgb(12, 11, 11, 0.95);
      box-shadow: 0 1vw 1.667vw rgb(86, 134, 182, 0.6);
      border-radius: 0.667vw;
    }

    .login-box h2 {
      margin: 0 0 4vw;
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
      top: -5.667vw;
      padding: 0.667vw 0vw;
      font-size: 0.8vw;
      color: #fff;
      pointer-events: none;
      transition: 0.5s;
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
  </style>
</head>

<body>
  <div class="grid">

    <div id="main" style="margin-top: 4vw">
      <div class="login-box">
        <h2 style="color: whitesmoke">Edit Data</h2>
        <form method="post"> <!-- action not used since php written in same file -->
          <div class="user-box">
            <input type="text" name="uname" id="uname" value=<?php echo $name; ?> style="color:grey;" readonly />
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="email" name="mail" id="mail" value="<?php echo $email; ?>" />
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>" />
            <label>Password</label>
          </div>

          <p id="display"></p>

          <div class="button-form">
            <button id="submit" name="submit" type="submit">UPDATE</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script>
  $("#submit").click(function() {
    var pattern = /^[a-zA-Z0-9].{5,15}$/; // name and password of 6-14 characters
    var mail1 = $("#mail").val();
    var pass1 = $("#pass").val();
    if (mail1 == "") {
      $("#display").text("*Please Enter Email");
      return false;
    } else if (pass1 == "") {
      $("#display").text("*Please Enter Password");
      return false;
    } else if (!pass1.match(pattern)) {
      $("#display").text("*Password Must Have 6-14 Characters");
      return false;
    } else {
      return true;
    }
  });
</script>

</html>