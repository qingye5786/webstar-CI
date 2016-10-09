<div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用青叶网络链接及价格查询系统</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">PHP版本：</label><span class="res-info"><?php echo PHP_VERSION;?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器操作系统：</label><span class="res-info"><?PHP echo PHP_OS; ?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境：</label><span class="res-info"><?php echo $_SERVER['SERVER_SOFTWARE'];?></span>
                    </li>
                    
                    <li>
                        <label class="res-lab">上传限制：</label><span class="res-info"><?php $max_upload = ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled"; echo $max_upload;?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器时间：</label><span class="res-info"><?php echo date("Y-m-d H:i:s",time());?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="http://www.phpol.cn/" target="_blank">龙腾万里</a></span>
                    </li>
                    <li>
                        <label class="res-lab">作者QQ：</label><span class="res-info"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=578672331&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:578672331:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></span>
                    </li>
                </ul>
            </div>
        </div>