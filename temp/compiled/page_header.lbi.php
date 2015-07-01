<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div class="shortcut">
    <div class="layout">
		<div class="s-sub">
			<ul>
				<li class="s-hw"><a href="/" target="_blank">华为官网</a></li>
			
		 
			</ul>
		</div>
		<div class="s-main">
			<ul>
				<li class="s-login" id="unlogin_status">
				
				  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
   
    
							
							
					
				</li>
			 
			 
				<li class="s-hwep hide" id="preferential"></li>
				<li class="s-mobile"><a href="m/" target="_blank">手机版</a></li>
				<li class="s-sitemap">
					<div class="s-dropdown ">
						<div class="h">
							<a href="javascript:;">网站导航</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="help/index.html">帮助中心</a></p>
				 
					 
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>
</div>
 <?php if ($this->_var['index'] == 'index'): ?>
 
 <style type="text/css">
.root1200{width:1200px; height:100px; margin:0 auto; overflow:visible}
.wrapper em{width:40px; height:15px; float:right; color:#FFF; font-size:12px; font-family:Verdana, Geneva, sans-serif;background:#333; margin:0 0 -20px 10px; padding:2px 5px 2px 10px; z-index:999; position:absolute; top:50px;}
</style>
<script type="text/javascript">
/*
* 宽窄屏切换
* */
var bigscreen = false;
if ( screen.width>=1200 ) {
bigscreen = true;
var bodyTag = document.getElementsByTagName("body")[0],
bodyClassName = bodyTag.getAttribute("className") || bodyTag.getAttribute("class");
bodyClassName = bodyClassName ? bodyClassName+" " : "";
bodyTag.className = bodyClassName+"root1200";
}

</script>
<div class="top-banner" id="top-banner-block">
<div class="wrapper" id="snActive-wrap"> 
<em title="关闭广告">Close</em>
<a target="_blank" name="redbaby_none_ggw_dt01" title="小图" href="http://www.16sucai.com"></a>

<a target="_blank" name="redbaby_none_ggw_dt01" title="大图"   href="http://www.16sucai.com"></a>

</div>
 

<script type="text/javascript">
~function (){
var snActive = window.snActive = document.getElementById("snActive-wrap"),
a = snActive.getElementsByTagName("a"),
h = 0, w, imgSrc = [];
if (bigscreen){
w = 1190;
imgSrc[0] = "http://res.vmall.com/pimages/sale/2015-05/20150526122807774.jpg";// 40
imgSrc[1] = "http://res.vmall.com/pimages/sale/2015-05/20150526122807774.jpg";//  500
} else {
w = 990;
imgSrc[0] = "http://res.vmall.com/pimages/sale/2015-05/20150526115507338.jpg";// 40
imgSrc[1] = "http://res.vmall.com/pimages/sale/2015-05/20150526115507338.jpg";//  500
}
snActive.style.overflow = 'hidden';
a[0].style.display = "none";
a[0].innerHTML += '<img width="' + w + '" height="80" src="' + imgSrc[0] + '" style="display:block" />';
if(a[1]){
a[1].innerHTML += '<img width="' + w + '" height="400" src="' + imgSrc[1] + '" style="display:block" />';
}
}();
//关闭通栏广告
var snActive = $(snActive),
hideImg = snActive.find('a:hidden'),
em = snActive.find("em");
timeout = !1;
if(hideImg[0]) {
timeout = setTimeout(function(){
snActive.animate({height:80},400,function(){
hideImg.siblings('a:visible').hide();
hideImg.show();
em.show().live("click",function(){
snActive.slideUp(300);
});
});
}, 3000)
}
</script>
 
<?php endif; ?>
</div>

<header class="header">
	<div class="layout">
		
		<div class="logo"><a href="index.php"><img src="http://res.vmall.com/images/echannel/newLogo.png"/></a></div>
 
		<div class="searchBar">
			
			<div class="searchBar-form" id="searchBar-area">
			
			
          
           <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" />	
 		 				
					  <input name="keywords" type="text" class="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"  maxlength="100"  style="float:left"/>		
  					<input type="submit" class="button" value="搜索" />
					<input type="hidden" id="default-search" value="荣耀6"/>
				</form>
			</div>
			
				<div class="searchBar-key">
	<b>热门搜索：</b>
	    
		 <?php if ($this->_var['searchkeywords']): ?><?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?>
	    
</div>
			
		</div>
		
		<div class="header-toolbar">
			
			<div class="header-toolbar-item" id="header-toolbar-imall">
				
				<div class="i-mall">
					<div class="h"><a href="user.php" rel="nofollow" timeType="timestamp">我的商城</a>
					<i></i><s></s><u></u></div>
					<div class="b" id="header-toolbar-imall-content">
						<div class="i-mall-prompt" id="cart_unlogin_info">
							<p>	
				  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
							</p>
						</div>
						<div class="i-mall-uc " id="cart_login_info">
							<ul>
								<li><a href="user.php?act=order_list" rel="nofollow" timeType="timestamp">我的订单</a></li>
								<li><a href="user.php?act=order_list" timeType="timestamp">待支付</a><span id="toolbar-orderWaitingHandleCount" class="hide">0</span></li>
								<!--li><a href="user.php?act=order_list" timeType="timestamp">待评论</a><span id="toolbar-notRemarkCount" class="hide">0</span></li-->
								<li><a href="user.php?act=bonus" timeType="timestamp">优惠券</a><span id="toolbar-couponCount" class="hide">0</span></li>
								<li><a href="/member/msg?t=1431326917475timestamp" timeType="timestamp">站内公告</a><span id="toolbar-newMsgCount" class="hide">0</span></li>
							</ul>
						</div>
						
						<!--div class="i-mall-uc " >
							<p><br/></p>
						</div-->
					</div>
				</div>
			</div>
			<div class="header-toolbar-item" id="header-toolbar-minicart">
				
				<div class="minicart">
					<div class="h" id="header-toolbar-minicart-h"><a href="flow.php?step=cart" rel="nofollow" timeType="timestamp">我的购物车<span><em id="ECS_CARTINFO"> <?php 
$k = array (
  'name' => 'cart_cont',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></em><b></b></span></a><i></i><s></s><u></u></div>
					<div class="b" id="header-toolbar-minicart-content">
					 
							
					<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
					<div class="cart" id="ECS_CARTINFO">
					 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
					 
					</div>
					
							
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="header-qrcode">
			<div class="ec-slider" id="ec-erweima">
				<ul class="ec-slider-list">
					<li class="ec-slider-item">
						<p><a href="http://www.vmall.com/appdownload" target="blank" title="扫码下载客户端"><img src="http://res.vmall.com/appdownload/home/qrcode_vmall_app01.png" alt="华为商城官方客户端"/></a></p>
						<p><a href="http://www.vmall.com/appdownload" target="blank"><span>扫码下载客户端</span></a></p>
					</li>
					<li class="ec-slider-item">
						<p><a href="http://www.vmall.com/appdownload" target="blank" title="微信扫码关注我们"><img src="http://res.vmall.com/appdownload/home/qrcode_vmall_wechat01.jpg" alt="华为商城官方微信"/></a></p>
						<p><a href="http://www.vmall.com/appdownload" target="blank"><span>微信扫码关注我们</span></a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>			
</header>

