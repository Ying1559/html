<?php
    if ($_POST["id"]=="tony" && $_POST["pwd"]=="1234")
        echo "login success";
    else
        echo "login fail";
 <!--
  使用 $_POST 取得從表單傳來的資料，id" 與 "pwd" 對應到表單 <input name="id">、<input name="pwd">，判斷帳號與密碼是否正確
  -->
?>
