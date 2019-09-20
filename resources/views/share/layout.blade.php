<html style="height: auto; min-height: 100%;">
  <head>
    <meta charset="utf-8">
    <title>管理画面</title>
    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="{{asset("vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- adminLTE style -->
    <link href="{{asset("vendor/adminlte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("vendor/adminlte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <link href="css/fixed.css" rel="stylesheet" type="text/css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- ヘッダー -->
      @include('share.header')

      <!-- サイドバー -->
      @if($adminflg == 1)
        @include('share.sidebaradmin')
      @else
        @include('share.sidebar')
      @endif


      <!--コンテンツ-->
      <div class="content-wrapper"style="padding: 50px 0px 0px 0px;">

        <!-- コンテンツヘッダ -->
        <section class="content-header">
          <h1>@yield('pagetitle')</h1>
        </section>

        <!-- メインコンテンツ -->
        <section class="content">
          @yield('content')
        </section>
      </div>
      <!--end コンテンツ-->

      <!-- フッター -->
      @include('share.footer')

    </div>
    <!-- end wrapper -->

    <!-- jquery -->
    <script src="{{asset("vendor/adminlte/vendor/jquery/dist/jquery.min.js")}}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{asset("vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- adminLTE -->
    <script src="{{asset("vendor/adminlte/dist/js/adminlte.min.js")}}" type="text/javascript"></script>
    <!-- chart.js -->
    <script src="{{asset("vendor/adminlte/plugins/iCheck/icheck.min.js")}}" type="text/javascript"></script>

  </body>
</html>
