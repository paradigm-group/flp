<?php get_header(); ?>

    <div id="top" class="content">
    
      <div class="wrapper">
      
        <div class="container">
    
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
              <?php
                // the content (pretty self explanatory huh)
                the_content();
              ?>

          <?php endwhile; else : ?>

          <?php endif; ?>
          
        </div>
      
      </div>
      
    </div>

<?php get_footer(); ?>
