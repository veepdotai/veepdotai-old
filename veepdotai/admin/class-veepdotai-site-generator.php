<?php

Class Veepdotai_Site_Generator {

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
     * site = json object that describes a complete site on 2 levels.
     * - Hero Title
     * - Tag line
     * - Section 1
     *   - Section 1.1
     *   - Section 1.2
     * - Section 2
     *   - Section 2.1
     *   - Section 2.2
     */
    public static function generateSite($site) {

        $jsonMenu = <<<_EOF_
[
    {
        "hero_title": "Veep.ai : ton jumeau digital qui réalise automatiquement à ta place toutes les tâches répétitives et chronophages pour les professionnels du numérique"
    },
    {
        "tagline": "Solution d’IA assistée par l’homme pour lui dégager du temps et le désaliéner de sa condition de travailleur."
    },
    {
        "title": "Features",
        "subsection": [
            {
                "title": "Automatisation à 100%",
                "contenu": "Veep.ai réalise la mise en place d’une présence virtuelle en réalisant toutes les tâches associées à votre place. Vous avez toujours la possibilité de passer derrière avec l’outil de votre choix pour corriger ou améliorer le travail réalisé."
            },
            {
                "title": "Intelligence artificielle"
            },
            {
                "title": "Autonomie"
            },
            {
                "title": "Personnalisation"
            }
        ]
    },
    {
        "title": "Valeurs",
        "subsection": [
            {
                "title": "Modération"
            },
            {
                "title": "Climat"
            },
            {
                "title": "Environnement"
            },
            {
                "title": "Respect"
            }
        ]
    }
]
_EOF_;

        $sitename = $site["name"];
        $site_exists = wp_get_nav_menu_object( $sitename );

        // If it doesn't exist, let's create it.
        if( !$site_exists){
            $site_id = ($sitename);

            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Home'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url( '/' ), 
                'menu-item-status' => 'publish')
            );

            foreach ($menu["items"] as $item) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' =>  __($item),
                    'menu-item-classes' => strtolower($item),
                    'menu-item-url' => home_url( strtolower($item) ), 
                    'menu-item-status' => 'publish'));
            }

            /*
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