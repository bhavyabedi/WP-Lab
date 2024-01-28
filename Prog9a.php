<html>
    <head>
        <title>Prime Numbers</title>
    </head>
    <body>
        <form method='post'>
            <label>Enter the limit</label>
            <input type="text" name="lim" value=""\>
            <input type="submit"\>
        </form>
        <?php
        if($_POST){
            $n=$_POST['lim'];
            print("Prime Numbers before $n are: \n");
            $check=0;
            $num=2;
            while($num<=$n){
                for($i=2; $i<$num; $i++){
                    if(($num%$i)==0)
                        $check++;
                }
                if($check==0){
                    echo $num.' ';
                }
                $num++;
                $check=0;
            }
        }
        ?>
    </body>
</html>