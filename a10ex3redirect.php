<?php
  $URL = $_POST['mySelect'];  //透過 變數讀取所選擇的URL
  header("Location: $URL");   //呼叫header()函數將網頁重新導向到所選擇的網站
  exit();                     //確保函數不再執行後面的程式碼
?>