<?php
/**
 * Template Name: Astra/HWD Basic Left Sidebar Page
 * The template for displaying all pages.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


	<div id="primary" <?php astra_primary_class('hwd-left-sidebar-basic-page'); ?>>
        <div class="hwd-sidebar-page-container">

            <div class="hwd-left-sidebar-container">
                <div class="hwd-content-card">
                    <?php get_sidebar(); ?>
                </div>
            </div>

            <div class="hwd-left-sidebar-adjacent-container">
                <?php astra_primary_content_top(); ?>

                <?php astra_content_page_loop(); ?>

                <?php astra_primary_content_bottom(); ?>
            </div>
        </div>

	</div><!-- #primary -->


<?php get_footer(); ?>
