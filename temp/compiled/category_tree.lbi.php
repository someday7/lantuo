			<ul class="menu">
			<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?> 
				<li>
					<h3><?php echo htmlspecialchars($this->_var['cat']['name']); ?><span class="tab-icon"></span></h3>
					<p><?php echo htmlspecialchars($this->_var['cat']['desc']); ?></p>
					<dl>
						<dt class="first"><span class="pp_name"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></span><span class="pp_text"><?php echo htmlspecialchars($this->_var['cat']['desc']); ?></span><a class="fr" href="<?php echo $this->_var['cat']['url']; ?>">更多<span class="tab-icon"></span></a></dt>
						<dd>
						<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
							<?php if (($this->_foreach['child']['iteration'] - 1) == 7): ?>
							</dd><dd>
							<?php endif; ?>
							<a href="<?php echo $this->_var['child']['url']; ?>"<?php if (($this->_foreach['child']['iteration'] - 1) == 0 || ($this->_foreach['child']['iteration'] - 1) == 7): ?> class="first_a"<?php endif; ?>><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</dd>
					</dl>
				</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			