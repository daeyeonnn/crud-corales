<!DOCTYPE html>
<html lang="en">
<head>
    <title>IM - CRUD | Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
        include 'config.php';
        if(isset($_POST{"submit"})){
            $code= $_POST["code"]; //$code is a variable
            $fname=$_POST["fname"];
            $mname=$_POST["mname"];
            $lname=$_POST["lname"];
            $username=$_POST["uname"];
            $password= md5($_POST["psw"]);

            $query= mysqli_query($conn, "INSERT INTO users (code, lastname, firstname, midname, username, password) VALUES ('$code','$lname','$fname','$mname','$username','$password')");
            if($query){
                echo "Submitted Successful!"; //print
            }else{
                echo "Error!"; //print
            }
        }
    ?>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <form  method="post">
        <label for="code">Code</label>
        <input type="text"  placeholder="Enter Student ID" name="code">
        <br>

        <label for="fnmae">First Name:</label>
        <input type="text" placeholder="Enter First Name" name="fname">
        <br>

        <label for="mname">Middle Name:</label>
        <input type="text" placeholder="Enter Middle Name" name="mname"> 
        <br>

        <label for="lname">Last Name:</label>
        <input type="text" placeholder="Enter Lastname" name="lname">
        <br>

        <label for="uname">Username:</label>
        <input type="text" placeholder="Enter Username" name="uname">
        <br>

        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw">
        <br>
        
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <p>Already have an Account? <a href="index.php">Login</a></p>
</body>
</html>