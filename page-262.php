<?php get_header(); ?>

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

<section class="allClients container row">
  <?php
    if( have_rows('clientes') ):
        while ( have_rows('clientes') ) : the_row(); ?>
          <div class="client center-xs bottom-xs col-xs-12 col-sm-3 row">
            <a class="client-url" href="<?php the_sub_field('url_client') ?>">
              <figure class="client-image">
                <img src="<?php the_sub_field('image_client') ?>" alt="<?php the_sub_field('name_client') ?>" />
              </figure>
            </a>
            <div class="client-title">
              <h3><?php the_sub_field('name_client') ?></h3>
            </div>
          </div>
        <?php endwhile;
    else :
    ?> <span>Espera, nos olvidamos de colocar un cliente.</span><?php
    endif;
  ?>
</section>

<?php get_footer(); ?>
