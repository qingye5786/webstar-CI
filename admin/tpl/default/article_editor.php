<div class="crumb-wrap">
	<div class="crumb-list">
		<i class="icon-font"></i>
		<a href="<?php echo base_url();?>system">首页</a>
		<span class="crumb-step">&gt;</span>
		<a class="crumb-name" href="<?php echo base_url('article/article_list');?>">项目管理</a>
		<span class="crumb-step">&gt;</span><span>编辑项目</span>
	</div>
</div>
<div class="result-wrap">
	<div class="result-content">
		<form action="<?php echo base_url('article/updata_article')?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
			<table class="insert-tab" width="100%">
				<tbody>
					<tr>
						<th><i class="require-red">*</i>昵&nbsp;称：</th>
						<td>
							<input class="common-text required" id="title" value="<?php echo $artArr['name'];?>" name="name" size="50" value="" type="text">
						</td>
					</tr>
					<tr>
						<th><i class="require-red">*</i>标&nbsp;题：</th>
						<td>
							<input class="common-text required" id="title" value="<?php echo $artArr['title'];?>" name="title" size="50" value="" type="text">
						</td>
					</tr>
					<tr>
						<th><i class="require-red">*</i>内&nbsp;容：</th>
						<td>
							<textarea cols="57" style="height:80px;" class="common-text"  name="content"><?php echo $artArr['content'];?></textarea>
						</td>
					</tr>
					<tr>
						<th><i class="require-red">*</i>好&nbsp;评：</th>
						<td>
							<input class="common-text required" id="title" value="<?php echo $artArr['good'];?>" name="good" size="50" value="" type="text">
						</td>
					</tr>
					<tr>
						<th><i class="require-red">*</i>差&nbsp;评：</th>
						<td>
							<input class="common-text required" id="title" value="<?php echo $artArr['bad'];?>" name="bad" size="50" value="" type="text">
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
						    <input type="hidden" name="id" value="<?php echo $artArr['id']?>" />
							<input class="btn btn-primary btn6 mr10" value="提交" type="submit">
							<input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
						</td>
					</tr>
				</tbody></table>
		</form>
	</div>
</div>