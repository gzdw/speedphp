<?php /* Smarty version Smarty-3.0.8, created on 2012-05-07 15:57:38
         compiled from "E:\wamp\www\spblog/tpl\passage_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:26534fa7f0f2c0cd87-10587767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0819ca65e1945153ec5a4ea1a6fd963abbf7cf71' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/tpl\\passage_edit.html',
      1 => 1336406245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26534fa7f0f2c0cd87-10587767',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->getVariable('web_site')->value;?>
</title>
        <meta charset="utf-8" />
        <script src="/speedphp/tpl/js/ueditor/editor_config.js"></script>
        <script src="/speedphp/tpl/js/ueditor/editor_all_min.js"></script>
        <link rel="stylesheet" href="/speedphp/tpl/js/ueditor/themes/default/ueditor.css"/>
    </head>
    
    <body>
        <div id="test" style="margin: 0 auto; width: 960px;">
            <form action="<?php echo $_smarty_tpl->getVariable('submit_url')->value;?>
" method="post">
                <div>
                    <label for="title">标题</label>
                    <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('result')->value['title'];?>
" />
                </div>
                <div>
                    <label for="author">作者</label>
                    <input type="text" name="author" id="author" value="<?php echo $_smarty_tpl->getVariable('result')->value['author'];?>
" />
                </div>
                <div>
                    <label for="posttime">日期</label>
                    <input type="posttime" name="posttime" id="posttime" value="<?php echo $_smarty_tpl->getVariable('result')->value['posttime'];?>
" />
                </div>
                <div>
                    <label for="category">分类</label>
                    <textarea name="category" id="category" style="width: 400px; height: 20px;"><?php echo $_smarty_tpl->getVariable('result')->value['category'];?>
</textarea>
                </div>
                <div>
                    <label for="passage" style="display: block;">正文内容(含HTML)</label>
                    <script type="text/plain" id="editor"><?php echo $_smarty_tpl->getVariable('result')->value['passage'];?>
</script>
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('result')->value['id'];?>
" />
                    <input type="submit" value="提交" />
                </div>
            </form>
            <script>
                var editor = new baidu.editor.ui.Editor({
                    initialContent: '', // 初始化的值
                    textarea:'passage'  // 提交后台的数据 name
                });
                editor.render('editor');
            </script>
			
        </div>
    </body>
</html>