		<div id="footer">Copyright(C)2015&nbsp;官网主页：<a style="color:blue;font-weight:700" target="_blank" href="http://www.phpol.cn">龙腾万里</a>&nbsp;<a id="jzwbtn" href="javascript:void(0)">捐助我</a>&nbsp;技术支持：<a style="position:relative;top:5px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=578672331&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:578672331:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
      </div>
	  <script type="text/javascript">
		$(function(){
			$("#jzwbtn").click(function(){
				$("#jzw").show();
			});
			
			$("#jzwcolse").click(function(){
				$("#jzw").hide();
			});
		});
	  </script>
	  <div id="jzw" style="display:none;">
		<div class="close"><a id="jzwcolse" href="javascript:void(0)">点击关闭</a></div>
		<div class="text">打开支付宝，<font color="green">扫一扫</font>。<br /><br />您的心意，就是我的动力，感谢有您^_^<br /><br /></div>
		<div class="img"><img src="<?php echo base_url();?>static/img/renxing.png" /></div>
	  </div>
</body>
</html>