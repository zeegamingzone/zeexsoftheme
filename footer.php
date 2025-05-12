<?php
/**
 * The template for displaying the footer
 */
?>
    <footer class="site-footer bg-gray-100 py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>