<?php include 'header.php'; ?>
<script charset="utf-8" src="editor/kindeditor.js"></script>
<script charset="utf-8" src="editor/lang/zh_CN.js"></script>

<form action="save_log.php?action=add" method="post" enctype="multipart/form-data" id="addlog" name="addlog">
<!--文章内容-->
<div class="col-lg-8">
    <div class="containertitle">
        <b>写文章</b><span id="msg_2"></span>
    </div>
    <div id="msg"></div>
        <div id="post" class="form-group">
            <div>
                <input type="text" name="title" id="title" value="" class="form-control" placeholder="文章标题" />
            </div>
            <div id="post_bar">   
            </div>
            <div>
                <textarea id="content" name="content" style="width:100%; height:460px;"></textarea>
            </div>
            <div class="show_advset" onclick="displayToggle('advset', 1);">高级选项<i class="fa fa-caret-right fa-fw"></i></div>
            <div id="advset">
                <div>文章摘要：</div>
                <div><textarea id="excerpt" name="excerpt" style="width:100%; height:260px;"></textarea></div>
            </div>
        </div>
    <div class=line></div>
</div>

<!--文章侧边栏-->
<div class="col-lg-4 container-side">
    <div class="panel panel-default">
        <div class="panel-heading">设置项</div>
        <div class="panel-body">
            <div class="form-group">
            <select name="sort" id="sort" class="form-control">
                <option value="-1">选择分类...</option>
                <option value="1">测试分类</option>    
            </select>
            </div>
            
            <div class="form-group">
            <label>标签：</label>
            <input name="tag" id="tag" class="form-control" value="" placeholder="文章标签，使用逗号分隔" />
            <span style="color:#2A9DDB;cursor:pointer;margin-right: 40px;"><a href="javascript:displayToggle('tagbox', 0);">已有标签+</a></span>
            <div id="tagbox" style="display: none;">
                <?php
                $tags = array(); 
                if ($tags) {
                    foreach ($tags as $val) {
                        echo " <a href=\"javascript: insertTag('{$val['tagname']}','tag');\">{$val['tagname']}</a> ";
                    }
                } else {
                    echo '还没有设置过标签！';
                }
                ?>
            </div>
            </div>

            <div class="form-group">
            <label>发布时间：</label>
            <input maxlength="200" name="postdate" id="postdate" value="" class="form-control" />
            </div>
            
            <div class="form-group">
                <label>链接别名：</label>
                <input name="alias" id="alias" class="form-control" value="" />
            </div>
            
            <div class="form-group">
                <label>访问密码：</label>
                <input type="text" name="password" id="password" class="form-control" value="" />
            </div>
            
            <div class="form-group">
            <input type="checkbox" value="y" name="top" id="top"  />
            <label for="top">首页置顶</label>
            <input type="checkbox" value="y" name="sortop" id="sortop"  />
            <label for="sortop">分类置顶</label>
            <input type="checkbox" value="y" name="allow_remark" id="allow_remark" checked="checked" />
            <label for="allow_remark">允许评论</label>
            </div>
        </div>
    </div>

    <div id="post_button">
        <input name="token" id="token" value="" type="hidden" />
        <input type="hidden" name="ishide" id="ishide" value="" />
        <input type="hidden" name="gid" value= />
        <input type="hidden" name="author" id="author" value= />

        
        <input type="submit" value="发布文章" onclick="return checkform();" class="btn btn-primary" />
        <input type="button" name="savedf" id="savedf" value="保存草稿" onclick="autosave(2);" class="btn btn-success" />
        
        <input type="submit" value="保存并返回" onclick="return checkform();" class="btn btn-primary" />
        <input type="button" name="savedf" id="savedf" value="保存" onclick="autosave(2);" class="btn btn-success" />
        
        <input type="submit" name="pubdf" id="pubdf" value="发布" onclick="return checkform();" class="btn btn-success" />

        
    </div>
</div>
</form>
<script>
    loadEditor('content');
    loadEditor('excerpt');
    $("#menu_wt").addClass('active');
    $("#advset").css('display', $.cookie('em_advset') ? $.cookie('em_advset') : '');
    $("#alias").keyup(function () {
        checkalias();
    });
    setTimeout("autosave(0)", 6000);
    $("#menu_wt").addClass('active');
</script>
