<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Casino_Wave
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php
            $slider_main = get_post_meta ( $post->ID, 'main_slider_list', true);
            if ($slider_main) : ?>
            <section class="slider">
                <div class="owl-carousel">
                    <?php foreach ($slider_main as $slide) :
                        $slide_img = $slide['main_slider_list_img'] ? $slide['main_slider_list_img'] :  get_template_directory_uri()."/img/slide1.jpg";
                        $slide_title = $slide['main_slider_list_title'] ? $slide['main_slider_list_title'] : '';
                        $slide_sub_title = $slide['main_slider_list_sub-title'] ? $slide['main_slider_list_sub-title'] : '';
                        $slide_link = $slide['main_slider_list_link'] ? $slide['main_slider_list_link'] : '';

                        ?>
                        <div class="slider__item">
                            <div class="slider__item_img">
                                <img src="<?php echo $slide_img?>" alt="">
                            </div>
                            <div class="slider-detail">
                                <div class="slider__item_title">
                                    <?php echo $slide_title?>
                                </div>
                                <div class="slider__item_sub-title">
                                    <?php echo $slide_sub_title?>
                                </div>
                                <a href="<?php echo $slide_link?>" class="btn-tranparent">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php  endif;?>
            <section id="inner_post" class="inner-post patter-grey-bg">
                <div class="container">
                    <div class="row">
                        <?php

                        $n=2;   // количество выводимых записей
                        $recent = new WP_Query("&showposts=$n");

                            /* Start the Loop */
                            while ( $recent->have_posts()) : $recent->the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template/list-post', get_post_format() );

                            endwhile; ?>
                    </div>
                </div>
            </section>
            <section class="post">
                <div class="container">
                    <div class="row">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template/post', get_post_type() );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
