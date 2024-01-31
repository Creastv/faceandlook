<div class="navbar__wc-nav">
    <div class="navbar__wc-nav__wrap">
        <?php
        // Wyświetl menu o nazwie "Główne menu"
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'nav-menu', // Dodaj klasę do menu (możesz dostosować)
        ));
        ?>
    </div>
</div>