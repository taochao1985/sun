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
            <td class="info">查询区间</td>
            <td>
              <select class="form-control">
                <option value="0">日</option>
                <option value="1">月</option>
              </select>
            </td>
            <td class="info">起始时间</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control select_time" />
            </td>
            <td class="info">
              终止时间
            </td>
            <td>
              <input type="text" name="mobile" value="" class="form-control select_time" />
            </td>

          </tr>
          <tr>
            <td class="info">所属团队</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">团队1</option>
                <option value="2">团队2</option>
              </select>
            </td>
            <td class="info">坐席工号</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control" />
            </td>
            <td class="info">坐席名称</td>
            <td>
              <input type="text" name="mobile" value="10" class="form-control" />
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
          <h2>统计图</h2>
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

          <div id="mainb" style="height:350px;"></div>

        </div>
      </div>
  <div class="clearfix"></div>
<script type="text/javascript" src="/assets/js/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/datepicker/daterangepicker.js"></script>
<script src="/assets/js/echart/echarts-all.js"></script>
<script src="/assets/js/echart/green.js"></script>
<script>

$(document).ready(function() {
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

   var myChart9 = echarts.init(document.getElementById('mainb'), theme);
    myChart9.setOption({
      title: {
        text: 'Graph title',
        subtext: 'Graph Sub-text'
      },
      //theme : theme,
      tooltip: {
        trigger: 'axis'
      },
      legend: {
        data: ['sales', 'purchases']
      },
      toolbox: {
        show: false
      },
      calculable: false,
      xAxis: [{
        type: 'category',
        data: ['1?', '2?', '3?', '4?', '5?', '6?', '7?', '8?', '9?', '10?', '11?', '12?']
      }],
      yAxis: [{
        type: 'value'
      }],
      series: [{
        name: 'sales',
        type: 'bar',
        data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
        markPoint: {
          data: [{
            type: 'max',
            name: '???'
          }, {
            type: 'min',
            name: '???'
          }]
        },
        markLine: {
          data: [{
            type: 'average',
            name: '???'
          }]
        }
      }, {
        name: 'purchases',
        type: 'bar',
        data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
        markPoint: {
          data: [{
            name: 'sales',
            value: 182.2,
            xAxis: 7,
            yAxis: 183,
            symbolSize: 18
          }, {
            name: 'purchases',
            value: 2.3,
            xAxis: 11,
            yAxis: 3
          }]
        },
        markLine: {
          data: [{
            type: 'average',
            name: '???'
          }]
        }
      }]
    });
});
</script>
<?php $this->load->view('common_footer');?>
