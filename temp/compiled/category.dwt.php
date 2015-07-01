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
 
</head>
<body class="wide">

<?php echo $this->fetch('library/page_header.lbi'); ?>
 <div class="naver-main">
	<div class="layout">
		
		<div class="category category-index" id="category-block">
		
 	<?php echo $this->fetch('library/category_tree.lbi'); ?>
		
	 
		</div>
	</div>
</div>
<script>
(function () {
	//所有分类显示隐藏控制
	var isIndex =  false,
		categoryBlock = gid('category-block');
		
	if(isIndex) return;
	
	$("#category-block").hover(function(){
		$(this).addClass("category-hover");
	},function(){
		$(this).removeClass("category-hover");
	});
	
	/*categoryBlock.onmouseover = function () {
		categoryBlock.className = 'category category-hover';
	};
	categoryBlock.onmouseout = function () {
		categoryBlock.className = 'category';
	};*/
	
}());

/**
*功能：给鼠标移动到category-list li上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6,以及调整二级分类的弹出框的位置。

*/
$(function(){
	$(".category-item").hover(function(){
		$(this).addClass("hover");
		//1.二级分类的top值
		var childrenTop = $(this).offset().top;
		//2.一级分类的top值
		var parentTop = $(".category-list").offset().top;
		//3.二级分类到一级分类顶部的距离
		var top = childrenTop - parentTop;
		//4.二级分类的弹出层的高度
		var childrenHeight = $(this).find(".category-panels").innerHeight();
		//5.一级分类容器的总高度
		var totalHeight = $(".category-list").height();
		//6.如果二级分类.category-panels的内容高度大于总容量totalHeight,那么.category-panels置顶，然后多余的自动往下延续
		//如果二级分类childrenHeight内容高度(childrenHeight + top )大于totalHeight,那么.category-panels往上移动childrenHeight + top -totalHeight
		if((top + childrenHeight) > totalHeight)
		{
			if(childrenHeight > totalHeight)
			{
				$(this).find(".category-panels").css("top",-top);
			}else{
				//上移动
				var topX = (childrenHeight+top) - totalHeight;
				$(this).find(".category-panels").css("top",-topX);
				
			}
			
		}
		
	},function(){
		$(this).removeClass("hover");
	});
});

</script>


<div class="hr-10"></div>
<div class="g">
    
<div class="breadcrumb-area fcn">
 
  <?php echo $this->fetch('library/ur_here.lbi'); ?>

</div>
<div class="hr-10"></div><div class="layout">
	
	<div class="pro-cate-area">
		
	 
			 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
	 <?php if ($this->_var['brands']['1']): ?>
	 <div class="pro-cate-attr clearfix">
			<div class="p-title"><?php echo $this->_var['lang']['brand']; ?>：</div>
		 
			
			
			<div class="p-values">
				<div class="p-operate" style="display: none;">
					
					<a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
				</div>
				
				<div class="p-expand">
					<ul class="clearfix">	
					
						<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
				<li>	<span><?php echo $this->_var['brand']['brand_name']; ?></span></li>
					<?php else: ?>
					<li ><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>				
	                  
					</ul>
				</div>
			</div>
			
		</div>
	 
	 
	 		<?php endif; ?>
	 
	 <?php if ($this->_var['price_grade']['1']): ?>
	 
	 <div id="pro-cate-attr-102436" class="pro-cate-attr clearfix">
			    <div class="p-title"><?php echo $this->_var['lang']['price']; ?>：</div>
			   
				
			    <div class="p-values">
					<div class="p-operate" style="display: none;">
					    
					    <a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
				    </div>
				    <div class="p-expand">
					    <ul class="clearfix">
						 	<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<li><span><?php echo $this->_var['grade']['price_range']; ?></span></li>
				<?php else: ?>
				<li><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					    </ul>
				    </div>
			    </div>
		    </div>
	 
	 		<?php endif; ?>
	 
	 	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_27679200_1435117832');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_27679200_1435117832']):
?>
			 
		 	<div id="pro-cate-attr-100113" class="pro-cate-attr clearfix">
			    <div class="p-title"><?php echo htmlspecialchars($this->_var['filter_attr_0_27679200_1435117832']['filter_attr_name']); ?> ：</div>
			     
				
			    <div class="p-values">
					<div class="p-operate" style="display: none;">
					    
					    <a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
				    </div>
				    <div class="p-expand">
					    <ul class="clearfix">
						<?php $_from = $this->_var['filter_attr_0_27679200_1435117832']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
						<?php if ($this->_var['attr']['selected']): ?>
				<li><span><?php echo $this->_var['attr']['attr_value']; ?></span></li>
				<?php else: ?>
			<li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					 
					    </ul>
				    </div>
			    </div>
		    </div>
	
			    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 
				<?php endif; ?>
  
	 
        		
		   <?php echo $this->fetch('library/goods_list.lbi'); ?>
		
		
		
		
		
	<div id="list-pager-36" class="pager" style="width: 630px;"><ul>
	 <?php echo $this->fetch('library/pages.lbi'); ?>

	</ul>
		<div class="hr-20"></div>
	</div>
 	
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
