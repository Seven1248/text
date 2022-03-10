<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>連線測試</title>
</head>

<body>
    <?php
    ini_set('display_errors', '1');  //顯示錯誤訊息
    error_reporting(E_ALL);
    //----------------------------------------------------

    echo "範例一   欄位數與筆數<br>";
    require_once('./mysql_connect_tools.php');
    $link = create_connection();  //mysqli_connect('localhost', 'root', 'root') 
    $sql = 'SELECT * FROM price WHERE category = "主機板"';
    $result = execute_sql($link, "product", $sql);

    echo "category = (主機板)的紀錄有" . mysqli_num_rows($result) . "筆";
    echo ",包含" . mysqli_num_fields($result) . "個欄位。";
    ?>
    <hr />
    <p>範例二 查詢</p>
    <table width='400' border='1'>
        <tr align='center'>
            <td>欄位名稱</td>
            <td>資料型態</td>
            <td>最大長度</td>
        </tr>
        <?php $i = 0;
        while ($i < mysqli_num_fields($result)) {   //當i 欄小於欄位數
            $meta = mysqli_fetch_field_direct($result, $i);   //取得第 $i 欄的資料 
            $t = $meta->type;  //將欄位型態轉換
            // $tt = 0;
            switch ($t) {
                case 3:
                    $t = "Integer";
                    break;
                case 10:
                    $t = "Date";
                    break;
                case 253;
                    $t = "Varchar";
                    break;
                default:
                    break;
            }

            $i++; ?>
            <tr>
                <td><?php echo $meta->name ?> </td>
                <td><?php echo $t ?> </td>
                <td><?php echo $meta->max_length ?> </td>

            </tr>
        <?php };
        // mysqli_close($link);
        ?>
    </table>
    <hr />
    <p>範例三 取得符合條件的所有查詢</p>
    <table width='400' border='1'>
        <tr align='center'>
            <td>欄位名稱</td>
            <td>資料型態</td>
            <td>最大長度</td>
        </tr>
        <?php $i = 0;

        while ($meta = mysqli_fetch_field($result))   //取得結果
        {
            $t = $meta->type;  //將欄位型態轉換
            // $tt = 0;
            switch ($t) {
                case 3:
                    $t = "Integer";
                    break;
                case 10:
                    $t = "Date";
                    break;
                case 253;
                    $t = "Varchar";
                    break;
                default:
                    break;
            }

            $i++; ?>
            <tr>
                <td><?php echo $meta->name ?> </td>
                <td><?php echo $t ?> </td>
                <td><?php echo $meta->max_length ?> </td>

            </tr>
        <?php };
        mysqli_close($link);
        ?>
    </table>
    <hr />
</body>

</html>