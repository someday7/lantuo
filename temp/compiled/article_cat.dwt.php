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
<link href="http://res.vmall.com/20150415/css/notice/main.min.css?20141025" rel="stylesheet" type="text/css">
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css
<link href="themes/default/css/index.min.css?20141025" rel="stylesheet" type="text/css">
<link href="themes/default/css/main.2.css" rel="stylesheet" type="text/css">
 <link href="themes/default/css/public.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/lantuo.css" rel="stylesheet" type="text/css">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="pingce-main">
	<div class="side_bar">
	<?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
	<div class="topbar">
		<a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
	</div>
	<div class="top-menu">
		<ul>
			<li class="head">
			<?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
				<div class="tit up"><span class="caret"></span><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</li>
		</ul>
	</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	
	<div class="main_con" style="margin-left:260px;">
			<div class="menu-list">
				<?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
						<div class="one-menu">
						<div class="img"><a href="<?php echo $this->_var['article']['url']; ?>"><img src="/<?php echo $this->_var['article']['file_url']; ?>"/></a></div>
						<div class="desc-text">
							<p class="d-title"><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a> </p>
							<ul>
								<li><?php echo htmlspecialchars($this->_var['article']['title']); ?></li>
								<li><?php echo $this->_var['article']['add_time']; ?></li>
							</ul>
						</div>
					</div>						
			   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>				
			</div>
        
        <div id="pagin-btm" class="pagin fr">		 
			<?php echo $this->fetch('library/pages.lbi'); ?>
		</div>
		</div>
		
	<div class="clear"></div>
</div>
  
 
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
