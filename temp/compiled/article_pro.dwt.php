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
 <link href="http://res.vmall.com/20150415/css/help/main.min.css?20141025" rel="stylesheet" type="text/css">
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
    	
        
        <div class="help-detail-area">
			<div class="h">
				<h3><?php echo htmlspecialchars($this->_var['article']['title']); ?></h3>
			</div>
        	<div class="b">
			
		 <?php if ($this->_var['article']['content']): ?>
     <?php echo $this->_var['article']['content']; ?>
     <?php endif; ?>
		
		
		</div>
            <div class="f">
            	<b></b>
                <s></s>
            </div>
        </div>
    </div>
	<div class="fl u-1-5">

<div class="help-menu-area">
    <div class="b">
        <ul>
		
 
 <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['hel'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hel']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['hel']['iteration']++;
?>
		<li><h3 style="text-align:left"><?php echo $this->_var['help_cat']['cat_name']; ?></h3>
 	<ol>
      <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <li <?php if ($this->_var['item']['article_id'] == $this->_var['id']): ?>class="current"<?php endif; ?>><a href="help.php?id=<?php echo $this->_var['item']['article_id']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>" ><?php echo $this->_var['item']['short_title']; ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     	</ol>
	 </li> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  
   
        </ul>
    </div>
</div>


   </div>
</div>


 
 <div class="hr-20"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
