<!DOCTYPE hmtl>
<html lang="en">
<head>
    <title>CRUD - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table{
            border: 1px solid black;
            background-color: lightblue;
            border-collapse: collapse;
            width: 100%;
        }

        th, td{
            border: 1px solid black;
            padding: 5px;
        }

        th{
            background-color: darkcyan;
        }

        .header{
            background-color: lightgoldenrodyellow;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
        }

        .header p{
            padding: 10px;
            border-radius: 5px;
            background-color: lightskyblue;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>
        <p>
            Welcome to Dashboard:
            <?php
                include 'config.php';
                if (isset($_GET['username'])) {
                $username = htmlspecialchars($_GET['username']);
                echo '<u>'. $username . '!</u>';
                } else {
                echo 'No username provided.';
                }
            ?>
        </p>
    </div>



    <table>
        <tr>
            <th>CODE</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>MIDDLE NAME</th>
            <th>USERNAME</th>
 
        </tr>
    <?php
    include 'config.php';
        $sql="SELECT * from users";
        $query=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>".$row['code']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['midname']."</td>";
                echo "<td>".$row['username']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>