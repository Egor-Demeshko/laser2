<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?php echo home_url(); ?>">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:title" content=" <?php echo get_bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="<?php echo THEME_ROUTE . '/assets/icons/favicon.svg'?>";>
    <meta property="og:locale" content="<?php language_attributes(); ?>">
    <meta property="twitter:card" content="summary">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Rusty Cage",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Минск",
          "postalCode": "220000",
          "addressCountry": "BY",
          "streetAddress": "Пр-т Независимости"
        },
        "telephone": "+375296417964",
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday"
            ],
            "opens": "08:00",
            "closes": "20:00"
          }
        ]
      }
    </script>

    <style>
      @font-face{
        font-family: "Ubuntu";
        src: local("Ubuntu"),
            url("<?= THEME_ROUTE ?>/assets/fonts/Ubuntu.ttf");
        font-display: swap;     
      }

      @font-face{
        font-family: "LexendDeca";
        src: local("LexendDeca"),
            url("<?= THEME_ROUTE ?>/assets/fonts/LexendDeca.ttf");
        font-display: swap;     
      }

      html{
        font-family: Ubuntu sans-serif;
        color: var(--white);
        line-height: 1.25rem;
        background-color: currentColor;
        scroll-behavior: smooth;
      }

      main>div:first-child{
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: url("<?php echo get_template_directory_uri() . '/assets/images/main_background.webp'?>") 45% 50% /cover;
        overflow: hidden;
        font-family: Ubuntu,sans-serif;
        font-size: 1rem;
    }

    main>div:nth-child(2){
      padding-bottom: var(--bar-height);
    }

    main>div:nth-child(2)>*,
    main~footer{
      padding-top: var(--main-top-spacing);
    }
    </style>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> data-laserroute="<?php echo get_template_directory_uri(); ?>">
