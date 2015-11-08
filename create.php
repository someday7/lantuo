<?php

/**
 * ECSHOP 会员中心
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
if (function_exists ( 'date_default_timezone_set' ))
date_default_timezone_set ('PRC');

/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');

$content=trim($_POST['content']);
$article_id=trim($_POST['url']);
$floor=intval($_POST['replyFloor2']);
$status=1;

$reply_id=$GLOBALS['db']->getOne('SELECT id FROM ' . $GLOBALS['ecs']->table('replys') . " WHERE article_id=".$article_id." and reply=".$floor);
//print_r($reply_id);exit;
//$reply_id=0;

$content=urldecode($content);


$arr['commentId']=0;
$arr['floor']=0;
$arr['showName']='';
$arr['brief']='';
$arr['status']=0;
$arr['createTime']='';
$arr['userId']=-1;
$arr['commentCount']=0;
$arr['topicId']=0;
$arr['ip']='';
if(empty($content)){
$arr['resultCode']=-9;
$arr['resultMsg']='请输入评论内容';
exit(json_encode($arr));
}
//{202}{203}{204}{205}{206}{207}{208}{209}{210}
$content=str_replace('{201}','<img src="/css/face201.gif"/>',$content);
$content=str_replace('{202}','<img src="/css/face202.gif"/>',$content);
$content=str_replace('{203}','<img src="/css/face203.gif"/>',$content);
$content=str_replace('{204}','<img src="/css/face204.gif"/>',$content);
$content=str_replace('{205}','<img src="/css/face205.gif"/>',$content);
$content=str_replace('{206}','<img src="/css/face206.gif"/>',$content);
$content=str_replace('{207}','<img src="/css/face207.gif"/>',$content);
$content=str_replace('{208}','<img src="/css/face208.gif"/>',$content);
$content=str_replace('{209}','<img src="/css/face209.gif"/>',$content);
$content=str_replace('{210}','<img src="/css/face210.gif"/>',$content);
$content=addslashes($content);
$ip=real_ip();

$userid=intval($_SESSION['user_id']);
if($userid==0){

	include_once('includes/cls_captcha.php');
	
	$validator = new captcha();
	if (!$validator->check_word($_POST['captcha']))
	{
		$arr['resultCode']=-9;
		$arr['resultMsg']='对不起，验证码不正确,请重新输入后再试。';
		exit(json_encode($arr));
	}
	$username='游客';
	
}else{
	$sql = 'SELECT user_name FROM ' . $GLOBALS['ecs']->table('users') . " WHERE user_id = ".$userid;
	if ($row = $GLOBALS['db']->getRow($sql))
	{
		$username=$row['user_name'];
	}

}
$sql = 'SELECT reply FROM ' . $GLOBALS['ecs']->table('replys') . " WHERE article_id = ".$article_id.' order by id desc';
if ($row = $GLOBALS['db']->getRow($sql))
{
	$reply=$row['reply']+1;
}
else
{
	$reply=1;
}

$time=time();
$sql = 'INSERT INTO '. $ecs->table('replys') . '  (`article_id`, `user_id`, `reply_id`, `content`, `replytime`, `replyip`, `reply`, `status`)VALUES ("'.$article_id.'", "'.$userid.'", "'.$reply_id.'", "'.$content.'", "'.$time.'", "'.$ip.'", "'.$reply.'","'.$status.'")';
$db->query($sql);

$arr['commentId']=111;
$arr['floor']=$reply;
$arr['showName']=$username;
$arr['brief']=stripslashes($content);
$arr['userId']=$userid;
$arr['createTime']=date('Y-m-d H:i:s',$time);
$arr['resultCode']=0;
$arr['commentCount']=0;
//$arr['resultMsg']='您的评论已经成功发表。注：评论在审核后才能出现在列表中,谢谢！';
exit(json_encode($arr));

//echo '{"commentId":40559201, "floor":56, "showName":"Mr.Goba", "brief":"照片不错", "status":0, "createTime":"2015-10-30 19:38:56","resultCode":0, "resultMsg":"","userId":42037188,"commentCount":1,"topicId":13404289,"ip":"120.40.243.69"}';
?>
