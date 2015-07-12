		
<div class="side_bar">
	<div class="topbar">
		返回所有分类
		<div class="arrow_con"></div>
	</div>
	<div>
		<ul>
			<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?> 
			<li class="head">
				<div class="tit"><span class="caret"></span><?php echo htmlspecialchars($this->_var['cat']['name']); ?></div>
				<div class="child-p">
					<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
					<p onclick="window.location.href='<?php echo $this->_var['child']['url']; ?>';"><?php echo htmlspecialchars($this->_var['child']['name']); ?></p>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div>			
<script>
	$(function() {
		$("li.head").delegate(".tit", 'click', function() {
			var This = this;
			$(this).next().slideToggle("fast", function() {
				$(This).toggleClass("up");
			});
		});
		$(".checkbox").bind('click', function() {
			$(this).toggleClass("checked");
		});
		$(".hide-me").bind('click',function(){
			$("#pop-compare").hide();
		});
	});
</script>