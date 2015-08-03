<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
 <link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css">
 <link href="themes/default/css/main.2.css" rel="stylesheet" type="text/css">
 <link href="themes/default/css/public.css" rel="stylesheet" type="text/css" />
 <link href="themes/default/css/lantuo.css" rel="stylesheet" type="text/css">
 <link href="themes/default/js/My97DatePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css">
</head>
<body>

 
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,jquery.json.js')); ?>
<script type="text/javascript" src="themes/default/js/My97DatePicker/WdatePicker.js"></script>
 <div class="pingce-main">
		
 	<div class="banner2">
		<?php echo $this->fetch('library/category_tree.lbi'); ?>
	</div>
 	  

<div class="main_con"> 
<?php echo $this->fetch('library/ur_here.lbi'); ?>
	
 <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
	<div class="pd-pic-area">
					<div class="pic-img"  id="preview">
						<img src="<?php echo $this->_var['goods']['goods_img']; ?>" jqimg="<?php echo $this->_var['goods']['goods_img']; ?>" height="350px" />
					</div>
					<div class="thumb-imgs">
						<div class="arrow a_left"></div>
						<div class="arrow a_right"></div>
						<div class="ul-con">
							<ul>
								<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['picture']):
?>
								<li<?php if ($this->_var['key'] == 0): ?> class="active"<?php endif; ?>>
										<img bimg="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" data-src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" onmousemove="preview(this);" >
									
								</li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
						</div>

					</div>
				</div>

	<div class="pd-side">
		<div class="section1">
			<label class="label">咨询客服：</label>
			<span class="contact"></span>
		</div>
		<div class="section1">
			<div class="time">
				<label>收到日期：</label>
				<input class="Wdate" placeholder="请选择日期" type="text" id="d233" onFocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
			</div>
			<div class="time">
				<label>寄回日期：</label>
				<input class="Wdate" placeholder="请选择日期" type="text" id="d233" onFocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
			</div>
			<div class="calculate">计算租金</div>
			<div class="section-text">
				<label>租金：</label>
				<label class="cost">5天￥330，之后每天45元</label>
			</div>
		</div>
		<div class="section1">
			<label class="label">促销信息：</label>
			<div class="pro-div">
				此处点击鼠标左键，任意划取部分文字信息，即可显示划词分享图标可显示划词分享图
			</div>
			<div class="pay-btns">
				<span class="pay-btn taobao">淘宝交易</span><span class="pay-btn online" onclick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">直接付款</span>
			</div>
		</div>
			<div class="bshare-custom">
				<div class="bsPromo bsPromo2"></div>
				<span class="share-text">分享到</span>
				<a title="分享到QQ空间" class="bshare-qzone"></a>
				<a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
				<a title="分享到人人网" class="bshare-renren"></a>
				<a title="分享到腾讯微博" class="bshare-qqmb"></a>
				<a title="分享到网易微博" class="bshare-neteasemb"></a>
				<a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
			</div>
			<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=3&amp;lang=zh"></script>
			<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
	</div>
	<div class="clear"></div>
	
	<div class="pd-container">
			<div class="tabbar">
				<ul>
					<li class="active">概述</li>
					<li>详细参数</li>
					<li>样片</li>
					<li>租赁标准配件</li>
					<li>选配配件</li>
					<li>资源</li>
				</ul>
			</div>
			<div class="pd-page page-0">
				<?php echo $this->_var['goods']['goods_desc']; ?>
			</div>
			<div class="pd-page page-1">
				
			</div>
			<div class="pd-page page-2">
				
			</div>
			<div class="pd-page page-3">
			</div>
			<div class="pd-page page-4">
				
			</div>
			<div class="pd-page page-5">
				
			</div>
		</div>
	
	<div class="clear"></div>
										
		<script language="javascript">
		  function changeAtt(t,src,key) {
			
			document.getElementById('spec_value_'+src).checked='checked';
			var itemObj = document.getElementById("catt_"+key);
			var elems = itemObj.getElementsByTagName("a");
		
		
			for (i = 0; i < elems.length; i ++ )
			{
				var prefix = elems[i].name.substr(0, 7);
				if (prefix == 'spec_a_')
				{
				   elems[i].className = '';
				}
			}
 			t.className = "cattsel";
			changePrice();
		}
		</script>		
		   <script>
			$(document).ready(function(){
			$("#add").click(function(){
			  var n=$("#number").val();
			  var num=parseInt(n)+1;
			 if(num==0){alert("cc");}
			  $("#number").val(num);
			changePrice();
			});
			$("#jian").click(function(){
			  var n=$("#number").val();
			  var num=parseInt(n)-1;
			 if(num==0){alert("不能为0!"); return}
			  $("#number").val(num);
			  changePrice();
			  });
			});
			</script>
 </form>

 

