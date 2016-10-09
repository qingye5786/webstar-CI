<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo base_url().'static/';?>"/>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/index.css" />
<title><?php echo $siteInfo['seoTitle'];?></title> 
<meta name="keywords" content="<?php echo $siteInfo['seoKeywords'];?>" />
<meta name="description" content="<?php echo $siteInfo['seoDescription'];?>" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	// 留言表单验证
	function checkInput() {
		if($("#name").value() == '') {
			alert('昵称不能为空哦');
			return false;
		}
		if($("#title".value() == '')) {
			alert('标题不能为空哦');
			return false;
		}
		if($("#content").value == '') {
			alert('内容不能为空哦');
			return false;
		}
		return true;
	}
</script>
</head>
<body>
      <div id="wrap">
          <form action="<?php echo base_url('main/add')?>" id="iform" method="post" onsubmit="return checkInput();" >
             <table>
                <tr>
                     <td><input type="text" name="name" id="name" class="title" placeholder="昵称" /></td>
                </tr>
                <tr>
                     <td><input type="text" name="title" id="title"  class="title" placeholder="标题" /></td>
                </tr>
                <tr>
                     <td><textarea name="content" id="content" placeholder="内容"></textarea>&nbsp;</td>
                </tr>
                <tr>
                   <td>
                       <input class="submit" type="submit" value="提交"  />
                       <input type="reset"  value="重置" name="reset" id="reset" style="margin-left:40px;" />
                       <input class="see" type="button" value="查看" style="margin-left:45px;" onclick="window.location.href='<?php echo base_url('main/show')?>'" />
                   </td>
               </tr>
             </table>
         </form>
<?php require_once 'bottom.php';?>