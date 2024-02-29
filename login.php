<?php
 session_start();
 if(isset($_SESSION["policy"])){
    header("location: chat.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .center {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right: 400px;
      }
      .center a:hover{
        color: red;
      }
      .center button:hover{
        background-color: red;
      }
      .icon{
        display: flex;
      }
      .icon i{
        padding-left: 15px;
      }
      .containery{
        display: flex;
      }
    </style>
</head>
<body>
  
    <div class="container">
    <?php
        if (isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                  session_start();
                   $_SESSION["policy"] = "yes";
                    header("location: index.php");
                    die();
                }else{
                    echo"<div class='alert alert-danger'>Password does not match</div>";
                }}else{
                    echo"<div class='alert alert-danger'>Email does not match</div>";
            }
        }
      
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>