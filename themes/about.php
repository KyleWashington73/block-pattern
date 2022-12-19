<?php  
/**  
* Template Name: About  
*  
* @package block-pattern  
*  
*/  
?>  
<?php get_header(); ?>
<!-- code goes here --> 



<div class="about">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'about' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>


<?php get_template_part('template-parts/about')?>  

<div class="bg-image">
    <img src="" class="image1" alt="">
</div>

<?php get_template_part('template-parts/services')?>

<?php get_footer();?>
