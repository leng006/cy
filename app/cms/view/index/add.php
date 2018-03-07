
    <!--
    +----------------------------------------------------------------------
    | select元素需要加type="select"
    | 所有可编辑的表单元素需要按以下格式添加class名：class="field-字段名"
    +----------------------------------------------------------------------
    -->
<!--    <div class="layui-collapse page-tips">
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">温馨提示</h2>
            <div class="layui-colla-content">
                <p></p>
            </div>
        </div>
    </div>-->
<style>
    .layui-form-label{min-width:0px;}
</style>
    <form class="layui-form" action="{:url()}" id="editForm" method="post">
        <fieldset class="layui-elem-field layui-field-title">
            <legend>发布新闻</legend>
        </fieldset>
        <div class="layui-form-item">
            <label class="layui-form-label">新闻分类</label>
            <div class="layui-input-block">
                <select name="categoryid" class="field-categoryid" type="select">
                    <option value="0">分类1</option>
                    <option value="1" selected="">分类2</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input field-title" name="title" lay-verify="required" autocomplete="off" placeholder="请输入标题">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">简介</label>
            <div class="layui-input-block">
                <textarea placeholder="请输入简介" class="layui-textarea field-short" name="short" lay-verify="required"></textarea>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">内容</label>
            <div class="layui-input-block" >
                <textarea id="kindeditor2" class="field-content" name="content" lay-verify="required"></textarea>
            </div>
        </div>

        <!--图片-->
        <div class="layui-form-item">
            <label class="layui-form-label">缩略图</label>
            <div class="layui-input-block upload">
                <button type="button" class="layui-btn layui-btn-primary layui-upload"  lay-type="image" lay-data="{accept:'image'}">请上传图片</button>
                <input type="hidden" class="upload-input" name="img" value="" >
                <img src="" style="display:none;border-radius:5px;border:1px solid #ccc" type="img" class="field-img" width="36" height="36">
            </div>
            <div class="layui-form-mid layui-word-aux"></div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">发布时间</label>
            <div class="layui-input-inline">
                <input type="text" name="time" lay-verify="datetime|required" class="layui-input field-time" id="date" value="{:date('Y-m-d H:m:s')}" readonly>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-inline">
                <input type="text" name="sort" placeholder="0"  class="layui-input field-sort">
            </div>
        </div>
        <div class="layui-form-item" pane="">
            <label class="layui-form-label">状&nbsp;&nbsp;&nbsp;&nbsp;态</label>
            <div class="layui-input-inline">
                <input type="radio" class="field-status" name="status" value="1" title="显示" checked>
                <input type="radio" class="field-status" name="status" value="0" title="隐藏">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" class="field-id" name="id">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">提交</button>
                <a href="{:url('index')}" class="layui-btn layui-btn-primary ml10"><i class="aicon ai-fanhui"></i>返回</a>
            </div>
        </div>
    </form>



<script>
    /* 修改模式下需要将数据放入此变量 */
    var formData = {:json_encode($data_info)};
    // 会员选择回调函数
    function func(data) {
        var $ = layui.jquery;
        $('input[name="member"]').val('['+data[0]['id']+']'+data[0]['username']);
    }
    layui.use(['upload','laydate'], function() {
        var $ = layui.jquery, layer = layui.layer, upload = layui.upload,laydate=layui.laydate;
        /**
         * 附件上传url参数说明
         * @param string $from 来源
         * @param string $group 附件分组,默认sys[系统]，模块格式：m_模块名，插件：p_插件名
         * @param string $water 水印，参数为空默认调用系统配置，no直接关闭水印，image 图片水印，text文字水印
         * @param string $thumb 缩略图，参数为空默认调用系统配置，no直接关闭缩略图，如需生成 500x500 的缩略图，则 500x500多个规格请用";"隔开
         * @param string $thumb_type 缩略图方式
         * @param string $input 文件表单字段名
         */
        upload.render({
            elem: '.layui-upload'
            ,url: '{:url("admin/annex/upload?water=&thumb=&from=&group=")}'
            ,method: 'post'
            ,before: function(input) {
                layer.msg('文件上传中...', {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parents('.upload').find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);
            }
        });
        laydate.render({
            elem:"#date",
            type: 'datetime'
        })

    });
</script>
<!--
/**
 * editor 富文本编辑器
 * @param array $obj 编辑器的容器ID
 * @param string $name [为了方便大家能在系统设置里面灵活选择编辑器，建议不要指定此参数]，目前支持的编辑器[ueditor,umeditor,ckeditor,kindeditor]
 * @param string $upload [选填]附件上传地址
 */
-->

{:editor(['kindeditor2'])}

<script src="__ADMIN_JS__/footer.js"></script>