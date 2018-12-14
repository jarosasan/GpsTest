<footer class="cf">
    <div class="ale_simple_footer cf">
        <div class="col-4 ale_footer_contacts">
            <?php if(ale_get_option('footer_callnumber')){?><span class="ale_number"><?php echo esc_attr(ale_get_option('footer_callnumber')); ?></span><?php } ?>
            <?php if(ale_get_option('footer_email_address')){?><span class="ale_email"><?php echo esc_attr(ale_get_option('footer_email_address')); ?></span> <?php } ?>
        </div>
        <div class="col-4 ale_footer_logo">
            <?php if(ale_get_option('footerlogo')){?>
                <img src="<?php echo esc_url(ale_get_option('footerlogo')); ?>" alt="logo" />
            <?php } else { ?>
                <?php esc_attr(bloginfo('title')); ?>
            <?php } ?>
        </div>
        <div class="col-4 ale_footer_social">
            <?php get_template_part('partials/social_profiles'); ?>
        </div>
    </div>
</footer>