		
<div class="tips">
		<div class="layout ul_msg">
			<span class="tip_msg_icon"></span>
				<ul>
				<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
					<li><a href="<?php echo $this->_var['article']['url']; ?>"><?php echo htmlspecialchars($this->_var['article']['title']); ?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
		</div>
</div>		
		
 