<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//kindeditor 自动转义
function kindhtml($html,$jc='j'){
	if($jc=='j'){
		$html = str_replace('&nbsp;', '&amp;nbsp;', $html);
		$html = str_replace('&gt;', '&amp;gt;', $html);
		$html = str_replace('&lt;', '&amp;lt;', $html);
	}
	//仅用在非kindeditor文本编辑器页面使用，因为kindeditor文本编辑器会自动执行下面这类转换
	if($jc=='c'){
		$html = str_replace('&nbsp;', '&amp;nbsp;', $html);
		$html = str_replace('&gt;', '&amp;gt;', $html);
		$html = str_replace('&lt;', '&amp;lt;', $html);
	}
	return $html;
}
//获取当前栏目id的名称
function trace_sortName($cid){
	$CI =& get_instance();
	$noeData=$CI->Category_m->get_one_data($cid);
	return $noeData['cname'];
}

// 友好打印数组
function dump($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = "<pre>" . $label . htmlspecialchars($output, ENT_QUOTES) . "</pre>";
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}

?>
