<?php


/*Register WordPress  Gutenberg CPT */
function hackathon_post_type() {

    register_post_type( 'team',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'has_archive' => false,
            'public' => true,
            'rewrite' => array('slug' => 'team'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'capability_type'=> 'page',
        )
    );
}

add_action( 'init', 'hackathon_post_type' );