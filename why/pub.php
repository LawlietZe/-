<?php
require 'conn.php';

$fid = $_GET['fid'];
$dep = $_GET['dep'];
$uid = $_GET['uid'];
if($fid == '')
{
  $fid = 0;
}
if($dep == '')
{
  $dep = 0;
}
$uid = 1;
?>
<SCRIPT language=javascript>
function CheckPost()
{
    if (myform.content.value=="")
    {
        alert("必须要填写留言内容");
        myform.content.focus();
        return false;
    }
}
</SCRIPT>
 <form style="fontsize:20px;" action="post.php"  method="post" name = "myform" onsubmit="return CheckPost();">
    <input type="hidden" name="uid" value="<?php echo $uid;?>">
    <input type="hidden" name="dep" value="<?php echo $dep;?>">
    <input type="hidden" name="fid" value="<?php echo $fid;?>">
    这是回复<?php echo $fid;?>的内容(少于200字)：<br/>
    <textarea name="content" cols="50" rows="4"></textarea><br/>
    <input type="submit" name="submit" value="提交留言"/>
    <button type="button" name="button"><a href="list.php">取消</a></button>
 </form>
