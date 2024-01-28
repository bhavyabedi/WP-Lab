<?php
$cookie_name='USER_ID';
$cookie_value='Bhavya Bedi';
$expiration_time=time()+1000;
setcookie($cookie_name,$cookie_value,$expiration_time,"/");
echo "Cookie $cookie_name is set <br><br>";

if(isset($_COOKIE[$cookie_name])){
    echo "Value of Cookie".$cookie_name ."is". $_COOKIE[$cookie_name];
}else{
    echo "Cookie named".$cookie_name ."is not set";
}
?>
