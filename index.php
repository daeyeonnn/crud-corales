<!DOCTYPE html>
<html lang="en">
<head>
    <title>IM - CRUD | Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
     <?php
     include 'config.php';
     if(isset($_POST{"submit"})){
        $username=$_POST["uname"];
        $password= md5($_POST["psw"]);
        $sql="SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $query=mysqli_query($conn, $sql);
       
        if(mysqli_num_rows($query)>0){ 
            header("Location: dashboard.php?username=". urlencode($username));
            exit();
        }
        else{
            echo "Login Error!"; 
        }
        }
     ?>
    <form method="post">
        <label for="uname">Username:</label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <br>
        <label for="psw">Password:</label>
        <input type="password"placeholder="Enter Password" name="psw" required>
        <br>
        <button type="submit" name="submit" value="submit">Login</button>
    </form>
    <p>Don't have an Account? <a href="register.php">Register</a></p>
    
</body>
</html>