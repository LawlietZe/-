<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>新建待办事项</title>
    <link href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://g.alicdn.com/sj/lib/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
    <style>
    *{
    }
    .content{
      margin: 0 auto;
      width: 400px;
      height: 220px;
      border: 1px solid #eee;
      margin-top: 100px;
      font-size: 15px !important;
    }
    </style>
</head>
  <body>
    <div class="content">
    <form class="sui-form form-horizontal" action="regist.php" method="post">
  <div class="control-group">
    <label for="inputEmail" class="control-label" style="font-size:15px">用户名：</label>
    <div class="controls">
      <input type="text" name="uname" placeholder="请输入用户名">
    </div>
  </div>
  <div class="control-group">
    <label for="inputPassword" class="control-label" style="font-size:15px">密码：</label>
    <div class="controls">
      <input type="password" name="pwd" placeholder="请输入密码">
    </div>
  </div>
  <div class="control-group">
    <label for="inputPassword" class="control-label" style="font-size:15px">地区：</label>
    <div class="controls">
      <input type="password" name="local" placeholder="用户所在地区">
    </div>
  </div>
  <div class="control-group">
    <label for="inputPassword" class="control-label" style="font-size:15px">短信验证：</label>
    <div class="controls">
      <input type="password" name="local" placeholder="用户所在地区">
      <button type="button" name="button" style="font-size:15px">点击获取验证码</button>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
      <label data-toggle="checkbox" class="checkbox-pretty inline">
        <input type="checkbox" name="remember-me"><span>记住我</span>
        <div clv class="controls">
          <button type="submit" class="sui-btn btn-primary">注册</button>
        </div>
      </label>
    </div>
  </div>
</form>
</div>
  </body>
</html>
