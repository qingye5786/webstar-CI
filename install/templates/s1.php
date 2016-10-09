<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title><?php echo $Title; ?> - <?php echo $Powered; ?></title>
<link rel="stylesheet" href="./css/install.css?v=9.0" />
</head>
<body>
<div class="wrap">
  <?php require './templates/header.php';?>
  <div class="section">
    <div class="main cc">
      <pre class="pact" readonly="readonly">WebStar留言板使用协议

版权所有 (c)2010-<?php echo date("Y")?>，chenyanphp@qq.com保留所有权利。 
感谢您选择Webstar留言板，Webstar是一个用php语言制作的留言板，Webstar基于 PHP + MySQL 的技术，采用CodeIgnet框架开发。
为了使你正确并合法的使用本软件，请你在使用前务必阅读清楚下面的协议条款：
本授权协议适用且仅适用于Webstar任何版本，Webstar官方对本授权协议的最终解释权和修改权。

一、协议许可的权利
1、您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。
2、您可以在协议规定的约束和限制范围内修改 Webstar 源代码或界面风格以适应您的网站要求。
3、您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。
4、获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持内容。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。

二、协议许可的权利和限制
1、未获商业授权之前，不得删除网站底部及相应的官方版权信息和链接。购买商业授权请联系chenyanphp@qq.com了解最新说明。
2、未经官方许可，不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。
3、不管你的网站是否整体使用 Webstar ，还是部份栏目使用 Webstar，在你使用了 Webstar 的网站主页上必须加上 Webstar 官方网址(www.phpol.cn)的链接。
4、未经官方许可，禁止在 Webstar 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。
5、如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。

三、有限担保和免责声明
1、本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。 
2、用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。
3、电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装 Webstar，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。

协议发布时间： 2015年10月27日
版本最新更新： 2015年10月27日 By chenyanphp@qq.com

Webstar官方网站：http://www.phpol.cn
-----------------------------------------------------
作者邮箱: chenyanphp@qq.com

</pre>
    
    </div>
    <div class="bottom tac"> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?step=2" class="btn">接 受</a> </div>
  </div>
</div>
<?php require './templates/footer.php';?>
</body>
</html>