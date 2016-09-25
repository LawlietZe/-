<?php
require 'conn.php';
/**
 * recive infomation area
 */
$content = $_POST['content'];
$fid = $_POST['fid'];
$uid = $_POST['uid'];
$dep = $_POST['dep'];

/**
 * operation area
 */
 $sql = "insert into msg_board (content, fid, uid, dep) values ('".$content."', '".$fid."', '".$uid."', '".$dep."')";
 $connection_string = "mysql:host=192.168.0.106;dbname=xyt_db";
 $db = new PDO($connection_string, 'root', '123123');
 $db->query("set names utf8");
 // echo $sql;
 $feedback = $db->exec($sql);
 if($feedback){
   echo "留言成功！";
 }
 else echo "留言失败！";

 echo "<script>window.location.href='list.php';</script>";
?>
