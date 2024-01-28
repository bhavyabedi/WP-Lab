<html>
    <head>
        <title>Redundancy</title>
    </head>
    <body>
        <form method="post">
            <label>Enter The Array</label>
            <input type="text" name="arr" value=""\>
            <input type="submit"\>
        </form>
        <?php
            function removeDuplicate($arr){
                $n=count($arr);
                if($n ==0 || $n==1){
                    return $arr;
                }
                $unique=[$arr[0]];
                for($i=1;$i<$n;$i++){
                    if($arr[$i]!=$arr[$i-1]){
                        $unique[$i]=$arr[$i];
                    }
                }
                return $unique;
            }
            if($_POST){
                $input=$_POST['arr'];
                $inArray=explode(' ',$input);
                $sortedArray=array_map('intval',$inArray);
                sort($sortedArray);
                $result=removeDuplicate($sortedArray);
                echo "Entered Array is : " . implode(', ', $inArray) . "\n";
                echo 'Sorted array : ' . implode(', ', $inArray) . ' \n ';   
                echo 'Non-redundant array: ' . implode(', ', $result) . '\n';
            }
        ?>
    </body>
</html>