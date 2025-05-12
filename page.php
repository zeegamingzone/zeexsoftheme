<?php
/**
 * The template for displaying all pages
 */
get_header();
?>

<main class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-8">
                    <?php the_title('<h1 class="entry-title text-4xl font-bold">', '</h1>'); ?>
                </header>

                <div class="entry-content prose">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();