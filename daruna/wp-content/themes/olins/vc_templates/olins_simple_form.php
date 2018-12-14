<?php
$args = array(
	'name_label'   => '',
	'email_label'      => '',
	'message_label'    => '',
	'form_submit'      => '',
	'form_email_receive' => '',
	'form_email_subject' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

 ?>

<div class="olins_simple_form font_one">

    <a name="success"></a>

<?php if (isset($_GET['success'])) { ?>
	<p class="success"><?php echo esc_html_e("Thank you for your message!", "olins"); ?></p>
<?php } ?>

<?php if (isset($error) && isset($error['msg'])) {?>
	<p class="error"><?php echo esc_attr($error['msg']); ?></p>
<?php } ?>

<form method="post" action="<?php echo esc_url(get_the_permalink()); ?>" class="cf clearfix">
    <div class="module_line cf">
	    <input name="contact[name]" type="text" class="item_field font_one" placeholder="<?php echo esc_attr($name_label); ?>" value="" required="required" id="contact-form-name" />
	    <input name="contact[email]" type="email" class="item_field font_one" placeholder="<?php echo esc_attr($email_label); ?>" value="" required="required" id="contact-form-email" />
    </div>
    <div class="module_line cf">
	    <textarea name="contact[message]" class="item_field font_one" placeholder="<?php echo esc_attr($message_label); ?>" id="contact-form-message" required="required"></textarea>
    </div>
    <div class="module_line cr">
	    <input type="submit" class="submit submit_button font_one" value="<?php echo esc_attr($form_submit); ?>"/>
    </div>
    <input name="contact[receive]" type="hidden" value="<?php echo esc_attr($form_email_receive); ?>" />
    <input name="contact[subject]" type="hidden" value="<?php echo esc_attr($form_email_subject); ?>" />
    <?php wp_nonce_field(); ?>

</form>

</div>