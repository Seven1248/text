<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網站資料庫版本</title>
</head>

<body>
    <?php
    ini_set('display_errors', '1');   
    error_reporting(E_ALL);//出錯顯示(預設為隱藏)
    mysqli_query($mylink,"SET NAMES utf8");
    ?>

    <?php
    echo "mysql用戶端函式庫版本：" . mysqli_get_client_info();
    echo "<br>";
    $mylink = mysqli_connect("localhost", "root", "root")
        or mysqli_connect_errno() . "分隔" . mysqli_connect_error();
    echo "成功建立連結";
    echo '$mylink 連線主機為 ' . mysqli_get_host_info($mylink);
    echo "<br>";
    echo '$mylink 資源變數協定版本為:' . mysqli_get_proto_info($mylink);
    echo "<br>";
    echo '$mylink 連線主機資料庫版本為' . mysqli_get_server_info($mylink);
    mysqli_close($mylink);
    echo "<hr/>";
    $mylink = mysqli_connect("localhost", "root", "root") or die("無法建立資料連接:".mysqli_connect_error());
    //呼叫函是建立資料連接
    echo '$mylink 連線主機為 ' . mysqli_get_host_info($mylink) ;
    mysqli_select_db($mylink,'product') or die(mysqli_error($mylink));
    //開啟product資料庫
    $sql = "SELLECT * FROM price WHERE category = '主機板'";  //設定欲執行的SQL查詢
    $result = mysqli_query($mylink,$sql);  //呼叫mysql)query()函式執行SQL查詢，$resut的回傳執為資源識別字，指向查詢結果。

    





    ?>
</body>

</html>