<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

class Main_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl(&$output, $depth = 0, $args = NULL)
    {
        // depth dependent classes
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            '',
            ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'menu__subsub-list' : 'menu__sub-list'),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);

        // build html
        if ($display_depth === 1) :

            $output .= "\n" . $indent . '<ul class="level-one' . $class_names . '">' . "\n";

        elseif ($display_depth === 2) :

            $output .= "\n" . $indent . '<ul class="level-two' . $class_names . '">' . "\n";

        elseif ($display_depth === 3) :

            $output .= "\n" . $indent . '<ul class="level-three' . $class_names . '">' . "\n";

        else :
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";

        endif;
    }

    // add main/sub classes to li's and links
    function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // depth dependent classes
        $depth_classes = array(
            ($depth == 0 ? 'nav-item menu__item' : ''),
            ($depth == 1 ? 'position-relative menu__sub-item' : ''),
            ($depth >= 2 ? 'position-relative menu__subsub-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // $depth_arrows = array(
        //     ($depth == 0 ? "<i class='bi bi-chevron-down'></i>" : ''),
        //     ($depth >= 1 ? "<i class='bi bi-chevron-left'></i>" : '')
        // );
        // $depth_arrow_names = esc_attr(implode(' ', $depth_arrows));

        // passed classes
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        // build html
        $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // link attributes
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="' . ($depth == 0 ? 'menu__link' : '') . ($depth == 1 ? 'menu__sub-link' : '') . ($depth >= 2 ? 'menu__subsub-link' : '') . '"';

        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

}


class Mobile_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl(&$output, $depth = 0, $args = NULL)
    {
        // depth dependent classes
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            '',
            ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'menu__subsub-list' : 'menu__sub-list'),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);

        // build html
        if ($display_depth === 1) :

            $output .= "\n" . $indent . '<ul class="navbar-nav h-0' . $class_names . '">' . "\n";

        elseif ($display_depth === 2) :

            $output .= "\n" . $indent . '<ul class="navbar-nav h-0 bg-ul-f7' . $class_names . '">' . "\n";

        elseif ($display_depth === 3) :

            $output .= "\n" . $indent . '<ul class="navbar-nav h-0 bg-ul-f7' . $class_names . '">' . "\n";

        else :
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";

        endif;
    }

    // add main/sub classes to li's and links
    function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // depth dependent classes
        $depth_classes = array(
            ($depth == 0 ? 'nav-item bg-ul-f7 nav-item menu__item' : ''),
            ($depth == 1 ? 'nav-item menu__sub-item' : ''),
            ($depth >= 2 ? 'nav-item menu__subsub-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // passed classes
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        if ( strpos( $class_names, 'menu-item-has-children' ) ) {
            $depth_link_arrow = "<span class='showSubMenu'><i class='bi bi-chevron-left'></i></span>";
        } else {
            $depth_link_arrow = "";
        }

        // build html
        $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // link attributes
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="' . ($depth == 0 ? 'nav-link menu__link' : '') . ($depth == 1 ? 'menu__sub-link' : '') . ($depth >= 2 ? 'menu__subsub-link' : '') . '"';

        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s%7$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after,
            $depth_link_arrow
        );

        // build html
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

}