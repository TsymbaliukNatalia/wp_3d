<?php
if (wp_doing_ajax()) {
    add_action('wp_ajax_register', 'wp_3d_register');
    add_action('wp_ajax_nopriv_register', 'wp_3d_register');
    add_action('wp_ajax_login', 'wp_3d_login');
    add_action('wp_ajax_nopriv_login', 'wp_3d_login');
};

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

    wp_die();

}

function wp_3d_login(){
    $login_data = array(
        'user_login'    => $_POST['email'],
        'user_password' => $_POST['password'],
        'remember'      => true
    );
    
    $user_verify = wp_signon($login_data, false);
    // $response = is_wp_error($user_verify);
    // echo json_encode($response);
    // wp_die();
    
    if (is_wp_error($user_verify)) {
        $response = 'Invlaid Login Details';
        echo json_encode($response);
        wp_die();
    } else {
        $response = 0;
        echo json_encode($response);
        wp_die();
    }
}
