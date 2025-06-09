<?php
/*
Template Name: Success Page Template
*/
if (!defined('ABSPATH')) {
        exit;
    }
get_header(); ?>

<div class="custom-template-content">
<?php
        echo do_shortcode('[sslcommerz_success_page]');
?>
</div>

<?php get_footer(); ?>
