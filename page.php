<?php get_header() ?>
<main class="site__main">
    <section class="site__main"></section>
    
    <h1>page</h1>
    <?php if(have_posts()): the_post(); ?>
        <?php the_post() ?>
        <?php the_content() ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>