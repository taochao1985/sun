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

  <!-- Custom styling plus plugins -->
  <link href="/assets/css/custom.css" rel="stylesheet">
  <!--[if lt IE 9]>
      <script src="/assets/js/ie8-responsive-file-warning.js"></script>
      <script src="/assets/js/html5shiv.min.js"></script>
      <script src="/assets/js/respond.min.js"></script>
  <![endif]-->
  <script></script>
</head>

<body style="background:#F7F7F7;">

  <div class="">
    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form class="form-horizontal" id="valid_form">
            <h1>阳光信保电销系统登陆</h1>

             <div class="form-group">
                <label for="member_no" class="col-sm-2 control-label">工号<span class="required">*</span></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control parsley-error" id="member_no" placeholder="工号" name="member_no" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">密码<span class="required">*</span></label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" placeholder="密码" name="password" required="required">
                </div>
              </div>
            <div>
              <button class="btn btn-default" type="button" id="submit">登陆</button>
            </div>
            <div class="clearfix"></div>

          </form>
        </section>
        <!-- content -->
      </div>

    </div>
  </div>

 <script src="/assets/js/jquery.min.js"></script>

<script type="text/javascript">
$(function() {
  $('#submit').click(function(event) {
    event.stopPropagation();
    var $btn = $(this);
    if ($btn.hasClass("disabled")) {
      return false;
    }
    var $member_no = $('#member_no');
    var $password = $('#password');
    if (!$member_no.val()) {
      $member_no.focus();
      return false;
    }
    if (!$password.val()) {
      $password.focus();
      return false;
    }
    var login_param = {
      member_no : $member_no.val(),
      password : $password.val()
    };
    $btn.addClass("disabled");
    $.post("/main/login", login_param, function(data) {
      if (data.success == 'yes') {
              window.location.href="index";

      } else {
        $btn.removeClass("disabled");
        alert('用户名或密码错误！');
      }
    }, "json");
    return false;
   });
  });
</script>

</body>

</html>
