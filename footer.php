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
<section class="ministeriosEcuador row center-xs">
  <div class="ministeriosEcuadorImagen col-xs-12">
  </div>
  <div class="ministeriosEcuadorData row col-sm-12">
    <!-- BLOQUE 1 -->
    <div class="row col-xs-12 col-sm-12">
    <!-- Presidencia -->
       <div class="entidad col-xs-12 col-sm-6">
        <a href="#" class="btn-ministerios s-visible">
          <h3><i class="fa fa-plus"></i> Presidencia</h3>
        </a>
        <div class="list is-hidden">
          <ul class="list-ministerios">
          <?php if( have_rows('presidencias') ):
            while ( have_rows('presidencias') ) : the_row(); ?>
            <li><a target="_blank" href="<?php the_sub_field('url_presidencia') ?>"><?php the_sub_field('name_presidencia') ?></a></li>
            <?php endwhile;
              else :
            endif;
            ?>
          </ul>
        </div>
      </div>
    <!-- Vicepresidencia -->
      <div class="entidad col-xs-12 col-sm-6">
        <a href="#" class="btn-ministerios s-visible">
          <h3><i class="fa fa-plus"></i> Vicepresidencia</h3>
        </a>
        <div class="list is-hidden">
          <ul class="list-ministerios " >
            <?php if( have_rows('vicepresidencias') ):
              while ( have_rows('vicepresidencias') ) : the_row(); ?>

              <li><a target="_blank" href="<?php the_sub_field('url_vicepresidencia') ?>"><?php the_sub_field('nombre_vicepresidencia') ?></a></li>

              <?php endwhile;
                else :
              endif;
              ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- bloque 2 -->
    <div class="row col-xs-12 col-sm-12">
    <!-- Secretarías Nacionales -->
      <div class="entidad col-xs-12 col-sm-6">
        <a href="#" class="btn-ministerios s-visible">
          <h3><i class="fa fa-plus"></i> Secretarías Nacionales</h3>
        </a>
        <div class="list is-hidden">
          <ul class="list-ministerios">
            <?php if( have_rows('secretaria_nacionales') ):
              while ( have_rows('secretaria_nacionales') ) : the_row(); ?>

              <li><a target="_blank" href="<?php the_sub_field('url_secretaria_nacional') ?>"><?php the_sub_field('name_secretaria_nacional') ?></a></li>

              <?php endwhile;
                else :
              endif;
              ?>
          </ul>
        </div>
      </div>
    <!-- Secretarías -->
      <div class="entidad col-xs-12 col-sm-6">
        <a href="#" class="btn-ministerios s-visible">
          <h3><i class="fa fa-plus"></i> Secretarías</h3>
        </a>
        <div class="list is-hidden">
          <ul class="list-ministerios">
            <?php if( have_rows('secretarias') ):
              while ( have_rows('secretarias') ) : the_row(); ?>

              <li><a  target="_blank" href="<?php the_sub_field('url_secretarias') ?>"><?php the_sub_field('name_secretarias') ?></a></li>

              <?php endwhile;
                else :
              endif;
              ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- bloque 3 -->
    <div class="col-xs-12 col-sm-6">
    <!-- Ministerios Coordinadores -->
      <div class="">
        <div class="entidad">
          <a href="#" class="btn-ministerios s-visible">
            <h3><i class="fa fa-plus"></i> Ministerios Coordinadores</h3>
          </a>
          <div class="list is-hidden">
            <ul class="list-ministerios">
              <?php if( have_rows('ministerios_coordinadores') ):
                while ( have_rows('ministerios_coordinadores') ) : the_row(); ?>

                <li><a  target="_blank" href="<?php the_sub_field('url_ministerios_coordinadores') ?>"><?php the_sub_field('name_ministerios_coordinadores') ?></a></li>

                <?php endwhile;
                  else :
                endif;
                ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOQUE 4 -->
    <div class="col-xs-12 col-sm-6">
      <div class="entidad">
        <a href="#" class="btn-ministerios s-visible">
          <h3><i class="fa fa-plus"></i> Ministerios</h3>
        </a>
        <div class="list is-hidden">
          <ul class="list-ministerios">
            <?php if( have_rows('ministerios') ):
              while ( have_rows('ministerios') ) : the_row(); ?>

              <li><a target="_blank" href="<?php the_sub_field('url_ministerios') ?>"><?php the_sub_field('name_ministerios') ?></a></li>

              <?php endwhile;
                else :
              endif;
              ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
  <div class="Copyright row between-sm">
    <span class="col-xs-12 col-sm-6 center-xs end-sm">Designed & Developed by <a href="//miguelvinan.com">@MiguelVinan</a></span>
    <span class="col-xs-12 col-sm-6 center-xs start-sm">2015 ©Bratya Azanza, todos los derechos reservados.</span>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
