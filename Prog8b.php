<html>
    <head>
        <title>Variable Background Color </title>
    </head>
    <body>
        <?php
        $today=date('l');
        $bg_color_ar=['Monday'=>'red',
        'Tuesday'=>'green',
        'Wednesday' => 'yellow' ,
        'Thursday' => 'blue' ,
        'Friday' => 'purple' ,
        'Saturday' => 'lightblue' ,
        'Sunday' => 'red' ];

        $bg_color = isset($bg_color_ar[$today]) ? $bg_color_ar[$today] : 'black';
        echo "<div style=\"background-color:$bg_color;\">
        <h2>$today</h2></div>";
        ?>
    </body>
</html>