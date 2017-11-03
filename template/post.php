<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussines_Idea
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-xs-12">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="title">', '</h1>' );
        else :
            the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif; ?>

    </div><!-- .entry-header -->

    <div class="col-xs-12">
        <div class="post-content">
            <?php if(get_the_post_thumbnail()){ ?>
                <p><?php echo get_the_post_thumbnail();?></p>
            <?php } ?>
            <?php
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'casino-wave' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casino-wave' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<?php
//$get_related = get_theme_option('related_on'); if($get_related == 'Enable'):
    //get_template_part( 'lib/templates/related-by-tags' );
//endif
?>



