<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casino_Wave
 */

?>

    <section class="follow patter-blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="follow__title">
                    Подпишитесь на новости
                </div>
                <div class="follow__sub-title">
                    Чтобы получать новые уведомления на почту
                </div>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Subscribe") ) : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
    </div><!-- #content -->

    <footer class="footer">
        <div class="container">
            <div class="row mobile-revert">
                <div class="col-sm-8 mobile-bottom">
                    <div class="copyright">
                        <?php if (ot_get_option('footer_copyright')) { ?>
                            <span><?php echo ot_get_option('footer_copyright') ?></span> <?php bloginfo('name') ?>
                        <?php } else { ?>
                            <span>Copyright © 2012-2017.</span><?php bloginfo('name') ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 mobile-top">
                    <div class="social">
                        <?php if (ot_get_option('footer_social_links')) { ?>
                            <?php foreach (ot_get_option('footer_social_links') as $social) { ?>
                                <a href="<?php echo $social['social_link_url'] ?>" class="social__item">
                                    <img src="<?php echo $social['social_icon_name'] ?>" alt="social">
                                </a>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            nav: true,
            navText : ["<",">"],
            dots: true,
            smartSpeed:1000
        });
    })
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46339815 = new Ya.Metrika({
                    id:46339815,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46339815" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
