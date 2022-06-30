<?php 

get_header();

?>
<main>

  <h1><?php bloginfo('description'); ?></h1>

  <?php

    while(have_posts()){
      the_post(); ?>

      <div class="single-content">
       <h1><?php the_title(); ?></h1>
        <?php the_content();?>
      </div>

  <?php } ?>

<main>

<?php

get_footer();

?>