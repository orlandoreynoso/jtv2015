<?php 



if (in_category(8)) 
{

    include(TEMPLATEPATH . '/page.php');

} 

else { // Sino, cargo otro single por defecto

    include(TEMPLATEPATH . '/page.php');
}


?>


<?php wp_link_pages(); ?>



