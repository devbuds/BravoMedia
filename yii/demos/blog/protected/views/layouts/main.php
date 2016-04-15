<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">	
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" media="all and (min-width: 0px) and (max-width: 480px)"  />
	
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext">
	
	
<!-- javascript files -->
<?php 
Yii::app()->clientScript->registerCoreScript('jquery');
$cs = Yii::app()->getClientScript();
$baseUrl = Yii::app()->baseUrl;
$cs->registerScriptFile($baseUrl.'/js/main.js');

?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">		
		<div class="mobile-menu">
		<div class="menu_icon_container">
		 <a href="#menu"><img class="mobile-menu-img"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_icon.png"  alt="menu_icon" ></a>
		</div>
	<div id="mainmenu-mobile">
	</div><!-- mainmenu -->
	</div>
		<div class="headLogo">
			<a href="<?= $this->createUrl('post/index') ?>"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/bravomedia_black.png"  alt="Bravomedia logo" ></a>
		</div>
</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
		    'htmlOptions'=>array('class'=>'right-menulist'),
			'items'=>array(
				array('label'=>'HOME', 'url'=>array('post/index')),
			    array('label'=>'PRODUCTS', 'url'=>array('site/product')),
			),
		)); ?>
	</div><!-- mainmenu -->
	

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		<div class="footerLogo">
			<a href="<?= $this->createUrl('post/index') ?>"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/bravomedia_white.png"  alt="Bravomedia logo" ></a>
		</div>
		
        <!--	for desktop view -->
		<div class="copyrightMessage-desktop">Copyright &copy; <?php echo date('Y'); ?> by My Company 
				All Rights Reserved.<?php echo Yii::powered(); ?>
		</div>
        
        <!-- for mobile view only -->
		<div class="copyrightMessage-mobile">
            		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            		All Rights Reserved.<br/>
            		<?php echo Yii::powered(); ?>
		</div>	
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>