<footer id="triggerContact">
  <?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&category_name=formulario') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="Contact container flex-row justify-center align-center">
    <article class="Contact-card col-md-6 flex-column justify-center align-center">
      <figure>
        <img src="<?= get_template_directory_uri().'/assets/images/Logotipo_black.png' ?>" alt="">
      </figure>
      <article class="Box flex-row justify-around">
        <div class="Box-cardContacts">
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
          <p class="flex-column align-start">
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
        <div class="Box-direction flex-column align-center">
          <div class="flex-column align-start">
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

    <div class="Contact-form col-md-6 flex-row justify-center align-center">
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
  <div class="Copyright flex-row justify-between">
    <span>©Todos los derechos reservados, Bratya Azanza</span>
    <span>Designed & Developed by <a href="//miguelvinan.com">@MiguelVinan</a></span>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
