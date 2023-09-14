<?php

/**
 * The template for displaying the footer for 'Tubos de aço' Template page
 *
 * Contains footer content and the closing of the main
 */
?>
</main><!-- #main -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 info">
        <figure>
          <img src="<?php bloginfo('template_url'); ?>/images/century-tubos-logo-positivo-rodape.png" alt="Century Tubos" style="width: 285px; height: 50px">
        </figure>

        <?php the_field('resumo_rodape', 68); ?>

        <div style="font-size:20px">
          <a href="https://instagram.com/centurytubos?igshid=1d1l7a26bmqf8" target="_blank" aria-label="instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/company/68981923/admin/" target="_blank" aria-label="linkedin">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://www.facebook.com/centurytubos/" target="_blank" aria-label="facebook">
            <i class="fab fa-facebook-square"></i>
          </a>
        </div>

        <ul>
          <li>
            <i class="fas fa-map-marker-alt"></i><?php the_field('endereco', 18); ?>
          </li>
          <li>
            <a href="tel:<?php the_field('link_telefone', 18); ?>"><i class="fas fa-phone-alt"></i><?php the_field('telefone', 18); ?></a>
          </li>
          <li>
            <a href="https://api.whatsapp.com/send?phone=<?php the_field('link_whatsapp', 18); ?>" target="_blank"><i class="fab fa-whatsapp"></i><?php the_field('whatsapp', 18); ?></a>
          </li>
        </ul>

        <h3>Newsletter</h3>
        <?php echo do_shortcode('[contact-form-7 id="81" title="Newsletter"]'); ?>
      </div>

      <div class="col-lg-7">
        <div class="row justify-content-end">
          <div class="col col-lg-5">
            <h3>Institucional</h3>
            <?php wp_nav_menu(array('theme_location' => 'institucional-tubos', 'menu_class' => 'nav-footer')); ?>
          </div>
          <div class="col col-lg-5">
            <h3>Tipos de Tubo de Aço</h3>
            <?php wp_nav_menu(array('theme_location' => 'produtos-tubos', 'menu_class' => 'nav-footer')); ?>
          </div>
        </div>

        <div class="selos">
          <img src="<?php bloginfo('template_url'); ?>/images/compre-com-o-cartao-bndes.gif" style="width: 168px; height: 44px;" alt="Compre com o Cartão BNDES" />
          <img src="<?php bloginfo('template_url'); ?>/images/seu-pedido-e-entregue-em-ate-24-horas.gif" style="width: 233px; height: 44px;" alt="Seu Pedido é Entregue em até 24 Horas" />
        </div>

      </div>
    </div>
  </div>

  <div class="assinatura">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 text-center text-lg-left">© Copyright <?php echo date('Y'); ?> Century Tubos</div>
      </div>
    </div>
  </div>

</footer>
<?php get_sidebar('contato-tubos'); ?> 

<!--WordPress footer-->
<?php wp_footer(); ?>
<!--end WordPress footer-->

</body>

</html>