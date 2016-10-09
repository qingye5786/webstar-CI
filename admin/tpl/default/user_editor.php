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
	    <?php echo validation_errors(); ?>
		<form action="<?php echo base_url('user/editor_user');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
			<table class="insert-tab" width="100%">
				<tbody>					
					<tr>
						<th>用户名:</th>
						<td>
						    <input type="hidden" name="uid" value="<?php echo $uid;?>">
                            <input class="common-text required" id="title" value="<?php echo $uname;?>" name="uname" size="50" value="" type="text" disabled="true">
                        </td>
					</tr>
                    <tr>
						<th>新密码:</th>
                        <td>
                            <input class="common-text required" id="title" value="" placeholder="这里输入新密码(如果不修改则输入老密码)" name="upass" size="50" value="" type="text">
                        </td>
					</tr>
                    <tr>
						<th>E-mail:</th>
                        <td>
                            <input class="common-text required" id="title" value="<?php echo $umail;?>" name="umail" size="50" value="" type="text">
                        </td>
					</tr>
                    <tr>
						<th>QQ:</th>
                        <td>
                            <input class="common-text required" id="title" value="<?php echo $uqq;?>" name="uqq" size="50" value="" type="text">
                        </td>
					</tr>
                    <tr>
						<th>手机/电话:</th>
                        <td>
                            <input class="common-text required" id="title" value="<?php echo $uphone;?>" name="uphone" size="50" value="" type="text">
                        </td>
					</tr>
					
					<tr>
						<th></th>
						<td>
							<input class="btn btn-primary btn6 mr10" value="提交" type="submit">
							<input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
						</td>
					</tr>
				</tbody></table>
		</form>
	</div>
</div>