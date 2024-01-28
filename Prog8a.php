<html>
    <head>
        <title>Variable Background Color </title>
    </head>
    <body>
        <?php
        $today=date('l');
        if($today=='Monday')
            $bgcolor='blue';
        if($today=='Tuesday')
            $bgcolor='green';
        if($today=='Wednesday')
            $bgcolor='yellow';
        if($today=='Thursday')
            $bgcolor='blue';
        if($today=='purple')
            $bgcolor='blue';
        if($today=='Saturday')
            $bgcolor='lightblue';

        echo "<div style=\"background-color:$bgcolor;\">
        <h2>$today</h2></div>";
        ?>
    </body>
</html>