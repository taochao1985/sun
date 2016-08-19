<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>阳光信保电销系统</title>

  <!-- Bootstrap core CSS -->

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/css/animate.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="/assets/css/custom.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
  <script src="/assets/js/ie8-responsive-file-warning.js"></script>
  <script src="/assets/js/html5shiv.min.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/custom.js"></script>
</head>
<body class="nav-md"  style="background-color:#fff;">
<link href="/assets/css/pnotify.css" rel="stylesheet">
<script type="text/javascript" src="/assets/js/notify/pnotify.core.js"></script>
<div class="x_panel">
  <div class="x_title">
    <h2>修改密码</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Settings 1</a>
          </li>
          <li><a href="#">Settings 2</a>
          </li>
        </ul>
      </li>
      <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left input_mask">
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">原密码</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <input type="text" class="form-control" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">新密码</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">确认密码</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <input type="text" class="form-control" >
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
          <button type="submit" class="btn btn-success">保存</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    show_stack_modal('error','ffff');
  })
</script>
</body>
</html>