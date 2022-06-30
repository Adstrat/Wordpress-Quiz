<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <header>
      <h1><a href="<?php echo site_url('') ?>"><?php bloginfo('title'); ?></a></h1>
    <nav class="navigation">
        <ul>
       <?php $homePagePosts = new WP_Query(array(
    'posts_type' => 'post'
  ));

  while ($homePagePosts->have_posts()) {
            $homePagePosts->the_post(); ?>

            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

         <?php } ?>
           
        </ul>
 
      </nav> 
    </header>

 
    
