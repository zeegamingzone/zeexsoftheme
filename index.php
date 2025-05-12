<?php
/**
 * The main template file
 */
get_header();
?>

<main class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8'); ?>>
                    <header class="entry-header mb-4">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title text-3xl font-bold">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title text-2xl font-bold"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
                        endif;
                        ?>
                    </header>

                    <div class="entry-content prose">
                        <?php
                        if (is_singular()) :
                            the_content();
                        else :
                            the_excerpt();
                        endif;
                        ?>
                    </div>
                </article>
                <?php
            endwhile;

            the_posts_navigation();
        else :
            ?>
            <p><?php esc_html_e('No posts found.', 'custom-theme'); ?></p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();