<?php 

/*
Template Name: TravelZone
 */

 get_header();


?>


<div class="banner">
      <?php 
      //**if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } 
      if ( function_exists( 'soliloquy' ) ) { soliloquy( '33' ); } 
      if ( function_exists( 'soliloquy' ) ) { soliloquy( 'travelzone', 'slug' ); }
      ?>  
      <div style="clear: both"></div>        
</div>

    <!--  INICIA DIV DE ICONOS -->

    <article class="iconos">
          <?php if (is_page(5)) {   dynamic_sidebar('acordion');   }   ?>      
          <?php // echo do_shortcode(dynamic_sidebar('acordion')); ?>
    </article>
    <!-- FINALIZA DIV DE ICONOS -->






<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->





  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>  

      <div style="clear: both"></div>  

<section id="block02">
      <div style="clear: both"></div>
    <div class="col-2-3">
     <div class="mapeo">
          <!-- Breadcrumb -->
          <?php the_breadcrumb(); ?>
          <!-- Fin Breadcrumb -->
     </div> 

      <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->
    
    <div class="contenido-cartelera">
      
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

        <div class="clearing"></div>


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

        <div class="clearing"></div>
         <div class="division-home"><p>&nbsp;</p></div>        
  

        <div class="clearing"></div>

    </div>


    </div>

     <div class="col-1-5">

<div class="divpagos">
  <h1>OPCIONES DE PAGO</h1>
  <div class="divpagos-contenido  "><?php   dynamic_sidebar('opciones-de-pago'); ?></div>  
</div>

           <div class="cuadro-paquetes2">
      <h1><!-- SUSCRIBETE --></h1>     
      <div class="cuadro-paquetes2-contenido">
       <P>Recibe ofertas, promociones y mucho más.</P>
        <?php  if (is_page(5)) {   dynamic_sidebar('suscripcion');   }       ?>           
      </div>           
       
       
    </div>

              <div class="titulo-cartelera"><h2>Últimas actualizaciones</h2></div>
              <div class="lateral">
                <?php  if (is_page(5)) {   dynamic_sidebar('ultimas-actualizaciones');   }       ?>

                <div class="redes">
                  <iframe class="face_cocos"  src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FTravel-Zone%2F122124437856110&amp;width=440&amp;colorscheme=light&amp;show_faces=false&amp;stream=true&amp;header=false&amp;height=395" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:440px; height:395px;" allowTransparency="true"></iframe>                                  
                </div> 
                
              </div>  

          

      </div>     


      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->
  

<?php 

/*   if (is_page(7)) {*/
     get_footer();
/*   }*/

?>