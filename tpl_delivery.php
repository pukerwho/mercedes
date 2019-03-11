<?php
/*
Template Name: Доставка
*/
?>

<?php get_header(); ?>

<div class="p_delivery">
	<!-- Слайдер -->
	<?php get_template_part('blocks/b_main-slider'); ?>

	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<div id="track24widget"></div>
			</div>
			<div class="col-md-12 text-center">
				Информация об отслеживании предоставлена сервисом <a href="https://track24.ru/">track24.ru</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p_delivery__text">
					<p>Ежегодно за пределами России разрабатываются и выходят на международный рынок новые эффективные лекарства, которые необходимы людям для личного лечения. Для регистрации новых препаратов должны провестись клинические испытания и сертификация. На эту процедуру уходят годы.  Однако с 2011 года можно абсолютно легально ввозить незарегистрированные препараты на территорию Российской Федерации:</p>
					<p><i>Согласно 61 ФЗ ст. 50  допускается ввоз в Российскую Федерацию конкретной партии зарегистрированных и (или) незарегистрированных лекарственных средств, предназначенных для проведения клинических исследований лекарственных препаратов, проведения экспертизы лекарственных средств для осуществления государственной регистрации лекарственных препаратов или <b>для оказания медицинской помощи по жизненным показаниям конкретного пациента на основании разрешения, выданного уполномоченным федеральным органом исполнительной власти по заявлениям лиц</b>, указанных в <a href="http://www.consultant.ru/document/cons_doc_LAW_99350/844d86d93f21c6fff3f8f7f4351f245c286d7e59/#dst100581" target="_blank">статье 48</a> настоящего Федерального закона.</i></p>
					<p>Для большинства людей это сложная задача. Необходимо найти препарат за границей, подготовить разрешительные документы для ввоза в Россию, оформить визу, приобрести билеты, осуществить перелет, пройти таможенный контроль. В случае назначения лечащим врачом повторной терапии повторить данную процедуру еще раз.  
					<p>Компания Медэкспресс сотрудничает исключительно с заводом изготовителем или официальным дистрибьютером. Это дает гарантию в получении оригинальной продукции. При наличии защитного кода Вы всегда сможете проверить подлинность товара на официальном сайте. </p>
					<p>После организации заказа в личном кабинете доступно online отслеживание местонахождения заказа.</p>
					<p>Более подробную информацию о сроках и стоимости доставки Вы можете уточнить у консультанта.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" language="javascript" src="https://api.track24.ru/track24widget.js"></script>


<script type="text/javascript">
 var track24Options = {
 'apiKey' : 'b7cab93f5fba1efc464693721a7851e5' /* необходимо указать свой apiKey */,
 'widgetId' : 'track24widget',
 'domain' : 'medexpress.timeto.top',
 'inputId' : 'track24Input',
 'buttonId' : 'track24Button',
 'resultId' : 'track24Result',
 'useCss' : true,
 'validate' : true,
 'codePage': 'UTF-8'  /* windows-1251 or UTF-8 */ 
  }; 
 </script>

<?php get_footer(); ?>