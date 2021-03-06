<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css">
 <link href="themes/default/css/main.2.css" rel="stylesheet" type="text/css">
 <link href="themes/default/css/lantuo.css" rel="stylesheet" type="text/css"> 
 <script type="text/javascript" src="themes/default/js/jquery.js"></script>
 <script type="text/javascript" src="/js/jquery.json.js"></script>
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="zulin-main">
	<div class="banner2">
		<?php echo $this->fetch('library/category_tree.lbi'); ?>		
	</div>
	

	<div class="main_con" style="margin-left:260px;">
    <?php echo $this->fetch('library/ur_here.lbi'); ?>
	
	<div class="slect-nav">
		
	 
			 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>	 
	 <div class="selct-layout">
			
			<?php if ($this->_var['brands']['1']): ?>
			<div class="name">
			<label><?php echo $this->_var['lang']['brand']; ?>：</label>
				<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>" class="selected"><?php echo $this->_var['brand']['brand_name']; ?></a>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
	 		<?php endif; ?>
	 
			 <?php if ($this->_var['price_grade']['1']): ?>
			 <div class="price">
			   <label><?php echo $this->_var['lang']['price']; ?>：</label>
			   <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"  class="selected"><?php echo $this->_var['grade']['price_range']; ?></a>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>					   
		    </div>
	 		<?php endif; ?>
	 
	 	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_51434700_1443381806');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_51434700_1443381806']):
?>
			 
		 	<div class="type">
			<label><?php echo htmlspecialchars($this->_var['filter_attr_0_51434700_1443381806']['filter_attr_name']); ?>：</label>
						<?php $_from = $this->_var['filter_attr_0_51434700_1443381806']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
						<?php if ($this->_var['attr']['selected']): ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"  class="selected"><?php echo $this->_var['attr']['attr_value']; ?></a>
				<?php else: ?>
			<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		    </div>
			    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
				<?php endif; ?>
	 
        	
	</div>
	<?php echo $this->fetch('library/goods_list.lbi'); ?>
		
	
	<div id="pop-compare" class="pop-compare" style="">
		<div class="pop-wrap">
			<p class="pop-compare-tips">对比栏已满，您可以删除不需要的栏内商品再继续添加哦！</p>
			<div class="pop-inner" data-widget="tabs">
				<div class="diff-hd">
					<ul class="tab-btns clearfix">
						<li class="current" data-widget="tab-item">
							<a href="javascript:;">对比栏</a>
						</li>
					</ul>
					<div class="operate"><a href="javascript:;" onclick="$('#pop-compare').hide();" class="hide-me">隐藏</a>
					</div>
				</div>
				<div class="diff-bd tab-cons">
					<div class="tab-con" data-widget="tab-content">
						<div id="diff-items" class="diff-items clearfix">
							<dl class="item-empty"> 
								<dt>1</dt>
								<dd>您还可以继续添加								
								</dd>
							</dl>
							<dl class="item-empty">
								<dt>2</dt>
								<dd>您还可以继续添加</dd>
							</dl>
							<dl class="item-empty">
								<dt>3</dt>
								<dd>您还可以继续添加</dd>
							</dl>
							<dl class="item-empty">
								<dt>4</dt>
								<dd>您还可以继续添加</dd>
							</dl>
						</div>
						<div class="diff-operate">
							<a target="_blank" id="goto-contrast" href="javascript:viod(0);" class="btn-compare-b compare-active">对比</a>
							<a class="del-items"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
	 <?php echo $this->fetch('library/pages.lbi'); ?>

	
	</div>
	<div class="clear"></div>
	
	
	
</div>	
 	
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
