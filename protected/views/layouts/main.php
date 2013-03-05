<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
		
	</header><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
				'type'=>'inverse', // null or 'inverse'
				'brand'=>'Cóndor',
				'brandUrl'=>array('/site/index'),
				'collapse'=>true, // requires bootstrap-responsive.css
				'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Temas', 'url'=>array('/Temas/index')),

						array('label'=>'¿Quienes Somos?', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contactanos', 'url'=>array('/site/contact')),
						
			),
		),
		'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		),
	),
));?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
		Copyright &copy; Colegio Universitario de Caracas - PNFI. <?php echo date('Y'); ?>. <br/>
		Coordinación de Desarrollo Tecnológico.<br/>
		Este sitio web está liberado bajo una licencia <a href="http://creativecommons.org/licenses/by/3.0/"target="_blank">Creative Commons Attribution 3.0 License</a>.<br/>
		<?php echo Yii::app()->params['adminEmail']?>
		<aside>
			<article>
			
        	<img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Logo.png"
            alt="¡HTML5!" />

            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Styling.png"
            alt="¡HTML5 CSS3!" />
            
            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Multimedia.png"
            alt="¡HTML5 Multimedia!" />
            
            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-3D-Effects.png"
            alt="¡HTML5 Multimedia!" />            
            
            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Semantics.png"
            alt="¡HTML5 Semantica!" />
            
			</article>
		</aside>
	</footer><!-- footer -->
	

</div><!-- page -->

</body>
</html>
