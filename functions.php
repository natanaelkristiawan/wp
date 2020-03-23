<?php

// hide not important
function remove_posts_menu() {
    remove_menu_page('edit.php');
    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_posts_menu');

add_filter('show_admin_bar', '__return_false');

// projects
function projects() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No projects found' ),
    'not_found_in_trash' => __( 'No projects found in the Trash' ),
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our project and project specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'project', $args ); 
}

add_action( 'init', 'projects' );


function project_field_render() {
    add_meta_box( 'custom_field', __( 'Data', 'data' ), 'project_field_callback', 'project' , 'normal', 'high');
}

add_action( 'add_meta_boxes', 'project_field_render' );

function project_field_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form/project.php';
}


add_action('save_post_project', function ($post_id) {
  if (isset($_POST['image_project'])){
    update_post_meta($post_id, 'image_project', $_POST['image_project']);
  }

  if (isset($_POST['description'])) {
    update_post_meta($post_id, 'description', $_POST['description']);
  }
});

// end projects



// teams
function mustache_script( $hook ) {

    wp_enqueue_script( 'mustache', get_template_directory_uri() . '/js/mustache.js', array(), '0.1' );
}

add_action( 'admin_enqueue_scripts', 'mustache_script' );


function teams() {
  $labels = array(
    'name'               => _x( 'Teams', 'post type general name' ),
    'singular_name'      => _x( 'Team', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Team' ),
    'edit_item'          => __( 'Edit Team' ),
    'new_item'           => __( 'New Team' ),
    'all_items'          => __( 'All Teams' ),
    'view_item'          => __( 'View Team' ),
    'search_items'       => __( 'Search Teams' ),
    'not_found'          => __( 'No Teams found' ),
    'not_found_in_trash' => __( 'No Teams found in the Trash' ),
    'menu_name'          => 'Teams'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Team and Team specific data',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title'),
    'has_archive'   => true,
  );
  register_post_type( 'team', $args ); 
}

add_action( 'init', 'teams' );


function team_field_render() {
    add_meta_box( 'custom_field', __( 'Data', 'data' ), 'team_field_callback', 'team' , 'normal', 'high');
}

add_action( 'add_meta_boxes', 'team_field_render' );

function team_field_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form/team.php';
}

add_action('save_post_team', function ($post_id) {
  if (isset($_POST['name'])){
    update_post_meta($post_id, 'name', $_POST['name']);
  }

  if (isset($_POST['dob'])) {
    update_post_meta($post_id, 'dob', $_POST['dob']);
  } 

  if (isset($_POST['image_team'])) {
    update_post_meta($post_id, 'image_team', $_POST['image_team']);
  }

  if (isset($_POST['value'])) {
    // filter data

    $dataInsert = array();


    // var_dump($_POST['value']);

    foreach ($_POST['value'] as $key => $value) {
        if ( empty($value['jabatan'])) {
            continue;
        }

        if (empty($value['deskripsi'])) {
            continue;
        }
        $dataInsert[] = $value;
    }


    update_post_meta($post_id, 'value', serialize($dataInsert));

  }
});

// end teams



