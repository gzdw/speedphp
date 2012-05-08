<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 14:21:16
         compiled from "E:\wamp\www\spblog/template\znUser.html" */ ?>
<?php /*%%SmartyHeaderCode:240424fa92bdc71dec5-02058741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '331fbbe2fbbac5f287837c16f9d37d5db0127036' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/template\\znUser.html',
      1 => 1336486701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240424fa92bdc71dec5-02058741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>登陆</title>
        <meta charset="utf-8" />
        <style>
        * { margin: 0; padding: 0; }
        body { background: #F4F4F4 url(template/images/login_bg.gif); font: 12px/1.5 "Trebuchet MS", "Myriad Pro", Arial, sans-serif }
        #container { width: 960px; margin: 0 auto; }
        #login {
            margin: 3em auto;
            background:#fff;
            border:1px solid #ddd;
            width:350px;
            font-size:16px;
            -moz-box-shadow:1px 1px 7px #ccc;
            -webkit-box-shadow:1px 1px 7px #ccc;
            box-shadow:1px 1px 7px #ccc;
        }
        #login h3 { padding: 20px 30px 20px 30px; background-color: #444; color: white; font-size: 25px; border-bottom: 1px solid #ddd; }
        #login form > div { position: relative; }
        #login div img { position: absolute; left: 105px; top: 13px; }
        #login label { display: block; padding: 10px 30px 0px 30px; margin: 10px 0px 0px 0px; }
        input[type="text"], input[type="password"] {
            border: solid 1px #E5E5E5;
            background: #FFFFFF;
            margin: 5px 30px 0px 30px;
            padding: 9px;
            display:block;
            font-size:16px;
            width: 76%;
            background: 
                -webkit-gradient(
                    linear,
                    left top,
                    left 25,
                    from(#FFFFFF),
                    color-stop(4%, #EEEEEE),
                    to(#FFFFFF)
                );
            background: 
                -moz-linear-gradient(
                    top,
                    #FFFFFF,
                    #EEEEEE 1px,
                    #FFFFFF 25px
                    );
            -moz-box-shadow: 0px 0px 8px #f0f0f0;
            -webkit-box-shadow: 0px 0px 8px #f0f0f0;
            box-shadow: 0px 0px 8px #f0f0f0;
        }
        input[type="submit"] {
            background: #e3e3e3;
            border: 1px solid #ccc;
            color: #333;
            font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 8px 0 9px;
            text-align: center;
            width: 150px;
            cursor:pointer;
            margin: 35px 20px 20px 180px;
            text-shadow: 0px 1px 0px #fff;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -moz-box-shadow: 0px 0px 2px #fff inset;
            -webkit-box-shadow: 0px 0px 2px #fff inset;
            box-shadow: 0px 0px 2px #fff inset;
        }
        .buttom {
            background-color:#444;
            border-top:1px solid #ddd;
            margin-top:20px;
            clear:both;
            color:#fff;
            text-shadow:1px 1px 1px #000;
        }
        .remember {
            position: absolute;
            left: 30px;
            top: 40px;
        }
        .remember input[type="checkbox"] {
            position: relative;
            top: 2px;
        }
        .remember span {
            color: white;
            font-size: 11px;
            font-family: 'Trebuchet MS';
        }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="login">
                <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'manage','a'=>'index'),$_smarty_tpl);?>
" method="post">
                    <h3>Login</h3>
                    <div>
                        <label for="user">Username</label>
                        <input type="text" name="user" id="user" />
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" />
                    </div>
                    <div>
                        <label for="verify">Verify</label>
                        <input type="text" name="verify" id="verify" />
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znUser','a'=>'verify'),$_smarty_tpl);?>
" alt="" />
                    </div>
                    <div class="buttom">
                        <div class="remember">
                            <input type="checkbox" />
                            <span>Keep me logged in</span>
                        </div>
                        <input type="submit" value="submit" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>