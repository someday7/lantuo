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
  
 <script src="themes/default/js/jquery-1.4.4.min.js"></script>
 <link href="themes/default/css/public.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="themes/default/js/jquery.jqzoom.js"></script>
 <script type="text/javascript" src="themes/default/js/base.js"></script>
   


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,jquery.json.js')); ?>
</head>
<body class="wide">

 
<?php echo $this->fetch('library/page_header.lbi'); ?>
 <div class="naver-main">
	<div class="layout">
 		<div class="category category-index" id="category-block">
		
 	<?php echo $this->fetch('library/category_tree.lbi'); ?>
	 </div>
	</div>
</div>
 </nav>
</div>
	</div>
</div>
 
<div class="hr-10"></div>
<div class="g">
	
	<div class="breadcrumb-area fcn">	
 	  <?php echo $this->fetch('library/ur_here.lbi'); ?>
	</div>
</div>

<div class="hr-10"></div>
<div class="layout"> 
	
 <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
	<div class="pro-summary-area clearfix"> 
    	<div class="right-area"> 
        	
        	<div class="pro-property-area clearfix">
                <div class="pro-meta-area">
                	<h1 id="pro-name"><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
            	
                	
                	<div class="pro-slogan" id="skuPromWord">
					<?php echo $this->_var['goods']['goods_brief']; ?>
					</div>			
                	<div class="hr-10"></div>
					<div class="line"></div>
                
                    <div class="pro-price">
							 <s id="pro-price-old"  class="hide"><label>本&nbsp;店&nbsp;&nbsp;价：</label>&yen;&nbsp; </s>
							 <span id="pro-price"><label>本&nbsp;店&nbsp;&nbsp;价：</label><b><?php echo $this->_var['goods']['shop_price_formated']; ?></b></span>
                    </div>
                    
                    
                    
                    <div id="pro-promotions-area" class="pro-promotions-area">
                       <dl class="clearfix">
                            <dt>优惠信息：</dt>
                            <dd>
                                <ul id="pro-promotions-list">
                                
                                </ul>
                                <ul id="pro-gift-list" >
                                    		<li><span>赠送&nbsp</span> <a href="/product/1508.html#2677" title="华为 荣耀畅玩4X 屏幕保护膜（高透）" target="_blank" >华为 荣耀畅玩4X 屏幕保护膜（高透）</a> </li>
                                    		<li><span>赠送&nbsp</span> <a href="/product/1540.html#2787" title="华为 荣耀畅玩4X 智能皮质保护套（玉兰白）" target="_blank" >华为 荣耀畅玩4X 智能皮质保护套（玉兰白）</a> </li>
                                    		<li><span>赠送&nbsp</span> <a href="/product/833.html#2820" title="华为 荣耀  Color Cube 立体声蓝牙音箱（晴空蓝）" target="_blank" >华为 荣耀  Color Cube 立体声蓝牙音箱（晴空蓝）</a> </li>
                                </ul> 
                            </dd>
                        </dl>
                    </div>
                    
        <div class="pro-coding"><label>商品编码：</label><span id="pro-sku-code"><?php echo $this->_var['goods']['goods_sn']; ?></span></div>
                    <div class="pro-evaluate"><label>商品评分：</label><span class="pro-star"><span class="starRating-area"><s id="prd-remark-scoreAverage" style="width:100%"></s></span></span>&nbsp;（<a id="prd-remark-jmptoremark" href="#pro-tab-evaluate" onclick="ec.product.jmptoRemark()"   title="共&nbsp;0&nbsp;条评论">共&nbsp;0&nbsp;条评论</a>）</div>
			<div class="pro-freight"><label>运&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;费：</label>满&nbsp;100&nbsp;免运费</div>
			<div class="pro-service"><label>服&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务：</label>由本商城负责发货，并提供售后服务</div>
				 	
		    <div class="hr-10"></div>
		    <div class="line"></div>
		    <div class="hr-15"></div>
					
          
					
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
							
		 	 <style type="text/css">
	  <!--
			  /*--------------颜色选择器CSS添加-------------*/
		.propertySelect{padding: 10px 0 10px 0px;}
		.propertySelect strong{float:left;font-weight:normal; text-align:left; line-height:35px;}
		.propertySelect .catt {height:auto;overflow:hidden; min-height:35px;}
		
		.propertySelect .catt a{border: #c8c9cd 1px solid;text-align: ; margin-top:3px;center;background-color: #fff;display: block;white-space: nowrap;color: #666;text-decoration: none;float:left; margin-left:2px; margin-right:2px; position:relative}
		.propertySelect .catt a p{border: #fff 1px solid; padding:2px 5px;background-color: #fff;}
		.propertySelect .catt a p.padd{padding:0px;}
		.propertySelect .catt a:hover {border:#e01d20 1px solid;}
		.propertySelect .catt a:hover p{border: #e01d20 1px solid;}
		.propertySelect .catt a:focus {outline-style:none;}
		
		.propertySelect .catt .cattsel {background:#ff6701;border: #e01d20 1px solid;}
		.propertySelect .catt .cattsel a:hover {border: #e01d20 1px solid;}
		.propertySelect .catt .cattsel p{border: #e01d20 1px solid;}
		.propertySelect .catt em{font-style:normal}
		.propertySelect .catt .cattsel i{background:url(themes/default/images/test.png) no-repeat scroll right bottom transparent;bottom:0;height:16px;position:absolute;right:0;width:16px;}
		.propertySelect .catt .cattsel a:hover i{background:url(themes/default/images/test.png) no-repeat scroll right bottom transparent;}
		.propertySelect img{width:50px; height:50px;}
		-->
		</style>


           <?php if ($this->_var['specification']): ?>
		  <div id="pro-skus" class="pro-sku-area">
            <div class="propertySelect clearfix" id="propertySelect">
            <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
              <strong><?php echo $this->_var['spec']['name']; ?>：</strong>
              <div class="catt" id="catt_<?php echo $this->_var['spec_key']; ?>">
              
              <?php if ($this->_var['spec']['attr_type'] == 1): ?>
              <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
               <a class='hover <?php if ($this->_var['key'] == 0): ?>cattsel<?php endif; ?><?php if ($this->_var['value']['thumb_url']): ?> colorImg<?php endif; ?>' <?php if ($this->_var['value']['thumb_url']): ?> rev=<?php echo $this->_var['value']['img_original']; ?> rel=goodsPic <?php else: ?>href="#"<?php endif; ?> title="<?php echo $this->_var['value']['label']; ?>" style="cursor:pointer" name="spec_a_<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt(this,<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['spec_key']; ?>)">
               <p <?php if ($this->_var['value']['thumb_url']): ?>class="padd"<?php elseif ($this->_var['value']['hex_color'] != ''): ?>style="background:#<?php echo $this->_var['value']['hex_color']; ?>; height:45px; width:45px"<?php endif; ?>>
              <?php if ($this->_var['value']['thumb_url']): ?>
              <img src="<?php echo $this->_var['value']['thumb_url']; ?>" width="50" height="50" alt="<?php echo $this->_var['value']['label']; ?>">
              <?php elseif ($this->_var['value']['hex_color']): ?>
              <?php else: ?>
               <em><?php echo $this->_var['value']['label']; ?></em>
              <?php endif; ?>
              <i></i>
              </p>
             <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
              </a>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php else: ?>
              <select name="spec_<?php echo $this->_var['spec_key']; ?>">
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?>
              <?php else: ?>
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
              <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
              <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
              <br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?>
            </div>
            <div class="blank"></div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </div>   </div>
         <?php endif; ?>
     	
	 

 
 

  <?php $_from = $this->_var['attribute_linked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked');if (count($_from)):
    foreach ($_from AS $this->_var['linked']):
?>
				
					<div class="pro-sku-area" id="relPrdList">
						<dl class="pro-sku-text clearfix">
							<dt>关联商品：<?php echo $this->_var['linked']['title']; ?></dt>
							<dd>
								<ol>
			   <?php $_from = $this->_var['linked']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
		 	<li data-id="1494"><div class="sku"> <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>"><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?></a><s></s></div></li>
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
								</ol>
							</dd>
						</dl>
					</div>
                    
	   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
					<div id="pro-quantity-area"  class="pro-stock-area">
						<dl class="clearfix">
							<dt>购买数量：</dt>
							<dd>
							 <span class="stock-area">
							 
			   <a id="jian" onblur="changePrice()"  class="icon-minus-2 vam"/></a>
              	 <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" class="vam text" autocomplete="off" />
              <a  id="add" value=""  onblur="changePrice()"  class="icon-plus-2 vam"/></a>
			   </span>
						
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
   						    
							</dd>
						</dl>
					</div> 
					
                </div>
              
 
       
     <div class="pro-selected"><?php echo $this->_var['lang']['amount']; ?><span><b id="ECS_GOODS_AMOUNT"></b></span></div>
     <div id="pro-operation" class="pro-action-area" style="visibility: visible;"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="button-add-cart button-style-1" title="加入购物车"><span>加入购物车</span></a></div>
		
 		
                 
 </form>


<div id="pro-operation" class="pro-action-area"></div>

 

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
    </div>
   
      
		
		 <div class="pro-gallery-area" style="margin:0px;"> 
      
      <div class="fdj_left">
        <div id="preview"> <span class="jqzoom"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" jqimg="<?php echo $this->_var['goods']['goods_img']; ?>" width="500" height="500"/></span>
         
        <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
        <div class="items">
          <ul>
		    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
                       <li><a href="gallery.php?id=<?php echo $this->_var['id']; ?>&amp;img=<?php echo $this->_var['picture']['img_id']; ?>" target="_blank"><img  bimg="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" onmousemove="preview(this);"  width="55" ></a></li>
					       
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					
					  </ul>
        </div>
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
 


<div id="group-area" class="layout">
<div class="hr-20"></div>
	    
	    <div id="tab-bundle" class="pro-suit-area">
		<div class="h">
		    <h3>优惠套装</h3>
		    <div class="h-tab" id="bundle-tab">
			<ul id="bundle-list-3151" data-size="1" class="hide clearfix">
				<li class="current" data-id="493">
					<a href="javascript:;" title="套餐"><span>套餐</span></a>
				</li>
			</ul>
		    </div>
		</div>
		<div class="b clearfix">
		    <div class="pro-main">
 					<div  id="boxOne" class="pro-suit-parts-list">
					    
					    <div class="pro-suit-parts-area fitting_middle"  style="width:900px;">
						<ul class="clearfix ">
						
						 <li >
						<div class="suit-area">
						 <p class="p-img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?>" width="110"  height="110"/></p>
   						 <p class="p-name"><a href="#" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?></a></p>
						 <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
						 <b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b>
						 <?php else: ?>
						 <b class="f1"><?php echo $this->_var['goods']['shop_price_formated']; ?></b>
						 <?php endif; ?>
						  <i class="and"></i>
							</div>
						    </li>
	 
						 <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_96622300_1435131044');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_96622300_1435131044']):
?>
 
   	
						    <li >
							<div class="suit-area">
							    <p class="p-img"><a href="<?php echo $this->_var['goods_0_96622300_1435131044']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_96622300_1435131044']['goods_name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_96622300_1435131044']['goods_thumb']; ?>" width="110"  height="110"/></a></p>
							    <p class="p-name">     <a href="<?php echo $this->_var['goods_0_96622300_1435131044']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_96622300_1435131044']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_96622300_1435131044']['short_name']); ?></a></p>
								    <input type="checkbox" name="<?php echo $this->_var['goods_0_96622300_1435131044']['fittings_price']; ?>" value="<?php echo $this->_var['goods_0_96622300_1435131044']['goods_id']; ?>"  onClick="totalPrice()" checked=checked /><b class="f1"><?php echo $this->_var['goods_0_96622300_1435131044']['fittings_price']; ?></b>
							    <i class="and"></i>
							</div>
						    </li>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						 
 						</ul>
					    </div>
					</div>

		    </div>
			<div class="pro-sub">
				<div class="pro-suit-cost-area">
									<div id="bundle-price-493">
 							 
 								    <p><s>已选择：&yen;<span id="totalNum" style="color:red;"></span>个商品</s></p>
								    <p><b>搭配价：<span id="totalPrice" style="color:red;font-weight:bold;"></span></b></p>
 								    <p class="pro-suit-cost-button" ><a href="javascript:;" class="button-add-cart-2 button-style-1" title="加入购物车" onclick="check()"><span>加入购物车</span></a></p>
									</div>
		    	</div>
		    </div>
		</div>
	    </div>
 	    
<script>totalPrice();</script>
	 <?php endif; ?>
</div>
</div>


<div class="hr-20"></div>
<div class="layout"> 
	<div class="fr u-3-4">
	
		<div class="pro-detail-area clearfix">
		<div class="tool-fixed-holder"></div>
		<div id="pro-tab-all" class="pro-detail-tool">
			
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



		 
        <div id="clicktab" class="pro-detail-tab clearfix">
        	<div class="pro-detail-tab-nav" >
            <ul class="tabbtn">
                <li id="pro-tab-feature" class="current"><a href="javascript:;" title="商品详情"><span>商品详情</span></a></li>
                <li id="pro-tab-evaluate"><a href="javascript:;" title="用户评价"><span id="prd-remark-span-tab-evaluate">用户评价<em>（0）</em></span></a></li>
                <li id="pro-tab-parameter" data-skulist="3151,3325,3328,3329,3424,3433,3625"><a href="javascript:;" title="规格参数"><span>规格参数</span></a></li>
                <li id="pro-tab-package"><a href="javascript:;" title="包装清单"><span>包装清单</span></a></li>
				<li id="pro-tab-software"><a href="javascript:;" title="软件下载"><span>软件下载</span></a></li>
                <li id="pro-tab-service"><a href="javascript:;" title="售后服务"><span>售后服务</span></a></li>
              
            </ul>
            </div>
            
            <div  class="pro-detail-tab-button"><a id="tab-addcart-button" href="javascript:;" class="button-style-1 button-add-cart-3" onclick="ec.product.buyComb();return false;">加入购物车</a><a href="javascript:;" id="tab-notice-button" class="button-style-2 button-notice-arrival-2"  onclick="ec.product.arrival();return false;">到货通知</a></div>
        </div>
        </div>

        
        <div class="pro-detail-area">
            
<div class="pro-detail-tab-area pro-parameter-area tabcon" >

<div id="pro-tab-feature-content-3151"  >
<p>
<?php echo $this->_var['goods']['goods_desc']; ?>
</p>
</div>

 
<div class="hr-20"></div>
<div class="pro-disclaimer-area">
<p>※本网站尽可能地提供准确的信息。本网站内所涉及的产品图片与实物可能有细微区别，效果演示图和示意图仅供参考（图片为合成图、模拟演示图），有关产品的外观（包括但不限于颜色）请以实物为准。</p>
<p>※限于篇幅，本网站中所包含的信息（包括但不限于产品规格、功能说明等）可能不完整，请以有关产品使用说明书的具体信息为准。</p>
</div>
</div>

<div class="pro-detail-tab-area pro-parameter-area tabcon"><div>正在加载中...</div></div>

<div id="pro-tab-package-content-3151"  class="pro-detail-tab-area pro-parameter-area tabcon">
<p>手机 x 1，充电器 x 1，USB线 x 1，快速指南 x 1，三包凭证 x 1<br /></p>


</div>

<div id="pro-tab-service-content" class="pro-detail-tab-area pro-parameter-area tabcon">
<div id="pro-tab-service-content-3151" class="hide">
<p>本产品全国联保，享受三包服务，质保期为：一年质保<br />如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！<br />售后服务电话：400-830-8300<br /><span>华为消费者BG官网： <a href="http://consumer.huawei.com/cn/">http://consumer.huawei.com/cn/</a></span><br /></p>
</div>

</div>
<div id="pro-tab-software-content" class="pro-detail-tab-area pro-parameter-area tabcon">
<iframe id="pro_software_iframe" name="pro_software_iframe" width="100%" height="300" frameborder="0" src="about:blank" data-src="http://app.hicloud.com/vmall/applist.action?divid=pro_software_iframe&itemid=101100101203" scrolling="no"></iframe>
</div>	    <div id="remarkLoading"></div>
            
            <div id="pro-tab-evaluate-content" class="pro-detail-tab-area pro-evaluate-area  tabcon hide">
                
                <div class="pro-score-area clearfix">
                	<div class="pro-score-average">
						<span><b id="pro-evaluate-avgSorce"></b>%</span>
						<em>好评度</em>
					</div>
					
					
					<div class="pro-score-percent">
						<dl>
							<dt>好评<em id="pro-score-percent-high"></em></dt>
							<dd><s id="pro-score-draw-high" style="width:0%"></s></dd>
						</dl>
						<dl>
							<dt>中评<em id="pro-score-percent-mid"></em></dt>
							<dd><s id="pro-score-draw-mid" style="width:0%"></s></dd>
						</dl>
						<dl>
							<dt>差评<em id="pro-score-percent-low"></em></dt>
							<dd><s id="pro-score-draw-low"  style="width:0%"></s></dd>
						</dl>
					</div>
					
                  <div id="pro-score-impress"  class="pro-score-impress"></div>
                  
                   <div class="pro-score-button"><a href="/member/order/" class="button-style-4 button-comment">发表评价</a></div>
                </div>
                
                
				<div class="pro-evaluate-tab clearfix" >
					<div class="pro-evaluate-tab-nav">
						<ul id="pro-evaluate-click-type">
							<li id="pro-evaluate-click-all" class="current"><a href="javascript:;"><span>全部评价<em id="pro-evaluate-number-all">(</em></span></a></li>
							<li id="pro-evaluate-click-high"><a  href="javascript:;"><span>好评<em id="pro-evaluate-number-high" >(100)</em></span></a></li>
							<li id="pro-evaluate-click-mid" ><a href="javascript:;"><span  >中评<em id="pro-evaluate-number-mid"></em></span></a></li>
							<li id="pro-evaluate-click-low"><a href="javascript:;"><span  >差评<em id="pro-evaluate-number-low"></em></span></a></li>
						</ul>
					</div>
					
					
                <div class="pro-evaluate-page">
					
					<div id="pro-msg-pagerup" class="pager">
					</div>
				</div>
					
				</div>
				
                
                
				<div id="pro-msg-list"  class="pro-comment-list">
				</div>
				
               
                
                <div class="pro-evaluate-page">
					
					<div id="pro-msg-pager" class="pager">
						
					</div>
					 	<div class="hr-15"></div>
					</div>
            	</div>
        	</div>
    	</div>
    	
    <div class="pro-detail-area clearfix"  id="clicktab2"  style="display:none;">
			<div class="pro-detail-tool">
				
				<div class="pro-detail-tab clearfix">
					<div class="pro-detail-tab-nav">
						<ul class="tabbtn2">
							<li class="current" id="prd_detail_counsel_1"><a href="javascript:;" onclick="ec.product.divchange(1)"><span>全部咨询</span></a></li>
							<li id="prd_detail_counsel_2"><a href="javascript:;" onclick="ec.product.divchange(2)"><span>商品咨询</span></a></li>
							<li id="prd_detail_counsel_3"><a href="javascript:;" onclick="ec.product.divchange(3)"><span>支付</span></a></li>
							<li id="prd_detail_counsel_4"><a href="javascript:;" onclick="ec.product.divchange(4)"><span>配送</span></a></li>
							<li id="prd_detail_counsel_5"><a href="javascript:;" onclick="ec.product.divchange(5)"><span>售后</span></a></li>
							<li id="prd_detail_counsel_6"><a href="javascript:;" onclick="ec.product.divchange(6)"><span>常见问题</span></a></li>
						</ul>
					</div>
					<div class="pro-detail-tab-link"><a href="#inquire-form" onclick="ec.product.loginCheckBefCoun();">发表咨询&gt;&gt;</a></div>
				</div>
			</div>

			
			<div class="pro-detail-tab-area pro-inquire-area tabcon2 " id="prddetail_counsel_all">
				
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div>
				<div class="pro-inquire-list" id="all_prd_counsel_content">
				
					
					<div class="pro-inquire-item clearfix">
						<div class="pro-inquire-user">
							<label>网友：</label><span>13306*****</span><s><i class="icon-vip-level-0"></i></s><em>2015-05-09 18:46:16</em>
						</div>
						<div class="pro-inquire-question">
							<label>咨询内容：</label><span>订单号：7240285960 什么时候发货，5月7号下的单，都9号了一点动静都没有，如果没发货，我可以换款别的吗？</span>
						</div>
						<div class="pro-inquire-answer">
							<label>回复：</label><span>您好，经查询商城已经发货了，请注意查收哦。感谢您的支持。</span>
							<em>2015-05-11 17:55:52</em>
						</div>
					</div>
					<div class="pro-inquire-item clearfix">
						<div class="pro-inquire-user">
							<label>网友：</label><span>13786*****</span><s><i class="icon-vip-level-0"></i></s><em>2015-05-09 18:28:25</em>
						</div>
						<div class="pro-inquire-question">
							<label>咨询内容：</label><span>订单号：1190238120，请问这个订单什么时候发货啊，用什么快递呢？谢谢</span>
						</div>
						<div class="pro-inquire-answer">
							<label>回复：</label><span>您好，已经发货了，发的圆通快递，单号：802176329028，请注意查收哦。</span>
							<em>2015-05-11 17:55:17</em>
						</div>
					</div>
				</div>
				<div class="pro-inquire-page clearfix">
					<div class="pro-inquire-record">共<em>168</em>条</div>
					
					<div class="pager" id="all_prd_counsel">
					</div>
				</div>
			</div>

			
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_prd" style="display:none;">
				
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div>
				<div class="pro-inquire-list" id="prd_prd_counsel_content">
				</div>
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_prd_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					
					<div class="pager" id="prd_prd_counsel">
					</div>
				</div>
			</div>

			
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_pay" style="display:none;">
				
				<div class="pro-inquire-tips" >
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div>
				<div class="pro-inquire-list" id="pay_prd_counsel_content">
				</div>
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_pay_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					
					<div class="pager" id="pay_prd_counsel_page">
					</div>
				</div>
			</div>

			
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_trans" style="display:none;">
				
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div>
				<div class="pro-inquire-list" id="trans_prd_counsel_content">
				</div>
				
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_trans_total">
					<div class="pro-inquire-record" >共<em></em>条</div>
					
					<div class="pager" id="trans_prd_counsel_page" >
					</div>
					
				</div>
			</div>

			
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_service" style="display:none;">
				
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div>
				<div class="pro-inquire-list" id="ser_prd_counsel_content">
				</div>
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_serv_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					
					<div class="pager" id="ser_prd_counsel_page">
					</div>
				</div>
			</div>

			
			<div class="pro-detail-tab-area pro-faq-area " id="prddetail_counsel_ques" style="display:none;">
				
				<div class="pro-faq-tips">
					<label>温馨提示：</label> 因商城随时可能更新商品版本、价格、附配件、赠品等信息未及时通知，且每位顾客的购买情况等也不同，为此以下常见问题答复仅供参考，具体请以下单页面显示为准！若给您带来的不便还请谅解，谢谢！
				</div>
				<div class="pro-faq-list" id="ques_prd_counsel_content">
							
							
							<dl class="pro-faq-item">
								<dt>荣耀4x主副卡可以切换吗？怎么切换？</dt>
								<dd>您好，全网通版可以自由切换。在“设置->SIM卡管理”中设定。</dd>
							</dl>
							<dl class="pro-faq-item">
								<dt>荣耀畅玩4X电信版和全网通版有什么区别？</dt>
								<dd>您好，主要区别有：1、电信版是电信定制机，全网通版不是。2、制式不同：电信版卡—电信4G、电信3G、移动2G / 联通2G（GSM）/ 电信2G；全网通4G版—
卡1：移动4G/3G/2G、联通4G/3G/2G、电信4G/3G/2G；卡2：移动4G/3G/2G、联通4G/3G/2G。3、数据限制：电信版只能使用电信卡上网，且电信卡只能放在卡槽1；全网通4G版2G、3G、4G均可以使用数据业务。</dd>
							</dl>
				</div>
					<div class="pro-faq-page clearfix" id="prddetail_counsel_ques_total">
						<div class="pro-faq-record">共<em>10</em>条</div>
						
						<div class="pager" id="ques_prd_counsel_page">
						</div>
					</div>
			</div>

			
			<div id="inquire-form" class="pro-inquire-form-area">
				<div class="h">
					<h3>发表咨询</h3>
					<p>声明：您可在购买前对产品包装、颜色、套餐、运输、支付等方面进行咨询，我们有专人进行回复！因产线可能会更改一些产品的包装、颜色、产地等参数，所以该回复仅在当时对提问者有效，其他网友仅供参考！咨询回复的工作时间为：周一至周五，9:00至18:00，请耐心等待工作人员回复。</p>
				</div>
				<div class="b">
					<div class="form-edit-area">
						<form autocomplete="off"  id="counsel_content_form">
							<div class="form-edit-table">
								<p>
									<b>咨询类型：</b>
									<input type="radio" class="radio vam" value="1" name="type" checked ><label class="vam" for="">商品咨询</label>
									<input type="radio" class="radio vam" value="2" name="type"><label class="vam" for="">支付</label>
									<input type="radio" class="radio vam" value="3" name="type"><label class="vam" for="">配送</label>
									<input type="radio" class="radio vam" value="4" name="type"><label class="vam" for="">售后</label>
								</p>
								<p><textarea placeholder=""  onfocus="ec.product.loginCheckBefCoun();" class="textarea" name="question" id="counseltextid"  maxlength="100"></textarea></p>
							</div>
							<div class="form-edit-action">
								<input type="button" class="button-style-4 button-inquire-sumbit" value="提交" onclick="ec.product.submitCounsel();">
								&nbsp;&nbsp;<span class="vam error" id="error-span" style="display:none"></span>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
    </div>
    <div class="fl u-1-4">
 

 <?php echo $this->fetch('library/top10.lbi'); ?>


 <?php echo $this->fetch('library/history.lbi'); ?>

<div class="hr-60"></div>

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




</script>
</html>
