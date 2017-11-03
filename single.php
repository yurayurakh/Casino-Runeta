<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Casino_Wave
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section class="post">
                <div class="container">
                    <div class="row">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template/post', get_post_type() );

                            // If comments are open or we have at least one comment, load up the comment template.
                            //if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            //endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </section>
            <section class="inner-post patter-grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="similar-title">
                                Похожие статьи
                            </div>
                        </div>
                        <?php
                        function my_related_posts() {

                            $tags = the_tags('');

                            $args = array(
                                'posts_per_page' => 2,
                                'post__in'  => $tags,
                            );

                            $the_query = new WP_Query( $args );

                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                get_template_part( 'template/list-post', get_post_format() ); ?>
                                <?php
                            endwhile;


                            wp_reset_postdata();

                        }
                        ?>
                        <?php my_related_posts() ?>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
