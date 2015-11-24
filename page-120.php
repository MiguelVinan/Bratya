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


<section id="triggerBtnTop" class="container NewCover">
  <article class="Cover" style="background-image: url('../image/keyboard.jpg')">
    <div class="Cover-metadata" >
      <h1 class="Title">3 consejos que todo nuevo empresario debe conocer</h1>
      <footer class="Cover-data">
      <p class="Author"> Luis Hidalgo S.</p>
      <time class="Date"> 2012-10-31</time>
      </footer>
    </div>
  </article>
</section>

<section class="container NewArticle row">

  <article class="Article col-xs-12 col-sm-4">
    <a href="#" class="Article-image">
      <figure class="image" style="background-image: url(./image/hora.jpg)">
      </figure>
    </a>
    <h3 class="Article-title">La puntualidad: un factor básico de tu trabajo</h3>
    <div class="Article-metadata row ">
      <p class="Author col-xs-6">Luis Hidal</p>
      <p class="Date col-xs-6 end-xs">11/11/2015</p>
    </div>
  </article>

  <article class="Article container col-xs-12 col-sm-4">
    <a href="#" class="Article-image">
      <figure class="image" style="background-image: url(./image/hora.jpg)">
      </figure>
    </a>
    <h3 class="Article-title">La puntualidad: un factor básico de tu trabajo</h3>
    <div class="Article-metadata row">
      <p class="Author col-xs-6">Luis Hidal</p>
      <p class="Date col-xs-6 end-xs">11/11/2015</p>
    </div>
  </article>

  <article class="Article col-xs-12 col-sm-4">
    <a href="#" class="Article-image">
      <figure class="image" style="background-image: url(./image/hora.jpg)">
      </figure>
    </a>
    <h3 class="Article-title">La puntualidad: un factor básico de tu trabajo</h3>
    <div class="Article-metadata row">
      <p class="Author col-xs-6">Luis Hidal</p>
      <p class="Date col-xs-6 end-xs">11/11/2015</p>
    </div>
  </article>
  <article class="Article col-xs-12 col-sm-4">
    <a href="#" class="Article-image">
      <figure class="image" style="background-image: url(./image/hora.jpg)">
      </figure>
    </a>
    <h3 class="Article-title">La puntualidad: un factor básico de tu trabajo</h3>
    <div class="Article-metadata row">
      <p class="Author col-xs-6">Luis Hidal</p>
      <p class="Date col-xs-6 end-xs">11/11/2015</p>
    </div>
  </article>

</section>

<?php get_footer(); ?>
