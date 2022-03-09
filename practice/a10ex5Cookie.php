PHP內建函式 setcookie();

<?php 
    header("Content-type: text/html; charset = utf-8");
    setcookie("UserName","大丸子",time()+60*60*24);
?>