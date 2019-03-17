<?php

// 第一件事情，引入連線資料庫的檔案
require_once './inc/conn.php';
require_once './inc/utils.php';
require_once './check_login.php';

checkLoginAndPrintMsg($user, '你沒有登入齁！');

// 第二件事情，拿資料
$name = $_POST['name'];

if(isset($name)) {

    $sql = "INSERT INTO categories(name)VALUES('$name')";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->rowCount();
    
    if(!$result) {
        die("failed. " . $pdo->errorInfo() );
    } else {
        header("location: admin_category.php");
    }
} else {
    die('empty data');
}

?>