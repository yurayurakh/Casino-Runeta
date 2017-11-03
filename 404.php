<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Casino_Wave
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section class="inner-post patter-grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="error-404 not-found">
                            <header class="page-header">
                                <h1 class="title"><?php esc_html_e( 'К сожалению, ничего не найдено.', 'casino-idea' ); ?></h1>
                            </header><!-- .page-header -->

                            <div class="page-content">

                                <?php

                                the_widget( 'WP_Widget_Recent_Posts' );
                                ?>


                            </div><!-- .page-content -->
                        </div><!-- .error-404 -->
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
