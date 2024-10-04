<?php 
/**
 * Template Name: Front Page Template
 * TODO: Conditionally render components with ACF 
 * 
 */
get_header()?> 
    <?php get_template_part('template-parts/components/component', 'hero');?>
    <?php get_template_part('template-parts/components/component', 'blockquote');?>
    <?php get_template_part('template-parts/components/component', 'teaser');?>
    <?php get_template_part('template-parts/components/component', 'event-list');?>
    <?php get_template_part('template-parts/components/component', 'video-list');?>
    <?php get_template_part('template-parts/components/component', 'teaser--alt');?>
    <?php include('template-parts/components/component-modal.php');?>
<?php get_footer();?>