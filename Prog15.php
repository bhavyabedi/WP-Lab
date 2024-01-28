<html>
    <head>
        <title>Redundancy</title>
    </head>
    <body>
    <h2> Write to File</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <textarea name="content" rows="5" cols="40" placeholder="Enter text to write"></textarea>
            <br><br>
            <input type="Submit" name="write"/>
        </form>
        <h2>Read from file</h2>
        <?php
            $file='data.txt';
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['write'])){
                $content=$_POST['content'];
                file_put_contents($file,$content, FILE_APPEND | LOCK_EX);
                echo "Content written to file Succesfully!";
            }
            if(file_exists($file)){
                $content=file_get_contents($file);
                echo "<pre>$content</pre>";
            }
            else{
                echo "File Not Found!";
            }
        ?>
    </body>
</html>