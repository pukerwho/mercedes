    </section>
    <footer id="footer" class="footer">
    	<div class="container">
    		<div class="row mb-4">
    			<div class="col-md-3">
    				<div class="footer__item">
    					<a href="/contact">
    						<div class="footer__item-title">
    							Контакты
    						</div>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="footer__item">
    					<a href="tel:8000000">
    						<div class="footer__item-title">
    							8-800-800-80-80
    						</div>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="footer__item">
    					<a href="#" data-toggle="modal" data-target="#forDoctorModal">
	    					<div class="footer__item-title">
	    						Информация для врачей
	    					</div>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="footer__item">
    					<div class="footer__item-title mb-3">
    						Подписаться на новости и акции
    					</div>
    					<div class="footer__item-form">
    						<?php echo do_shortcode('[contact-form-7 id="59" title="Рассылка"]') ?>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<div class="footer__copyright">
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
		        <h5 class="modal-title" id="exampleModalLabel">Информация для врачей</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        Текст
		      </div>
		    </div>
		  </div>
		</div>
    <?php wp_footer(); ?>
  </div>
</body>
</html>