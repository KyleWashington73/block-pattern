<?php  
/**  
* Template Name: Services
*  
* @package block-pattern  
*  
*/  
?>  
<?php get_header(); ?>
<!-- code goes here --> 
<div class="services">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'services' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>

<?php get_template_part('template-parts/services')?>
<?php get_footer(); ?>
