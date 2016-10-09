<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <base href="<?php echo base_url().TPL_NAME.'/'.ADMIN_THEME.'/'; ?>;"/>
    <link href="css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="<?php echo base_url('login/checkLogin');?>" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="uname" value="admin" id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="upass" value="admin" id="pwd" size="40" class="admin_input_style" />
					</li>
					<li><br /></li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"> &copy; 2015 Powered by <a href="http://www.phpol.cn/" target="_blank">龙腾万里</a></p>
</div>
</body>
</html>