<div class="crumb-wrap">
	<div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">系统设置</span></div>
</div>
<div class="result-wrap">
	<form action="<?php echo base_url('system/sys_siteInfo_editor');?>" method="post" id="myform" name="myform">
		<div class="config-items">
			<div class="config-title">
				<h1><i class="icon-font">&#xe00a;</i>网站信息设置</h1>
			</div>
			<div class="result-content">
				<table width="100%" class="insert-tab">
					<tbody>
					    <tr>
					        <input type="hidden" name="siteId" value="<?php  echo $site_info['siteId']; ?>" />
    						<th width="15%"><i class="require-red">*</i>站点名称：</th>
    						<td><input type="text" id="" value="<?php echo $site_info['siteName'];?>" size="45" name="siteName" class="common-text"></td>
    					</tr>
    					<tr>
    						<th width="15%"><i class="require-red">*</i>域名：</th>
    						<td><input type="text" id="" value="<?php echo $site_info['domainName'];?>" size="45" name="domainName" class="common-text"></td>
    					</tr>
						<tr>
							<th><i class="require-red">*</i>站点标题：</th>
							<td><input type="text" id="" value="<?php echo $site_info['seoTitle'];?>" size="45" name="seoTitle" class="common-text"></td>
						</tr>
						<tr>
							<th><i class="require-red">*</i>站点关键字：</th>
							<td><input type="text" id="" value="<?php echo $site_info['seoKeywords'];?>" size="45" name="seoKeywords" class="common-text"></td>
						</tr>
						<tr>
							<th><i class="require-red">*</i>站点描述：</th>
							<td>
							    <textarea cols="57" style="height:80px;" class="common-text"  name="seoDescription"><?php echo $site_info['seoDescription'];?></textarea>
							</td>
						</tr>
						<tr>
							<th><i class="require-red">*</i>被搜索网站地址：</th>
							<td>
							    <textarea cols="57" style="height:80px;" class="common-text"  name="siteUrl"><?php echo $site_info['siteUrl'];?></textarea>
							</td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input type="submit" value="提交" class="btn btn-primary btn6 mr10">
								<input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
							</td>
						</tr>
					</tbody></table>
			</div>
		</div>
	</form>
</div>