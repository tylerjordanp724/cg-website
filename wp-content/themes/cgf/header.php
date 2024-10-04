<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chantal_Gabrielle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/fuc7ppi.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="page-header py-4 px-3">
        <div class="page-header__inner container d-md-flex align-items-center justify-content-between">
            <div class="page-header__col-left d-none d-md-flex">
                <a href="https://www.instagram.com/chantal.gabrielle.freeman/" target="_blank" class="mr-3" href="">Instagram</a>
                <a href="https://www.youtube.com/channel/UCCjE9XP8xI8OVPfhSjn9OvQ" target="_blank">YouTube</a>
            </div>
            <div class="page-header__col-center">
                <div class="logo m-auto m-md-0"></div>
            </div>
            <div class="page-header__col-right d-none d-md-block">
                <a href="<?php echo get_bloginfo('template_url');?>/resume.pdf" target="_blank">View my resumé</a>
            </div>
        </div>
    </div>
