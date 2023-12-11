<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./CSS/styles.css">
</head>
<body>
    <h1>Login Form</h1>

    <form action="#">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"/>
        <br>
        <label for="pw">Password:</label>
        <input type="text" id="pw" name="pw"/>
        <br>
        <button id="collect_btn" type="button">
            Collect Data
        </button>
        
    </form>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "michael", "mikey_28!", "registration_db");
        if ($conn-> connect_error){
            die("Connection failed: ". $conn-> connect_error);
        }

        $sql = "SELECT username, pword from user_tbl";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["username"] ."</td><td>". $row["pword"] ."</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "";
        }

        $conn-> close();
        ?>
    </table>
    


    <script src="./regFORM.js"></script>
</body>
</html>