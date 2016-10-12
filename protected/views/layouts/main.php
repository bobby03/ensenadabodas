<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/inicio.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"></div>
	</div><!-- header -->
	<div class="header-container">
		<div class="seach-wrapper">
			<div class="search-content">
				<input class="buscador" type="text" name="buscar" placeholder="buscar">
				<select class="dropdown">
					<option value="0">Seleccionar</option>
				</select>
				<span class="search-button"></span>
			</div>
		</div>
	
	<?php if($this->id =='site') : ?>
	<div class="carrucel">
		<ul>
			<li>
				<div class="imagen">
					<div id="logo"></div>
				</div>
			</li>
			<li>
				<div class="imagen">
					<div id="logo"></div>
				</div>
			</li>
			<li>
				<div class="imagen">
					<div id="logo"></div>
				</div>
			</li>	
		</ul>
		<div class="controles">
			<div class="izquierda"></div>
			<div class="derecha"></div>
		</div>
	</div>
	<?php elseif($this->id =='acercade'): ?>
	<div class="container-header">
			<label class="textheader">NOSOTROS</label>
	</div>
<?php elseif($this->id =='contacto'): ?>
	<div class="container-header">
			<label class="textheader">CONTACTO</label>
	</div>
	<?php endif; ?> 
	</div>
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'INICIO', 'url'=>array('/site/index')),
				array('label'=>'NOSOTROS', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'CONTACTO', 'url'=>array('/site/contact')),
				// array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				// array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<div class="footer-content">
			<div id="logo"></div>
			<div class="descripcion">
				Ensenada bodas es una página en la cual puedes encontrar todos tus 
				proveedores de servicios para tu boda.
			</div>
			<div class='social-network'>
				<h2>¡Síguenos!</h2>
				<div class="facebook"></div>
				<div class="instagram"></div>
			</div>
			<div class="ribbon">Ensenada Bodas © 2016</div>
		</div>

		<!-- Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?> -->
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
