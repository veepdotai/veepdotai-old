<?php

Class Toborym_Menu_Generator {

    function __construct() {
    }

    /**
     * 
     */
    public static function generatePage($pageTitle, $pageContent, $pageAuthor, $pageParent = "") {
        $page_id = wp_insert_post(
            array(
            'comment_status' => 'close',
            'ping_status'    => 'close',
            'post_author'    => $pageAuthor,
            'post_title'     => ucfirst($pageTitle),
            'post_name'      => sanitize_title($pageTitle),
            'post_status'    => 'publish',
            'post_content'   => $pageContent,
            'post_type'      => 'page',
            'post_parent'    => $pageParent
            )
        );
    }


    /**
     * menu = json object that describes a complete menu on 2 levels.
     * - Accueil
     * - Guides
     *   - Urgence décès
     *   - Déroulement des obsèques
     * - Obsèques
     *   - Préparation des funérailles
     */
    public static function generateMenu($menu) {

        $jsonMenu = <<<_EOF_
[
    {
        "title": "Accueil"
    },
    {
        "title": "Guides",
        "submenu": [
            {
                "title": "Urgence décès"
            },
            {
                "title": "Déroulement des obsèques"
            }
        ]
    },
    {
        "title": "Obsèques",
        "submenu": [
            {
                "title": "Préparation des funérailles"
            }
        ]
    }
]
_EOF_;

        $menuname = 'Toborym Menu';
        $menu_exists = wp_get_nav_menu_object( $menuname );

        // If it doesn't exist, let's create it.
        if( !$menu_exists){
            $menu_id = wp_create_nav_menu($menuname);

            // Set up default BuddyPress links and add them to the menu.
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Home'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url( '/' ), 
                'menu-item-status' => 'publish'));

            /*
            foreach ($menu in $menus) {
                
            }
*/

            // Grab the theme locations and assign our newly-created menu
            // to the BuddyPress menu location.
            $bpmenulocation = 'lblgbpmenu';
            // Does the menu exist already?
                if( !has_nav_menu( $bpmenulocation ) ){
                $locations = get_theme_mod('nav_menu_locations');
                $locations[$bpmenulocation] = $menu_id;
                set_theme_mod( 'nav_menu_locations', $locations );
            }
        }
    }

    public static function injectMenu() {
    }

}