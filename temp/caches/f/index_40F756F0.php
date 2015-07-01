<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:53:"E:/code/workspace/php/lantuo/themes/default/index.dwt";i:1;s:67:"E:/code/workspace/php/lantuo/themes/default/library/page_header.lbi";i:2;s:69:"E:/code/workspace/php/lantuo/themes/default/library/category_tree.lbi";i:3;s:68:"E:/code/workspace/php/lantuo/themes/default/library/new_articles.lbi";i:4;s:67:"E:/code/workspace/php/lantuo/themes/default/library/page_footer.lbi";}s:7:"expires";i:1435744638;s:8:"maketime";i:1435741038;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<title>ECSHOP演示站 - Powered by ECShop</title>
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css">
 <link href="themes/default/css/index.min.css?20141025" rel="stylesheet" type="text/css">
 
<script src="themes/default/js/jsapi.js?20141025" namespace="ec"></script>
<script src="themes/default/js/jquery-1.4.4.min.js"></script>
<script src="themes/default/js/ec.core.js?20141025"></script> 
<script src="http://res.vmall.com/20150415/js/common/jsapi.js?20141025" namespace="ec"></script>
<script src="themes/default/js/ec.business.js?20150420"></script> 
 <!--[if lt IE 9]><script src="themes/default/css/common/html5shiv.js"></script> <![endif]-->
</head>
  
<body class="wide">
<script type="text/javascript">
var process_request = "正在处理您的请求...";
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
				
				  <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
   
    
							
							
					
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
 
</div>
<header class="header">
	<div class="layout">
		
		<div class="logo"><a href="index.php"><img src="http://res.vmall.com/images/echannel/newLogo.png"/></a></div>
 
		<div class="searchBar">
			
			<div class="searchBar-form" id="searchBar-area">
			
			
          
           <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" />	
 		 				
					  <input name="keywords" type="text" class="text" id="keyword" value=""  maxlength="100"  style="float:left"/>		
  					<input type="submit" class="button" value="搜索" />
					<input type="hidden" id="default-search" value="荣耀6"/>
				</form>
			</div>
			
				<div class="searchBar-key">
	<b>热门搜索：</b>
	    
		  <a href="search.php?keywords=%E5%8D%8E%E4%B8%BAP8">华为P8</a> <a href="search.php?keywords=%E6%8C%87%E7%BA%B9%E8%AF%86%E5%88%AB">指纹识别</a> <a href="search.php?keywords=%E7%95%85%E7%8E%A94X">畅玩4X</a> <a href="search.php?keywords=%E8%8D%A3%E8%80%804C">荣耀4C</a>	    
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
				     <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
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
					<div class="h" id="header-toolbar-minicart-h"><a href="flow.php?step=cart" rel="nofollow" timeType="timestamp">我的购物车<span><em id="ECS_CARTINFO"> 554fcae493e564ee0dc75bdf2ebf94cacart_cont|a:1:{s:4:"name";s:9:"cart_cont";}554fcae493e564ee0dc75bdf2ebf94ca</em><b></b></span></a><i></i><s></s><u></u></div>
					<div class="b" id="header-toolbar-minicart-content">
					 
							
										<div class="cart" id="ECS_CARTINFO">
					 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca					 
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
 <div class="naver-main">
	<div class="layout">
		
		<div class="category category-index" id="category-block">
		
 
	 			
 <style type="text/css">
