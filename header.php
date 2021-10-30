

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts (2)/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <?php wp_head(); ?>
    <title>Mambo's</title>
</head>
<body>

    <!-- header -->
    <?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) : the_row(); ?>
    <header>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/logo-removebg-preview.png" alt="" class="logo">
        <div class="hamburger">
            <span></span>
        </div>
        <ul class="menu">
            <li><a href="#"><?php the_sub_field( 'link1' ); ?></a></li>
            <li><a href="#"><?php the_sub_field( 'link2' ); ?></a></li>
            <li><a href="#"><?php the_sub_field( 'link3' ); ?></a></li>
            <li><a href="#"><?php the_sub_field( 'link4' ); ?></a></li>
            <li><a href="#"><?php the_sub_field( 'link5' ); ?></a></li>
        </ul>
    </header>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end header -->