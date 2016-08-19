<?php $this->load->view('common_header');?>
<link href="/assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/select/select2.min.css" rel="stylesheet">
<div class="x_panel row">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;分派调整 <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td class="info">所属批次：</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">客户名称：</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
            <td class="info">
              联系电话
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
            <td class="info">
              跟进次数
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>

          </tr>
          <tr>
            <td class="info">所属渠道</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">所属中心</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">所属团队</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">所属坐席</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
          </tr>
          <tr>
            <td class="info">首次推送时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">到</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">最后接触时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">到</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
          </tr>
          <tr>
            <td class="info">导入起始时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">导入截止时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">每页笔数</td>
            <td>
              <input type="text" name="mobile" value="10" class="form-control" />
            </td>
            <td class="info">处理结果</td>
            <td>
              <select class="select2_multiple form-control" multiple="multiple">
                  <option value="0">请选择</option>
                  <option value="1">无效（空号，错号，停机，五次以上无人接听）</option>
                  <option value="2">无人接听</option>
                  <option value="5">不需要</option>
                  <option value="6">其他待跟进</option>
                  <option value="7">不符合进件标准</option>
                  <option value="8">已预约待跟进</option>
                  <option value="9">已预约待上门</option>
                  <option value="10">直通待跟进</option>
              </select>
            </td>
          </tr>


        </tbody>
      </table>
      <div class="col-md-3 col-md-offset-9">
        <button type="button" class="btn btn-success">查询</button>
      </div>
    </div>
  </div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 row">
    <div class="x_panel">
      <div class="x_title">
        <input type="checkbox" value="1" class="select_all_client" />&nbsp;全部选中&nbsp;&nbsp;/&nbsp;&nbsp;取消选中
        <ul class="nav navbar-right panel_toolbox">

          <li><button type="button" class="btn btn-warning btn-xs">调整所选</button></li>
          <li><button type="button" class="btn btn-success btn-xs">调整所查</button></li>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>选择</th>
              <th>客户编号</th>
              <th>客户名称</th>
              <th>联系电话1</th>
              <th>城市</th>
              <th>改派人</th>
              <th>该派人所属团队</th>
              <th>接收人</th>
              <th>接收人所属团队</th>
              <th>跟进次数</th>
              <th>处理结果</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
             <?php if($clients){ foreach($clients as $k=>$v){ ?>
              <tr>
                <td><input type="checkbox" value="<?php echo $v->id;?>" class="client_ids" /></td>
                <td><?php echo $v->order_no;?></td>
                <td><?php echo $v->realname;?></td>
                <td><?php echo $v->mobile;?></td>
                <td><?php echo $v->city;?></td>
                <td>
                  <select class="form-control">
                    <option value="0">请选择</option>
                    <option value="1">受薪人士</option>
                    <option value="2">私营业主</option>
                    <option value="3">自雇人士</option>
                  </select>
                </td>
                <td><?php echo $v->realname;?></td>
                <td>
                  <select class="form-control">
                    <option value="0">请选择</option>
                    <option value="1">受薪人士</option>
                    <option value="2">私营业主</option>
                    <option value="3">自雇人士</option>
                  </select>
                </td>
                <td><?php echo $v->city;?></td>
                <td><?php echo $v->order_no;?></td>
                <td><?php echo $v->realname;?></td>
                <td><?php echo $v->realname;?></td>
              </tr>
              <?php }}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
<script type="text/javascript" src="/assets/js/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/datepicker/daterangepicker.js"></script>
<script src="/assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/js/select/select2.full.js"></script>
<script>

$(document).ready(function() {
  $("#datatable-buttons").dataTable();
  $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
  $('.select_time').daterangepicker({
        singleDatePicker: true,
        format: 'YYYY-MM-DD',
        calender_style: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
  $(".select_all_client").click(function(){
    if($(this).prop('checked')){
      $(".client_ids").prop('checked',true);
    }else{
      $(".client_ids").prop('checked',false);
    }
  })
});
</script>
<?php $this->load->view('common_footer');?>
