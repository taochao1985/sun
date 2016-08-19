<?php $this->load->view('common_header');?>
<link href="/assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<div class="x_panel row">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;数据分派查询 <small></small></h2>
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
            <td class="info">活动编号</td>
            <td>
              <input type="text" name="realname" value="" class="form-control" />
            </td>
            <td class="info">活动名称</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
            <td class="info">
              创建人ID
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>


          </tr>
          <tr>
            <td class="info">活动开始时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">活动结束时间</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control select_time" />
            </td>
            <td class="info">创建人名称</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
          </tr>
          <tr>
            <td class="info">有效标志</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control" />
            </td>
            <td class="info">每页笔数</td>
            <td>
              <input type="text" name="id_no" value="10" class="form-control" />
            </td>
            <td colspan="2"></td>
          </tr>


        </tbody>
      </table>
      <div class="col-md-3 col-md-offset-9">
        <button type="button" class="btn btn-success">查询</button>
        <button type="button" class="btn btn-primary">新增</button>
      </div>
    </div>
  </div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 row">
    <div class="x_panel">
      <div class="x_title">
        <input type="checkbox" value="1" class="select_all_client" />&nbsp;全部选中&nbsp;&nbsp;/&nbsp;&nbsp;取消选中
        <ul class="nav navbar-right panel_toolbox">
          <li><button type="button" class="btn btn-default btn-xs">选中有效</button></li>
          <li><button type="button" class="btn btn-primary btn-xs">选中无效</button></li>
          <li><button type="button" class="btn btn-warning btn-xs">所有查询有效</button></li>
          <li><button type="button" class="btn btn-success btn-xs">所有查询无效</button></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>选择</th>
              <th>活动编号</th>
              <th>活动名称</th>
              <th>创建时间</th>
              <th>活动开始时间</th>
              <th>活动结束时间</th>
              <th>创建人名称</th>
              <th>有效标志</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td><input type="checkbox" value="1" class="client_ids" /></td>
                <td>0B0000001</td>
                <td>综拓电销</td>
                <td>2016-10-11 15:00:00</td>
                <td>2016-11-11</td>
                <td>2016-12-11</td>
                <td>Admin</td>
                <td><a href="#" class="btn btn-success btn-xs"><i class="fa fa-check"></i> </a></td>
                <td>
                  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                  <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
          </tr>
          <tr>
            <td><input type="checkbox" value="1" class="client_ids" /></td>
                <td>0B0000001</td>
                <td>综拓电销</td>
                <td>2016-10-11 15:00:00</td>
                <td>2016-11-11</td>
                <td>2016-12-11</td>
                <td>Admin</td>
                <td><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> </a></td>
                <td>
                  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                  <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
          </tr>
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
