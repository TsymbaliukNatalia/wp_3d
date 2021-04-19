<?php
require_once ABSPATH . WPINC .'/registration.php';

if (wp_doing_ajax()) {
    add_action('wp_ajax_register', 'wp_3d_register');
    add_action('wp_ajax_nopriv_register', 'wp_3d_register');
    add_action('wp_ajax_login', 'wp_3d_login');
    add_action('wp_ajax_nopriv_login', 'wp_3d_login');
    add_action('wp_ajax_recover_password', 'wp_3d_recover_password');
    add_action('wp_ajax_nopriv_recover_password', 'wp_3d_recover_password');
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

function wp_3d_recover_password()
{
    $email = $_POST["email-forgot-password"];
    $response = array();

    if (email_exists($email)) {
        $response["email_exist"] = true;
        $user = get_user_by('email', $email);
        $response["user"] = $user->ID;
        $new_password = wp_generate_password(8, false, false);
        
        $message = "Your new password :\r\n".$new_password;
        $message = wordwrap($message, 70, "\r\n");
        $send = wp_mail($email, 'New password', $message);
        
        if($send == true){
            reset_password($user, $new_password);
            echo json_encode($response);
            wp_die();
        } else {
            $response["email_exist"] = false;
            $response["error"] = "An error occurred while sending the new password! Please try again!";
            echo json_encode($response);
            wp_die();
        }
       
    } else {
        // $response = array();
        $response["email_exist"] = false;
        $response["error"] = "A user with this address is not registered!";
        echo json_encode($response);
        wp_die();
    }
}
