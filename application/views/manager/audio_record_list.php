<?php $this->load->view('common_header');?>
<link href="/assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<div class="x_panel row">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;通话记录管理 <small></small></h2>
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
            <td class="info">所属机构</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">所属用户</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">
              客户编号
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
            <td class="info">
              客户名称
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>

          </tr>
          <tr>
          <td class="info">订单编号</td>
            <td>
              <input type="text" name="mobile" value="10" class="form-control" />
            </td>
            <td class="info">通话类型</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">开始时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">结束时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>

          </tr>
          <tr>
            <td class="info">是否接通</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">是</option>
                <option value="2">否</option>
              </select>
            </td>
            <td colspan="6"></td>

          </tr>

        </tbody>
      </table>
      <div class="col-md-3 col-md-offset-5">
        <button type="button" class="btn btn-success">查询</button>
        <button type="button" class="btn btn-primary">另存为</button>
      </div>
    </div>
  </div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 row">
    <div class="x_panel">
      <div class="x_title">

        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>编号</th>
              <th>联系电话</th>
              <th>坐席工号</th>
              <th>所属团队</th>
              <th>通话类型</th>
              <th>客户编号</th>
              <th>客户类型</th>
              <th>订单编号</th>
              <th>开始时间</th>
              <th>结束时间</th>
              <th>是否接通</th>
              <th>通话时长(s)</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
<script type="text/javascript" src="/assets/js/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/datepicker/daterangepicker.js"></script>
<script src="/assets/js/datatables/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function() {
  $("#datatable-buttons").dataTable();
  $("#datatable").dataTable();
  $('.select_time').daterangepicker({
        singleDatePicker: true,
        timePicker:true,
        timePickerSeconds:true,
        format: 'YYYY-MM-DD h:mm:ss ',
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
