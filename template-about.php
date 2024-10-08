<?php 
  /*
	Template Name: About Template
  */
  get_header();
?>

<!--========== BreadCamb Section ==========-->
<?php get_template_part('template-parts/header/header', 'bredcamb')?>

<!--========== About Hospital section ==========-->
<?php get_template_part('template-parts/about/about', 'hospital')?>

<!--========== Our Vission Section  ==========-->
<?php get_template_part('template-parts/about/about', 'mission')?>

<!--============== TESTIMONIAL SECTION ===============-->
<?php get_template_part('template-parts/section/section', 'testimonial')?>

<!--============== DOCTORS SECTION ===============-->
<?php get_template_part('template-parts/section/section', 'doctor') ?>

<?php get_footer();?>