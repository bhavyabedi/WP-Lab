<html>
    <head>
        <title>Redundancy</title>
    </head>
    <body>
        <form method='post'>
            <label>Enter the limit for Fibonacci Series</label>
            <input type="text" name="lim" value=""\>
            <input type="submit"\>
        </form>
        <?php
        if($_POST){
            $n=$_POST['lim'];
            print("Fibinacci Series for $n numbers are: \n");
            $a=0;
            $b=1;
            $count=1;
            echo "$a, ";
            while($count<$n){
                $c=$a+$b;
                $a=$b;
                $b=$c;
                echo "$c, ";
                $count++;
            }

        }
        ?>
    </body>
</html>