<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div class="header">
	<div class="layout">
		<ul class="fr">
			<li>
				<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
				<font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
			</li>
			<li>
				<a href="user.php?act=order_list">我的交易单</a>
			</li>
			<li>
				<a href=""><span class="photo_icon"></span> 相机信息<span class="down_arrow"></span></a>
			</li>
			<li>
				<a href="">我的关注</a>
			</li>
			<li>
				<a href="">我要吐槽<span class="down_arrow"></span></a>
			</li>
			<li class="last_li">
				<a href="javascript:;">网站导航</a>
				<a href=""><span class="wx_icon"></span></a>
				<a href=""><span class="sina_icon"></span></a>
			</li>
		</ul>
	</div>
</div>
<div class="nav">
	<div class="layout">
		<ul>
			<li><span class="logo"></span></li>
			<li <?php if ($this->_var['index'] == 'index'): ?>class="active"<?php endif; ?>><a href="index.php">首页</a></li>
			<li><a href="index.html">租赁</a></li>
			<li><a href="index.html">评测</a></li>
			<li><a href="index.html">数据库</a></li>
			<li><a href="index.html">维修</a></li>
			<li class="input">
				<form id="searchForm" name="searchForm" method="get" action="http://www.sf-express.com" />
					<input placeholder="查询顺丰订单号" name="sf_sn" id="sf_sn" /><span class="search" id="searchBtn">搜索</span>
				</form>
			</li>
		</ul>
	</div>
</div>
<script src="themes/default/js/jsapi.js?20141025" namespace="ec"></script>
<script type="text/javascript" src="themes/default/js/jquery-1.9.1.js"></script>
<script src="themes/default/js/ec.core.js?20141025"></script> 
<script src="http://res.vmall.com/20150415/js/common/jsapi.js?20141025" namespace="ec"></script>
<script src="themes/default/js/ec.business.js?20150420"></script> 
<script type="text/javascript" src="themes/default/js/scrollbox.js" ></script>
<script type="text/javascript" src="themes/default/js/jquery.jqzoom.js"></script>
 <script type="text/javascript" src="themes/default/js/base.js"></script>
<script type="text/javascript">
		$(function() {
			window.__Object_toJSONString = Object.prototype.toJSONString;
			delete Object.prototype.toJSONString;
		});


	$(document).ready(function(){		
		$("#searchBtn").click(function(){
			$("form#searchForm").submit();
		});
	})
</script>
