<!doctype html>
<head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="{{asset("bower_components/admin-lte/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- adminLTE style -->
    <link href="{{asset("bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
</head>
  <body class="login-page">
    <div class="login-box">

      <div class="login-logo">
        <a href="">管理画面</a>
      </div><!-- /.login-logo -->

      <div class="login-box-body">
        <p class="login-box-msg">ログインして下さい。</p>

        <form action="/admin/member" method="get">

          <!-- メール -->
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <!-- パスワード -->
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <!-- ボタン グリッドでセンタリング-->
          <div class="row">
            <div class="col-xs-4">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">ログイン</button>
            </div><!-- /.col -->
            <div class="col-xs-4">
            </div><!-- /.col -->
          </div>
          <!-- token -->
          <input type="hidden" name="_token" value="{{csrf_token()}}">

        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- JS -->

    <!-- jquery -->
    <script src="{{asset("bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js")}}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{asset("bower_components/admin-lte/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- adminLTE -->
    <script src="{{asset("bower_components/admin-lte/dist/js/app.min.js")}}" type="text/javascript"></script>

  </body>
</html>
