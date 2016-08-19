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
            <td class="info">导入起始时间</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control select_time" />
            </td>
            <td class="info">导入终止时间</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control select_time" />
            </td>
            <td class="info">
              导入批次
            </td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">批次0001</option>
                <option value="2">批次0002</option>
              </select>
            </td>

          </tr>
          <tr>
            <td class="info">批次名称</td>
            <td>
               <input type="text" name="id_no" value="" class="form-control" />
            </td>
            <td class="info">所属组</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">批次0001</option>
                <option value="2">批次0002</option>
              </select>
            </td>
            <td colspan="2"></td>

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
          <h2>Pie Graph</h2>
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

          <div id="echart_pie" style="height:350px;"></div>

        </div>
      </div>

   <div class="x_panel">
                <div class="x_title">
                  <h2>Pie Area</h2>
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

                  <div id="echart_pie2" style="height:350px;"></div>

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

  var myChart = echarts.init(document.getElementById('echart_pie'), theme);
    myChart.setOption({
      tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      legend: {
        //orient: 'vertical',
        //x: 'left',
        x: 'center',
        y: 'bottom',
        data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
      },
      toolbox: {
        show: true,
        feature: {
          magicType: {
            show: true,
            type: ['pie', 'funnel'],
            option: {
              funnel: {
                x: '25%',
                width: '50%',
                funnelAlign: 'left',
                max: 1548
              }
            }
          },
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      calculable: true,
      series: [{
        name: '访问来源',
        type: 'pie',
        radius: '55%',
        center: ['50%', '48%'], //left,top
        data: [{
          value: 335,
          name: 'Direct Access'
        }, {
          value: 310,
          name: 'E-mail Marketing'
        }, {
          value: 234,
          name: 'Union Ad'
        }, {
          value: 135,
          name: 'Video Ads'
        }, {
          value: 1548,
          name: 'Search Engine'
        }]
      }]
    });

var myChart = echarts.init(document.getElementById('echart_pie2'), theme);
    myChart.setOption({
      tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      legend: {
        x: 'center',
        y: 'bottom',
        data: ['rose1', 'rose2', 'rose3', 'rose4', 'rose5', 'rose6']
      },
      toolbox: {
        show: true,
        feature: {
          magicType: {
            show: true,
            type: ['pie', 'funnel']
          },
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      calculable: true,
      series: [{
        name: 'Area Mode',
        type: 'pie',
        radius: [25, 90],
        center: ['50%', 170],
        roseType: 'area',
        x: '50%',
        max: 40,
        sort: 'ascending',
        data: [{
          value: 10,
          name: 'rose1'
        }, {
          value: 5,
          name: 'rose2'
        }, {
          value: 15,
          name: 'rose3'
        }, {
          value: 25,
          name: 'rose4'
        }, {
          value: 20,
          name: 'rose5'
        }, {
          value: 35,
          name: 'rose6'
        }]
      }]
    });
});
</script>
<?php $this->load->view('common_footer');?>
