


<div class="slogan">
	<ul>
		<li class="s1"><i></i>500强企业&nbsp;品质保证</li>
		<li class="s2"><i></i>7天退货&nbsp;15天换货</li>
		<li class="s3"><i></i>100元起免运费</li>
		<li class="s4"><i></i>448家维修网点&nbsp;全国联保</li>
	</ul>
</div>

<div class="service">
<?php $this->assign('fi','1'); ?>
 <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['hel'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hel']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['hel']['iteration']++;
?>

     <dl class="s<?php echo $this->_foreach['hel']['iteration']; ?>">
			<dt><i></i><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
			<ol>
      <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_88489600_1433147280');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_88489600_1433147280']):
?>
        <li><a href="help.php?id=<?php echo $this->_var['item_0_88489600_1433147280']['article_id']; ?>" title="<?php echo htmlspecialchars($this->_var['item_0_88489600_1433147280']['title']); ?>"><?php echo $this->_var['item_0_88489600_1433147280']['short_title']; ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     	</ol>
			</dd>
		</dl>
 <?php echo $this->_var['fi=fi+1']; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  
  
		 
</div>



<div id="ec_ui_confirm" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_confirm_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes" title="是"><span>是</span></a><a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no" title="否"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>


<div id="ec_ui_tips" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_tips_msg" class="tac"></p>
        <div class="popup-button-area tac"><a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes" title="确定"><span>确定</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>


<div class="hungBar" id="tools-nav">
	<a title="返回顶部" class="hungBar-top" href="#" id="hungBar-top">返回顶部</a>
	<a id="tools-nav-survery" title="意见反馈" class="hungBar-feedback hide" href="javascript:;" onclick="ec.survery.open();">意见反馈</a>		
	<a id="tools-nav-service-qq" title="QQ客服" class="hungBar-olcs-qq hide" href="http://wpa.qq.com/msgrd?V=1&Uin=4000886888" target="_blank">QQ客服</a>
	<a id="tools-nav-service-robotim" href="javascript:;" title="在线客服" class="hungBar-olcs-web hide" target="_blank">在线客服</a>

 
 
	
</div>
 


<footer class="footer">
    
	<div class="footer-otherLink">
		<p style="text-align:left;">友情链接： | <a href="http://www.uc.cn/" target="_blank" style="line-height:1.5;">UC浏览器</a><span style="line-height:1.5;"> </span><span style="line-height:1.5;">| <a href="http://www.vmall.com/product/1896.html" target="_blank">华为P8</a> | </span></span><a href="http://www.vmall.com/links" target="_blank" style="line-height:1.5;color:#ff0000;">申请链接 &gt;&gt;</a></p><p style="text-align:left;"><span style="line-height:1.5;"></span></p>
	</div>
	<div class="footer-warrant-area"><p>Copyright © 2011-2015  华为软件技术有限公司  版权所有  保留一切权利  苏B2-20130048号 | 苏ICP备09062682号-9            </p><p><a target="_blank" href="http://res.vmall.com/certificate/wwwz.jpg">网络文化经营许可证苏网文[2012]0401-019号</a></p><p class="footer-warrant-img">   <a href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820121128100000009284&amp;signData=tKF9g6Yf7p//TW/BjIXYIO1fDMQDgFsgmvcjGo2Vzir3W+3Hd74noc/9DH8Zx/3hyqTmXsHrqfNbGOntjHMuyzIpLzED20nbW6LQQ6s5ExW2iJ1RdFhmaDXEKIf6OI0MyI/x6Z1poQMxoa4kqu343ZQbzVcdq6h/2otRHHRCxTQ=" rel="nofollow" target="_blank"><img title="经营性网站" alt="经营性网站" src="http://res.vmall.com/images/echannel/signature/certificate_01_112_40.png" /></a> <a title="诚信网站" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com" rel="nofollow" target="_blank"><img alt="诚信网站" src="http://res.vmall.com/images/echannel/signature/certificate_02_112_40.png" /></a> <a title="诚信网站" href="https://search.szfw.org/cert/l/CX20121017001773002082" rel="nofollow" target="_blank"><img alt="诚信网站" src="http://res.vmall.com/images/echannel/signature/certificate_03_112_40.png" /></a></p></div> 
</footer>
 