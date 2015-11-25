<?php get_header(); ?>


<div id="Top" class="lineTop"></div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
      $url = $thumb['0'];
    ?>
<section class="CoverIntro" style="background-image:url( <?= $url ?> );">
  <article class="CoverIntro-content container row middle-sm u-fullHeight">

  	<header class="Header col-sm-6 col-xs-12">
      <?php include(locate_template('layouts/nav.php')); ?>
  	</header>
    <article class="Description col-sm-6 col-xs-12 flex-column align-end">
      <h1><strong><?php the_title(); ?></strong></h1>
    </article>
  </article>
</section>

<section id="triggerBtnTop" class="ContentPost">
  <div class="container row center-xs">
    <div class="col-xs-10 start-xs middle-xs">
      <div class="">
        <?php include(locate_template('layouts/social.php')); ?>
      </div>
    </div>
    <article class="ContentPost-content col-xs-12 col-md-10">
      <?php the_content(); ?>
    </article>
    <article class="Author col-xs-10 center-xs row between-xs">
      <h3 class=""><?php the_author(); ?></h3>
      <h3 class=""><?php the_time('F j, Y'); ?> </h3>
    </article>
  </div>
</section>

<section class="Comments">
  <div class="">

  </div>
</section>

<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
