<?php

/**
 * The Header template for 'Tubos de aço' Template page
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>

  <!--WP Head LP-->
  <?php wp_head(); ?>
  <!--end WP Head LP-->

  <meta name="description" content="Atuamos com uma ampla variedade de Tubos de Aço para qualquer aplicação, incluindo tubos em grandes dimensões, com entrega rápida e preço justo.">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KVGN4VC');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '344888066567074');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=344888066567074&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <meta name="facebook-domain-verification" content="g24m65tosb9yh0kv0o8n4bwgxgdhlt" />

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVGN4VC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <div class="container header">
      <!-- Logo -->
      <a class="logo" href="/" tabindex="0">
        <img src="<?php echo get_template_directory_uri() . '/lp-tubos-aco/assets/images/logo.webp' ?>" alt="Logo" class="responsive-image">
      </a>
      <!-- End Logo -->

      <!-- Desktop Menu -->
      <nav>
        <a href="#vantagens" tabindex="0">Vantagens</a>
        <a href="#produtos" tabindex="0">Produtos</a>
        <a href="#quemsomos" tabindex="0">Quem somos</a>
      </nav>
      <!-- End Desktop Menu -->

      <div class="d-none d-lg-block">
        <a href="https://api.whatsapp.com/send?phone=5511999221039" role="button" class="century-button outlined" target="_blank">
          Solicite um orçamento
        </a>
      </div>

      <!-- Mobile Menu -->
      <div id="menu-trigger" class="mobile-menu-trigger" onclick="openMobileMenu()">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>

      <div id="mobileMenu" class="mobile-menu">
        <div class="nav-links-wrapper">
          <a href="javascript:void(0)" class="close-menu-button" onclick="closeMobileMenu()">&times;</a>
          <a href="#vantagens" onclick="closeMobileMenu()">Vantagens</a>
          <a href="#produtos" onclick="closeMobileMenu()">Produtos</a>
          <a href="#quemsomos" onclick="closeMobileMenu()">Quem somos</a>
          <a href="https://api.whatsapp.com/send?phone=5511999221039" role="button" class="century-button" target="_blank">
            Solicite um orçamento
          </a>
        </div>
      </div>

      <a class="overlay"></a>
      <!--End Mobile Menu  -->
    </div>
  </header>

  <main id="main">