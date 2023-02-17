<?php
/**
 * Template Name: Astra/HWD Full Width Page Dark With Header
 * The template for displaying all pages.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class('hwd-full-width-page-dark'); ?>>

        <?php if (has_post_thumbnail(get_the_ID()) ): ?>
            <?php $header_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
        <?php endif; ?>

        <div class="hwd-full-width-page-dark-header" <?php echo isset($header_image_url) ? 'style="background-image: url('.$header_image_url. ')"' : '';?>></div>
        <div class="hwd-full-width-page-dark-content">
            <?php astra_primary_content_top(); ?>

            <?php astra_content_page_loop(); ?>

            <?php astra_primary_content_bottom(); ?>
        </div>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
