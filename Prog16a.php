<html>
    <head>
        <title>Redundancy</title>
    </head>
    <body>
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'StudentInfo';

            // Correcting the order of parameters in mysqli constructor
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die('Connection Failed: ' . $conn->connect_error);
            }

            $add_sql = "INSERT INTO StudentInfo(name, age, grade) VALUES ('Shiva', 32, 'A+')";
            if ($conn->query($add_sql) === TRUE) {
                echo "Added<br>";
            } else {
                echo "Error adding query " . $conn->error . "<br>";
            }

            $update_sql = "UPDATE StudentInfo SET age=33 WHERE name='Shiva'";
            if ($conn->query($update_sql) === TRUE) {
                echo "Updated<br>";
            } else {
                echo "Error updating query " . $conn->error . "<br>";
            }


            $conn->close();
        ?>
    </body>
</html>
