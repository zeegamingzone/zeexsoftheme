<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1 class="text-2xl font-bold"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
            }
            ?>

            <nav class="primary-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex space-x-4',
                    'container'      => false,
                ));
                ?>
            </nav>
        </div>
    </div>
</header>