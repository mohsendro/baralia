<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<!-- start mega menu -->
<div class="mega-menu mega-menu-top d-lg-block d-none">
    <div class="container-fluid position-relative">
        <div class="header-mega-menu">
            <div class="top-menu-menu">
                <?php
                    wp_nav_menu( array(
                        'menu'				=> "main_menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                        'menu_class'		=> "navbar-nav align-items-center", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        // 'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                        'container'			=> "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                        'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                        'container_id'		=> "", // (string) The ID that is applied to the container.
                        // 'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                        // 'before'			=> "", // (string) Text before the link markup.
                        // 'after'				=> "", // (string) Text after the link markup.
                        // 'link_before'		=> "", // (string) Text before the link text.
                        // 'link_after'		=> "", // (string) Text after the link text.
                        // 'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
                        'depth'				=> 3, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                        'walker'			=> new Main_Menu_Walker_Nav_Menu(), // (object) Instance of a custom walker class.
                        'theme_location'	=> "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                    ) );
                ?>
            </div>
        </div>
    </div>
</div>
<!-- end mega menu -->

