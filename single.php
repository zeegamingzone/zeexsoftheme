<?php
/**
 * The template for displaying all single posts
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

                    <div class="entry-meta text-gray-600 mt-4">
                        <?php
                        printf(
                            esc_html__('Posted on %s', 'custom-theme'),
                            '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>'
                        );
                        ?>
                    </div>
                </header>

                <div class="entry-content prose">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer mt-8">
                    <?php
                    $categories_list = get_the_category_list(esc_html__(', ', 'custom-theme'));
                    if ($categories_list) {
                        printf('<span class="cat-links">' . esc_html__('Categories: %1$s', 'custom-theme') . '</span>', $categories_list);
                    }

                    $tags_list = get_the_tag_list('', esc_html__(', ', 'custom-theme'));
                    if ($tags_list) {
                        printf('<span class="tags-links ml-4">' . esc_html__('Tags: %1$s', 'custom-theme') . '</span>', $tags_list);
                    }
                    ?>
                </footer>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();