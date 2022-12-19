<?php  
/**  
* Template Name: Contact  
*  
* @package block-pattern  
*  
*/  
?>  
<?php get_header(); ?>
<!-- code goes here --> 



<div class="contact">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'contact' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>


<?php get_template_part('template-parts/contact')?>  



<?php get_template_part('template-parts/contact')?>

<?php get_footer();?>
