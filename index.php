<?php get_header(); ?>
    

<div class="row">
    <div class="col-6">
        <?php if ( is_active_sidebar('page-sidebar') ):?>
            <?php dynamic_sidebar('page-sidebar');?>
        <?php endif;?>
    </div>
</div>
index

<?php get_footer(); ?>