<div id="cart-tips" class="pro-popup-area hide">
     <div class="h">
	<a href="javascript:;" onclick="$('#cart-tips').hide()" class="pro-popup-close" title="关闭"><span>关闭</span></a>
    </div>
    <div class="b">
		<div class="pro-add-success">
			<dl>
			<dt><s></s></dt>
				<dd>
					<p>荣耀畅玩4X 套餐版</p>
					<div class="pro-add-success-msg">成功加入购物车!</div>
					<div class="pro-add-success-total">购物车中共&nbsp;<b id="cart-total">0</b>&nbsp;件商品，金额合计&nbsp;<b  id="cart-price">¥&nbsp;0</b></div>
					<div class="pro-add-success-button"><a href="flow.php" class="button-style-1 button-go-cart" title="去购物车结算" >去结算</a><a class="button-style-4 button-walking" href="javascript:;" title="继续逛逛" onclick="$('#cart-tips').hide()">继续逛逛&nbsp;>></a></div>									
				</dd>
			</dl>					
		</div>
    </div>
</div>


 
</div>


<?php if ($this->_var['fittings']): ?>
<script type="text/javascript">
function check(){
var result='<?php echo $this->_var['goods']['goods_id']; ?>,';
var fid = document.getElementById('boxOne');
var box = fid.getElementsByTagName('input');
for(var i = 0; i < box.length; i++){
           if(box[i].type == 'checkbox' && box[i].checked){
                result = result + box[i].value + ',';
           }
        }
//alert(result);
//return false;
        //在Common.js文件中添加了addToCartNums方法
        addToCartNums(result);
document.documentElement.scrollTop=0;
}
/*
   计算合计金额，by 517ld.com Joe
*/
function totalPrice(){
//var result=Math.round(<?php echo $this->_var['goods']['shop_price']; ?>);
var re = /[￥元]/g;
<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
  var result='<?php echo $this->_var['goods']['promote_price']; ?>';
  result=result.replace(re,'');
<?php else: ?>
  var result=<?php echo $this->_var['goods']['shop_price']; ?>;
<?php endif; ?>
//alert(result);
var fid = document.getElementById('boxOne');
var box = fid.getElementsByTagName('input');
var j=1;
for(var i = 0; i < box.length; i++){
    if(box[i].type == 'checkbox' && box[i].checked){
  var a = box[i].name;
     result =  Number(result) +  Number(a.replace(re, ''));
     j+=1;
    }
}
result_format='￥%s元';
re_re=/\%s/g;
result_format=result_format.replace(re_re, result);
document.getElementById("totalPrice").innerHTML=result_format;
document.getElementById("totalNum").innerHTML=j;
}
</script>
<?php endif; ?>
 <script type="text/javascript">


//tab plugins 插件
$(function(){
	

	//选项卡鼠标滑过事件
	$('#clicktab .tabbtn li').click(function(){
		TabSelect("#clicktab .tabbtn li", ".tabcon", "current", $(this))
	});
	$('#clicktab .tabbtn li').eq(0).trigger("click");

	function TabSelect(tab,con,addClass,obj){
		var $_self = obj;
		var $_nav = $(tab);
		$_nav.removeClass(addClass),
		$_self.addClass(addClass);
		var $_index = $_nav.index($_self);
		var $_con = $(con);
		$_con.hide(),
		$_con.eq($_index).show();
	}
	
	
	$('#clicktab2 .tabbtn2 li').click(function(){
		TabSelect("#clicktab2 .tabbtn2 li", ".tabcon2", "current", $(this))
	});
	$('#clicktab2 .tabbtn2 li').eq(0).trigger("click");
});
</script>

<style type="text/css">
 
