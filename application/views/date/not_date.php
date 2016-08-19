<?php $this->load->view('common_header');?>
<div class="col-md-12 col-sm-12 col-xs-12 row">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Button Example <small>Users</small></h2>
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
                  <p class="text-muted font-13 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                  </p>
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
        <script src="/assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/js/datatables/dataTables.bootstrap.js"></script>
        <script src="/assets/js/datatables/dataTables.buttons.min.js"></script>
        <script src="/assets/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="/assets/js/datatables/jszip.min.js"></script>
        <script src="/assets/js/datatables/pdfmake.min.js"></script>
        <script src="/assets/js/datatables/vfs_fonts.js"></script>
        <script src="/assets/js/datatables/buttons.html5.min.js"></script>
<script src="/assets/js/datatables/buttons.print.min.js"></script>
<script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
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
