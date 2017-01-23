<?php include 'header.php'; ?>
<div class="containertitle"><b>管理首页</b></div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-laptop fa-fw"></i> 站点信息
            </div>
            <div class="panel-body" id="admindex_servinfo">
                <ul>
                    <li>PHP版本：<?php echo PHP_VERSION; ?></li>
                    <li>服务器空间允许上传最大文件：<?php echo ini_get('upload_max_filesize'); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-volume-down fa-fw"></i> 系统消息
            </div>
            <div class="panel-body" id="admindex_msg">
                <ul>
                <li class="msg_type_0"><span>17年1月21日</span><a href="http://xingdong365.com" target="_blank">test</a></li>
                <li class="msg_type_0"><span>17年1月21日</span><a href="http://xingdong365.com" target="_blank">test</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div id="admindex">
            <div class="alert alert-warning">
              欢迎使用 &copy; 后台管理系统 <br />
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>