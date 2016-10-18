<?php
/* @var $this ContactoController */
$baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerCoreScript('jquery');
    $cs->registerCssFile($baseUrl.'/css/contacto/contacto.css');
?>
<div class="content-wrapper"> 
	<div class="container-contacto">
		<div class="container-titulo">
			<label class="titulo1">¡CONTACTANOS!</label>
		</div>
		<div class="container-info">
			<div class="list">
				<div class="cont telefono"></div><div class= "cont1 tinfo"><span class="boldt">Cel:</span>(646)118-51-58</div>	
			</div>
			<div class="list">
				<div class="cont correo"></div><div class= "cont1 cinfo">ensenadabodas@gmail.com</div>
			</div>
	 	</div>
	</div>
	<div class="container-form">
			<div class="container-titulo">
				<label class="titulo1">¡MENSAJEANOS!</label>
			</div>
			<div class="form-box">
				<div class="form1"> 
					<input type="text" class="name-box" placeholder="Nombre (*requerido)"><input type="text" class="email-box" placeholder="E-mail (*requerido)">
				</div>
				<div class="form2">
					<input type="text" class="subject-box" placeholder="Asunto">
				</div>
				<div class="form3">
					<input type="text" class="question-box" placeholder="¿C&oacute;mo podemos ayudarte?">
				</div>
			</div>
	</div>
</div>
