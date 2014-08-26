<?php

  // Head configration
  $website_url                =     get_bloginfo('url');
  $website_lang               =     get_bloginfo('language');
  $website_title              =     get_bloginfo('name') . " - " . get_the_title();
  $website_name               =     get_bloginfo('name');
  $website_desc               =     get_bloginfo('description');
  $website_charset            =     get_bloginfo('charset');
  $website_template_url       =     get_bloginfo('template_url');
  
  $website_author             =     of_get_option('meta_author', 'idealab');
  $website_google_webmaster   =     of_get_option('meta_google_webmaster', 'idealab');
  $website_twitter_username   =     of_get_option('social_twitter_username', 'idealab');

?>

<!DOCTYPE html>
<html lang="<?php echo $website_lang; ?>">
<head prefix="og: http://ogp.me/ns#">

  <?php if ( is_404() ) { ?>
  <title>404 - Not found</title>
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />

  <?php } else { ?>

  <title><?php echo $website_title; ?></title>

  <!-- General meta -->
  <meta name="description" content="<?php echo $website_desc; ?>">
  <meta charset="<?php echo $website_charset; ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="minimum-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=no"/>
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="msapplication-tap-highlight" content="no"/>
  <meta name="author" content="<?php echo $website_author; ?>">
  <meta name="google-site-verification" content="<?php echo $website_google_webmaster; ?>" />

  <!-- Facebook OG -->
  <meta property="og:title" content="<?php echo $website_title; ?>">
  <meta property="og:url" content="<?php echo $website_url; ?>">
  <meta property="og:site_name" content="<?php echo $website_name; ?>">
  <meta property="og:description" content="<?php echo $website_desc; ?>">
  <meta property="og:image" content="<?php echo $website_template_url; ?>/assets/images/misc/og-logo.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <meta property="og:type" content="website">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@<?php echo $website_twitter_username; ?>">
  <meta name="twitter:title" content="<?php echo $website_title; ?>">
  <meta name="twitter:description" content="<?php echo $website_desc; ?>">
  <meta name="twitter:creator" content="@<?php echo $website_twitter_username; ?>">
  <meta name="twitter:image:src" content="<?php echo $website_template_url; ?>/assets/images/misc/og-logo.png">
  <meta name="twitter:domain" content="<?php echo $website_url; ?>">

  <?php } ?>

  <!-- Icons -->
  <link rel="shortcut icon" href="<?php echo $website_template_url; ?>/assets/images/misc/favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-72x72.png">  
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-114x114.png">  
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $website_template_url; ?>/assets/images/misc/apple-touch-icon-152x152.png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php echo $website_template_url; ?>/assets/css/theme.css" />

  <!-- JS Libs -->
  <script type="text/javascript" src="<?php echo $website_template_url; ?>/assets/js/jquery-2.1.1.min.js"></script>

  <?php if(preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT']))
    {
        include ( TEMPLATEPATH . '/oldbrowser.html' );
        exit;
    }
  ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

  <div class="wrapper" id="main-navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
  </div>