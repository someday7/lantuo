<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="http://res.vmall.com/20150415/css/notice/main.min.css?20141025" rel="stylesheet" type="text/css">
<link href="themes/default/css/ec.core.min.css?20150213" rel="stylesheet" type="text/css
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

 
    <div class="fr u-4-5">
    	
        <div class="part-area clearfix">
            <div class="fl">
                <h3 class="ni-title"><span>ss</span></h3>
            </div>
           
        </div>
        <div class="hr-2"></div>
        
        <div class="news-list" id="news-list-ul">
            <ul class="clearfix">
			
			
			 <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
			 
			     <li>
                	<span class="fl"><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a></span>
                    <span class="fr"><?php echo $this->_var['article']['add_time']; ?></span>
                </li>
				
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  
                
            </ul>
        </div>
        <div class="hr-25"></div>
        
        <div class="pager" id="list-pager"><ul>
		 
  <?php echo $this->fetch('library/pages.lbi'); ?>
		</ul></div>
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
<div class="ad ad179"></div>
</div>
</div>



  </div>  
  
 <div class="hr-20"></div>
<div class="blank5"></div>
 
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
