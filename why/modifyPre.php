<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>修改信息</title>
  <style media="screen">
  .content{
    width: 400px;
    height: 400px;
    background: #fff;
    background: #cdcdcd;
    margin: 0 auto;
    padding: 5px;
  }
  form{
    margin-left: 50px;
  }
  </style>
  </head>
  <body>
    <div class="content">
        <form class="" action="modify.php" method="post">
          <?php
          session_start();
          echo "亲爱的".$_SESSION['username']."大人";
          ?>
          <h6>请填入需要修改的信息</h6>
          密码:<input type="text" name="pwd" value=""><br/><br/><br/>
          地区:<input type="text" name="local" value=""><br/><br/><br/>
          <input type="submit" value="提交">
          <input type="reset" value="提交">
        </form>
    </div>
  </body>
</html>
