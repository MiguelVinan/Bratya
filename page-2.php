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
      <h1><strong><?php the_field('about_us') ?></strong></h1>
      <p>
        <?php the_field('about_us_description') ?>
      </p>
    </article>

  </article>
</section>

<section class="AboutUs">
  <article class="AboutUs-whoAre container row middle-xs center-xs">
    <h2 class="col-xs-12 col-sm-10 center-xs"><?php the_field('about_us_quien'); ?></h2>
    <p class="col-xs-12 col-sm-10 center-xs">
      <?php the_field('about_us_quien_description') ?>
    </p>
  </article>

  <article id="triggerBtnTop" class="AboutUs-visionAndMission row center-xs middle-xs">
    <div class="container row center-xs">

      <div class="row col-xs-12 col-sm-5">
        <article class="row col-xs-12 ">
          <h2 class="col-xs-12 center-xs"><?php the_field('our_vision'); ?></h2>
          <i class=" col-xs-12 center-xs fa fa-industry fa-4x"></i>
          <p class="col-xs-12">
            <?php the_field('our_vision_description') ?>
          </p>
        </article>
      </div>

      <div class="row col-xs-12 col-sm-5">
        <article class="row col-xs-12 center-xs">
          <h2 class="col-xs-12 center-xs"><?php the_field('our_mission'); ?></h2>
          <i class="col-xs-12 center-xs fa fa-black-tie fa-4x"></i>
          <p class="col-xs-12">
            <?php the_field('our_mission_description') ?>
          </p>
        </article>
      </div>


    </div>
  </article>

  <article class="AboutUs-ourTeam container">
  <div class="row">
      <h2 class="col-xs-12 col-sm-10 center-xs">Nuestro Equipo</h2>
    <?php
      if( have_rows('our_team') ):
          while ( have_rows('our_team') ) : the_row(); ?>

            <div class="TeamMember col-xs-12 col-sm-6 col-md-3">
              <figure>
                <img src="<?php the_sub_field('team_image') ?> " alt="<?php the_sub_field('team_name') ?>" />
                <span><i><?php the_sub_field('team_name') ?></i></span>
              </figure>
              <h3><?php the_sub_field('cargo'); ?></h3>
              <p><?php the_sub_field('email_personal'); ?></p>
            </div>

    <?php
          endwhile;
      else : ?>
      <?php endif;
    ?>
  </div>
  </article>

  <article class="">
    <?php
      $location = get_field('map');
      if( !empty($location) ):
      ?>
      <div class="acf-map">
      	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>

    <?php endif; ?>
  </article>

</section>




<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
