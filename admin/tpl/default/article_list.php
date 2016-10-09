<div class="crumb-wrap">
	<div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">留言管理</span></div>
</div>
<div class="result-wrap">
	<form name="myform" id="myform" method="post">
		<div class="result-title">
			<div class="result-list">
				<a id="batchDel deleteAllArticle" href="javascript:delAll('<?php echo $url;?>')"><i class="icon-font"></i>批量删除</a>
			</div>
		</div>
		<div class="result-content">
			<table class="result-tab" id="result-tab" width="100%">
				<tr>
					<th class="tc" width="5%"><input onclick="selectAll(this,'result-tab')" id="seAll" class="allChoose" name="" type="checkbox"></th>
					<th style="text-align:center" width="5%">ID</th>
					<th style="text-align:center" width="5%">昵称</th>
					<th style="text-align:center" width="10%">标题</th>
					<th style="text-align:center" width="50%">内容</th>
					<th style="text-align:center" width="5%">好评</th>
					<th style="text-align:center" width="5%">差评</th>
					<th style="text-align:center" width="10%">时间</th>
					<th style="text-align:center" >操作</th>
				</tr>
				<?php foreach ($article_list as $row):?>
				<tr>
					<td class="tc"><input name="id[]" value="<?php echo $row['id'];?>" type="checkbox"></td>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php echo $row['content'];?></td>
					<td><?php echo $row['good'];?></td>
					<td><?php echo $row['bad'];?></td>
					<td><?php echo date("Y-m-d H:i:s",$row['date'])?></td>
					<td>
						<a class="link-update" href="<?php echo base_url('article/editor_article/'.$row['id']);?>">修改</a>
						<a class="link-del" href="<?php echo base_url('article/delete_article/'.$row['id']);?>" onclick="return confirm('你确定全部删除?');">删除</a>
					</td>
				</tr>
				<?php endforeach;?>
			</table>
			<div class="list-page"> 
			   <ul>
			      <?php echo $this->pagination->create_links(); ?>
			   </ul>
			</div>
		</div>
	</form>
</div>