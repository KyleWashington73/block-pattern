<?php  
/**  
* Template Name: Properties
*  
* @package block-pattern  
*  
*/  
?>  
<?php get_header(); ?>
<!-- code goes here --> 

<div class="properties">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'properties' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>

<?php get_template_part('template-parts/properties')?>
<?php get_footer();?>
