<?php
/*
Template name: index
*/
get_header(); ?>
      <?php 
        while(have_posts()){  
          the_post(); ?>     
          <?php the_content(); ?>
       <?php  }
           echo paginate_links();
      ?>

    </div>
    <?php get_footer(); ?>