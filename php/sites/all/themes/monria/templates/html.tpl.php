<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>

<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <?php if ($default_mobile_metatags): ?>
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width">
    <?php endif; ?>

    <meta http-equiv="cleartype" content="on">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <?php print $styles; ?>
  <script>

      var base = <?php echo base_path(); ?>
  </script>

    <script src="<?php print $base_path . path_to_theme(); ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php print $base_path . path_to_theme(); ?>/js/jquery.jscroll.js"></script>
    <script src="<?php print $base_path . path_to_theme(); ?>/js/BrowserDetect.js"></script>
    <script src="<?php print $base_path . path_to_theme(); ?>/js/main.js"></script>
    <script src="<?php print $base_path . path_to_theme(); ?>/js/analytics.js" async=""></script>
    <?php print $scripts; ?>
    <?php if ($add_html5_shim and !$add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
        <![endif]-->
    <?php elseif ($add_html5_shim and $add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
        <![endif]-->
    <?php elseif ($add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
        <![endif]-->
    <?php endif; ?>
    <!--[if IE]>
         <link rel="stylesheet" type="text/css" href="<?php print $base_path . path_to_theme(); ?>/css/style-ie.css">
    <![endif]-->

    <script> <!-- Google Analytics -->
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-39986796-1', 'monria.com');
        ga('send', 'pageview');

    </script>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>

<?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>"
           class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
<?php endif; ?>


<?php print $page; ?>

<?php print $page_bottom; ?>
</body>
</html>