.demopage{width:760px;margin:0 auto;}
.demopage h2{font-size:14px;text-align:center;}
/* tabbox */
.tabbox{width:432px;margin:20px auto;position:relative;height:171px;overflow:hidden;}
.tabbox .tabbtn{height:30px;background:url(themes/default/images/tabbg.gif) repeat-x;border-left:solid 1px #ddd;border-right:solid 1px #ddd;}
.tabbox .tabbtn li{float:left;position:relative;margin:0 0 0 -1px;}
.tabbox .tabbtn li a,.tabbox .tabbtn li span{display:block;float:left;height:30px;line-height:30px;overflow:hidden;width:108px;text-align:center;font-size:12px;cursor:pointer;}
.tabbox .tabbtn li.current{border-left:solid 1px #d5d5d5;border-right:solid 1px #d5d5d5;border-top:solid 1px #c5c5c5;}
.tabbox .tabbtn li.current a,.tabbox .tabbtn li.current span{border-top:solid 2px #ff6600;height:27px;line-height:27px;background:#fff;color:#3366cc;font-weight:800;}
.tabbox .loading{height:40px;width:432px;text-align:center;position:absolute;left:0;top:120px;}
.tabbox .tabcon{padding:10px;border-width:0 1px 1px 1px;border-color:#ddd;border-style:solid;}
.tabbox .tabcon li{height:24px;line-height:24px;overflow:hidden;}
.tabbox .tabcon li span{margin:0 10px 0 0;font-family:"宋体";font-size:12px;font-weight:400;color:#ddd;}
</style>

</div>
<script>
(function(){
var hash = location.hash, skuId = 0, virId = 0,
	cateList = [];


if(hash.length > 1) {
	var skuInfo = hash.split('#', 2)[1];
	skuId = (skuInfo.length > 1) ? (parseInt(skuInfo.split(',', 2)[0], 10) || 0) : 0;
	virId = (skuInfo.length > 1) ? (parseInt(skuInfo.split(',', 2)[1], 10) || 0) : 0;
} 

if(virId > 0) {
	$.get('/category.json', {}, function (json) {
		if(!json.success) return;
		var lst = [];
		for (var i = 0; i < json.virtualList.length; i += 1) {
			lst = json.virtualList[i];
			cateList[lst.id] = lst.text;
		}
		$('#bread-pro-name').before(cateList[virId]);
	}, 'json');
	
}

  }); 
 </script>

 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

$(function() {
	$(".ul-con ul").width($(".ul-con ul li").length*97);
	var currentPage=0;
	$(".ul-con ul").delegate("li", 'click', function() {
		if($(this).hasClass("active")){
			return;
		}else{
			$(this).addClass("active").siblings().removeClass("active");
			//$(".ul-con ul").animate({"marginLeft":-97*$(this).index()});
			$(".pic-img img").attr("src",$(this).find("img").attr("data-src"));
		}
	});
	
	$(".thumb-imgs .arrow").bind('click',function(){
		var left=parseInt($(".ul-con ul").css("margin-left"));
		if($(this).hasClass("a_left")){
			if(currentPage==0){
				return;
			}else{
				$(".a_right").removeClass("disable");
				$(".ul-con ul").animate({"marginLeft":-$(".ul-con").width()*(currentPage-1)},"fast",function(){
					$(".ul-con ul li:eq("+((currentPage-1)*5)+")").addClass("active").siblings().removeClass("active");
					currentPage--;
					if(currentPage==0){
						$(".a_left").addClass("disable");
					}
				});
			}
		}else{
			if(currentPage==Math.ceil($(".ul-con ul li").length/5)-1){
				return;
			}else{
				$(".a_left").removeClass("disable");
				$(".ul-con ul").animate({"marginLeft":-$(".ul-con").width()*(currentPage+1)},"fast",function(){
					$(".ul-con ul li:eq("+((currentPage+1)*5)+")").addClass("active").siblings().removeClass("active");
					currentPage++;
					if(currentPage==Math.ceil($(".ul-con ul li").length/5)-1){
						$(".a_right").addClass("disable");
					}
				});
			}
		}
	});
	
	$(".tabbar ul").delegate('li','click',function(){
		if($(this).hasClass("active")){
			return;
		}else{
			var lindex=$(".tabbar li.active").index();
			var index=$(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".pd-page:eq("+lindex+")").hide();
			if(lindex>index){
				$(".pd-page:eq("+index+")").css("margin-left","-500px").show().animate({"marginLeft":"0px"},"fast");
			}else{
				$(".pd-page:eq("+index+")").css("margin-left","700px").show().animate({"marginLeft":"0px"},"fast");
			}

		}
	});
});


</script>
</html>
