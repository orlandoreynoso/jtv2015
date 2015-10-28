<?php 

/*
Template Name: Paginas Interiores
 */

 get_header();


?>

<section id="content" class="clearfix">
  
  <article class="col-2-3">
      <div class="mapeo"><?php the_breadcrumb(); ?></div>
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

      <div class="contenido-cartelera">
                  <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          // End the loop.
          endwhile;
          ?>

         <?php  the_content(); ?> 
      </div>
  </article>

  <aside class="col-1-5">
      <div class="cuadro-buscador">
        <h1>Busca tu contenido favorito</h1>        
      <div class="buscador"><?php  get_search_form();  //  if (is_page(5)) {   dynamic_sidebar('busqueda-header');   }   ?></div>
      </div>

      <div class="titulo"><h2>Danos like en facebook</h2></div>
      <div class="lateral">
      <?php  if (is_page(4)) {   dynamic_sidebar('ultimas-actualizaciones');   }       ?>
      </div>  

      <div class="redes">
      <iframe scrolling="no" frameborder="0" class="face_cocos" src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/Jesustvcanal&amp;width=263&amp;colorscheme=light&amp;connections=0&amp;stream=true&amp;header=true&amp;height=380" allowtransparency="true"> </iframe>             
      </div>
  </aside>


</section>



<?php get_footer();  ?>