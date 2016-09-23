
<?php $this->load->view('common_header');?>
       <!-- top tiles -->

        <div class="container">
          <div class="page-title">
            <div class="title_left">
              <h3>快速查询</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">查询!</button>
                  </span>
                </div>
              </div>
            </div>
        </div>
      </div>

        <div class="container tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> 未预约</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> 相比上周</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-clock-o"></i> 已预约待上门</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> 相比上周</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> 已预约待跟进</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>  相比上周</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> 上门前跟进</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>  相比上周</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> 未上门</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>  相比上周</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
</div>



<div class="col-md-12 col-sm-12 col-xs-12 row">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;高级查询 <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-bordered">
        <tbody>
          <tr>
            <td class="info">客户姓名：</td>
            <td>
              <input type="text" name="realname" value="" class="form-control" />
            </td>
            <td class="info">任务号：</td>
            <td>
              <input type="text" name="phone" value="" class="form-control" />
            </td>
            <td class="info">
              联系电话：
            </td>
            <td><input type="text" name="phone" value="" class="form-control" /></td>
            <td class="info">
              产品类型：
            </td>
            <td>
              <option value="0">请选择</option>
                <option value="1">传统小贷</option>
                <option value="2">保单贷</option>
                <option value="3">车抵快贷</option>
            </td>
          </tr>
          <tr>
            <td class="info">性别</td>
            <td>
              <select class="form-control" name="sex">
                <option value="">请选择</option>
                <option value="0">男</option>
                <option value="1">女</option>
              </select>
            </td>
            <td class="info">身份证号</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control" />
            </td>
            <td class="info">任务状态</td>
            <td>
              <select class="form-control" name="menu_type">
                <option value="0">请选择</option>
                <option value="1">传统小贷</option>
                <option value="2">保单贷</option>
                <option value="3">车抵快贷</option>
              </select>
            </td>
            <td class="info"></td>
            <td></td>
          </tr>
          <tr>
            <td class="info">年龄：</td>
            <td>
              <input type="text" name="age" value="" class="form-control" />
            </td>
            <td class="info">税后收入：</td>
            <td>
              <input type="text" name="salary_after_tax" value="" class="form-control" />
            </td>
            <td class="info">职业类型</td>
            <td>
              <select class="form-control" name="work_type">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">联系电话2</td>
            <td>
              <input type="text" name="phone2" value="" class="form-control" />
            </td>
          </tr>
          <tr>
            <td class="info">名单来源：</td>
            <td>
              <input type="text" name="client_source" value="" class="form-control" />
            </td>
            <td class="info">媒体来源：</td>
            <td>
              <input type="text" name="media_source" value="" class="form-control" />
            </td>
            <td class="info">城市</td>
            <td>
              <input type="text" name="city" value="" class="form-control" />
            </td>
            <td class="info">
              <button class="btn btn-default" type="button">拨号2</button>
            </td>
            <td></td>
          </tr>
          <tr>
            <td class="info">预授信额度：</td>
            <td>
              <input type="text" name="credit_amount" value="" class="form-control" />
            </td>
            <td class="info">费率：</td>
            <td>
              <input type="text" name="rates" value="" class="form-control" />
            </td>
            <td class="info">产品类别</td>
            <td>
              <input type="text" name="product_type" value="" class="form-control" />
            </td>
            <td class="info">
              <button class="btn btn-primary" type="button">搜索</button>
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 row">
  <div class="x_panel">
    <div class="x_title">
      <h2>预约前名单 <small>10个</small></h2>
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
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>订单编号</th>
            <th>客户姓名</th>
            <th>联系电话</th>
            <th>城市</th>
            <th>处理结果</th>
            <th>下次联系时间</th>
            <th>客户类型</th>
            <th>下发时间</th>
            <th>跟进次数</th>
            <th>最后一次备注</th>
            <th>所属团队</th>
            <th>所属坐席</th>
            <th>销售状态</th>
            <th>跟进处理</th>
          </tr>
        </thead>


        <tbody>
           <?php if($clients){ foreach($clients as $k=>$v){ ?>
            <tr>
              <td><?php echo $v->order_no;?></td>
              <td><?php echo $v->realname;?></td>
              <td><?php echo $v->mobile;?></td>
              <td><?php echo $v->city;?></td>
              <td><?php echo $v->order_no;?></td>
              <td><?php echo $v->next_time;?></td>
              <td><?php echo $v->ctype;?></td>
              <td><?php echo $v->order_no;?></td>
              <td><?php echo $v->follow_time;?></td>
              <td><?php echo $v->last_comment;?></td>
              <td><?php echo $v->team_id;?></td>
              <td><?php echo $v->member_id;?></td>
              <td><?php echo $v->status;?></td>
              <td><a href="/client/index/<?php echo $v->id;?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> 查看 </a></td>
            </tr>
            <?php }}?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 row">
  <div class="x_panel">
    <div class="x_title">
      <h2>预约后名单 <small>5个</small></h2>
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
      <table id="datatable-b" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>订单编号</th>
            <th>客户姓名</th>
            <th>联系电话</th>
            <th>城市</th>
            <th>处理结果</th>
            <th>下次联系时间</th>
            <th>客户类型</th>
            <th>下发时间</th>
            <th>跟进次数</th>
            <th>最后一次备注</th>
            <th>所属团队</th>
            <th>所属坐席</th>
            <th>销售状态</th>
            <th>跟进处理</th>
          </tr>
        </thead>


        <tbody>
           <?php if($clients){ foreach($clients as $k=>$v){ ?>
            <tr>
              <td><?php echo $v->order_no;?></td>
              <td><?php echo $v->realname;?></td>
              <td><?php echo $v->mobile;?></td>
              <td><?php echo $v->city;?></td>
              <td><?php echo $v->order_no;?></td>
              <td><?php echo $v->next_time;?></td>
              <td><?php echo $v->ctype;?></td>
              <td><?php echo $v->order_no;?></td>
              <td><?php echo $v->follow_time;?></td>
              <td><?php echo $v->last_comment;?></td>
              <td><?php echo $v->team_id;?></td>
              <td><?php echo $v->member_id;?></td>
              <td><?php echo $v->status;?></td>
              <td><a href="/client/index/<?php echo $v->id;?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> 查看 </a></td>
            </tr>
            <?php }}?>
        </tbody>
      </table>
    </div>
  </div>
</div>
        <script src="/assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/js/datatables/dataTables.bootstrap.js"></script>
<script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons,#datatable-b").length && $("#datatable-buttons,#datatable-b").DataTable()
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
            TableManageButtons.init();
        </script>

 <?php $this->load->view('common_footer');?>
