<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Casino_Wave
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section class="inner-post">
                <div class="container">
                    <?php
                    if ( have_posts() ) : ?>

                        <div class="row">
                            <div class="col-xs-12">
                                <?php  the_archive_title( '<h2 class="title">', '</h2>' ); ?>
                            </div>
                        </div>
                        <div class="row">

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template/list-post', get_post_format() );

                            endwhile; ?>

                            <div class="col-xs-12">
                                <?php echo get_the_posts_pagination();?>
                            </div>
                        <?php
                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                </div>
            </div>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
