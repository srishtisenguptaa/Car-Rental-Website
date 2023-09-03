<?php
session_start();

if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <?php
        include 'connectDb.php';
        if(isset($_POST['email'] )&& isset($_POST['password'])){
            $email=$_POST['email'];
            $pass_word=$_POST['password'];
            //print_r($email);
            $sql ="select * from user where email='$email' and password='$pass_word';";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $num=mysqli_num_rows($result);
            if($num==1){
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['loggedin']=true;
                header("Location: index.php");
                die();

            }
            else{
                echo "<div class='alert alert-danger'>Login Failed!</div>";
            }
        }
        ?>
        
      <form action="login.php" method="post" onsubmit="return isvalid()" >
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
     <div><p>Not registered yet <a href="signin.php">Register Here</a></p></div>
    </div>
</body>
</html>