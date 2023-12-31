<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="Web Dev\web.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" a href="data\css\bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="#" />
  <title>WallVerse - Admin</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url(admin3.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: raleway;
      min-height: 100vh;
    }

    .grid {
      display: grid;
      grid-template-areas:
        "logo logo logo navbar navbar navbar"
        "catg catg catg catg catg catg"
        "main main main main main main";
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
      margin-top: 2.2vw;
      padding: 1.333vw 0.8vw 1.333vw 0vw;
      font-size: 3vw;
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

    #main {
      grid-area: main;
    }

    .table {
      font-size: 1.1rem;
      margin-bottom: 0.08vw;
      background-color: rgba(12, 11, 11, 0.94);
      color: whitesmoke;
    }

    td button {
      background: none;
      border: none;
    }

    td i {
      color: whitesmoke;
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
        </li>
        <li>
          <a href="Web Dev\PA1.html" style="padding-right: 0.5vw"><i class="fa fa-fw fa-fire"></i> Popular</a>
        </li>
        <li>
          <a href="Login.php"><i class="fa fa-fw fa-user"></i> LogOut</a>
        </li>
      </ul>
    </div>

    <div id="catg" class="category">
      <h1>Welcome Back, Captain</h1>
    </div>

    <div id="main" class="data">

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "user_data";

      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn) {
        die("Sorry, connection was not established" . mysqli_connect_error());
      }


      $sql = "SELECT * FROM `info` ";
      $result = mysqli_query($conn, $sql);

      ?>

      <div class="row" style="width:90%;margin-left: 4.667vw;">
        <div class="col m-auto">
          <div class="card mt-5">
            <table class="table" method="POST">
              <tr style="background-color: rgba(255, 255, 255, 0.7); color: rgb(12,12,13);">
                <td> <strong> Username </td>
                <td> <strong>Email </td>
                <td> <strong>Password </td>
                <td> <strong>Edit </td>
                <td> <strong>Delete </td>
              </tr>

              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $name = $row["Username"];
                $email = $row["Email"];
                $pass = $row["Password"];
              ?>
                <tr>
                  <td><?php echo $name ?></td>
                  <td><?php echo $email ?></td>
                  <td><?php echo $pass ?></td>
                  <td><button class="edit" name="edit" style="padding-left: 8px;"><a href="edit.php?editUser=<?= $name ?>"><i class="fa fa-pencil"></i></a>
                    </button></td>
                  <td><button class="delete" name="delete" style="padding-left: 20px;"><a href="delete.php?delUser=<?= $name ?>"><i class="fa fa-trash"></i></a>
                    </button></td>
                </tr>
              <?php
              }
              ?>
            </table>

          </div>
        </div>
      </div>
    </div>
    <?php
    ?>
</body>

</html>