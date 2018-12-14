<a name="success"></a>
<?php

if (isset($_GET['success'])) :
echo '<p class="success">'.esc_html__("Thank you for your message!", "olins").'</p>';
endif;

if (isset($error) && isset($error['msg'])) :
echo '<p class="error">'.esc_attr($error['msg']).'</p>';
endif; ?>

<form method="post" action="<?php echo esc_url(get_the_permalink())?>" class="cf font_two clearfix">

    <input name="contact[name]" type="text" class="item_field" placeholder="<?php esc_html_e('Your name','olins'); ?>" value="" required="required" id="contact-form-name" />
    <input name="contact[email]" type="email" class="item_field" placeholder="<?php esc_html_e('Your Email','olins'); ?>" value="" required="required" id="contact-form-email" />
    <textarea name="contact[message]" class="item_field" placeholder="<?php esc_html_e('Your Message','olins'); ?>" id="contact-form-message" required="required"></textarea>
    <input type="submit" class="submit submit_button" value="<?php esc_html_e('Send','olins'); ?>"/>
    <input name="contact[receive]" type="hidden" value="<?php echo esc_attr(ale_get_option('footer_email_address')); ?>" />
    <input name="contact[subject]" type="hidden" value="<?php esc_html_e('Footer Contact Form','olins'); ?>" />
    <?php wp_nonce_field(); ?>

</form>