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

<section class="leyes ">
  <div class="leyes-container container row col-xs-12">
    <div class="leyes-titulo u-textCenter col-xs-12">
      <h1>LEYES APROBADAS</h1>
    </div>

    <div class="leyes-buscar col-xs-12 .center-xs">
      <form class="leyes-boton" action="index.html" >

        <h3>Nombre de la ley</h3>
        <input type="text" name="name" placeholder="ingrese el nombre de la ley" value="" class="col-sm-6">
        <button type="submit" name="button">Buscar</button>
      </form>
    </div>

    <table class="leyes-table">
      <thead class="estructura center-xs">
        <tr class="estructura-data">
          <th class="numero">
            <h3>Nª</h3>
          </th>
          <th class="nombre">
            <h3>Nombre de las Leyes</h3>
          </th>
          <th class="registro ">
            <h3>Registro Oficial</h3>
          </th>
          <th class="documento ">
            <h3>Documento</h3>
          </th>
        </tr>
      </thead>

        <?php
          if( have_rows('leyes') ):
            while ( have_rows('leyes') ) : the_row(); ?>
            <tbody class="ley-vigente">
              <tr class="estructura-encabezado">
                <th class="estructura-numero">
                  <a class="boton" href=""><h3><?php the_sub_field('number') ?></h3></a>
                </th>
                <th class="estructura-titulo">
                  <a  class="boton" ><h3><?php the_sub_field('law_name') ?></h3><i class="fa fa-arrow-down"></i></a>
                </th>
                <th class="sumpl-tablet">
                  <h3><?php the_sub_field('registro_oficial') ?></h3>
                </th>
                <th class="pdf-tsblet">
                  <a href="<?php the_sub_field('pdf_file') ?>" target="_blank"><h3>Ver <i class="fa fa-file-pdf-o"></i> </h3></a>
                </th>
              </tr>

              <tr class="estructura-cuerpo">
                <td class="estructura-registro">
                  <h3>Registro Oficial</h3>
                </td>
                <td class="estructura-suple">
                  <h3 href=""><?php the_sub_field('registro_oficial') ?></h3>
                </td>
              </tr>

              <tr class="estructura-pie">
                <td class="estructura-documento">
                  <h3>Documento</h3>
                </td>
                <td class="estructura-pdf">
                  <a href="<?php the_sub_field('pdf_file') ?>" target="_blank"><h3>Ver <i class="fa fa-file-pdf-o"></i></h3></a>
                </td>
              </tr>
            </tbody>
          <?php endwhile;
          else :
          ?> <span>Espera, nos olvidamos de colocar un cliente.</span><?php
        endif;?>
    </table>
  </div>
</section>
<?php get_footer(); ?>
