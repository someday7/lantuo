<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
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
<?php echo $this->fetch('library/page_header.lbi'); ?>
 <div class="naver-main">
	<div class="layout">
		
		<div class="category category-index" id="category-block">
		
 
	<?php echo $this->fetch('library/category_tree.lbi'); ?>
	 <style type="text/css">
.category .b{display:block}
.category-index .icon-category{display:none}
.category:hover .b{display:block}
</style>

		</div>
	</div>
</div>
 

<div class="hot-board">
	
 <div class="ec-slider" id="index_slider"><ul class="ec-slider-list">
 
<?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'playerdb');$this->_foreach['get_flash_xml'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_flash_xml']['total'] > 0):
    foreach ($_from AS $this->_var['playerdb']):
        $this->_foreach['get_flash_xml']['iteration']++;
?>
   <li class="ec-slider-item" style="background-color:#f6f6f6;"><div class="ec-slider-item-img"><a href="<?php echo $this->_var['playerdb']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['playerdb']['src']; ?>" /></a></div></li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
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
		
	 <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
	 
	<?php if (($this->_foreach['goods']['iteration'] - 1) < 4): ?>
	 <li id="channel-pro-favorable-<?php echo $this->_foreach['goods']['iteration']; ?>" class="channel-pro-item channel-pro-favorable-item-1" data-activityId="" data-skuType="1" data-skuId="2069">
			<div class="channel-pro-panels">
			
				<div class="pro-info">
					<div class="p-img"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a></div>
					<div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo sub_str($this->_var['goods']['short_style_name'],20); ?></a></div>
					<div class="p-shining">
						<div class="p-slogan"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div>
						<div class="p-promotions">开放购买，火爆热卖中~</div>
					</div>
					<div class="p-price"><span>   <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?></span></div>
					<div class="p-button">
					<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="channel-button">立即抢购</a>
					</div>
					<div class="p-countdown hide">
						<span class="p-time"></span>
						<span class="p-quantity" style="display:none"></span>
					</div>
				<?php if ($this->_var['goods']['is_best']): ?>
						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
						<?php elseif ($this->_var['goods']['is_new']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542518162.png"/></s>
						<?php elseif ($this->_var['goods']['is_hot']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
			<?php endif; ?>	
				</div>
			</div>
		</li>
		<?php endif; ?>
 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 
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
		
			<?php echo $this->fetch('library/new_articles.lbi'); ?>

	
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
					<?php $_from = $this->_var['cate1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
             <li> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>  </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
			
			  <?php $_from = $this->_var['hot_goods_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
			 
			  <li id="channel-pro-1-<?php echo $this->_foreach['goods']['iteration']; ?>" class="channel-pro-item  <?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>channel-pro-rec-item<?php endif; ?>">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"  rel="nofollow"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  /></a>
							 </div>								
								<div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?>&nbsp;
								<?php if (($this->_foreach['goods']['iteration'] - 1) > 0): ?>
								<span class="p-slogan"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></span>
								<?php endif; ?>
								</a></div>
									
								<div class="p-shining">
								<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
									<div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div>
									<!--div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div-->
								<?php endif; ?>	
								</div>
								<div class="p-price"><span><?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['shop_price']; ?> 
                <?php endif; ?></span></div>
				<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
								<div class="p-button"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
				 <?php endif; ?>	
						 <?php if ($this->_var['goods']['is_best']): ?>
						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
						<?php elseif ($this->_var['goods']['is_new']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542518162.png"/></s>
						<?php elseif ($this->_var['goods']['is_hot']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
						<?php endif; ?>			
							</div>
						</div>
					</li>
					
				      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
			
				
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
					<?php $_from = $this->_var['cate2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <li> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>  </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
			
			  <?php $_from = $this->_var['hot_goods_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
			 
			  <li id="channel-pro-2-<?php echo $this->_foreach['goods']['iteration']; ?>" class="channel-pro-item  <?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>channel-pro-rec-item<?php endif; ?>">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"  rel="nofollow"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  /></a>
							 </div>								
								<div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?>&nbsp;
								<?php if (($this->_foreach['goods']['iteration'] - 1) > 0): ?>
								<span class="p-slogan"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></span>
								<?php endif; ?>
								</a></div>
									
								<div class="p-shining">
								<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
									<div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div>
									<!--div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div-->
								<?php endif; ?>	
								</div>
								<div class="p-price"><span><?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['shop_price']; ?> 
                <?php endif; ?></span></div>
				<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
								<div class="p-button"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
				 <?php endif; ?>	
						 <?php if ($this->_var['goods']['is_best']): ?>
						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
						<?php elseif ($this->_var['goods']['is_new']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542518162.png"/></s>
						<?php elseif ($this->_var['goods']['is_hot']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
						<?php endif; ?>			
							</div>
						</div>
					</li>
					
				      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
				
				
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
					<?php $_from = $this->_var['cate3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
             <li> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>  </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
				 <?php $_from = $this->_var['hot_goods_3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
			 
			  <li id="channel-pro-3-<?php echo $this->_foreach['goods']['iteration']; ?>" class="channel-pro-item  <?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>channel-pro-rec-item<?php endif; ?>">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"  rel="nofollow"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  /></a>
							 </div>								
								<div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?>&nbsp;
								<?php if (($this->_foreach['goods']['iteration'] - 1) > 0): ?>
								<span class="p-slogan"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></span>
								<?php endif; ?>
								</a></div>
									
								<div class="p-shining">
								<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
									<div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div>
									<!--div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div-->
								<?php endif; ?>	
								</div>
								<div class="p-price"><span><?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['shop_price']; ?> 
                <?php endif; ?></span></div>
				<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
								<div class="p-button"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
				 <?php endif; ?>	
						 <?php if ($this->_var['goods']['is_best']): ?>
						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
						<?php elseif ($this->_var['goods']['is_new']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542518162.png"/></s>
						<?php elseif ($this->_var['goods']['is_hot']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
						<?php endif; ?>	
							</div>
						</div>
					</li>
					
				      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				
				
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
			<?php $_from = $this->_var['cate4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>  
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					 <?php $_from = $this->_var['hot_goods_4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
			 
			  <li id="channel-pro-4-<?php echo $this->_foreach['goods']['iteration']; ?>" class="channel-pro-item  <?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>channel-pro-rec-item<?php endif; ?>">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img">
								<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"  rel="nofollow"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  /></a>
							 </div>								
								<div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?>&nbsp;
								<?php if (($this->_foreach['goods']['iteration'] - 1) > 0): ?>
								<span class="p-slogan"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></span>
								<?php endif; ?>
								</a></div>
									
								<div class="p-shining">
								<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
									<div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div>
									<!--div class="p-promotions"><?php echo htmlspecialchars($this->_var['goods']['goods_name2']); ?></div-->
								<?php endif; ?>	
								</div>
								<div class="p-price"><span><?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['shop_price']; ?> 
                <?php endif; ?></span></div>
				<?php if (($this->_foreach['goods']['iteration'] - 1) == 0): ?>
								<div class="p-button"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
									 <?php endif; ?>	
				 <?php if ($this->_var['goods']['is_best']): ?>
						<s class="p-tag"><img src="themes/default/images/1382593860805.png"/></s>
						<?php elseif ($this->_var['goods']['is_new']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542518162.png"/></s>
						<?php elseif ($this->_var['goods']['is_hot']): ?>
						<s class="p-tag"><img src="themes/default/images/1382542488099.png"/></s>
						<?php endif; ?>
				
							</div>
						</div>
					</li>
					
				      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				
				
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



 <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
