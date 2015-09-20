<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="http://res.vmall.com/20150415/css/notice/main.min.css?20141025" rel="stylesheet" type="text/css">
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css">
<link href="themes/default/css/index.min.css?20141025" rel="stylesheet" type="text/css">
 <link href="themes/default/css/main.2.css" rel="stylesheet" type="text/css">
 <link href="themes/default/css/public.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/lantuo.css" rel="stylesheet" type="text/css">


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="pingce-main">
<div class="main_con">
    
<div class="breadcrumb-area fcn">
 
  <?php echo $this->fetch('library/ur_here.lbi'); ?>

</div>
<div class="">


<div class="">
    <div class="fr u-4-5">
        
        <div class="news-area">
        	<div class="h">
            	<h1><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
                <div class="news-extra-area clearfix">
                	<div class="fl">更新时间<?php echo $this->_var['article']['add_time']; ?></div>
			<div class="fr">

    <div id="bdshare" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_1" data-bd-bind="1431572111080">
	<a class="bds_more" data-cmd="more" style="padding-top: 0px;">分享到：</a>
	<a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
	<a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
	<a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
	<a class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
	<a class="bds_count" data-cmd="count" title="累计分享0次">0</a>
    </div>
<script type="text/javascript">
	window._bd_share_config = {
		common : {
			bdText : '#华为商城#商务人士首选设备华为手环B2双管齐下'
		},
		share : [{
			"bdSize" : 16
		}]
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
	
</script>

</div>
                </div>
            </div>
            <div class="b">
			
			
			 <?php if ($this->_var['article']['content']): ?>
          <?php echo $this->_var['article']['content']; ?>
         <?php endif; ?>
			
			
			
			
			
			
			
			</div>
            <div class="f">
            	<ul>
                    <li>下一篇:<a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6"><?php echo $this->_var['prev_article']['title']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
	<div class="fl u-1-5">
<div class="news-menu-area">
	<div class="h">
	<s></s>
	<b></b>
    </div>
    <div class="b">
	<ul class="clearfix">
	
	
	   <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
   <li id="menu-media"> <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
      <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
    <li id="menu-media">  <a href="<?php echo $this->_var['child']['url']; ?>" style="background-image:none;"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
 	
 	 
	</ul>
    </div>
</div>
<div class="hr-15"></div>
<div class="ad ad179"><!--<p><a title="G520" href="/product/1064.html" target="_blank"><img src="http://res.vmall.com/pimages//sale/2014-07/20140708110119554.jpg" height="403" width="179"></a></p>--></div>
 </div>
  </div>
	
	
	  </div>
	   </div>
 <div class="hr-20"></div>
<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
