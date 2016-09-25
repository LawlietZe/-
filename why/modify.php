<?php
$servername = "192.168.0.106"; //获取数据库信息
$username = "root";
$password = "123123";
$pwd = $_POST['pwd'];   //从页面获取用户名和密码
$local = $_POST['local'];
    // echo $pwd;
    // echo $local;
    // echo $_SESSION['username'];
    // echo $_SESSION['id'];
    session_start();
    $conn = new PDO("mysql:host=$servername;dbname=xyt_db", $username, $password);//PDO链接
    $conn->query('SET NAMES utf8'); //设置字符编码
    if(($pwd||$local)==true){
    $sql = "update user_msg set passwd = '" . $pwd . "', " . ($local?"local = '" . $local . "'" : "") . " where id = " . $_SESSION['id'] ; //设置修改的sql语句
    if($conn->exec($sql)){
      echo '修改信息成功.<br>';
      echo '点击此处 <a href="index.html">主页</a> 回到上一页！<br />';
    }
    else {
      echo "查询失败！";
    }
    }else {
    echo '信息不能为空！';
    }
?>
