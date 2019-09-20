<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset("vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset("vendor/adminlte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset("vendor/adminlte/plugins/iCheck/square/blue.css")}}" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">

      <div class="login-logo">
        <a href="">備品管理システム</a>
      </div>

      <div class="login-box-body">
        <p class="login-box-msg">{{$msg}}</p>

        <form action="" method="post">
          <!-- CSRF保護 -->
          @csrf
          <!-- ユーザID -->
          <div class="form-group has-feedback">
            <input type="Userid" class="form-control" placeholder="UserID" name="UserID" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <!-- パスワード -->
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <!-- ボタン グリッドでセンタリング-->
          <div class="row">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">ログイン</button>
            </div>
            <div class="col-xs-4">
            </div>
          </div>

        </form>

      </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  </body>
</html>
