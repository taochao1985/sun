<?php $this->load->view('common_header');?>
<script type="text/javascript" src="/assets/js/page/client_detail.js"></script>
<div class="col-md-12 col-sm-12 col-xs-12 row">
 <div class="container form-inline main_client_info">
    <div class="form-group">
      <label for="exampleInputName2">订单编号：</label>
      <input type="text" class="form-control" id="exampleInputName2" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail2">销售状态：</label>
      <select class="form-control">
        <option value="">请选择</option>
        <option value="0">男</option>
        <option value="1">女</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail2">预约状态：</label>
      <select class="form-control">
        <option value="">请选择</option>
        <option value="0">男</option>
        <option value="1">女</option>
      </select>
    </div>
    <div class="form-group">
      <button class="btn btn-default" type="button">话术</button>
      <button class="btn btn-default" type="button">货款详情</button>
      <button class="btn btn-default" type="button">历史货款信息</button>
    </div>

  </div>



  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;资质筛选 <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">问题1</div><div class="col-md-11 col-sm-11 col-xs-11 btn-warning">你是否有信用记录？</div>
          <div class="col-md-1 col-sm-1 col-xs-1 bg-warning"></div><div class="col-md-11 col-sm-11 col-xs-11 bg-warning">
              <input type="radio" name="credit_record" value="1" />&nbsp;是
              <input type="radio" name="credit_record" value="0" />&nbsp;否
          </div>
      </div>
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">问题2</div><div class="col-md-11 col-sm-11 col-xs-11 btn-warning">你的工作和收入情况？</div>
          <div class="col-md-1 col-sm-1 col-xs-1 bg-warning"></div><div class="col-md-11 col-sm-11 col-xs-11 bg-warning">
              <input type="radio" name="work_cond" value="1" />&nbsp;受薪人士
              <input type="radio" name="work_cond" value="2" />&nbsp;私营业主
              <input type="radio" name="work_cond" value="3" />&nbsp;自雇人士
              <input type="radio" name="work_cond" value="4" />&nbsp;无业
              <input type="radio" name="work_cond" value="5" />&nbsp;股东
          </div>
      </div>

