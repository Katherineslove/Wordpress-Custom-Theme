<?php if (has_nav_menu('bottom_navigation')): ?>
    <footer class="bg-dark text-white fixed-bottom">
        <div class="container">
            <div class="row">
                <?php wp_nav_menu(array('theme_location' => 'bottom_navigation')); ?>
            </div>
        </div>
    </footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
