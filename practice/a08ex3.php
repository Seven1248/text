<?php
try
{
    open_folder("C://book");
}
catch(Exception $ex){
echo '錯誤訊息:'.$ex->getMessage().'<br>';
}

function open_folder($f)
{
if(file_exists($f)){
    opendir($f);
}else{
throw new Exception("get out here!!");
}

}

?>