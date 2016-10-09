<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo base_url().'static/';?>"/>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/show.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<title><?php echo $siteInfo['seoTitle'];?></title> 
<meta name="keywords" content="<?php echo $siteInfo['seoKeywords'];?>" />
<meta name="description" content="<?php echo $siteInfo['seoDescription'];?>" />
<script type="text/javascript">
	$(function(){
		$("#good_btn").click(function(){
			$.post("<?php echo base_url('main/good/')?>",{id:$(this).attr('class')},
			function(data){
				$('#good_info').html(data);
			},"text");
		});
		
		$("#bad_btn").click(function(){
			$.post("<?php echo base_url('main/bad/')?>",{id:$(this).attr('class')},
			function(data){
				$('#bad_info').html(data);
			},"text");
		});
	});
</script>
</head>
<body>
<div id="wrap">
	<div class="ck">
		<h6>留言列表 <span class="want_m"><a href="<?php echo base_url('main/index')?>">我要留言</a></span></h6>
		<div id="ajax_con">
			<?php foreach ($article_list as $row){?>
			<div class="message">
				<div class="message_con">
					<table cellspacing="0" cellpadding="0" border="0">
						<tbody>
							<tr>
								<td class="title"><?php echo $row['title'];?></td>
							</tr>
							<tr>
								<td>
									<table cellspacing="0" cellpadding="0" border="0">
										 <tbody>
											  <tr>
												<td class="content"><?php echo $row['content'];?></td>
											  </tr>
											  <tr>
												<td class="time">
													<table>
														<tr>
															<td>昵称:<?php echo $row['name'];?></td>
															<td>日期:<?php echo date('Y-m-d',$row['date']);?></td>
															<td><a id="good_btn" class="<?php echo $row['id'];?>" href="javascript:void(0)">送鲜花(+<span id="good_info"><?php echo $row['good'];?></span>)</a></td>
															<td><a id="bad_btn" class="<?php echo $row['id'];?>" href="javascript:void(0)">扔鸡蛋(+<span id="bad_info"><?php echo $row['bad'];?></span>)</a></td>
														</tr>
													</table>
											  </tr>
										 </tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
			<div class="clear"></div>
			<div id="page">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
<?php require_once 'bottom.php';?>