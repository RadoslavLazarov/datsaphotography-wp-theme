<footer>
    <div class="container footer">
        <div class="row">
            <div class="col footer__line">
                <div></div>
            </div>
            <div class="col-5 footer__title">
                <h1><?php echo bloginfo('name') ?></h1>
            </div>
            <div class="col footer__line">
                <div></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div></div>
            </div>
            <div class="col-5 footer__socials">
                <?php if ( have_rows('contacts', 'option') ): 
                        while ( have_rows('contacts', 'option') ): the_row();
                            if ( get_sub_field('showInFooter') ):
                                $blank = get_sub_field('blank'); ?>

                                <a href="<?php the_sub_field('link'); ?>" <?php echo ($blank ? 'target="blank"' : '' ) ?>>
                                    <i class="<?php the_sub_field('icon'); ?>"></i>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col">
                <div></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 footer__copyright">
                <div>&copy;<?php echo date("Y"); ?> All rights reserved</div>
                <div class="site-author">
                    Development & design by 
                    <a href="https://www.linkedin.com/in/radoslav-lazarov-02291215a/" target="blank">Radoslav Lazarov</a>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>