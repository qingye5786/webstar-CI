<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php echo $title;?></title>
		<base href="<?php echo base_url().'static/'; ?>;"/>
		<meta http-equiv="refresh" content="<?php echo $refreshTime?>;url=<?php echo base_url($url);?>"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="stylesheet" type="text/css" href="css/skip.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>
	<body>
		<div id="skip">
          <div id="link">
             <div class="con">提示</div>
             <h1><?php echo $successTips;?></h1>
             <p>页面将在<font color="red"><?php echo $refreshTime?></font>秒后跳转到留言展示页面......</p>
          </div>
      </div>
	</body>
</html>