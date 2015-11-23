<footer id="Contact">
  <a href="#Top" class="btn-top"><i class="fa fa-arrow-up fa-fw"></i></a>
  <?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&category_name=formulario') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="Contact container row middle-xs center-xs">
    <article class="Contact-card col-xs-12 col-sm-6 flex-column justify-center align-center">
      <figure class="col-xs-12">
        <img src="<?= get_template_directory_uri().'/assets/images/Logotipo_black.png' ?>" alt="">
      </figure>
      <article class="Box row justify-around">
        <div class="Box-cardContacts col-xs-12 col-sm-6">
          <p class="flex-column align-start">
            <label class="u-uppercaseTransform">TELEFONO:</label>
            <?php
              if( have_rows('phones') ):
                  while ( have_rows('phones') ) : the_row(); ?>
                  <span><?php the_sub_field('phone') ?></span>
                  <?php endwhile;
              else :
              ?> <span> Lo lamentamos, aún no hemos colocado un número de teléfono :)</span><?php
              endif;
            ?>
          </p>
          <p class="flex-column start-xs">
            <label class="u-uppercaseTransform">E-mail:</label>
            <?php
              if( have_rows('e-mails') ):
                  while ( have_rows('e-mails') ) : the_row(); ?>
                  <span><?php the_sub_field('e-mail') ?></span>
                  <?php endwhile;
              else :
              ?> <span>Espera, nos olvidamos de colocar el correo.</span><?php
              endif;
            ?>
          </p>
        </div>
        <div class="Box-direction col-xs-12 col-sm-6">
          <div class="flex-column start-xs">
            <label class="u-uppercaseTransform">Dirección:</label>
            <?php
              if( have_rows('directions') ):
                  while ( have_rows('directions') ) : the_row(); ?>
                  <span><?php the_sub_field('direction') ?></span>
                  <?php endwhile;
              else :
              ?> <span>Espera, nos olvidamos de colocar el correo.</span><?php
              endif;
            ?>
          </div>
          <div class="flex-row align-center justify-center Shared">
            <?php
            if( have_rows('media_channels') ):
                while ( have_rows('media_channels') ) : the_row(); ?>
                    <a href="<?php the_sub_field('media_channel_url') ?>"><i class="fa fa-<?php the_sub_field('media_channel'); ?> fa-2x"></i></a>

                <?php endwhile;
                  else :
            endif;

            ?>
          </div>
        </div>
      </article>
    </article>

    <div class="Contact-form col-xs-12 col-sm-6 flex-row justify-center align-center">
      <?php the_content(); ?>
    </div>
  </div>
    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un formulario de contacto por favor.' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  <div id="markWater-contact">
    <span class="markWater markWater-contact">Contactanos</span>
  </div>
  <div class="Copyright row between-sm">
    <span class="col-xs-12 col-sm-6 center-xs end-sm">Designed & Developed by <a href="//miguelvinan.com">@MiguelVinan</a></span>
    <span class="col-xs-12 col-sm-6 center-xs start-sm">2015 ©Bratya Azanza, todos los derechos reservados.</span>

  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
