<?php get_header() ?>
<main class="site__main">
    <section class="site__main"></section>
    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>
    </section>
    <h1>Front page</h1>
    <?php if(have_posts()): the_post(); ?>
        <?php the_post() ?>
        <?php the_content() ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>