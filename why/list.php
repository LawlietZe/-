<?php
require_once 'conn.php';

function tree($id, $dep)
{
  $connection_string = "mysql:host=192.168.0.106;dbname=xyt_db";
  $db = new PDO($connection_string, 'root', '123123');
  $db->query("set names utf8");
    $sql = "select * from msg_board where fid = $id";
    $conn = $db->query($sql);
    $rs = $conn->fetchAll();
    $rows = count($rs);
    $str = '<div style="border:1px solid #333; padding:5px 10px; margin:5px auto; background:#999; color:#fff;">';
    for ($i=0; $i < $rows; $i++) {
      $str .= "<a href='#'>";
      $str .= $rs[$i]['id'].'</a>';
      $str .= '回复';
      $str .= "<a href='#'>";
      $str .= $rs[$i]['fid'].'</a>'.':';
      for ($j=0; $j < ($rs[$i]['dep']); $j++) {
      }
    // for ($i=0; $i < $rows; $i++) {
    //   $str .= "<a href='#'>";
    //   $str .= $rs[$i]['id'].'</a>';
    //   $fidcount = $rs[$i]['fid'];
    //   for ($j=0; $j < ($rs[$i]['dep']); $j++) {
    //     $str .= '回复';
    //     $str .= "<a href='#'>";
    //     $str .= $fidcount.'</a>';
    //     $str .= ':';
    //     $sql2 = "select * from msg_board where id = $fidcount";
    //     $conn2 = $db->query($sql2);
    //     $rs2 = $conn->fetchAll();
    //     $fidcount = $rs2[0].['fid'];
    //   }
      echo $str.$rs[$i]['content']."<br/><a href=pub.php?uid=&dep=".($rs[$i]['dep'] + 1)."&fid=".$rs[$i]['id'].">reply</a><br>";
      echo '</div>';
      $str = '<div style="border:1px solid #333; padding:5px 10px; margin:5px auto; background:#999; color:#fff;">';
      tree($rs[$i]['id'], $rs[$i]['dep']);
    }

}


 ?>

<table>
  <tr>
    <td>
      <a href="pub.php">post a new content</a>
    </td>
  </tr>
</table>

<?php
tree(0, 0);
 ?>
