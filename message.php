<?php
require_once(dirname(__FILE__).'/include/config.inc.php');
//留言内容处理
if(isset($action) and $action=='add')
{

		if(empty($FullName) or
		   empty($content) or
		   empty($contact))
		{
			header('location:index.php');
			exit();
		}
	
		$r = $dosql->GetOne("SELECT Max(orderid) AS orderid FROM `#@__message`");
		$orderid  = (empty($r['orderid']) ? 1 : ($r['orderid'] + 1));
		$nickname = htmlspecialchars($FullName);
		$contact  = htmlspecialchars($contact);
		$content  = htmlspecialchars($content);
		$posttime = GetMkTime(time());
		$ip       = gethostbyname($_SERVER['REMOTE_ADDR']);
	
	
		$sql = "INSERT INTO `#@__message` (siteid, nickname, contact, content, orderid, posttime, htop, rtop, checkinfo, ip) VALUES (1, '$nickname', '$contact', '$content', '$orderid', '$posttime', '', '', 'false', '$ip')";
		if($dosql->ExecNoneQuery($sql))
		{
			ShowMsg('留言成功，感谢您的支持！','index.php');
			exit();
		}
	
}






































?>