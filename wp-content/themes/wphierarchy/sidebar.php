<?php if(!is_active_sidebar('main-sidebar')){
    return;
} ?>
<aside id="secondary" class="widget-area" role="complementary">
    <?php wp_loginout(get_permalink()); ?>
    <?php if (!is_user_logged_in()): ?>
    <?php 
        $args = [
            "label_username"=>'Username',
            "label_password"=>'Password'
        ];
        wp_login_form($args);  
    ?>
    <?php endif; ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
</aside>