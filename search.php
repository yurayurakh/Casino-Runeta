<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Casino_Wave
 */

get_header(); ?>

	<section id="primary" class="content-area inner-post patter-grey-bg">
		<main id="main" class="site-main container">
            <div class="row">

                <?php
                if ( have_posts() ) : ?>
                    <div class="col-xs-12">
                        <header class="page-header">
                            <h1 class="title"><?php
                                /* translators: %s: search query. */
                                printf( esc_html__( 'Результат поиска: %s', 'bussines-idea' ), '<span>' . get_search_query() . '</span>' );
                                ?></h1>
                        </header><!-- .page-header -->
                    </div>
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'template/list-post', 'search' );

                    endwhile; ?>

                    <div class="col-xs-12">
                        <?php echo get_the_posts_pagination();?>
                    </div>

                <?php else :

                    get_template_part( 'template/content', 'none' );

                endif; ?>
            </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
