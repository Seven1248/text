<?php

// $mylink = mysqli_connect("localhost", "root", "root") or die("無法建立資料連接:" . mysqli_connect_error());
// //呼叫函是建立資料連接
// echo '$mylink 連線主機為 ' . mysqli_get_host_info($mylink);
// mysqli_select_db($mylink, 'product') or die(mysqli_error($mylink));
// //開啟product資料庫
// $sql = "SELLECT * FROM price WHERE category = '主機板'";  //設定欲執行的SQL查詢
// $result = mysqli_query($mylink, $sql);  //呼叫mysql)query()函式執行SQL查詢，$resut的回傳執為資源識別字，指向查詢結果。



function create_connection()
{   //定義函式
    $link = mysqli_connect('localhost', 'root', 'root') or die('無法建立資料連接:' . mysqli_connect_error()); //建立連線
    mysqli_query($link, 'SET NAMES utf8');  //解決資料庫亂碼問題
    return $link;
}
function execute_sql($link, $database, $sql)
{
    mysqli_select_db($link, $database) or die("開啟資料庫失敗:" . mysqli_error($link));
    $result = mysqli_query($link, $sql);
    return $result;
}
