<?php get_header(); ?>

<div id="Top" class="lineTop"></div>
<?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&p=31') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>

<section class="CoverIntro" style="background-image:url( <?= $url ?> );">
  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
  <?php endif; ?>
  <div id="parallaxText">
    <span class="markWater markWater-first layer1">Bratya</span>
    <span class="markWater markWater-last layer2">Azanza</span>
  </div>
  <article class="CoverIntro-content container row middle-sm u-fullHeight">

  	<header class="Header col-sm-6 col-xs-12">
      <?php include(locate_template('layouts/nav.php')); ?>
  	</header>
    <article class="Description col-sm-6 col-xs-12 flex-column align-end" style="color:<?php the_field('intro_description_color') ?>;">
      <h1><strong style="color:<?php the_field('intro_description_color')?>;"><?php the_field('primary_title') ?></strong></h1>
      <p>
        <?php the_field('intro_description') ?>
      </p>
      <a href="#Contact" class="btn-primary"><span><?php the_field('button_convertion') ?></span></a>
    </article>

  </article>
</section>

<section class="Info" id="trigger2">
  <div id="Hands">
    <figure><img class="leftHand" src="<?= get_template_directory_uri().'/assets/images/leftHand.png' ?>" alt="" /></figure>
    <figure><img class="rightHand" src="<?= get_template_directory_uri().'/assets/images/rightHand.png' ?>" alt="" /></figure>
  </div>
  <div class="container u-fullHeight">
    <div id="HandsText" class="Info-description u-fullHeight row bottom-xs">
      <article class="col-xs-12 col-sm-6">
        <?php rewind_posts(); ?>
          <?php query_posts('post_per_page=1&p=47') ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
        <p>
          <?php the_content(); ?>
        </p>
            <?php endwhile; else : ?>
        <p><?php _e( 'No existe contenido, por favot ingresa desde el panel de administracion' ); ?></p>
            <?php endif; ?>
      </article>
    </div>
  </div>
</section>

<?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&p=51') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>
<section id="triggerBtnTop" class="Info Results" style="background-image:url( <?= $url ?> );">

  <span id="triggerProgress"></span>
  <div class="container u-fullHeight row bottom-xs end-xs">
    <div class="column">
      <div class="Results-percentage">
        <span id="progress">0</span><span class="simbolPercentage">%</span>
      </div>
      <article id="Results-info" class="Results-description col-sm-offset-4 col-md-offset-6 col-xs-12">
        <h2><?php the_title(); ?></h2>
        <p>
        <?php the_content(); ?>
        </p>
      </article>
    </div>
  </div>
</section>
  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, no tenemos contenido por el momento :(' ); ?></p>
  <?php endif; ?>
<span  id="trigger3"></span>

<section id="Services" class="Info Services">
  <?php query_posts('post_per_page=1&p=97') ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container row">
    <article class="Services-firstPart row col-xs-12">
      <h2 class="u-textWhite col-xs-12 col-sm-4"><?php the_field('our_services') ?></h2>
      <ul class="link-effect Services-list col-xs-12 col-sm-6">
        <?php
          if( have_rows('services_first_section') ):
              while ( have_rows('services_first_section') ) : the_row(); ?>
                <li class="Services-item col-xs-12">
                  <a href="#"><i class="fa fa-long-arrow-right fa-fw"></i><?php the_sub_field('service_first_section') ?></a>
                  <article class="ServicesDescription is-hidden">
                    <!-- <span class="fa fa-times-circle fa-2x ServicesDescription-times"></span> -->
                    <div class="Meta-info flex-row align-center">
                      <span class="fa fa-info-circle fa-2x"></span>
                      <span><strong>click</strong> en cualquier lugar de la pantalla para salir de esta vista.</span>
                    </div>
                    <div>
                      <h2 class="ServicesDescription-title"><?php the_sub_field('service_first_section') ?></h2>
                      <p class="ServicesDescription-info"><?php the_sub_field('service_first_description') ?></p>
                    </div>
                  </article>
                </li>
        <?php
              endwhile;
          else : ?>
            <span style="color:white;">No existen servicios por el momento, agrega uno desde el panel de administración</span>
          <?php endif;
        ?>
      </ul>
    </article>

    <article class="Services-secondPart row col-xs-12">
      <h2 class="u-textWhite col-xs-12 col-sm-4"></h2>
      <ul class="link-effect Services-list col-xs-12 col-sm-6">
        <?php
          if( have_rows('services_second_section') ):
              while ( have_rows('services_second_section') ) : the_row(); ?>
                <li class="Services-item">
                  <a href="#"><i class="fa fa-long-arrow-right fa-fw"></i><?php the_sub_field('service') ?></a>
                  <article class="ServicesDescription is-hidden">
                    <!-- <span class="fa fa-times-circle fa-2x ServicesDescription-times"></span> -->
                    <div class="Meta-info flex-row align-center">
                      <span class="fa fa-info-circle fa-2x"></span>
                      <span><strong>click</strong> en cualquier lugar de la pantalla para salir de esta vista.</span>
                    </div>
                    <div>
                      <h2 class="ServicesDescription-title"><?php the_sub_field('service') ?></h2>
                      <p class="ServicesDescription-info"><?php the_sub_field('service_description') ?></p>
                    </div>
                  </article>
                </li>
        <?php
              endwhile;
          else : ?>
            <span style="color:white;">No existen servicios por el momento, agrega uno desde el panel de administración</span>
          <?php endif;
        ?>
      </ul>
    </article>
    <p class="u-textWhite Services-note col-xs-12 col-sm-5">
      Si nececitas mayor información sobre nuestros servicios individualmente, te invitamos que ingreses dando click en cualquier servicio de nuestra lista.
    </p>
  </div>
  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, no tenemos contenido por el momento :(' ); ?></p>
  <?php endif; ?>
</section>

<section id="GetIn" class="Info GetIn">
  <span id="triggerGetIn"></span>
  <?php query_posts('post_per_page=1&p=71') ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container row u-fullHeight bottom-xs">
    <div class="GetIn-info col-sm-6 col-xs-12 u-textWhite">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, no tenemos contenido por el momento :(' ); ?></p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
