    </section>
    <footer id="footer" class="footer">
    	<div class="container">
    		<div class="row mb-4">
                <div class="col-md-3">
                    <div class="footer__item text-center">
                        <div class="footer__logo mb-1">
                            <img src="<?php bloginfo('template_url') ?>/img/logo-medexpress.png" width="70px" alt="">
                        </div>
                        <div class="footer__logo-title">
                            MedExpress
                        </div>
                    </div>
                </div>
    			<div class="col-md-3 offset-md-1">
    				<div class="footer__item">
    					<a href="/contact">
    						<div class="footer__item-title">
    							Контакты
    						</div>
    					</a>
                        <a href="#" data-toggle="modal" data-target="#forDoctorModal">
                            <div class="footer__item-title">
                                Информация для врачей
                            </div>
                        </a>
                        <a href="tel:88005053732" class="footer__phone">
                            <div class="footer__item-title">
                                8-800-505-37-32
                            </div>
                        </a>
    				</div>
    			</div>
    			<div class="col-md-5">
    				<div class="footer__item">
    					<div class="footer__item-title text-center mb-3">
    						Подписаться на новости и акции
    					</div>
    					<div class="footer__item-form">
    						<?php echo do_shortcode('[contact-form-7 id="267" title="Рассылка"]') ?>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<div class="footer__copyright">
                        <?php if( !is_page_template( 'tpl_main.php' )): ?>
                            2019 &copy; Медэкспресс.рус
                        <? else: ?>
                            2019 &copy; 
                            <span typeof="v:Breadcrumb"> <a href="http://xn--d1abbthvhgda9j.xn--p1acf/" rel="v:url" property="v:title" class="text-white"> Медэкспресс.рус</a> › </span> <span typeof="v:Breadcrumb"> <a href="http://xn--d1abbthvhgda9j.xn--p1acf/#gepatitC" rel="v:url" property="v:title" class="text-white">Лечение гепатита С</a> </span>
                        <?php endif ?>
                        <br><br>
    					Разработка сайта: <a href="https://timeto.top/" target="_blank">TimeToTop</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>

    <!-- Modal Для врачей -->
		<div class="modal fade bd-example-modal-lg" id="forDoctorModal" tabindex="-1" role="dialog" aria-labelledby="forDoctorModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title text-center" id="exampleModalLabel">Информация для врачей</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
                <div class="fordoctor">
                    <p>В настоящее время компания Медэкспресс сотрудничает с врачами по поиску препаратов для лечения граждан на территории России. Многочисленные положительные отзывы лечения стали возможными благодаря этому взаимодействию.</p>
                    <p>Мы надеемся, что в будущем о нашем сервисе по поиску препаратов узнают миллионы людей и каждый врач внесет личный вклад в современное здравоохранение вместе с нами.</p>
                    <p>Для получения новостей и актуальной информации подпишитесь на рассылку.
                    <div class="text-center">
                        <span>За более подробной информацией о сотрудничестве обращайтесь по номеру:</span>
                        <br><br>
                        <span class="font-weight-bold lead">8-800-505-37-32</span>
                    </div>
                    
                </div>
		      </div>
		    </div>
		  </div>
		</div>
    <?php wp_footer(); ?>
  </div>
  <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = 'SFvIssLO1B';var d=document;var w=window;function l(){
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
      s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
      if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
      else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
</body>
</html>