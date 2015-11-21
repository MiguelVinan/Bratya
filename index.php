<?php get_header(); ?>

<div class="lineTop"></div>
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
  <article class="CoverIntro-content container row middle-md u-fullHeight">

  	<header class="Header col-md-6 col-xs-12">
      <figure>
        <img src="<?= get_template_directory_uri().'/assets/images/brand.png' ?>" alt="">
      </figure>
      <?php include(locate_template('layouts/nav.php')); ?>
  	</header>
    <article class="Description col-md-6 col-xs-12 flex-column align-end" style="color:<?php the_field('intro_description_color') ?>;">
      <h1><strong style="color:<?php the_field('intro_description_color')?>;"><?php the_field('primary_title') ?></strong></h1>
      <p>
        <?php the_field('intro_description') ?>
      </p>
      <a href="#" class="btn-primary"><span><?php the_field('button_convertion') ?></span></a>
    </article>

  </article>
</section>

<section class="Info" id="trigger2">
  <div id="Hands">
    <figure><img class="leftHand" src="<?= get_template_directory_uri().'/assets/images/leftHand.png' ?>" alt="" /></figure>
    <figure><img class="rightHand" src="<?= get_template_directory_uri().'/assets/images/rightHand.png' ?>" alt="" /></figure>
  </div>
  <div class="container u-fullHeight flex-row align-end">
    <article id="HandsText" class="Info-description row col-md-6">
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
</section>

<?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&p=51') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>
<section class="Info Results" style="background-image:url( <?= $url ?> );">

  <span id="triggerProgress"></span>
  <div class="container u-fullHeight flex-row align-end justify-end">
    <div class="flex-column justify-center align-end">
      <div class="Results-percentage">
        <span id="progress">0</span><span class="simbolPercentage">%</span>
      </div>
      <article id="Results-info" class="Results-description col-md-6">
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

<section class="Info Including">
  <?php query_posts('post_per_page=1&p=57') ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="Title">
      <h2><?php the_title(); ?></h2>
      <span class="markWater markWater-including"><?php the_title(); ?></span>
    </div>
    <article class="Including-objetions row">
      <div class="Objetion Objetion-one col-md-3 flex-column justify-start align-center">
        <div class="square flex-row justify-center align-center"><i class="fa fa-flask fa-4x"></i></div>
        <p><?php the_field('objetion_one') ?></p>
      </div>
      <div class="Objetion Objetion-two col-md-3 flex-column justify-start align-center">
        <div class="square flex-row justify-center align-center"><i class="fa fa-building fa-4x"></i></div>
        <p><?php the_field('objetion_two') ?></p>
      </div>
      <div class="Objetion Objetion-three col-md-3 flex-column justify-start align-center">
        <div class="square flex-row justify-center align-center"><i class="fa fa-male fa-4x"></i></div>
        <p><?php the_field('objetion_three') ?></p>
      </div>
      <div class="Objetion Objetion-four col-md-3 flex-column justify-start align-center">
        <div class="square flex-row justify-center align-center"><i class="fa fa-truck fa-4x"></i></div>
        <p><?php the_field('objetion_four') ?></p>
      </div>
    </article>
  </div>
  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, no tenemos contenido por el momento :(' ); ?></p>
  <?php endif; ?>
</section>

<section class="Info Services flex-row justify-center align-center">
  <?php query_posts('post_per_page=1&p=97') ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container flex-column align-center">
    <article class="Services-firstPart flex-row justify-center align-center">
      <h2 class="u-textWhite"><?php the_field('our_services') ?></h2>
      <ul class="link-effect Services-list">
        <?php
          if( have_rows('services_first_section') ):
              while ( have_rows('services_first_section') ) : the_row(); ?>
                <li class="Services-item">
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

    <article class="Services-secondPart flex-row justify-center align-center">
      <h2 class="u-textWhite">Ademas</h2>
      <ul class="link-effect Services-list">
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
    <p class="u-textWhite Services-note">
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
  <div class="container row u-fullHeight align-end">
    <div class="GetIn-info col-md-6 u-textWhite">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, no tenemos contenido por el momento :(' ); ?></p>
  <?php endif; ?>
</section>

<section id="triggerQuote" class="Quote flex-column justify-center align-center">
  <aticle>
    <?php query_posts('post_per_page=1&p=75') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p class="lead u-textWhite">"<?php the_field('quote') ?>"</p>
      <span class="u-textWhite">- <?php the_field('quote_author') ?></span>
    <?php endwhile; else : ?>
      <p><?php _e( 'Estamos escogiendo la mejor cita para compartir :)' ); ?></p>
    <?php endif; ?>
  </aticle>
</section>

<?php get_footer(); ?>
