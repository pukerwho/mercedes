<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<div class="p_contact">
	<!-- Слайдер -->
	<?php get_template_part('blocks/b_main-slider'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="mb-3">
					Телефон горячей линии:
				</div>
				<div class="p_contact__title mb-3">
					<a href="tel:88005053732">
						8-800-505-37-32
					</a>
				</div>
				<div class="mb-3">
					Email:
				</div>
				<div class="p_contact__title mb-5">
					<a href="mailto:Medexpressonline@gmail.com">
						Medexpressonline@gmail.com
					</a>
				</div>
				<div class="mb-4">
					Наш адрес: Россия, г. Москва, 123112, Пресненская набережная, д.12, ММДЦ «Москва-Сити», Башня «Федерация Запад», 45 этаж, офис №82
					<br><br>+7(495) 134-06-34 многоканальный
					<br><br>
					Филиал: Россия, г. Рязань, 390000, Первомайский проспект, д. 56, 4 этаж, офис №417, телефон +7(4912) 70-19-43
				</div>
				<div class="p_contact__img mb-5">
					<div class="parallax-window" data-parallax data-parallax="scroll"  data-position="top" data-bleed="0" data-src="<?php bloginfo('template_url') ?>/img/medexpress-contact.jpg"></div>
					<!-- <div class="parallax-window" data-parallax data-parallax="scroll"  data-position="top" data-bleed="0" data-src="<?php bloginfo('template_url') ?>/img/medexpress-contact.jpg" alt=""></div> -->
				</div>
				<div class="mb-3">
					Как проехать:
				</div>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.046133454047!2d37.533195662015956!3d55.749824128190156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQ0JzU5LjUiTiAzN8KwMzInMTIuMCJF!5e0!3m2!1sru!2sua!4v1552503049202" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>