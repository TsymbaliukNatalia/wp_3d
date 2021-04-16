<?php
if (wp_doing_ajax()) {
    add_action('wp_ajax_register', 'wp_3d_register');
    add_action('wp_ajax_nopriv_register', 'wp_3d_register');
}

function wp_3d_register()
{
    $userdata = array(
        'first_name' => $_POST['first-name'],
        'last_name' => $_POST['last-name'],
        'user_login' => $_POST['username'],
        'user_pass'  => $_POST['password'],
        'user_email' => $_POST['email'],   
    );

    $user_id = wp_insert_user($userdata);
    echo json_encode($user_id);

    // if(is_int($user_id)){
    //     wp_redirect(home_url().'/events');
    // }
    
    wp_die();

}
