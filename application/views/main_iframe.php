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

</head>

<?php
  $user = $this->session->userdata('member');
?>
<style type="text/css">
  .btn{
    margin-top: 10px;
  }
</style>
<body class="nav-md">

  <div class="container body">
    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="/main/index" class="site_title"><i class="fa fa-paw"></i> <span>阳光信保电销系统</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="/assets/images/portrait.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>您好,</span>
              <h2>John</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>&nbsp;</h3>
              <ul class="nav side-menu">
              <?php if($user->level == 1){?>
                <li><a><i class="fa fa-cogs"></i> 数据管理 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/admin/data_import" target="main_frame">数据导入</a>
                    </li>
                    <li><a href="/admin/data_export" target="main_frame">数据导出</a>
                    </li>
                  </ul>
                </li>
              <?php }?>
              <?php if($user->level == 2){?>
                <li><a><i class="fa fa-cogs"></i> 运营管理 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/manager/data_assign" target="main_frame">数据分派</a>
                    </li>
                    <li><a href="/manager/data_assign_change" target="main_frame">分派调整</a>
                    </li>
                    <li><a href="/manager/audio_record_list" target="main_frame">通话记录管理</a>
                    </li>
                    <li><a href="/manager/event_list" target="main_frame">活动管理</a>
                    </li>
                    <li><a href="index3.html" target="main_frame">转介绍客户</a>
                    </li>
                  </ul>
                </li>
              <?php }?>
             <?php if($user->level == 3){?>
                <li>
                  <a href="/client/index/17" target="main_frame"><i class="fa fa-bell"></i> 提取新名单</a>
                </li>
              <li><a><i class="fa fa-calendar"></i> 预约前管理 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/date/not_date" target="main_frame">接触待跟踪</a>
                    </li>
                    <li><a href="index2.html" target="main_frame">对话待跟踪</a>
                    </li>
                    <li><a href="index3.html">筛选待跟踪</a>
                    </li>
                    <li><a href="index3.html">预约待跟踪</a>
                    </li>
                  </ul>
              </li>
              <li><a><i class="fa fa-calendar"></i> 预约后管理 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/date/not_date" target="main_frame">登记客户短信跟进</a>
                    </li>
                    <li><a href="index2.html" target="main_frame">登记后取消前一天跟进</a>
                    </li>
                    <li><a href="index3.html">登记后取消当天更进</a>
                    </li>
                    <li><a href="index3.html">上门短信确认更进</a>
                    </li>
                    <li><a href="index3.html">上门前一天跟进</a>
                    </li>
                    <li><a href="index3.html">上门当天跟进</a>
                    </li>
                    <li><a href="index3.html">门店反馈上门信息</a>
                    </li>
                    <li><a href="index3.html">签约情况跟进</a>
                    </li>
                     <li><a href="index3.html">客户未上门提醒</a>
                    </li>
                    <li><a href="index3.html">放款成功回访任务</a>
                    </li>
                  </ul>
                </li>
             <?php }?>
             <?php if($user->level != 1){?>
                <li><a><i class="fa fa-suitcase"></i> 销售管理 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">综合查询</a>
                    </li>
                    <li><a href="index2.html">任务管理</a>
                    </li>
                    <li><a href="index3.html">工单管理</a>
                    </li>
                    <li><a href="index3.html">待处理工单</a>
                    </li>
                    <li><a href="index3.html">找原坐席提醒</a>
                    </li>
                  </ul>
                </li>
            <?php }?>
              <?php if($user->level == 2){?>
                <li><a><i class="fa fa-suitcase"></i> 报表 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/manager/sale_result" target="main_frame">销售结果统计</a>
                    </li>
                    <li><a href="/manager/data_caculate" target="main_frame">数据使用情况统计</a>
                    </li>
                    <li><a href="/manager/data_caculate" target="main_frame">预约上线率</a>
                    </li>
                    <li><a href="index3.html">坐席通次统计报表</a>
                    </li>
                    <li><a href="index3.html">业务统计清单</a>
                    </li>
                    <li><a href="index.html">活动量管理报表</a>
                    </li>
                    <li><a href="index2.html">待签约明细报表</a>
                    </li>
                    <li><a href="index3.html">分模块活动量分析报表</a>
                    </li>
                    <li><a href="index3.html">名单质量分析</a>
                    </li>
                    <li><a href="index3.html">数据批次组分派</a>
                    </li>
                    <li><a href="index3.html">数据批次坐席分派</a>
                    </li>
                    <li><a href="index3.html">联系结果统计</a>
                    </li>
                  </ul>
                </li>

              <?php }?>
                <li><a><i class="fa fa-gear"></i> 系统管理 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/main/reset_password" target="main_frame">修改密码</a>
                    </li>
                  </ul>
                </li>
              <?php if($user->level != 1){?>

                <li>
                  <a href="javascript:void(0)" class="info-number"><i class="fa fa-bullhorn"></i> 取消提醒<span class="badge bg-green setintval_span">6</span></a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="info-number"><i class="fa fa-bell"></i> 重要提醒 <span class="badge bg-green setintval_span">3</span></a>
                </li>
              <?php }?>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->


        </div>
      </div>
<div class="col-md-9 pull-right" id="main_frame_div" style="height: 100%;position:absolute;right:0;">
      <!-- top navigation -->
      <div class="top_nav ">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">

              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="/assets/images/portrait.png" alt="">John Doe
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="/main/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
             <?php if($user->level == 3){?> <li>
                  <button class="btn btn-primary" type="button">拨号</button>
                  <button class="btn btn-success" type="button">短信</button>
                  <button class="btn btn-info" type="button">微信</button>
              </li>
            <?php }?>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
      <!-- page content -->
<div class="right_col" role="main">
<iframe src="<?php if($user->level==1){?>/admin/data_import<?php }else{ ?>/main/main <?php }?>" frameborder="0" id="main_frame" name="main_frame"></iframe>
 </div>
  </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  var screen_width = document.documentElement.clientWidth;
  var screen_height = document.documentElement.clientHeight;
  if(screen_width < 810){
    $(".nav-md #main_frame_div").css('width','100%');
  }else{
    $(".nav-md #main_frame_div").css('width',(screen_width-230)+'px');
  }

  var top_nav_height = $(".nav_menu").height();
  $(".right_col").css('height',(screen_height)+'px');
  $("#main_frame").css('height',(screen_height-top_nav_height-10)+'px');

  function change_count(){
    $(".setintval_span").each(function(){
       var count = parseInt($(this).html());
       count++;
       $(this).html(count);
    })
  }
setInterval(change_count,3000);

})

</script>
  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

</body>
</html>