<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="author" content="279633518@qq.com" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css">
 <link href="themes/default/css/index.min.css?20141025" rel="stylesheet" type="text/css">
 <link href="themes/default/css/lantuo.css" rel="stylesheet" type="text/css">


 <!--[if lt IE 9]><script src="themes/default/css/common/html5shiv.js"></script> <![endif]-->
</head>
  
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="banner">
	<div class="layout">
	<?php echo $this->fetch('library/category_tree.lbi'); ?>
	<div class="fr right_side">
				<div class="top1">
					<h2>如何租赁</h2>
					<h4>便捷安全的租赁体验</h4>
					<ul>
						<li>
							<div class="zulin_1 zulin_img"></div>
							<div class="zulin_text"><a href="article_cat.php?id=4">租赁流程</a></div>
						</li>
						<li>
							<div class="zulin_2 zulin_img"></div>
							<div class="zulin_text"><a href="article_cat.php?id=3">常见问题</a></div>
						</li>
						<li class="l_li">
							<div class="zulin_3 zulin_img"></div>
							<div class="zulin_text "><a href="article_cat.php?id=4">租赁流程</a></div>
						</li>
					</ul>
					<div class="register btn" onclick="window.location.href='user.php?act=register';">立即注册</div>
				</div>
				<div class="top2"></div>
				<div class="top3"></div>
			</div>
	</div>
</div>	
<?php echo $this->fetch('library/new_articles.lbi'); ?>
<div class="index-ul-div">
		<ul class="carmero-ul">
			<li class="c-ul-f"><div class="c-text">iRentals-Test</div><div class="c-icon1"></div></li>
			<li><div class="c-text">机身</div><div class="c-icon2"></div></li>
			<li><div class="c-text">镜头</div><div class="c-icon3"></div></li>
			<li><div class="c-text">附件</div><div class="c-icon4"></div></li>
			<li><div class="c-text">花絮</div><div class="c-icon5"></div></li>
		</ul>
</div>
<div class="bottom">
	<ul class="bottom-ul">
		<li class="li-menu1">
			<h1>租赁信息</h1>
			<h3>Rental Information</h3>
			<div class="li-line"></div>
		</li>
		<?php $_from = $this->_var['cat_rec']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
		<li class="li-menu <?php if (($this->_foreach['child']['iteration'] - 1) == 0): ?>pdl30<?php else: ?>li-menu2<?php endif; ?>">
		<?php $_from = $this->_var['child']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child2');$this->_foreach['child2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child2']['total'] > 0):
    foreach ($_from AS $this->_var['child2']):
        $this->_foreach['child2']['iteration']++;
?>
		<?php if (($this->_foreach['child2']['iteration'] - 1) == 0): ?>
			<div class="bottom-div-t">
				<h2><?php echo htmlspecialchars($this->_var['child']['cat_name']); ?></h2>
				<h4><?php echo htmlspecialchars($this->_var['child2']['cat_name']); ?></h4>
				<ul class="li-menu-list">
					<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best_good');$this->_foreach['best_good'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_good']['total'] > 0):
    foreach ($_from AS $this->_var['best_good']):
        $this->_foreach['best_good']['iteration']++;
?>
					<?php if ($this->_var['child2']['cat_id'] == $this->_var['best_good']['cat_id']): ?>
					<li><span class="title"><a href="<?php echo $this->_var['best_good']['url']; ?>"><?php echo $this->_var['best_good']['name']; ?></a></span><span class="price"><?php echo $this->_var['best_good']['shop_price']; ?></span></li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
			</div>
		<?php else: ?>
			<div class="bottom-div-b">
				<h4><?php echo htmlspecialchars($this->_var['child2']['cat_name']); ?></h4>
				<ul class="li-menu-list">
					<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best_good');$this->_foreach['best_good'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_good']['total'] > 0):
    foreach ($_from AS $this->_var['best_good']):
        $this->_foreach['best_good']['iteration']++;
?>
					<?php if ($this->_var['child2']['cat_id'] == $this->_var['best_good']['cat_id']): ?>
					<li><span class="title"><a href="<?php echo $this->_var['best_good']['url']; ?>"><?php echo $this->_var['best_good']['name']; ?></a></span><span class="price"><?php echo $this->_var['best_good']['shop_price']; ?></span></li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
			</div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		
	</ul>
</div>
 <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>

<script>
		$(function(){
//			$('.ul_msg').scrollbox({
//				linear: true,
//				step: 1,
//				delay: 0,
//				speed: 100
//			});
//			var t=0;
//			setInterval(function(){
//				if(t==2){
//					$('.ul_msg ul').css("margin-top","40px");
//					t=-1;
//				}
//				$('.ul_msg ul').animate({"marginTop":-40*(t+1)});
//				t++;
//			},3000);
			
			
			setInterval(function(){
				$('.ul_msg ul').animate({"marginTop":-40},"fast",function(){
					$(".ul_msg ul li:eq(0)").clone().appendTo($(".ul_msg ul"));
					$(".ul_msg ul li:eq(0)").remove();
					$(".ul_msg ul").css("margin-top",0);
				});
			},3000);
		});
	</script>