.category .b{display:none}
.category:hover .b{display:block}
</style>
			
 
	<div class="h">
		<h2>全部商品</h2>
		<i class="icon-category"></i>
	</div>
	<div class="b" >
		<ol class="category-list">
			
			
			
			  
		 	<li class="category-item ">
					<div class="category-info">
						<h3>
						<a href="category.php?id=1"><span>手机</span></a></h3>
						
			 			 				<a href="category.php?id=4"><span>苹果</span></a> 
			  			  			 				<a href="category.php?id=5"><span>三星</span></a> 
			  			  			 				<a href="category.php?id=6"><span>小米</span></a> 
			  			   
							
							 
					</div>
						<div class="category-panels">
							<ul class="subcate-list">
							
							  						 
							<li class="subcate-item">
						<a href="category.php?id=4"><span>苹果</span></a> 
						 	</li>
					 	
     		  	   		  						 
							<li class="subcate-item">
						<a href="category.php?id=5"><span>三星</span></a> 
						 	</li>
					 	
     		  	   		  						 
							<li class="subcate-item">
						<a href="category.php?id=6"><span>小米</span></a> 
						 	</li>
					 	
     		  	   		  
										
								 
							</ul>
								<dl class="category-banner">
									<dt>推荐商品 </dt>
							 
							 554fcae493e564ee0dc75bdf2ebf94cacate_goods|a:2:{s:4:"name";s:10:"cate_goods";s:2:"id";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca								</dl>
						</div>
						<i class="icon-cate-arrow"></i>
				</li>
				
				   
		 	<li class="category-item ">
					<div class="category-info">
						<h3>
						<a href="category.php?id=2"><span>智能家居</span></a></h3>
						
			  
							
							 
					</div>
						<div class="category-panels">
							<ul class="subcate-list">
							
							  
										
								 
							</ul>
								<dl class="category-banner">
									<dt>推荐商品 </dt>
							 
							 554fcae493e564ee0dc75bdf2ebf94cacate_goods|a:2:{s:4:"name";s:10:"cate_goods";s:2:"id";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca								</dl>
						</div>
						<i class="icon-cate-arrow"></i>
				</li>
				
				   
		 	<li class="category-item ">
					<div class="category-info">
						<h3>
						<a href="category.php?id=3"><span>配件优选</span></a></h3>
						
			  
							
							 
					</div>
						<div class="category-panels">
							<ul class="subcate-list">
							
							  
										
								 
							</ul>
								<dl class="category-banner">
									<dt>推荐商品 </dt>
							 
							 554fcae493e564ee0dc75bdf2ebf94cacate_goods|a:2:{s:4:"name";s:10:"cate_goods";s:2:"id";s:1:"3";}554fcae493e564ee0dc75bdf2ebf94ca								</dl>
						</div>
						<i class="icon-cate-arrow"></i>
				</li>
				
				  			 
		
		</ol>
	</div>
</div>
	
		<nav class="naver">
				<ul id="naver-list" style="width:980px;">
				
			 <li  class="index"><a href="index.php" class="current"><span>首 页</span></a></li>
      	  
	 
      <li class="cherry"><a href="category.php?id=3"  ><span>配件优选	
 	  	  </span> </a></li>
	
   	  
	 
      <li class="cherry"><a href="category.php?id=1"    ><span>手机	
 	  	  <s><img src="themes/default/images/hot.png" alt="new" /></s>
	    	  </span> </a></li>
	
   	  
	 
      <li class="cherry"><a href="category.php?id=2"  ><span>智能家居	
 	  	  </span> </a></li>
	
    
	  	</ul>
				
		 
 
 </nav>	 <style type="text/css">
.category .b{display:block}
.category-index .icon-category{display:none}
.category:hover .b{display:block}
</style>
		</div>
	</div>
</div>
 
<div class="hot-board">
	
 <div class="ec-slider" id="index_slider"><ul class="ec-slider-list">
 
   <li class="ec-slider-item" style="background-color:#f6f6f6;"><div class="ec-slider-item-img"><a href="#" target="_blank"><img src="data/afficheimg/20150512xpnfpn.jpg" /></a></div></li>
    <li class="ec-slider-item" style="background-color:#f6f6f6;"><div class="ec-slider-item-img"><a href="#" target="_blank"><img src="data/afficheimg/20150512nqsgvu.jpg" /></a></div></li>
 	
 </ul>&gt;<ul></ul></div><script>
	ec.load("ec.slider", {
         loadType : "lazy",
         callback : function() {
                            $("#index_slider").slider({
                                     width:     '100%', //必须
                                     height:     400, //必须
                                     style : 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                                     pause : 5000,           //间隔时间
                auto : true,
                minWidth : 1200
                            });
         }
});
</script>
	
</div>
<div class="hr-20"></div>
<div class="layout">
	<div class="fl u-4-3">
<div class="channel-favorable">
	<ul class="channel-pro-list" id="main-sale-list">
		
	 	 
		 <li id="channel-pro-favorable-1" class="channel-pro-item channel-pro-favorable-item-1" data-activityId="" data-skuType="1" data-skuId="2069">
			<div class="channel-pro-panels">
			
				<div class="pro-info">
					<div class="p-img"> <a href="goods.php?id=1334"><img src="images/201411/thumb_img/1334_thumb_G_1415025270488.jpg" alt="优思US88T直板手机手机双卡双待语音王UniscopE" class="goodsimg" /></a></div>
					<div class="p-name"><a href="goods.php?id=1334" title="优思US88T直板手机手机双卡双待语音王UniscopE">优思US88T直板手机手机双卡双待语音王...</a></div>
					<div class="p-shining">
						<div class="p-slogan">直板手机手机双卡</div>
						<div class="p-promotions">开放购买，火爆热卖中~</div>
					</div>
					<div class="p-price"><span>             ￥69元          </span></div>
					<div class="p-button">
					<a href="goods.php?id=1334" target="_blank" class="channel-button">立即抢购</a>
					</div>
					<div class="p-countdown hide">
						<span class="p-time"></span>
						<span class="p-quantity" style="display:none"></span>
					</div>
										<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
							
				</div>
			</div>
		</li>
		 
  	 
		 <li id="channel-pro-favorable-2" class="channel-pro-item channel-pro-favorable-item-1" data-activityId="" data-skuType="1" data-skuId="2069">
			<div class="channel-pro-panels">
			
				<div class="pro-info">
					<div class="p-img"> <a href="goods.php?id=2122"><img src="images/201412/thumb_img/2122_thumb_G_1417662091787.jpg" alt="TOTU iphone5C手机壳 苹果5c保护壳套铝彩系列 时尚清新" class="goodsimg" /></a></div>
					<div class="p-name"><a href="goods.php?id=2122" title="TOTU iphone5C手机壳 苹果5c保护壳套铝彩系列 时尚清新">TOTU iphone5C手机壳 苹果5...</a></div>
					<div class="p-shining">
						<div class="p-slogan"></div>
						<div class="p-promotions">开放购买，火爆热卖中~</div>
					</div>
					<div class="p-price"><span>             ￥5元          </span></div>
					<div class="p-button">
					<a href="goods.php?id=2122" target="_blank" class="channel-button">立即抢购</a>
					</div>
					<div class="p-countdown hide">
						<span class="p-time"></span>
						<span class="p-quantity" style="display:none"></span>
					</div>
										<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
							
				</div>
			</div>
		</li>
		 
  	 
		 <li id="channel-pro-favorable-3" class="channel-pro-item channel-pro-favorable-item-1" data-activityId="" data-skuType="1" data-skuId="2069">
			<div class="channel-pro-panels">
			
				<div class="pro-info">
					<div class="p-img"> <a href="goods.php?id=1353"><img src="images/201411/thumb_img/1353_thumb_G_1415105396393.jpg" alt="传说手机女士炫彩系列 —GW555 超薄 超长待机 音乐手机" class="goodsimg" /></a></div>
					<div class="p-name"><a href="goods.php?id=1353" title="传说手机女士炫彩系列 —GW555 超薄 超长待机 音乐手机">传说手机女士炫彩系列 —GW555 超薄...</a></div>
					<div class="p-shining">
						<div class="p-slogan"></div>
						<div class="p-promotions">开放购买，火爆热卖中~</div>
					</div>
					<div class="p-price"><span>             ￥99元          </span></div>
					<div class="p-button">
					<a href="goods.php?id=1353" target="_blank" class="channel-button">立即抢购</a>
					</div>
					<div class="p-countdown hide">
						<span class="p-time"></span>
						<span class="p-quantity" style="display:none"></span>
					</div>
										<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
							
				</div>
			</div>
		</li>
		 
  	 
		 <li id="channel-pro-favorable-4" class="channel-pro-item channel-pro-favorable-item-1" data-activityId="" data-skuType="1" data-skuId="2069">
			<div class="channel-pro-panels">
			
				<div class="pro-info">
					<div class="p-img"> <a href="goods.php?id=1343"><img src="images/201411/thumb_img/1343_thumb_G_1415029156677.jpg" alt="嘉源V268 时尚彩机大字大铃语音学生女士老人拍照手机送礼品" class="goodsimg" /></a></div>
					<div class="p-name"><a href="goods.php?id=1343" title="嘉源V268 时尚彩机大字大铃语音学生女士老人拍照手机送礼品">嘉源V268 时尚彩机大字大铃语音学生女...</a></div>
					<div class="p-shining">
						<div class="p-slogan"></div>
						<div class="p-promotions">开放购买，火爆热卖中~</div>
					</div>
					<div class="p-price"><span>             ￥69元          </span></div>
					<div class="p-button">
					<a href="goods.php?id=1343" target="_blank" class="channel-button">立即抢购</a>
					</div>
					<div class="p-countdown hide">
						<span class="p-time"></span>
						<span class="p-quantity" style="display:none"></span>
					</div>
										<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
							
				</div>
			</div>
		</li>
		 
  	 
	 
  	 
	 
  	 
	 
  	 
	 
  	 
	 
  	 
	 
  	 
	</ul>
</div>	</div>
	<div class="fr u-4-1">
<div class="channel-sale">
	<div class="ec-slider" id="group-slider">
		<ul class="channel-pro-list ec-slider-list" id="slider-sale-list">
			<li class="channel-pro-item ec-slider-item" data-block="slider">
				<p><a target="_blank" href="http://www.vmall.com/product/1910.html"><img src="http://res.vmall.com/pimages//sale/2015-05/20150511102210614.jpg" title="B2的广告图.jpg" /></a><br /></p>
			</li>
			<li class="channel-pro-item ec-slider-item" data-block="slider">
				<p><a target="_blank" href="http://www.vmall.com/product/1822.html"><img src="http://res.vmall.com/pimages//frontLocation/richtext2015/20150408173931743.jpg" title="荣耀路由的广告图.jpg" /></a><br /></p>
			</li>
		
		</ul>
	</div>
</div>
<script>
	
	ec.load("ec.slider", {
		loadType : "lazy",
		callback : function() { 
			$("#group-slider").slider({
				sliderType : "left",
				auto: false,
				width: 276, //　必须
				height: 310,　 //　必须
				style : 2, //　1显示分页，2只显示左右箭头,3两者都显示
				pause : 5000 //　间隔时间
			});
		}
	});
	
</script>
		<div class="hr-20"></div>
		
			
	
		<div class="ecnews-area">
			<div class="h">
				<div class="h-tab">
					<ul>
						<li class="current" id="tab-notice"><a href="article_cat.php?id=8">公告</a></li>
						<li id="tab-news"><a href="article_cat.php?id=10">新闻</a></li>
					</ul>
				</div>
			</div>
			<div class="b">
				<ul id="tab-notice-content">
				  <li>
	<a href="article.php?id=21" title="国庆节客服、小米之家服务时间">国庆节客服、小米之家...</a>
	</li>
  <li>
	<a href="article.php?id=20" title="合作加盟">合作加盟</a>
	</li>
  <li>
	<a href="article.php?id=19" title="小米手机官翻版">小米手机官翻版</a>
	</li>
				</ul>
				<ul id="tab-news-content" class="hide">
	   <li>
	[<a href="article_cat.php?id=8">网站公告</a>] <a href="article.php?id=21" title="国庆节客服、小米之家服务时间">国庆节客服、小米之家...</a>
	</li>
  <li>
	[<a href="article_cat.php?id=8">网站公告</a>] <a href="article.php?id=20" title="合作加盟">合作加盟</a>
	</li>
  <li>
	[<a href="article_cat.php?id=8">网站公告</a>] <a href="article.php?id=19" title="小米手机官翻版">小米手机官翻版</a>
	</li>
				</ul>
				
			</div>
		</div>
		
		
 
	
		<div class="hr-20"></div>
		
		<div class="banner">
			<p><a target="_blank" href="http://consumer.huawei.com/minisite/retailers/index.html"><img src="http://res.vmall.com/pimages//sale/2014-05/20140509105527587.jpg" /></a></p>
		</div>
		<div class="hr-20"></div>
	</div>
</div>
<div class="layout">
	
	<div class="banner">
		<div class="banner-slideshow"><div id="m-banner" class="ec-slider"><ul class="ec-slider-list"><li class="ec-slider-item"><div class="ec-slider-item-img"><a href="http://u.163.com/p8?from=huawei" target="_blank"><img src="http://res.vmall.com/pimages//sale/2015-05/20150506161003640.jpg" /></a></div></li><li class="ec-slider-item"><div class="ec-slider-item-img"><a href="/product/1880.html" target="_blank"><img src="http://res.vmall.com/pimages//sale/2015-05/20150504114735758.jpg" /></a></div></li><li class="ec-slider-item"><div class="ec-slider-item-img"><a href="/product/1910.html" target="_blank"><img src="http://res.vmall.com/pimages//sale/2015-04/20150427114649504.jpg" /></a></div></li><li class="ec-slider-item"><div class="ec-slider-item-img"><a href="/notice-500" target="_blank"><img src="http://res.vmall.com/pimages//sale/2015-04/20150420142751797.jpg" /></a></div></li><li class="ec-slider-item"><div class="ec-slider-item-img"><a href="/product/1817.html" target="_blank"><img src="http://res.vmall.com/pimages//sale/2015-04/20150416145325298.jpg" /></a></div></li><li class="ec-slider-item"><div class="ec-slider-item-img"><a href="/product/1350.html#3261,41" target="_blank"><img src="http://res.vmall.com/pimages//sale/2015-03/2015031717451839.jpg" /></a></div></li></ul></div><script>
				
				ec.load("ec.slider", {
					loadType : "lazy",
					callback : function() { 
						$("#m-banner").slider({
							width: 1200, //　必须
							height: 160, //　必须
							style : 1, //　1显示分页，2只显示左右箭头,3两者都显示
							pause : 5000, 	//间隔时间
                            auto : true
						});
					}
				});
				
			</script></div>
	</div>
</div>
<div class="hr-20"></div>
<div class="layout">
	
	<div class="channel-floor">
		<div class="h">
			<h2><a href="/list-36" title="手机" target="_blank">手机</a></h2>
			<em class="channel-subtitle">华为精品手机</em>
			<ul class="channel-nav">
					             <li> <a href="category.php?id=4">苹果</a>  </li>
                        <li> <a href="category.php?id=5">三星</a>  </li>
                        <li> <a href="category.php?id=6">小米</a>  </li>
            
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
			
			  			 
			  <li id="channel-pro-1-1" class="channel-pro-item  channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=1334" target="_blank"  rel="nofollow"><img src="images/201411/goods_img/1334_G_1415025270471.jpg" alt="优思US88T直板手机手机双卡双待语音王UniscopE"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=1334" target="_blank" title="优思US88T直板手机手机双卡双待语音王UniscopE">优思US88T直板手机手机双卡双待语音王UniscopE&nbsp;
																</a></div>
									
								<div class="p-shining">
																	<div class="p-promotions">直板手机手机双卡</div>
									<!--div class="p-promotions">直板手机手机双卡</div-->
									
								</div>
								<div class="p-price"><span> 
                ￥69元 
                </span></div>
												<div class="p-button"><a href="goods.php?id=1334" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
				 	
						 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
									
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-1-2" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2383" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2383_G_1431180155899.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2383" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥936元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-1-3" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2382" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2382_G_1431180086687.jpg" alt="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2382" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版">华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥1334元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-1-4" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2381" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2381_G_1431179859225.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2381" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥864元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-1-5" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2392" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2392_G_1431185986523.jpg" alt="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2392" target="_blank" title="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机">华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2048元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-1-6" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2394" target="_blank"  rel="nofollow"><img src="images/no_picture.gif" alt="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2394" target="_blank" title="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机">三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4160元 
                </span></div>
					
						 						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
									
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-1-7" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2380" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2380_G_1431178996057.jpg" alt="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2380" target="_blank" title="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机">华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan">31233213</span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥695元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			
			
				
			</ul>
		</div>
	</div>
</div>
<div class="hr-20"></div>
<div class="layout">
	
	<div class="channel-floor">
		<div class="h">
			<h2><a href="/list-40" title="平板 & 穿戴" target="_blank">平板 & 穿戴</a></h2>
			<em class="channel-subtitle">华为精品平板</em>
			<ul class="channel-nav">
					              <li> <a href="category.php?id=4">苹果</a>  </li>
                         <li> <a href="category.php?id=5">三星</a>  </li>
                         <li> <a href="category.php?id=6">小米</a>  </li>
            
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
			
			  			 
			  <li id="channel-pro-2-1" class="channel-pro-item  channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=1334" target="_blank"  rel="nofollow"><img src="images/201411/goods_img/1334_G_1415025270471.jpg" alt="优思US88T直板手机手机双卡双待语音王UniscopE"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=1334" target="_blank" title="优思US88T直板手机手机双卡双待语音王UniscopE">优思US88T直板手机手机双卡双待语音王UniscopE&nbsp;
																</a></div>
									
								<div class="p-shining">
																	<div class="p-promotions">直板手机手机双卡</div>
									<!--div class="p-promotions">直板手机手机双卡</div-->
									
								</div>
								<div class="p-price"><span> 
                ￥69元 
                </span></div>
												<div class="p-button"><a href="goods.php?id=1334" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
				 	
						 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
									
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-2-2" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2383" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2383_G_1431180155899.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2383" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥936元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-2-3" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2382" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2382_G_1431180086687.jpg" alt="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2382" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版">华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥1334元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-2-4" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2381" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2381_G_1431179859225.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2381" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥864元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-2-5" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2392" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2392_G_1431185986523.jpg" alt="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2392" target="_blank" title="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机">华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2048元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-2-6" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2394" target="_blank"  rel="nofollow"><img src="images/no_picture.gif" alt="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2394" target="_blank" title="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机">三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4160元 
                </span></div>
					
						 						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
									
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-2-7" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2380" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2380_G_1431178996057.jpg" alt="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2380" target="_blank" title="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机">华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan">31233213</span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥695元 
                </span></div>
					
						 			
							</div>
						</div>
					</li>
					
				      			
				
				
			</ul>
		</div>
	</div>
</div>
<div class="hr-20"></div>
<div class="layout">
	
	<div class="channel-floor">
		<div class="h">
			<h2><a href="/list-43" title="智能家居" target="_blank">智能家居</a></h2>
			<em class="channel-subtitle">上网必备</em>
			<ul class="channel-nav">
					             <li> <a href="category.php?id=4">苹果</a>  </li>
                        <li> <a href="category.php?id=5">三星</a>  </li>
                        <li> <a href="category.php?id=6">小米</a>  </li>
            
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
				 			 
			  <li id="channel-pro-3-1" class="channel-pro-item  channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=1334" target="_blank"  rel="nofollow"><img src="images/201411/goods_img/1334_G_1415025270471.jpg" alt="优思US88T直板手机手机双卡双待语音王UniscopE"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=1334" target="_blank" title="优思US88T直板手机手机双卡双待语音王UniscopE">优思US88T直板手机手机双卡双待语音王UniscopE&nbsp;
																</a></div>
									
								<div class="p-shining">
																	<div class="p-promotions">直板手机手机双卡</div>
									<!--div class="p-promotions">直板手机手机双卡</div-->
									
								</div>
								<div class="p-price"><span> 
                ￥69元 
                </span></div>
												<div class="p-button"><a href="goods.php?id=1334" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
				 	
						 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
							
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-3-2" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2383" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2383_G_1431180155899.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2383" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥936元 
                </span></div>
					
						 	
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-3-3" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2382" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2382_G_1431180086687.jpg" alt="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2382" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版">华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥1334元 
                </span></div>
					
						 	
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-3-4" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2381" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2381_G_1431179859225.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2381" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥864元 
                </span></div>
					
						 	
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-3-5" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2392" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2392_G_1431185986523.jpg" alt="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2392" target="_blank" title="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机">华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2048元 
                </span></div>
					
						 	
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-3-6" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2394" target="_blank"  rel="nofollow"><img src="images/no_picture.gif" alt="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2394" target="_blank" title="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机">三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4160元 
                </span></div>
					
						 						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
							
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-3-7" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2380" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2380_G_1431178996057.jpg" alt="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2380" target="_blank" title="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机">华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan">31233213</span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥695元 
                </span></div>
					
						 	
							</div>
						</div>
					</li>
					
				      				
				
			</ul>
		</div>
	</div>
</div>
<div class="hr-20"></div>
<div class="layout">
	
	<div class="channel-floor">
		<div class="h">
			<h2><a href="/list-47" title="必备配件" target="_blank">必备配件</a></h2>
			<em class="channel-subtitle">配件与服务</em>
			<ul class="channel-nav">
			              <a href="category.php?id=4">苹果</a>  
                         <a href="category.php?id=5">三星</a>  
                         <a href="category.php?id=6">小米</a>  
            
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					 			 
			  <li id="channel-pro-4-1" class="channel-pro-item  channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=1334" target="_blank"  rel="nofollow"><img src="images/201411/goods_img/1334_G_1415025270471.jpg" alt="优思US88T直板手机手机双卡双待语音王UniscopE"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=1334" target="_blank" title="优思US88T直板手机手机双卡双待语音王UniscopE">优思US88T直板手机手机双卡双待语音王UniscopE&nbsp;
																</a></div>
									
								<div class="p-shining">
																	<div class="p-promotions">直板手机手机双卡</div>
									<!--div class="p-promotions">直板手机手机双卡</div-->
									
								</div>
								<div class="p-price"><span> 
                ￥69元 
                </span></div>
												<div class="p-button"><a href="goods.php?id=1334" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
									 	
				 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
										
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-2" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2383" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2383_G_1431180155899.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2383" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥936元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-3" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2382" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2382_G_1431180086687.jpg" alt="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2382" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版">华为荣耀畅玩4x 双卡双待8GB四核5.5英寸 公开版&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥1334元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-4" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2381" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2381_G_1431179859225.jpg" alt="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2381" target="_blank" title="华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机">华为荣耀畅玩4x 双卡双待8GB八核5.5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥864元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-5" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2392" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2392_G_1431185986523.jpg" alt="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2392" target="_blank" title="华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机">华为荣耀6plus双卡双待 16GB八核5.5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2048元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-6" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2394" target="_blank"  rel="nofollow"><img src="images/no_picture.gif" alt="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2394" target="_blank" title="三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机">三星GALAXY Note4（N9109w）16GB四核5.7英寸	电信4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4160元 
                </span></div>
					
				 						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
										
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-7" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2380" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2380_G_1431178996057.jpg" alt="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2380" target="_blank" title="华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机">华为荣耀畅玩4双卡双待8GB四核5英寸 移动4G智能手机&nbsp;
																<span class="p-slogan">31233213</span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥695元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-8" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2393" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2393_G_1431187097241.jpg" alt="美的YJ408H不粘锅电饭煲(积分赠品)"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2393" target="_blank" title="美的YJ408H不粘锅电饭煲(积分赠品)">美的YJ408H不粘锅电饭煲(积分赠品)&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥0元 
                </span></div>
					
				 						<s class="p-tag"><img src="themes/default/images/1382542518162.png"/></s>
										
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-9" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2390" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2390_G_1431185811677.jpg" alt="华为荣耀6plus双卡双待 16GB八核5.5英寸 电信4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2390" target="_blank" title="华为荣耀6plus双卡双待 16GB八核5.5英寸 电信4G智能手机">华为荣耀6plus双卡双待 16GB八核5.5英寸 电信4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2038元 
                </span></div>
					
				 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
										
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-10" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2388" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2388_G_1431185238459.jpg" alt="华为荣耀6 双卡双待16GB八核5英寸 联通4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2388" target="_blank" title="华为荣耀6 双卡双待16GB八核5英寸 联通4G智能手机">华为荣耀6 双卡双待16GB八核5英寸 联通4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥1630元 
                </span></div>
					
				 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
										
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-11" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2389" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2389_G_1431185605357.jpg" alt="华为荣耀6plus双卡双待 32GB八核5.5英寸 公开版4G智能手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2389" target="_blank" title="华为荣耀6plus双卡双待 32GB八核5.5英寸 公开版4G智能手机">华为荣耀6plus双卡双待 32GB八核5.5英寸 公开版4G智能手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2485元 
                </span></div>
					
				 						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
										
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-12" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2343" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2343_G_1430714037605.jpg" alt="苹果（APPLE）iPhone 5s 16G移动4G手机"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2343" target="_blank" title="苹果（APPLE）iPhone 5s 16G移动4G手机">苹果（APPLE）iPhone 5s 16G移动4G手机&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥3330元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-13" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2317" target="_blank"  rel="nofollow"><img src="images/201505/goods_img/2317_G_1430531461881.jpg" alt="iPhone6 4.7纳米钢化手机膜 2.5D弧边 纳米技术超强防护 全屏覆盖贴膜"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2317" target="_blank" title="iPhone6 4.7纳米钢化手机膜 2.5D弧边 纳米技术超强防护 全屏覆盖贴膜">iPhone6 4.7纳米钢化手机膜 2.5D弧边 纳米技术超强防护 全屏覆盖贴膜&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥8元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-14" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2312" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2312_G_1430204191344.jpg" alt="华为荣耀4X钢化膜手机保护膜 2.5D弧边 0.26mm 超簿"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2312" target="_blank" title="华为荣耀4X钢化膜手机保护膜 2.5D弧边 0.26mm 超簿">华为荣耀4X钢化膜手机保护膜 2.5D弧边 0.26mm 超簿&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥5元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-15" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2292" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2292_G_1430131417370.jpg" alt="惠世通800mA MiniUSB充电头 智能控制，过充保护更安全"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2292" target="_blank" title="惠世通800mA MiniUSB充电头 智能控制，过充保护更安全">惠世通800mA MiniUSB充电头 智能控制，过充保护更安全&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-16" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2293" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2293_G_1430131492815.jpg" alt="惠世通2米线新款安卓microUSB3.8mm粗圆线 数据线"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2293" target="_blank" title="惠世通2米线新款安卓microUSB3.8mm粗圆线 数据线">惠世通2米线新款安卓microUSB3.8mm粗圆线 数据线&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-17" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2294" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2294_G_1430296467033.jpg" alt="惠世通1米线iphone5s手机数据线 1米线 金属材质屏蔽层，高速数据传输稳定可靠"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2294" target="_blank" title="惠世通1米线iphone5s手机数据线 1米线 金属材质屏蔽层，高速数据传输稳定可靠">惠世通1米线iphone5s手机数据线 1米线 金属材质屏蔽层，高速数据传输稳定可靠&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-18" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2295" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2295_G_1430131604295.jpg" alt="惠世通1米线iPhone4S数据线 ，1米线四芯纯铜更高效稳定  镀金工艺"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2295" target="_blank" title="惠世通1米线iPhone4S数据线 ，1米线四芯纯铜更高效稳定  镀金工艺">惠世通1米线iPhone4S数据线 ，1米线四芯纯铜更高效稳定  镀金工艺&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥2元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-19" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2296" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2296_G_1430131663830.jpg" alt="惠世通2米iPhone4/4S充电数据线 3.0mm粗圆线 内部采用屏蔽防干扰材质，传输更快更安全"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2296" target="_blank" title="惠世通2米iPhone4/4S充电数据线 3.0mm粗圆线 内部采用屏蔽防干扰材质，传输更快更安全">惠世通2米iPhone4/4S充电数据线 3.0mm粗圆线 内部采用屏蔽防干扰材质，传输更快更安全&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥4元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-20" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2297" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2297_G_1430131711015.jpg" alt="惠世通2米苹果5/5s充电数据线 2.6mm圆线内部采用屏蔽防干扰材质，传输更快更安全"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2297" target="_blank" title="惠世通2米苹果5/5s充电数据线 2.6mm圆线内部采用屏蔽防干扰材质，传输更快更安全">惠世通2米苹果5/5s充电数据线 2.6mm圆线内部采用屏蔽防干扰材质，传输更快更安全&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥6元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-21" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2298" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2298_G_1430147027450.jpg" alt="三星S5/i9600钢化膜手机保护膜 2.5D弧边 0.26mm 超簿"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2298" target="_blank" title="三星S5/i9600钢化膜手机保护膜 2.5D弧边 0.26mm 超簿">三星S5/i9600钢化膜手机保护膜 2.5D弧边 0.26mm 超簿&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥5元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-22" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2299" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2299_G_1430147535596.jpg" alt="红米2钢化膜手机保护膜 2.5D弧边 0.26mm 超簿"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2299" target="_blank" title="红米2钢化膜手机保护膜 2.5D弧边 0.26mm 超簿">红米2钢化膜手机保护膜 2.5D弧边 0.26mm 超簿&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥5元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      			 
			  <li id="channel-pro-4-23" class="channel-pro-item  ">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="goods.php?id=2300" target="_blank"  rel="nofollow"><img src="images/201504/goods_img/2300_G_1430147889218.jpg" alt="联想A396钢化膜手机保护膜 2.5D弧边 0.26mm 超簿"  /></a>
							 </div>								
								<div class="p-name"><a href="goods.php?id=2300" target="_blank" title="联想A396钢化膜手机保护膜 2.5D弧边 0.26mm 超簿">联想A396钢化膜手机保护膜 2.5D弧边 0.26mm 超簿&nbsp;
																<span class="p-slogan"></span>
																</a></div>
									
								<div class="p-shining">
									
								</div>
								<div class="p-price"><span> 
                ￥7元 
                </span></div>
					
				 				
							</div>
						</div>
					</li>
					
				      				
				
			</ul>
		</div>
	</div>
</div>
<div class="hr-20"></div>
<div class="layout">
	<div class="ad fl"><a target="_blank" href="/product/1179.html"><img src="http://res.vmall.com/pimages//sale/2014-08/20140825101353417.jpg" title="M1" style="float:none;" /></a></div>
</div>
<div class="hr-40"></div>
<div class="follow">
	<div class="layout">
		<ul>
			<li><a class="follow-hwsoft" href="http://appstore.huawei.com/huaweiSoft" target="_blank"><img src="http://res.vmall.com/20150415/images/echannel/misc/follow_hwsoft.png" alt="华为软件专区"/></a></li>
			<li><a href="http://weibo.com/shophuawei" target="_blank" rel="nofollow" class="follow-sina"><img alt="关注新浪微博" src="http://res.vmall.com/20150415/images/echannel/misc/follow_sina.png"></a></li>
			<li><a class="follow-qzone" href="http://vmallhw.qzone.qq.com" target="_blank"><img src="http://res.vmall.com/20150415/images/echannel/misc/follow_qzone.png" alt="关注QQ空间"/></a></li>
			<li onmouseout="this.className=''" onmouseover="this.className='hover'" class=""><a href="javascript:;" class="follow-android"><img alt="下载手机客户端" src="http://res.vmall.com/20150415/images/echannel/misc/follow_android.png"></a><div class="follow-panel follow-panel-qrcode"><img src="http://res.vmall.com/20150415/images/echannel/misc/img67.png"><p><b>扫描二维码下载</b></p><s></s></div></li>
		</ul>
	</div>
</div>
 
<div class="slogan">
	<ul>
		<li class="s1"><i></i>500强企业&nbsp;品质保证</li>
		<li class="s2"><i></i>7天退货&nbsp;15天换货</li>
		<li class="s3"><i></i>100元起免运费</li>
		<li class="s4"><i></i>448家维修网点&nbsp;全国联保</li>
	</ul>
</div>
<div class="service">
 
     <dl class="s1">
			<dt><i></i><a href='article_cat.php?id=4' title="购物指南">购物指南</a></dt>
			<ol>
              <li><a href="help.php?id=7" title="购物常见问题">购物常见问题</a></li>
              <li><a href="help.php?id=8" title="订单状态">订单状态</a></li>
              <li><a href="help.php?id=9" title="购物流程">购物流程</a></li>
           	</ol>
			</dd>
		</dl>
   
     <dl class="s2">
			<dt><i></i><a href='article_cat.php?id=5' title="支付方式">支付方式</a></dt>
			<ol>
              <li><a href="help.php?id=10" title="货到付款">货到付款</a></li>
              <li><a href="help.php?id=11" title="配送支付智能查询">配送支付智能查询</a></li>
              <li><a href="help.php?id=12" title="在线支付">在线支付</a></li>
           	</ol>
			</dd>
		</dl>
   
     <dl class="s3">
			<dt><i></i><a href='article_cat.php?id=6' title="配送方式">配送方式</a></dt>
			<ol>
              <li><a href="help.php?id=13" title="配送范围与费用">配送范围与费用</a></li>
              <li><a href="help.php?id=14" title="签收须知">签收须知</a></li>
              <li><a href="help.php?id=15" title="快递送货">快递送货</a></li>
           	</ol>
			</dd>
		</dl>
   
     <dl class="s4">
			<dt><i></i><a href='article_cat.php?id=7' title="售后服务">售后服务</a></dt>
			<ol>
              <li><a href="help.php?id=16" title="退换货流程">退换货流程</a></li>
              <li><a href="help.php?id=17" title="退换货政策">退换货政策</a></li>
              <li><a href="help.php?id=18" title="服务政策">服务政策</a></li>
           	</ol>
			</dd>
		</dl>
   
     <dl class="s5">
			<dt><i></i><a href='article_cat.php?id=9' title="关注我们">关注我们</a></dt>
			<ol>
              <li><a href="help.php?id=22" title="关注我们">关注我们</a></li>
           	</ol>
			</dd>
		</dl>
     
  
  
		 
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
 </body>
</html>
