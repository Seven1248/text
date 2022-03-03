<?php 
header("Content-type:text/html; charset = utf-8");
if(!isset($_SERVER['PHP_AUTH_USER']))
{
    header('WWW-Authenticate: Basic realm="myrealm"');
    echo "error, no password";
}else{
    echo "{$_SERVER['PHP_AUTH_USER']}你好!<br>";
}


?>