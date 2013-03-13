<?php
/*
Plugin Name: New user Notification
Description: A plugin which adds a link to a specific page in the new user welcoming mail
Version: 0.1
Author: Walkercloud
*/


//Action sur l'après enregistrement de l'utilisateur, pour lui envoyer le lien vers la page du jeu
add_action('user_register', 'send_mail_with_url_page_game');

function send_mail_with_url_page_game($user_id)
{
    $new_user = get_userdata($user_id);

    if($new_user !== false)
    {
        $email_new_user = $new_user->user_email;
        $id_page_jeu = get_option('game_page');
        $url_page_jeu = is_numeric($id_page_jeu) ? get_permalink($id_page_jeu) : bloginfo('url');

        ob_start();
        require 'email/tpl-fr.php';
        $content         = ob_get_clean();
        $email_headers   = array();
        $email_headers[] = 'Content-Type: text/html; charset=UTF-8';
        $email_headers[] = 'From: ' . get_bloginfo('title') . ' <no-reply@' . $_SERVER['HTTP_HOST'] . '>';
        $email_sent      = wp_mail($email_new_user, 'Petit jeu', $content, implode("\r\n", $email_headers) . "\r\n");
    }
}

add_action('admin_init', 'actionAddSelectPage');

function actionAddSelectPage()
{
    register_setting('general', 'game_page', 'saveGamePage');
    add_settings_field('game_page', 'Page Jeu', 'showSelectPage', 'general', 'default');
}

function showSelectPage()
{
    // Select pour choisir l'URL de la page dans le mail du jeu
    $id_page_selected = get_option('game_page');
    wp_dropdown_pages(array('selected' => $id_page_selected, 'name' => 'game_page'));
}

function saveGamePage($data)
{
    $data = is_numeric($data) ? $data : 0;
    return $data;
}

