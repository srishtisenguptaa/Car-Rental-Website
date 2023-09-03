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
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" >
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
    <?php
include 'connectDB.php';
if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat_password'];
if($password != $passwordRepeat)
{
echo "<script> alert(' Please enter same password')</script>";
}
    else
    {
        $email = $_POST['email'];
        $sql = "SELECT * FROM user where email='$email';";
        $num = mysqli_num_rows(mysqli_query($con, $sql));
        if($num==1){
        echo "<script> alert('Email already exists')</script>";
        }
        else{
            //$id = $_POST['id'];
            $fullname = $_POST['fullname'];
            
            $sql = "insert into user (full_name,email,password) values ('$fullname','$email','$password');";
            echo $fullname;
            echo $email;
            echo $password;
            $result = mysqli_query($con,$sql);
            //session_start();
            //$_SESSION['id'] = $id;
            echo "<div class='alert alert-success'>You are registered successfully.</div>";

        }

    }
}
?>
       
        <form action="signin.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>