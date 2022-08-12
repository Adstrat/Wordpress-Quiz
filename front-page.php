<?php get_header(); ?>

<main>

  <h1><?php bloginfo('description'); ?></h1>

<!--   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; else: endif; ?> -->

  <div class="custom-block-container">

    <?php $mainText = get_field('main_text'); ?>

    <img src="<?php echo $mainText['image']['sizes']['large'];?>" >
    
    <div class="custom-block-text">
      <p><?php echo $mainText['text']; ?></p>
    </div>
    
  </div>

  <h1>TEST YOUR GERMAN NOW</h1>

  <div class="posts-container">

    <?php $homePagePosts = new WP_Query(array(
        'posts_type' => 'post'
      ));

      while ($homePagePosts->have_posts()) {
        $homePagePosts->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

      <?php } ?>


  </div>
  
</main>

<?php get_footer(); ?>