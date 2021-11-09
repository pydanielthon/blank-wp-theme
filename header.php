<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<?php 
$getLogo = get_theme_mod('header_logo');
?>
<header class="header">
    <div class="row align-items-center">
        <div class="col-md-3">
            <img src="<?= $getLogo?>">
        </div>
        <div class="col-md-9 text-end hamburger__nav-container">
            <div class="header__menu">
            <?php wp_nav_menu(array(
                'menu' => 'headermenu',
                'class'=> 'header__menu-items'
            )) ?>
               <div class="hamburger__lines">
               <div class="hamburger">
  <a class="main-nav-toggle" href="#main-nav"><i>Menu</i></a>
</div

            </div> 
            </div>
   
        </div>
    </div>
</header>
<body <?php body_class(); ?> >
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

