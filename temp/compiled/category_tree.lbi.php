 			
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
			
			
			
			 <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?> 
		 	<li class="category-item ">
					<div class="category-info">
						<h3>
						<a href="<?php echo $this->_var['cat']['url']; ?>"><span><?php echo htmlspecialchars($this->_var['cat']['name']); ?></span></a></h3>
						
			 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['child']):
?>
			 <?php if ($this->_var['child']['key'] < 2): ?>
				<a href="<?php echo $this->_var['child']['url']; ?>"><span><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a> 
			  <?php endif; ?>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
							
							 
					</div>
						<div class="category-panels">
							<ul class="subcate-list">
							
							 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['catchild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catchild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['catchild']['iteration']++;
?>
 						 
							<li class="subcate-item">
						<a href="<?php echo $this->_var['child']['url']; ?>"><span><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a> 
						 	</li>
					 	
     		  	   		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
										
								 
							</ul>
								<dl class="category-banner">
									<dt>推荐商品 </dt>
							 
							 <?php 
$k = array (
  'name' => 'cate_goods',
  'id' => $this->_var['cat']['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
								</dl>
						</div>
						<i class="icon-cate-arrow"></i>
				</li>
				
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			 
		
		</ol>
	</div>
</div>



	
		<nav class="naver">
				<ul id="naver-list" style="width:980px;">
				
			 <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="index"<?php endif; ?>><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>><span>首 页</span></a></li>
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
	  
	 
      <li class="cherry"><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>  <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><span><?php echo $this->_var['nav']['name']; ?>	
 	  <?php if ($this->_var['nav']['opennew'] == 1): ?>
	  <s><img src="themes/default/images/hot.png" alt="new" /></s>
	    <?php endif; ?>
	  </span> </a></li>
	
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
	  	</ul>
				
		 

 
 </nav>