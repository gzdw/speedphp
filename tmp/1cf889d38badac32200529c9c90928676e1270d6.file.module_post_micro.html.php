<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 14:19:43
         compiled from "E:\wamp\www\spblog/template\module_post_micro.html" */ ?>
<?php /*%%SmartyHeaderCode:4694fa92b7f426fe9-63363625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cf889d38badac32200529c9c90928676e1270d6' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/template\\module_post_micro.html',
      1 => 1336459960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4694fa92b7f426fe9-63363625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
    <article class="module width_full">
        <header><h3>Post New Article</h3></header>
            <div class="module_content">
                    <fieldset>
                        <label>Post Title</label>
                        <input type="text">
                    </fieldset>
                    <fieldset>
                        <label>Content</label>
                        <textarea rows="12"></textarea>
                    </fieldset>
                    <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
                        <label>Category</label>
                        <select style="width:92%;">
                            <option>Articles</option>
                            <option>Tutorials</option>
                            <option>Freebies</option>
                        </select>
                    </fieldset>
                    <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
                        <label>Tags</label>
                        <input type="text" style="width:92%;">
                    </fieldset><div class="clear"></div>
            </div>
        <footer>
            <div class="submit_link">
                <select>
                    <option>Draft</option>
                    <option>Published</option>
                </select>
                <input type="submit" value="Publish" class="alt_btn">
                <input type="submit" value="Reset">
            </div>
        </footer>
    </article><!-- end of post new article -->