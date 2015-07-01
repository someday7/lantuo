<div class="hot-area">
	<div class="h">
		<h3><span>热销榜单</span></h3>
	</div>
	<div class="b">
		
		<div class="pro-list">
		<ul>
		
		  <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_28157000_1435126663');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_28157000_1435126663']):
        $this->_foreach['top_goods']['iteration']++;
?>
		  
		  	<li>
			<div>
			    <p class="p-img"><a href="<?php echo $this->_var['goods_0_28157000_1435126663']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_28157000_1435126663']['name']); ?>"><img src="<?php echo $this->_var['goods_0_28157000_1435126663']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_28157000_1435126663']['name']); ?>"/></a><s class="s<?php echo $this->_foreach['top_goods']['iteration']; ?>"></s></p>
			    <p class="p-name"><a href="<?php echo $this->_var['goods_0_28157000_1435126663']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_28157000_1435126663']['name']); ?>"><?php echo $this->_var['goods_0_28157000_1435126663']['short_name']; ?></a></p>
			    <p class="p-price"><b><?php echo $this->_var['goods_0_28157000_1435126663']['price']; ?></b></p>
			</div>
		    </li>
			
			
  
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 
			
 	</ul>
	    </div>
	</div>
</div>
  <div id="pro-seg-hot" class="hr-20"></div>
  
  
 