<?php /** template for pages */ ?>
<?php get_header(); ?>


<div class="row">
    <div class="col-10">
        <?php if(have_posts()):?>
        <?php while(have_posts()): the_post(); ?>

        <!-- do whatever you want with the page-->

        <?php endwhile;?>
        <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>