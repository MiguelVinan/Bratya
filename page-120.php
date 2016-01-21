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
      <p>
        <?php the_content(); ?>
      </p>
    </article>

  </article>
</section>

<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

<section id="triggerBtnTop" class="container NewCover row">
<?php query_posts(array ('paged' => $paged,'posts_per_page' => 10, 'post_type'=> 'blog' )) ?>
  <?php $count=0; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
    $url = $thumb['0'];
  ?>
<?php $count++; ?>
<?php if($count == 1 && $paged < 2) {?>

  <div class="row container">
    <a href="<?php the_permalink(); ?> " class="col-xs-12">
      <article class="Cover" style="background-image: url('<?= $url ?>')">
        <div class="Cover-metadata" >
          <h1 class="Title"><?php the_title(); ?></h1>
          <div class="Cover-data">
            <p class="Author"><?php the_author(); ?></p>
            <time class="Date"><?php the_time('F j, Y'); ?></time>
          </div>
        </div>
      </article>
    </a>
  </div>

<?php }else{?>
  <article class="Article col-xs-12 col-sm-6 col-md-4">
    <a href="<?php the_permalink(); ?>" class="Article-image">
      <figure class="image" style="background-image: url('<?= $url ?>')">
      </figure>
      <h3 class="Article-title"><?php the_title(); ?></h3>
    </a>
    <div class="Article-metadata row between-xs">
      <p class="Author"><?php the_author(); ?></p>
      <p class="Date"><?php the_time('F j, Y'); ?></p>
    </div>
  </article>

  <?php } ?>
<?php endwhile; ?>
  </section>
  <div class="Pagination col-xs-12 center-xs"><?= paginate_links() ?></div>
<?php  else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos articulos por el momento :(' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>
