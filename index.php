<?php 



/*

Template Name: Testimonios

 */



 get_header();





?>



<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->



  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>    

    <!-- INICIA BLOCK 02 -->
	<section id="block02">
	<div style="clear: both"></div>

    		<!-- INICIA col-2-3 -->	

	    <div class="col-2-3">
					<div class="mapeo">
						<!-- Breadcrumb -->
						<?php the_breadcrumb(); ?>
						<!-- Fin Breadcrumb -->
					</div> 

    				

    				<!-- INICIA contenido reflexiones -->	
					<div class="contenido-reflexiones">


    					<!-- INICIA cuadro compartir -->	
						<div id="compartir">    
						<p>Compartir  &raquo; </p>          
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
						<a class="addthis_counter addthis_bubble_style"></a>
						</div>

						<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>

						<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4def925768ffe7cc"></script>

						<!-- AddThis Button END -->

						</div> 

    					<!-- FINALIZA cuadro compartir -->							



						<div class="clearing"></div>



						<!-- INICIA TODO EL CONTENIDO DEL CUADRO IZQUIERDO -->	





									<?php if (have_posts()): while(have_posts()): the_post();  ?>



									<article class="post resume">
										<div class="post-title">
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<small class="meta"><span class="label-fecha"><?php the_time(get_option('date_format')); ?></span> &bull; <span class="label-cat"> Categoría </span> <span class="icon-cat"> &raquo </span>  <?php the_category(', '); ?></small>

										</div><!-- /header -->

										
										<div class="cont-all">
											<div class="linkit"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>											
											<div class="the-content"><?php the_excerpt();  ?></div>
											<div class="continuar-read"><a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Continuar leyendo &rarr;','apk'); ?></a></div>
										</div>	
          									

									</article>



									

									<?php endwhile; ?>



											<div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>									





									<?php else: ?>

										

									



									<article class="post resume">

										<div class="post-title">

											<h2><?php _e('No hay contenidos disponibles','apk' ) ?></h2>

										</div>



										<div class="post-content">

											<p><?php _e('No hay contenidos que correspondan con esta pagina, por favor revizar la busqueda para encontrar lo que desea','apk' ) ?></p>

											<?php get_search_form(); ?>

										</div>

										

									</article>





									<?php endif; ?>





						<!-- FINALIZA TODO EL CONTENIDO DEL CUADRO IZQUIERDO -->					



						

					</div>

					<!-- Finaliza contenido reflexiones-->	

		

			</div>

    		<!-- FINALIZA col-2-3 -->				



    		<!-- INICIA col-1-5 -->	

    		<div class="col-1-5">

					<!-- div class="titulo-cartelera"><h2></h2></div -->

					<div class="lateral-interior">

					<?php  zemanta_related_posts(7);  ?>

					</div>  

    		</div>

    		<!-- FINALIZA col-1-5 -->				

	

     



	<div style="clear: both"></div>

	</section>

    <!-- FINALIZA BLOCK 02 -->	





	

	<!-- div class="navigation"><?php // if(function_exists('pagenavi')) { pagenavi(); } ?></div -->

	

</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->

  



<?php  get_footer(); ?>