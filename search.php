<?php
    
?>

<?php get_header() ?>
<main class="site__main">
    <section class="site__main__recherche">
        <h1>resultat de recherche</h1>
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <a href="<?php echo get_permalink(); ?>">
    <?php echo wp_trim_words(get_the_content(),20,"[...]") ; ?></a>
    <hr>
    <?php endwhile; ?>
    <?php else : ?>
        <h2>aucun résultat</h2>
    <?php endif; ?>
    </section>
</main>
<?php get_footer() ?>