<!--work_cond_first-->
      <div class="row detail_line_div work_cond_1 work_cond_detail hidden">
          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              现单位工作时间：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0"> <6个月 </option>
                <option value="1"> >=6个月</option>
                <option value="1"> >1年</option>
              </select>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              工资发放形式：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0">男</option>
                <option value="1">女</option>
              </select>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              代发：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="0.0" class="form-control" />
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              税后月收入流水：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="0.0" class="form-control" />
          </div>
          <div class="col-md-8 col-sm-8 col-xs-8 bg-warning">
          </div>
      </div>
  <!--work_cond_first-->

  <!--work_cond_second-->
      <div class="row detail_line_div work_cond_2 work_cond_detail hidden">
         <div class="col-md-3 col-sm-3 col-xs-3 btn-warning">
              营业执照期满时间：
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0"> <6个月 </option>
                <option value="1"> >=6个月</option>
                <option value="1"> >1年</option>
              </select>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-3 btn-warning">
              月经营流水：
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3 bg-warning">
              <input type="text" name="car_house" value="" class="form-control" />
          </div>

      </div>
  <!--work_cond_second-->
  <!--work_cond_third-->
      <div class="row detail_line_div work_cond_3 work_cond_detail hidden">
          <div class="col-md-6 col-sm-6 col-xs-6 btn-warning">
              现单位工作时间：
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0"> <6个月 </option>
                <option value="1"> >=6个月</option>
                <option value="1"> >1年</option>
              </select>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 btn-warning">
              每月实际流水：
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 bg-warning">
              <input type="text" name="car_house" value="0.0"  />
          </div>
      </div>
  <!--work_cond_third-->
  <!--work_cond_fourth-->
      <div class="row detail_line_div work_cond_4 work_cond_detail hidden">
          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              现单位工作时间：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0"> <6个月 </option>
                <option value="1"> >=6个月</option>
                <option value="1"> >1年</option>
              </select>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              工资发放形式：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0">男</option>
                <option value="1">女</option>
              </select>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              代发：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="0.0" class="form-control" />
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              每月实际流水：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="0.0" class="form-control" />
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              营业执照期满时间：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="" class="form-control" />
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              月经营流水：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="0.0" class="form-control" />
          </div>
      </div>
  <!--work_cond_fourth-->
    <div class="row detail_line_div work_cond_5 work_cond_detail hidden">
         <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              营业执照期满时间：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0"> <6个月 </option>
                <option value="1"> >=6个月</option>
                <option value="1"> >1年</option>
              </select>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              月经营流水：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="text" name="car_house" value="" class="form-control" />
          </div>

          <div class="col-md-2 col-sm-2 col-xs-2 btn-warning">
              股份：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0"> <10% </option>
                <option value="1"> <20% </option>
                <option value="1"> >20%</option>
              </select>
          </div>

      </div>


      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">问题3</div><div class="col-md-11 col-sm-11 col-xs-11 btn-warning">您是否有物业？</div>
          <div class="col-md-1 col-sm-1 col-xs-1 bg-warning"></div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="checkbox" name="car_house" value="1" />&nbsp;房子
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9 bg-warning">
              <input type="radio" name="house_status" value="0" />&nbsp;全款房
              <input type="radio" name="house_status" value="1" />&nbsp;按揭房
          </div>
        <div class="detail_line_div house_status_0 house_status_detail hidden">
         <div class="col-md-3 col-sm-3 col-xs-3 bg-warning"></div>
          <div class="col-md-9 col-sm-9 col-xs-9 bg-warning">
              <input type="radio" name="house_type" value="0" />&nbsp;个人名下&nbsp;&nbsp;&nbsp;
              <input type="radio" name="house_type" value="1" />&nbsp;家人共有
          </div>
        </div>
        <div class="detail_line_div house_status_1 house_status_detail hidden">
         <div class="col-md-3 col-sm-3 col-xs-3 bg-warning"></div>

          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="checkbox" name="mobile" value="0" />&nbsp;&nbsp;是否为主贷人
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              已按揭月数：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
               <input type="text" name="mobile" value="0.0" class="form-control" />
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1 bg-warning">
              按揭金额：
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
               <input type="text" name="mobile" value="0.0" class="form-control" />
          </div>
        </div>

          <div class="col-md-1 col-sm-1 col-xs-1 bg-warning"></div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="checkbox" name="car_house" value="2" />&nbsp;车子
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 bg-warning">
              是否车主：<input type="checkbox" name="car_owner" value="0" class="car_owner" />
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              全价金额：
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3 bg-warning">
               <input type="text" name="mobile" value="0.0" class="form-control" />
          </div>

          <div class="detail_line_div car_type_select hidden">
             <div class="col-md-3 col-sm-3 col-xs-3 bg-warning"></div>
              <div class="col-md-9 col-sm-9 col-xs-9 bg-warning">
                  <input type="radio" name="car_type" value="0" />&nbsp;全款&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="car_type" value="1" />&nbsp;按揭&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="car_type" value="2" />&nbsp;抵押
              </div>
         </div>

         <div class="detail_line_div car_type_detail car_type_1 hidden">
             <div class="col-md-1 col-sm-1 col-xs-1 bg-warning"></div>
              <div class="col-md-1 col-sm-1 col-xs-1 bg-warning">
                裸车价:
              </div>
              <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
               <input type="text" name="mobile" value="0.0" class="form-control" />
             </div>
             <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
               按揭月份:
             </div>
             <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
                <select class="form-control">
                  <option value="0"> <6个月 </option>
                  <option value="1"> >=6个月</option>
                  <option value="1"> >1年</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
                按揭金额:
              </div>
              <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
               <input type="text" name="mobile" value="0.0" class="form-control" />
             </div>
         </div>


      </div>

      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">问题4</div><div class="col-md-11 col-sm-11 col-xs-11 btn-warning">在本司是否有未结清贷款？</div>
          <div class="col-md-1 col-sm-1 col-xs-1 bg-warning"></div><div class="col-md-11 col-sm-11 col-xs-11 bg-warning">
              <input type="radio" name="credit_record" value="1" />&nbsp;是
              <input type="radio" name="credit_record" value="0" />&nbsp;否
          </div>
      </div>
    </div>
  </div>


  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;客户信息 <small></small></h2>
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
            <td class="info">联系电话1：</td>
            <td>
              <input type="text" name="mobile" value="" class="form-control" />
            </td>
            <td class="info">
              <button class="btn btn-default" type="button">拨号</button>
            </td>
            <td></td>
            <td class="info"></td>
            <td></td>
          </tr>
          <tr>
            <td class="info">性别</td>
            <td>
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0">男</option>
                <option value="1">女</option>
              </select>
            </td>
            <td class="info">身份证号</td>
            <td>
              <input type="text" name="id_no" value="" class="form-control" />
            </td>
            <td class="info">名单类型</td>
            <td>
              <select class="form-control">
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
              <input type="text" name="salary" value="" class="form-control" />
            </td>
            <td class="info">职业类型</td>
            <td>
              <select class="form-control">
                <option value="0">请选择</option>
                <option value="1">受薪人士</option>
                <option value="2">私营业主</option>
                <option value="3">自雇人士</option>
              </select>
            </td>
            <td class="info">联系电话2</td>
            <td>
              <input type="text" name="phone" value="" class="form-control" />
            </td>
          </tr>
          <tr>
            <td class="info">名单来源：</td>
            <td>
              <input type="text" name="menu_source" value="" class="form-control" />
            </td>
            <td class="info">媒体来源：</td>
            <td>
              <input type="text" name="media_source" value="" class="form-control" />
            </td>
            <td class="info">城市</td>
            <td>
              <select class="form-control">
                <option value="">请选择</option>
                <option value="0">上海市</option>
                <option value="1">北京市</option>
              </select>
            </td>
            <td class="info">
              <button class="btn btn-default" type="button">拨号2</button>
            </td>
            <td></td>
          </tr>
          <tr>
            <td class="info">预授信额度：</td>
            <td>
              <input type="text" name="media_source" value="" class="form-control" />
            </td>
            <td class="info">费率：</td>
            <td>
              <input type="text" name="media_source" value="" class="form-control" />
            </td>
            <td class="info">产品类别</td>
            <td>
              <input type="text" name="media_source" value="" class="form-control" />
            </td>
            <td class="info">
              <button class="btn btn-primary" type="button">保存</button>
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;筛选结果： <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">筛选结果：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control col-md-3">
                  <option value="0">请选择</option>
                  <option value="1">符合</option>
                  <option value="2">不符合</option>
              </select>
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">处理结果：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control col-md-3">
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
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">下次联系时间：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
               <input type="text" name="mobile" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" />
          </div>
          <div class="col-md-3 col-sm-3 col-xs-  bg-warning">&nbsp;</div>
      </div>
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">重要提醒：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <input type="radio" name="credit_record" value="1" />&nbsp;是
              <input type="radio" name="credit_record" value="0" />&nbsp;否
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9  bg-warning">&nbsp;</div>
      </div>
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning textarea-div">备注：</div>
          <div class="col-md-5 col-sm-5 col-xs-5 bg-warning textarea-div">
              <textarea ></textarea>
          </div>
          <div class="col-md-6 bg-warning textarea-div">&nbsp;</div>
          <div class="clearfix"></div>
      </div>
    </div>
  </div>



  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;产品选择： <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">产品：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control col-md-3">
                  <option value="0">请选择</option>
                  <option value="1">高端私营业主贷</option>
                  <option value="2">高端薪金贷</option>
                  <option value="3">无抵押车贷</option>
                  <option value="4">阳光内部员工贷</option>
                  <option value="5">私营业主贷</option>
                  <option value="6">物业贷</option>
                  <option value="7">车抵快贷</option>
                  <option value="8">受薪贷</option>
                  <option value="9">阳房贷</option>
                  <option value="10">车险贷</option>
                  <option value="11">寿险贷</option>
                  <option value="12">白领按揭贷</option>
                  <option value="13">阳光车险贷</option>
                  <option value="14">阳光寿险贷</option>
              </select>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1 btn-warning">客户类型：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-warning">
              <select class="form-control col-md-3">
                  <option value="0">请选择</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                  <option value="4">D</option>
              </select>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6  bg-warning">&nbsp;</div>
      </div>

    </div>
  </div>


  <div class="x_panel bg-info">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;确定上门信息： <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">借款人：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">联系电话1：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">联系电话2：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">身份证号：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

      </div>
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">上门时间：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">上门门店：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">门店地址：</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               <input type="text" name="mobile" value="" class="form-control" />
          </div>

          <div class="col-md-1 col-sm-1 col-xs-1 btn-info">&nbsp;</div>
          <div class="col-md-2 col-sm-2 col-xs-2 bg-info">
               &nbsp;
          </div>
      </div>

      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-info textarea-div">上门备注：</div>
          <div class="col-md-5 col-sm-5 col-xs-5 bg-info textarea-div">
              <textarea ></textarea>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1 btn-info textarea-div">坐席备注：</div>
          <div class="col-md-5 col-sm-5 col-xs-5 bg-info textarea-div">
              <textarea ></textarea>
          </div>
      </div>
      <div class="row detail_line_div">
          <div class="col-md-1 col-sm-1 col-xs-1 btn-info textarea-div">上门备注：</div>
          <div class="col-md-5 col-sm-5 col-xs-5 bg-info textarea-div">
              <textarea ></textarea>
          </div>
          <div class="col-md-6 bg-info textarea-div">&nbsp;</div>

      </div>

    </div>
  </div>
  <div class="container text-center">
      <button type="button" class="btn btn-primary">保存</button>
      <button type="button" class="btn btn-info">保存并提取下一个</button>
  </div>

  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;销售结果历史： <small></small></h2>
      <ul class="nav navbar-right panel_toolbox text-right">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
       <table class="table">
         <thead>
           <tr class="btn-danger">
             <th>订单编号</th>
             <th>联系时间</th>
             <th>销售阶段</th>
             <th>处理结果</th>
             <th>下次联系时间</th>
             <th>处理人</th>
             <th>客户类型</th>
             <th>备注</th>
           </tr>
         </thead>
       </table>
    </div>
  </div>

</div>
<div class="clearfix"></div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".btn-primary").click(function(){
        show_stack_modal('success','保存成功！');
    })

    $(".btn-info").click(function(){
        show_stack_modal('success','保存成功并提取下一个任务！');
    })

  })
</script>
<?php $this->load->view('common_footer');?>
