<?php
$args = array(
    "title" => "",
    "subtitle" => ""
);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$args = array(
    'posts_per_page'    => 1,
    'post_type'         => 'post',
);
$recent_posts = new WP_Query( $args );
?>


<div class="olins_recent_post_line">
    <?php if ( $recent_posts->have_posts() ) {
        while ( $recent_posts->have_posts() ) { $recent_posts->the_post(); ?>
            <div class="left_part post_container col-8" style="background: url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>) no-repeat center center; background-size: cover;">
                <div class="post_data_container">
                    <div class="post_date font_two">
                        <?php echo get_the_date(); ?>
                    </div>
                    <div class="post_tit font_two">
                        <a href="<?php echo esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="post_excerpt">
                        <p><?php echo ale_limit_excerpt(14); ?></p>
                    </div>
                    <div class="post_read_more font_two">
                        <a href="<?php echo esc_url(the_permalink()); ?>"><?php esc_html_e('CONTINUE','olins'); ?></a>
                    </div>
                </div>
            </div>
        <?php } wp_reset_postdata();
    } else {
        echo esc_html_e( 'Add some posts.', 'olins' );
    }
    ?>
    <div class="right_part col-4">
        <div class="box_container">
            <div class="data_container font_two">
                <?php if($subtitle){ echo '<div class="subtitle">'.esc_attr($subtitle).'</div>'; } ?>
                <?php if($title){ echo '<div class="title">'.esc_attr($title).'</div>'; } ?>
                <a href="<?php echo esc_url(get_permalink( get_option('page_for_posts' ))); ?>" class="ale_button"><?php echo esc_html_e('VIEW ALL','olins'); ?></a>
            </div>
        </div>
    </div>
</div>
