<?php $this->load->view('common_header');?>
<link rel="stylesheet" href="/assets/css/jquery.fileupload.css">
<div class="col-md-12 col-sm-12 col-xs-12 row">
    <div class="x_panel">
      <div class="x_title">
        <h2>毛名单导入</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <form class="form-horizontal form-label-left input_mask">

          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="btn btn-success fileinput-button">
                  <i class="glyphicon glyphicon-plus"></i>
                  <span>上传文件</span>
                  <!-- The file input field used as target for the file upload widget -->
                  <input id="fileupload" type="file" name="files" multiple >
              </div>

          </div>

        </form>
      </div>
    </div>
  </div>
<script type="text/javascript" src="/assets/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/assets/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fileupload.js"></script>
<script>

  $(function () {
    'use strict';
    function import_file(url){

        $.post("/admin/data_import", {file_url:url}, function(data) {
        if (data.success == 'yes') {
          show_stack_modal('success','ffff');
        } else {
        }
      }, "json");
    }
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : '/main/upload';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
              //  $('<p/>').text(file.name).appendTo('#files');
                import_file(file.url);
            });
        }

    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
<?php $this->load->view('common_footer');?>
