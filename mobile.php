<?php

/**
 * ECSHOP 生成手机验证码
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: captcha.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);
define('INIT_NO_SMARTY', true);

require(dirname(__FILE__) . '/includes/init.php');

$mobile = trim($_REQUEST['mobile']);



include_once("./SDK/CCPRestSDK.php");

//主帐号
$accountSid= '8a48b5514e236232014e2ed303290b54';

//主帐号Token
$accountToken= 'b6cc19dfaeca452f99ca4322d3c106ae';

//应用Id
$appId='aaf98f894fa5766f014fab29070505c4';

//请求地址，格式如下，不需要写https://
$serverIP='sandboxapp.cloopen.com';
//$serverIP='app.cloopen.com';

//请求端口 
$serverPort='8883';

//REST版本号
$softVersion='2013-12-26';



$code = mt_rand(1000,9999);
$_SESSION['_mobile_code'] = $code;
$result = send_mobile_code($mobile, $code);
if($result) {
	exit(json_encode(array('rs'=>1, 'msg'=>'成功')));
} else {
	exit(json_encode(array('rs'=>-1, 'msg'=>'失败')));
}


/**
  * 发送模板短信
  * @param to 手机号码集合,用英文逗号分开
  * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
  * @param $tempId 模板Id
  */       
function sendTemplateSMS($to,$datas,$tempId = 35379)
{
     // 初始化REST SDK
     global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
     $rest = new REST($serverIP,$serverPort,$softVersion);
     $rest->setAccount($accountSid,$accountToken);
     $rest->setAppId($appId);
    
     // 发送模板短信
     //echo "Sending TemplateSMS to $to <br/>";
     $result = $rest->sendTemplateSMS($to,$datas,$tempId);
     if($result == NULL ) {
         //echo "result error!";
		 return false;
         break;
     }
     if($result->statusCode!=0) {
        // echo "error code :" . $result->statusCode . "<br>";
         //echo "error msg :" . $result->statusMsg . "<br>";
         //TODO 添加错误处理逻辑
		 return false;
     }else{
        // echo "Sendind TemplateSMS success!<br/>";
         // 获取返回信息
         $smsmessage = $result->TemplateSMS;
       //  echo "dateCreated:".$smsmessage->dateCreated."<br/>";
        // echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
         //TODO 添加成功处理逻辑
		 return true;
     }
}

//Demo调用,参数填入正确后，放开注释可以调用 
//sendTemplateSMS("手机号码","内容数据","模板Id");


function send_mobile_code($mobile, $code) {
	return sendTemplateSMS($mobile, array($code, "10"));
}

?>