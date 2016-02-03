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

<section id="laws" class="leyes ">

  <div class="leyes-container container row col-xs-12 center-xs col-md-12 center-md">

    <div class="leyes-titulo u-textCenter col-xs-12">
      <h1>LEYES APROBADAS</h1>
    </div>

    <div class="leyes-buscar col-xs-12 col-md-6">
      <input class="search" placeholder="Ingrese el nombre de la ley." />
    </div>


    <table class="leyes-table">
      <thead class="estructura center-xs">
        <tr class="estructura-data">

          <td class="numero">
            <h3>Nª</h3>
          </td>

          <td class="nombre">
            <h3>Nombre de las Leyes</h3>
          </td>

          <td class="registro ">
            <h3>Registro Oficial</h3>
          </td>

          <td class="documento ">
            <h3>Documento</h3>
          </td>

        </tr>
      </thead>

        <?php
          if( have_rows('leyes') ): ?>
            <tbody class="list ley-vigente">
            <?php while ( have_rows('leyes') ) : the_row(); ?>

              <tr class="estructura-encabezado ">

                <td class="estructura-numero">
                  <h3 class="num"><?php the_sub_field('number') ?></h3>
                </td>
                <td class="estructura-titulo">
                  <h3 class="name"><?php the_sub_field('law_name') ?></h3>
                </td>

                <td class="estructura-cuerpo">
                  <h3 class="reg"><?php the_sub_field('registro_oficial') ?></h3>
                </td>

                <td class="estructura-pie">
                  <a href="<?php the_sub_field('pdf_file') ?>" target="_blank"><h3>Ver <i class="fa fa-file-pdf-o"></i></h3></a>
                </td>
              </tr>


          <?php endwhile;?>
          </tbody>
          <?php else :
          ?> <span>Espera, nos olvidamos de colocar un cliente.</span><?php
        endif;?>
    </table>
  </div>
</section>
<?php get_footer(); ?>
