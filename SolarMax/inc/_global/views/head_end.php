<?php
/**
 * head_end.php
 *
 * Author: pixelcave
 *
 * (continue) The first block of code used in every page of the template
 *
 * The reason we separated head_start.php and head_end.php is for enabling
 * us to include between them extra plugin CSS files needed only in specific pages
 *
 */
?>

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="solarMax\<?php echo $cb->assets_folder; ?>/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <?php if ($cb->theme) { ?>
    <link rel="stylesheet" id="css-theme" href="solarMax\<?php echo $cb->assets_folder; ?>/css/themes/<?php echo $cb->theme; ?>.min.css">

    <?php } ?>
    <!-- END Stylesheets -->
</head>
<body>
