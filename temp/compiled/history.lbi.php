
<div id="product-history-area" class="rl-area">
    <div class="h">
        <h3 class="fl"><span>最近浏览过的商品</span></h3>
        <span class="fr"><a class="icon-clear" href="javascript:clear_history();"  >清空</a></span>
    </div>
    <div class="b">
        
        <div class="pro-list">
            <ul id="product-history-list">
			   <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
			 
			</ul>
        </div>
    </div>
</div>    </div>
</div>




 
 
 
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
}
</script>