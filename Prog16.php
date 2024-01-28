<html>
    <head>
        <title>Redundancy</title>
    </head>
    <body>
        <?php
            $servername='localhost';
            $username='root';
            $password='';
            $dbname='StudentInfo';
            $conn=new mysqli($servername,$password,$username,$dbname);
            if($conn->connection_error)
            die('Connection Failed: '.$conn->connection_error);
            $add_sql="INSERT INTO StudentInfo(name,age,grade) VALUES ('Shiva',32,'A+)";
            if($conn->query($add_sql)===TRUE)
                echo "Added";
            else    
                echo "Error adding query ".$conn->error."<br>";
            $update_sql="UPDATE StudentInfo set age=33 WHERE name='Shiva'";
            if($conn->query($update_sql)===TRUE)
                echo "Added";
            else    
                echo "Error adding query ".$conn->error."<br>";
            $delete_sql="DELETE FROM StudentInfo where name='Shiva'";
            if($conn->query($delete_sql)===TRUE)
                echo "Added";
            else    
                echo "Error adding query ".$conn->error."<br>";
            $conn->close();          
        ?> 
    </body>
</html>