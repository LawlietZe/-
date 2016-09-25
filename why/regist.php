<?php
    $name = $_POST['uname'];
    $passwd = $_POST['pwd'];
    $local = $_POST['local'];
    echo $name;
    echo $passwd;
    echo $local;
    $servername = "192.168.0.106";
    $username = "root";
    $password = "123123";
    $dbname = "xyt_db";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->query('SET NAMES utf8'); //设置字符编码
    $sql = "SELECT * FROM user_msg WHERE user_name = '" . $name . "'";        //定义sql语句--查询固定user_name的记录
    $result = $conn->query($sql);                                                 //对数据库进行查找
    $re = $result->fetch();
    if(!$re){                                                                           //若无返回，
    $sql2 = "insert into user_msg(user_name, passwd, local) values ('" . $name . "', '" . $passwd . "', '" . $local . "')";        //添加数据
    $conn->exec($sql2);
    echo "您已注册成功 <br /><a href='index.html'>返回登录页面</a>";
    echo "<script>window.location.href='index.html';</script>";                                                                      //返回用户信息
    }else{
        echo "用户名已被注册 <br /><a href='registPre.php'>返回注册页面</a>";                                                             //若有返回，返回信息
    }
?>
