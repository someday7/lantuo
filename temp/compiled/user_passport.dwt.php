<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css">
 <link href="themes/default/css/index.min.css?20141025" rel="stylesheet" type="text/css">
 <link href="https://hwid1.vmall.com/oauth2/up/rss_19/default/portal_rss/css/uum/zh-cn_account.css?20150204" rel="stylesheet" type="text/css"> 

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>

<body class="wide">
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="naver-main">
	<div class="layout">
		
		<div class="category category-index" id="category-block">
		
 	<?php echo $this->fetch('library/category_tree.lbi'); ?>
		</div>
	</div>
</div>
 

<?php if ($this->_var['action'] == 'login'): ?>
	<div class="reg-area reg-apply-area">
	<div class="h">
            	 <span>会员登录</span> 
            </div>
 <div class="b">
   <div class="logtitle"></div>
  <div class="form-edit-area"  style="float:left; width:500px;">
   <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
 
        <table width="100%" border="0" align="left" cellpadding="3" cellspacing="5">
          <tr>
            <td width="15%" align="right"><?php echo $this->_var['lang']['label_username']; ?>：</td>
            <td width="85%"><input name="username" type="text" size="25" class="text vam" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['label_password']; ?>:</td>
            <td>
            <input name="password" type="password" size="15"  class="text vam"/>
            </td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="text vam" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr>
		   <td align="right"> </td>
            <td><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
            <input type="hidden" name="act" value="act_login" />
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            <input type="submit" name="Submit" class="button-reg" id="btnSubmit" value="登录" tabindex="6">
            </td>
          </tr>
	  <tr><td></td><td><a href="user.php?act=qpassword_name" class="f3"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password" class="f3"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a></td></tr>
      </table>
	
    </form>
  </div>
  
  
  <div class="usTxt" style="float:left; width:200px;">
    <strong><?php echo $this->_var['lang']['user_reg_info']['0']; ?></strong>  <br />
    <strong class="f4"><?php echo $this->_var['lang']['user_reg_info']['1']; ?>：</strong><br />
    <?php if ($this->_var['car_off'] == 1): ?>
    <?php echo $this->_var['lang']['user_reg_info']['2']; ?><br />
    <?php endif; ?>
    <?php if ($this->_var['car_off'] == 0): ?>
    <?php echo $this->_var['lang']['user_reg_info']['8']; ?><br />
    <?php endif; ?>
    <?php echo $this->_var['lang']['user_reg_info']['3']; ?>：<br />
    1. <?php echo $this->_var['lang']['user_reg_info']['4']; ?><br />
    2. <?php echo $this->_var['lang']['user_reg_info']['5']; ?><br />
    3. <?php echo $this->_var['lang']['user_reg_info']['6']; ?><br />
    4. <?php echo $this->_var['lang']['user_reg_info']['7']; ?>  <br /><br />
    <a href="user.php?act=register"  class="button-reg">立即注册</a>
  </div>
</div>
  </div>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'register'): ?>
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
    <div class="usBox">
      <div class="usBox_2 clearfix">
        <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
      </div>
    </div>
    <?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
	
	<div class="reg-area reg-apply-area" style=" padding-left:150px;">
        	<div class="h" style="height:30px">
            	 <span>注册帐号</span> 
            </div>
            <div class="b">
                 <form action="user.php" method="post" name="formUser" onsubmit="return register();">
                	
                	 
				    
                	<div class="form-edit-area">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
							<tr>
          <th width="13%"><?php echo $this->_var['lang']['label_username']; ?>：</th>
          <td width="87%">
          <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);"  class="text vam"/>
            <span id="username_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <th><?php echo $this->_var['lang']['label_email']; ?>：</th>
          <td>
          <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="text vam"/>
            <span id="email_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <th><?php echo $this->_var['lang']['label_password']; ?>：</th>
          <td>
          <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="text vam" style="width:179px;" />
            <span style="color:#FF0000" id="password_notice"> *</span>
          </td>
        </tr>
        <tr height="50">
          <th><?php echo $this->_var['lang']['label_password_intensity']; ?>：</th>
          <td>
            <table width="145" border="0" cellspacing="0" cellpadding="0">
              <tr align="center">
                <td width="33%" id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></td>
                <td width="33%" id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></td>
                <td width="33%" id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <th><?php echo $this->_var['lang']['label_confirm_password']; ?>：</th>
          <td>
          <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="text vam" style="width:179px;"/>
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
      
		  <?php if ($this->_var['enabled_captcha']): ?>
      <tr>
      <th><?php echo $this->_var['lang']['comment_captcha']; ?>：</th>
      <td><input type="text" size="8" name="captcha" class="text vam" style="width:100px;" />
      <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle; height:30px;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
      </tr>
      <?php endif; ?>
		
                               
                                    	 
                                    </td>
                                </tr>
                                <tr>
                                	<th>&nbsp;</th>
                                    <td style="padding:0px;">
                                   <label>    <input name="agreement" type="checkbox" value="1" checked="checked" />
            <?php echo $this->_var['lang']['agreement']; ?></label> 
                                    </td>
                                </tr>
                                <tr>
                                	<th>&nbsp;</th>
                                    <td>
									
									   <input name="act" type="hidden" value="act_register" >
        				  <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
        
		  
		  
                                        <input type="submit" name="Submit" class="button-reg" id="btnSubmit" value="立即注册" tabindex="6">&nbsp;&nbsp;<span id="register_msg" class="vam error"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="f tar">
            	<span class="vam">已有帐号</span>&nbsp;&nbsp;&nbsp;<a href="user.php" class="button-login-2 vam" title="登录">登录</a>
            </div>
            <div class="cloud"></div>
    	</div>
		
		 
    </form>
  </div>
</div>
<?php endif; ?>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'get_password'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
            <td><input name="email" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="send_pwd_email" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
            <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
            <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="check_answer" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <br />
      <table width="80%" border="0" align="center">
        <tr>
          <td><?php echo $this->_var['lang']['new_password']; ?></td>
          <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
        </tr>
        <tr>
          <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
          </td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?>


</div> 
 <div class="hr-75"></div>
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
