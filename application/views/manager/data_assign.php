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
            <td class="info">客户姓名：</td>
            <td>
              <input type="text" name="realname" value="" class="form-control" />
            </td>
            <td class="info">联系电话1：</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
            <td class="info">
              批次名称
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
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
          </tr>
          <tr>
            <td class="info">客户导入批次</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">短信发送</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">客户类型</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
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
