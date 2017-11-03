<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussines_Idea
 */

?>
<div class="col-md-6 col-xs-12">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-item">
            <div class="post-thumb">
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php if (get_the_post_thumbnail( )) { ?>
                        <?php echo get_the_post_thumbnail( ); ?>
                    <?php }else { ?>
                        <img src="<?php echo get_template_directory_uri() ?>/img/post-pre-img.jpg" alt="post">
                    <?php } ?>
                </a>
                    <span class="post-category"><?php  echo the_category();?></span>

            </div>
            <div class="post-detail">
                <div class="post-title">
                    <a class="post-title__link" href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php
                        the_title( '<div class="post-title">', '</div>' );
                        ?>
                    </a>
                </div>
                <div class="post-content">
                    <?php echo  get_the_excerpt();?>
                </div>
                <div class="post-comment">
                    <?php comments_number('Пока нет комментариев', '1 комменатрий', '% комментариев'); ?>
                      | <a href="<?php the_permalink() ?>">Оставить комментарий</a>
                </div>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>
